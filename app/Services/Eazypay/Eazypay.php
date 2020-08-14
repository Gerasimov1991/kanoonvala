<?php 
namespace App\Services\Eazypay;

class Eazypay
{
    public $merchant_id;
    public $encryption_key;
    public $sub_merchant_id;
    public $reference_no;
    public $paymode;
    public $return_url;

    const DEFAULT_BASE_URL = 'https://eazypayuat.icicibank.com/EazyPG?';

    public function __construct()
    {
        $this->merchant_id              =    env('MERCHANT_ID');
        $this->encryption_key           =    env('AES_KEY');
        $this->sub_merchant_id          =    env('SUBMERCHANT_ID');
        $this->merchant_reference_no    =    mt_rand(100000, 999999);//env('REFERENCE_NO');
        $this->paymode                  =    env('PAYMENT_MODE','9');
        $this->return_url               =    route('frontend.payment-success');
        // dd($this->merchant_id);
        
    }

    public function getPaymentUrl($amount, $optionalField=null)
    {
        $mandatoryField   =    $this->getMandatoryField($amount, $this->merchant_reference_no);
        $optionalField    =    $this->getOptionalField($optionalField);
        $amount           =    $this->getAmount($amount);
        $reference_no     =    $this->getReferenceNo($this->merchant_reference_no);

        $paymentUrl = $this->generatePaymentUrl($mandatoryField, $optionalField, $amount, $reference_no);
        return $paymentUrl;
        // return redirect()->to($paymentUrl);
    }

    protected function generatePaymentUrl($mandatoryField, $optionalField, $amount, $reference_no)
    {
        $encryptedUrl = self::DEFAULT_BASE_URL."merchantid=".$this->merchant_id."&mandatory fields=".$mandatoryField."&optional fields=".$optionalField."&returnurl=".$this->getReturnUrl()."&Reference No=".$reference_no."&submerchantid=".$this->getSubMerchantId()."&transaction amount=".$amount."&paymode=".$this->getPaymode();

        return $encryptedUrl;
    }

    protected function getMandatoryField($amount, $reference_no)
    {
        return $this->getEncryptValue($reference_no.'|'.$this->sub_merchant_id.'|'.$amount);
    }

    // optional field must be seperated with | eg. (20|20|20|20)
    protected function getOptionalField($optionalField=null)
    {
        if (!is_null($optionalField)) {
            return $this->getEncryptValue($optionalField);
        }
        return null;
    }

    protected function getAmount($amount)
    {
        return $this->getEncryptValue($amount);
    }

    protected function getReturnUrl()
    {
        return $this->getEncryptValue($this->return_url);
    }

    protected function getReferenceNo($reference_no)
    {
        return $this->getEncryptValue($reference_no);
    }

    protected function getSubMerchantId()
    {
        return $this->getEncryptValue($this->sub_merchant_id);
    }

    protected function getPaymode()
    {
        return $this->getEncryptValue($this->paymode);
    }

    // use @ to avoid php warning php 

    protected function getEncryptValue_test($str)
    {
        $block = @mcrypt_get_block_size('rijndael_128', 'ecb');
        $pad = $block - (strlen($str) % $block);
        $str .= str_repeat(chr($pad), $pad);
        return base64_encode(@mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->encryption_key, $str, MCRYPT_MODE_ECB));
    }
    protected function getEncryptValue($str){ 
        
        // return $str;
        $cipher = "AES-128-ECB"; 
        if (in_array( strtolower($cipher), openssl_get_cipher_methods())) 
        { 
        $ivlen = openssl_cipher_iv_length($cipher); 
        $iv = openssl_random_pseudo_bytes($ivlen); 
        $ciphertext = openssl_encrypt($str, $cipher, $this->encryption_key, $options=0, $iv); 
        //return $ciphertext."n"; 
        return $ciphertext; 
        } 
    }
}