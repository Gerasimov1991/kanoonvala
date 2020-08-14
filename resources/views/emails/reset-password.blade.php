@extends('emails.layouts.app')
@section('content')
<tbody>
<tr>
  <td align="left" valign="top"><h1 style="font-size:28px; color:#ffe854; font-weight:bold;">Hello!</h1>
    <p style="font-size:17px; color:#fff; margin:10px; 0">You are receiving this email because we received a password reset request for your account.</p>
    <p style="margin:40px 0;"> <a href="{{ $reset_password_url }}" style="background: #dc373d; color: #fff; font-weight: 600;display: inline-block;text-decoration: none;font-size: 14px; width: 160px; height: 36px;line-height: 36px; text-align: center;">Reset Password </a></p>
    <p style="font-size:17px; color:#fff; margin:10px; 0">If you did not request a password reset, no further action is required.</p></td>
</tr>
<tr>
  <td height="70">&nbsp;</td>
</tr>
</tbody>
@endsection
         
