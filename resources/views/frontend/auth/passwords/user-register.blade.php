

@extends('frontend.layouts.app')

@section('content')

<div class="section-empty no-paddings">
    <div class="section-slider row-8 white">
      <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
        <ul class="slides">
          <li data-slider-anima="fade-left" data-time="1000">
            <div class="section-slide">
              <div class="bg-cover" style="background-image:url('/assets/images/slide1.jpg')"></div>
              <div class="container">
                <div class="container-middle">
                  <div class="container-inner text-center">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="row">
                        <div class="col-md-12 anima">
                          <h1 class="text-white text-l heading_one">Join India's Top legal platform for Lawyers, It is free for All India Lawyers</h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="section-empty">
    <div class="container">
      <div class="col-md-6 col-md-offset-3  form-group">
        <div class="row">
          <div class="col-md-12">
          <div class="alert alert-danger error-msg" style="display:none;"></div>
            <!-- Lawyer Box Open -->
            <div class="shadow_box">
                {{ Form::open(['route' => 'frontend.auth.register', 'class' => 'form-horizontal','id' => 'registration-form']) }}
                <div class="form-group {{$errors->first('first_name')?'has-error':''}}">
                    {{ Form::input('name', 'first_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.firstName')]) }}
                    @if($errors->has('first_name'))
                        <div class="help-block with-error">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
                <input type="hidden" name="isAdvocate" value="{{$routeName}}">
                <div class="form-group {{$errors->first('last_name')?'has-error':''}}">
                    {{ Form::input('name', 'last_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.lastName')]) }}
                    @if($errors->has('last_name'))
                        <div class="help-block with-error">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>
                <div class="form-group {{$errors->first('email')?'has-error':''}}">
                    {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }}
                    <!-- @if($errors->has('email'))
                        <div class="help-block with-error">{{ $errors->first('email') }}</div>
                    @endif -->
                </div>
				        <div class="form-group">
                    OR
                </div>
                <div class="form-group">
                  {{ Form::input('mobile', 'mobile', null, ['class' => 'form-control', 'placeholder' => 'Enter your mobile number']) }}
                  {{-- <input type="text" class="form-control" placeholder="Enter your mobile number"> --}}


                  <!-- @if($errors->has('mobile'))
                        <div class="help-block with-error">{{ $errors->first('mobile') }}</div>
                    @endif -->


                    <!-- <input type="text" name="mobile" class="form-control"> -->
                </div>
                <div class="form-group {{$errors->first('password')?'has-error':''}}">
                    {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.password')]) }}
                    @if($errors->has('password'))
                        <div class="help-block with-error">{!! implode("<br/>",$errors->get('password')) !!}</div>
                    @endif
                </div>
                <div class="form-group {{$errors->first('password_confirmation')?'has-error':''}}">
                    {{ Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.password_confirmation')]) }}
                    @if($errors->has('password_confirmation'))
                        <div class="help-block with-error">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>
                <div class="form-group {{$errors->first('is_term_accept')?'has-error':''}}">
                  <label class="col-md-12 control-label text-left">
                    {!! Form::checkbox('is_term_accept',1,false) !!}
                    I accept <label  style="color:red" id="myBtn" onclick="myBtn()">terms and conditions</label>
                     <!-- {!! link_to_route('frontend.pages.show', trans('validation.attributes.frontend.register-user.terms_and_conditions').'*', 'terms-and-conditions') !!} </label> -->
                    @if($errors->has('is_term_accept'))
                        <div class="help-block with-error">{{ $errors->first('is_term_accept') }}</div>

                    @endif
                   
                </div><!--col-md-6-->
                <div class="form-group">
               
                  <!-- {{-- <button type="submit" class="btn btn-block btn-lg btn-danger">Sign Up</button> --}} -->
                  {{ Form::submit('Signup', ['class' => 'btn btn-block btn-lg btn-danger']) }}
                </div>
                {{ Form::input('hidden', 'otp_sent', null, ['class' => 'form-control', 'placeholder' => 'OTP']) }}
                {{ Form::input('hidden', 'verification_code', null, ['id' => 'verification_code', 'class' => 'form-control', 'placeholder' => 'OTP']) }}
                {{ Form::input('hidden', 'isVerified', null, ['id' => 'isVerified', 'class' => 'form-control', 'placeholder' => 'OTP']) }}

                <p class="text-center">{{ link_to_route('frontend.auth.login', 'Already have an account? Take me to Login.') }}</p>
                {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="modal " id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="closingmodel();">&times;</button>
          <h4 class="modal-title">Terms And Conditions</h4>
        </div>
        <div class="modal-body" style="height:400px;overflow-y:auto; overflow-x: scroll;;">
          <div class="section-empty no-paddings">
    <div class="section-slider row-8 white">
      <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
        <ul class="slides">
          <li data-slider-anima="fade-left" data-time="1000">
            <div class="section-slide">
              <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide1.jpg') !!})"></div>
              <div class="container">
                <div class="container-middle">
                  <div class="container-inner text-center">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="row">
                        <div class="col-md-12 anima">
                          <h1 class="text-white text-l heading_one">Lawyers Terms Of Use</h1>
                          <p>Last Updated: 17-May-2019</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="section-empty">
    <div class="container content">
      <h2 style="color:black;">Terms Of Use</h2>
      <p style="color:black;">This document is an electronic record in terms of Information Technology Act, 2000 and rules there under as applicable and the amended provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures.</p>
      <p style="color:black;">The domain name <b style="color:green">https://www.Kanoonvala.com</b> (<b>"Website"</b> ), is owned and operated by NeelPro System Private Limited ("Company"), a private company limited by shares, incorporated under the provisions of the Companies Act, 2013, where such expression shall, unless repugnant to the context thereof, be deemed to include its respective representatives, administrators, employees, directors, officers, agents and their successors and assigns./p>
      <p style="color:black;">By registering on our Website as a Lawyer, you represent and warrant that you are a qualified lawyer according to the laws of India and are not debarred from practising law or providing legal advice. You agree that we reserve the right to suspend your account or stop providing our Services to at our discretion.</p>
      <h3 style="color:black;">1.Acceptance of the Terms</h3>
      <p style="color:black;">in using this website you are deemed to have read and agreed to the following terms and conditions set forth herein. any incidental documents and links mentioned shall be considered to be accepted jointly with these terms. this shall include our privacy policy and other policies and notices provided on our website. these terms of use govern your use of the website and other services (collectively the "SERVICES") available on, or offered by "Kannonvala" on any website or any mobile device or any third party social networking services. if you do not agree to these terms of use, you are not permitted to access, browse or use the services. these terms of use are personal to you, and are not assignable, transferable or sub-licensable by you. your accessing of this website and/or undertaking of services/offering by us indicates your understanding, agreement to and acceptance of the disclaimer notice and the full terms and conditions contained herein. your statutory consumer rights are unaffected. this agreement sets out the legally binding terms for your membership.</p>
      <h3 style="color:black;">2.Definitions</h3>
      <p style="color:black;">the following terms defined hereunder shall have the same context and meaning assigned to them for the whole of these terms and conditions and shall be jointly applicable to our privacy policy and any incidental documents to this terms of services: </p>
      <p style="color:black;"><b style="color:black;">​​​​​​"LAWYER"</b> shall mean a qualified lawyer who is permitted to practise law and provide legal advice in india, enrolled on our platform. </p>
      <p style="color:black;"><b style="color:black;">"INTELLECTUAL PROPERTY RIGHTS"</b>, "ipr" shall mean all intellectual property rights and all analogous rights subsisting under the laws of each and every jurisdiction throughout the world and intellectual property for the full term of the rights concerned and including all extensions and renewals of such rights, whether or not such rights are registered or capable of registration, including, but not limited to, copyrights, trademarks, trade names, service marks, service names, patents, designs and all other proprietary rights of whatsoever description whether or not protected and whether or not capable of protection. </p>
      <p style="color:black;"><b style="color:black;">"Kanoonvala"</b> , "https://www.kanoonvala/kanoon/.com", "we", "us", "our" shall mean NeelPro System private limited, a private limited company registered under the companies act, 2013. </p>
      <p style="color:black;"><b style="color:black;">"T&C"</b>, "terms of services", "terms", "terms of use", "agreement" shall mean all clauses, definitions, obligations, rights and incidental agreements contained set forth herein. this shall constitute the whole and complete agreement between you and us. </p>
      <p style="color:black;"><b style="color:black;">"USER"</b> , shall mean a person registered on our website who uses the services of a lawyer who is registered with us.</p>
      <p style="color:black;"><b style="color:black;">"WEBSITE"</b> shall mean the internet website, https://www.kanoonvala.com, which is wholly owned and managed by NeelPro System private limited.</p>
      <p style="color:black;">references to you, your shall mean references to the lawyers who have registered on our website.</p>
      <h3 style="color:black;">3.REGISTRATION OF LAWYERS</h3>
      <ul>
        <li style="color:black;">1you should be a qualified lawyer to register yourself on our website as a member of Kanoonvala. you shall be required to provide your academic credentials, bar council certificate and identity card and any other degree/qualification/document as we may ask you to. please note that Kanoonvala provides a platform that enables users of Kanoonvala services to submit their legal requests/queries for lawyers that are registered on Kanoonvala and that enables the lawyers who have subscribed to Kanoonvala to provide legal assistance/consultation to the registered users. Kanoonvala facilitates communication and exchange of information between the user and the lawyer with varied and relevant expertise. Kanoonvala does not provide any legal services and is not a law firm.</li>
        <li style="color:black;">2.you shall be responsible for all the information provided by you including but not limited to your academic credentials, bar council certifications, and any other academic degrees or qualifications. you also agree to keep the information updated from time to time. failure to provide correct information or concealment of any material fact may lead to termination of this agreement.</li>
        <li style="color:black;">3.you shall be responsible for any legal advice or consultation provided by you to the clients. Kanoonvala shall not be responsible for any acts or omissions on the part of either you or the client which may result in any unfavourable result.</li>
        <li style="color:black;">4you agree and understand that you are responsible to Kanoonvala and to third parties for maintaining the confidentiality of passwords associated with any account you use to access the services. you will be solely responsible for all activities that occur under your account. if you become aware of any unauthorized use of your password or of your account, you agree to notify the concerned official at Kanoonvala immediately. you can write to contact@kannonvala.com in such cases.</li>
        <li style="color:black;">5.at any point of time, if you want to delete your account, you shall send a request in the form of an email to contact@kanoonvala.com. subject to that all the payments are made and cleared; we shall close the account within 30 business days of receiving such request from you.</li>
      </ul>
      <h3 style="color:black;">4. DATA PRIVACY AND SECURITY</h3>
      <p style="color:black;">we view protection of our registered lawyer's privacy as a very important principle. we store and process information including any sensitive financial information collected (as defined under the information technology act, 2000), if any, on computers that may be protected by physical as well as reasonable technological security measures and procedures in accordance with information technology act 2000 and rules there under. if you object to your information being transferred or used in this way please do not use the website.</p>
      <p style="color:black;">you hereby agree to our sharing of your personal information with our clients and other corporate entities, business verticals and affiliates for developing our own business. these entities and affiliates may market to you as a result of such sharing.</p>
      <p style="color:black;">we may disclose personal information to third parties to comply with our legal obligations, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our services. we do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.</p>
      <p style="color:black;">we may disclose personal information if required to do so by law or in the good faith and belief. </p>
      <p style="color:black;">we view protection of our users' privacy very seriously. we store and process our users' confidential information including but not limited to personal and financial details in our servers and we may share such confidential information with you and/or you may have access to such confidential information. you hereby agree to keep such confidential information safe and secured and you also agree not to share any such confidential information without our prior written consent.</p>
      <h3 style="color:black;">5.RIGHTS AND OBLIGATIONS OF Kanoonlava</h3>
      <ul style="color:black;">
        <li>1.Kanoonvala will attempt to continuously innovate in order to provide the best possible services to its users. you acknowledge and agree that the form and nature of the services provided by Kanoonvala may change from time to time without any prior notice.</li>
        <li>2.you acknowledge and agree that Kanoonvala may stop (permanently or temporarily) providing the services (or any features within the services) to you at its sole discretion.</li>
        <li>3.you acknowledge and agree that if Kanoonvala disables access to your account or login route, you may be prevented from accessing the services, your account details or any files or other content which is contained in your account.</li>
        <li>4.you shall not represent yourself with any person or organization to which you are not associated with and shall not create any profile representing that business or list products that are owned (under any intellectual property or any such acts) or authorized only by others. in case of such happening, the lawyer shall be solely responsible for his act to the real owner of such businesses. the fake profiles or unauthorized listing of questions and answers provided may be removed by Kanoonvala without providing any notice. Kanoonvala will not be responsible for any such act by any lawyer.</li>
        <li>5.we shall ensure that the entire dealing between you and the user goes on smoothly till the end of the entire service.</li>
        <li>6.we reserve the right to modify or change or revise our commission by giving a 7 day notice.</li>
      </ul>
      <h3 style="color:black;">6.RIGHTS AND OBLIGATIONS OF THE LAWYERS</h3>
      <ul style="color:black;">
        <li>1.you agree that you are solely responsible for (and that Kanoonvala has no responsibility to you or to any third party for) any breach of your obligations under the terms and for the consequences (including any loss or damage which Kanoonvala may suffer) of any such breach.</li>
        <li>2.you agree to provide lifetime loyalty on clients referred to you by Kanoonvala. unless agreed upon by Kanoonvala and you in writing, any future dealings with the same client would attract the same financial arrangement as it was when Kanoonvala referred the client to you at the first instance.</li>
        <li>3.you agree to provide the professional services to the clients with the best of knowledge, ethics and responsibility. it shall be your responsibility to avoid any dispute with the clients. if there is any problem in dealing with the client, you shall endeavour to resolve the issue with the best professional behaviour and conduct.</li>
        <li>4.you shall provide an invoice for the services provided to Kanoonvala following which the payment shall be made. no payment shall be made if no invoice is raised.</li>
        <li>5.if the services provided by you is not satisfactory to the client, you shall revise the service or work. if the client still remains dissatisfied, you shall refund the amount paid to you by such client. if the client asks for a refund, Kanoonvala shall review the work done by you and decide if there are any grounds for refunding the money. the decision taken by Kanoonvala shall be final and binding.</li>
        <li>6.you shall not share or discuss any business insight or model with anyone without the prior written consent of Kanoonvala. a breach of this clause would mean a breach of confidentiality obligation thereby terminating this agreement.</li>
        <li>7.you agree that your consultation or hiring fee or charges will not be substantially lower on other platforms, websites or forums than your displayed consultation or hiring fee or charges on our website.</li>
        <li>8.you shall not share personal contacts with the clients and shall not solicit clients for any other work or service other that what has been agreed previously with Kanoonvala.</li>
        <li>9.you shall always include the pre-decided commission or the fee payable to Kanoonvala when you quote your fee to the client, along with applicable taxes. Kanoonvala shall not be responsible for any omission on your part..</li>
        <li>10.you shall keep Kanoonvala informed and updated about all developments in relation to the services that are being provided to the clients.</li>
      </ul>
      <h3 style="color:black;">7.LIMITATIONS ON YOUR USE</h3>
      <ul style="color:black;">
        <li>1.you agree to abide by all applicable local, state, national, and international laws and regulations in using the services, and not to use the services for any purpose that is prohibited by the terms of use. you agree not to (a) use services for illegal purposes; (b) use services in any manner which violates any rights of a third party, including but not limited to intellectual property rights; (c) use the services to post or otherwise communicate material which is unlawful, harassing, libelous, privacy invading, abusive, threatening, harmful, vulgar, pornographic, obscene, indecent, confidential, proprietary or otherwise objectionable; (d) post any links to any external internet website that are obscene or pornographic or to post or otherwise communicate commercial advertisements, chain letters, pyramid schemes, encoded binary files, job offers or listings or personal ads; (e) use the services to provide materials which contain viruses or other contaminating or destructive features; (f) impersonate any person or entity, including any employee or representative of a third party; (g) cheat or copy in any form with respect to any services offered; (h) create an account or provide any other information under false pretenses, with false or incomplete information, or to mislead others; or (i) use the services provided by Kanoonvala to promote cyber terrorism as defined under the information technology act, 2000 and in parlance to various amendments of the same. additionally, you shall not: (a) take any action that imposes or may impose (as determined by Kanoonvala in its sole discretion) an unreasonable or disproportionately large load on Kanoonvala (or its third party providers') infrastructure; (b) interfere or attempt to interfere with the proper working of the services or any activities conducted in connection with the services; or (iii) bypass any measures Kanoonvala may use to prevent or restrict access to the services.</li>
      </ul>
      <h3 style="color:black;">8.YOUR AGREEMENT TO OUR RULES AND REGULATIONS</h3>
      <ul style="color:black;">
        <li>1.Kanoonvala is not responsible for reviewing or authorizing content and materials freely posted in publicly accessible, interactive areas of the services, such as q&a. acceptance of Kanoonvala's  terms of use constitutes your agreement to abide by any conduct rules or regulations posted, as well as the restrictions and responsibilities outlined in these terms of use. you agree to take full responsibility and liability for the accuracy and appropriateness of any of your posted content, and any consequences that may arise from posting in public areas of the services.</li>
        <li>2.you may create, submit, post, display, and transmit content or other material using the services ("LAWYER CONTENT"). Kanoonvala reserves the right to delete, move, or edit any lawyer content that it may determine, in its sole discretion, violates these terms of use or is otherwise unacceptable. Kanoonvala may delete, edit, or reject lawyer content at any time for any reason without notifying you. also, Kanoonvala reserves the right to remove content at the request of a third party or any other intellectual property owner. any lawyer content you transmit or post using the services will be treated as non-confidential and non-proprietary. you agree and warrant that your lawyer content is wholly original to you and you exclusively own all the rights to your user content.</li>
        <li>3.you agree that by using the services, you grant Kanoonvala the right to convert, copy, display, edit, make derivative works, disclose, store, or otherwise use your lawyerr content in any manner and in all forms or formats available now or in the future without any compensation to you or any other agreement. you represent and warrant that you are authorized to grant all rights set forth in the preceding sentences.</li>
        <li>4.Kanoonvala will not be held liable for any damages of any kind, including, but not limited to, direct, indirect, incidental, punitive, and consequential damages (a) related to its use or rejection of any lawyer content; (b) arising from the use of the public posting areas of this services or using the services; and (c) arising from your viewing of any content using the services that you may find offensive.</li>
        <li>5.Kanoonvala is not responsible for resolving any disputes between user and lawyer and/or processing any cancellations of service requestor changes therein. Kanoonvala disclaims any and all liability in this regard.</li>
      </ul>
      <h3 style="color:black;">9.INTELLECTUAL PROPERTY RIGHTS</h3>
      <ul>
        <li style="color:black;">1.you acknowledge and agree that all content, design elements, and materials available on this services are protected by copyrights, trademarks, services marks, patents, trade secrets, or other proprietary rights and laws. no materials from this service may be copied, reproduced, modified, republished, uploaded, posted, transmitted or distributed in any form or for any means without our prior written permission. furthermore, you agree to not to sell, license, rent, or create derivative works from such materials or content. systematic retrieval of content from the services to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us is strictly prohibited. all rights not expressly granted herein are reserved. any unauthorized use of the materials appearing on the services may violate copyright, trademark and other applicable laws.</li>
        <li style="color:black;">2.except as provided below, Kanoonvala and its affiliates and licensors retain all right, title and interest in and to the services, excluding your lawyer content <b>("Kanoonvala's  INTELLECTUAL PROPERTY").</b> you may not modify, publish, transmit, transfer or sell, reproduce, create derivative works from, distribute, perform, link, display, or in any way exploit the Kanoonvala"s intellectual property in whole or in party, except as expressly permitted in these terms of use or with the prior written consent of Kanoonvala. you agree to use the services only in accordance with these terms of use. you agree not to disassemble, decompile or reverse-engineer any software or other component of the Kanoonvala application.</li>
        <li style="color:black;">3.you cannot post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights. without limiting the foregoing, if you believe that your work has been copied and posted on the website in a way that constitutes copyright infringement, please provide us with the following information: an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest; a description of the copyrighted work that you claim has been infringed; a description of where the material that you claim is infringing is located on the our website; your address, telephone number, and email address; a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf. notice of claims of copyright infringement can be sent to us in writing to the address located under the contact us section on the website.</li>
      </ul>
      <h3 style="color:black;">10.PAYMENT POLICY</h3>
      <p style="color:black;">you shall prepare an invoice in the name of Kanoonvala and send it to us after the completion of services. we shall verify such invoice and then raise it with the client who shall pay within 7 business days of the receipt of the invoice. only after the payment has been received by Kanoonvala, within a period of 15 business days, Kanoonvala shall release the payment to you after deducting the pre decided fees or commission with you.  any applicable taxes shall be charged over and above the fee that is payable to you.</p>
      <p style="color:black;">all payments shall be made to your bank account through bank transfer or by cheque. no payments shall be made by demand drafts or by cash or by any other mode.</p>
      <p style="color:black;">you shall not accept payments directly from the client, all payments are to be made directly to Kanoonvala.</p>
      <h3 style="color:black;">11.LICENSE FROM Kanoonvala</h3>
      <ul>
        <li style="color:black;">1.Kanoonvala gives you a personal non-exclusive license, unless expressly agreed in any other written agreement, to use the website provided to you by Kanoonvala as part of the services. this license is for the sole purpose of enabling you to use and enjoy the benefit of the services provided by Kanoonvala, in the manner permitted by these terms.</li>
        <li style="color:black;">2.YOU are not entitled to commercially exploit, either directly or by sale, or transfer commercially or profit from the services and products.</li>
        <li style="color:black;">3.you may not (and you may not permit anyone else to) copy, modify, create a derivative work of, reverse engineer, decompile or otherwise attempt to extract the source code of the software or any part thereof.</li>
        <li style="color:black;">4.unless Kanoonvala has given you specific written permission to do so, you may not assign (or grant a sub-license of) your rights to use the services or otherwise transfer any part of your rights to use the services.</li>
      </ul>
      <h3 style="color:black;">12.INDEMNIFICATION</h3>
      <p style="color:black;"> by using our services, you shall defend, indemnify, save and hold us, our affiliates, employees, contractors, officers, directors. agents and representatives harmless from all demands, liabilities, claims and expenses, including lawyer's fees, fees of third parties relating to or arising as a result of using our services, including without limitation, infringement by you or someone else using the service with your computer, of any intellectual property or other proprietary right of any person or entity, or from the violation of any of our operating rules or policy relating to the service(s) provided. </p>
      <p style="color:black;"> under no circumstances, including negligence, shall we including our affiliates, employees, contractors, officers, directors. agents and representatives or anyone else involved with us in providing the services shall be liable for any direct, indirect, incidental, special or consequential damages that result from the use of or inability to use our services, or that results from mistakes, omissions, interruptions, deletion of files, errors, defects, delays in operation, or transmission or any failure of performance, whether or not limited to acts of god, communication failure, theft, destruction or unauthorized access to our website, records, programs or services. this paragraph shall apply to all content and functionality of our services. </p>
      <p style="color:black;"> notwithstanding the above, the user's exclusive remedies for all damages, losses and causes of actions whether in contract, including negligence or otherwise, shall not, under any circumstances, exceed the amount of the facilitation charges paid to us by the user or by the expert. </p>
      <p style="color:black;"> in addition, to the maximum extent permitted by law, in no event shall we or any of our affiliates be liable for any special, punitive, indirect, incidental or consequential damages, including but not limited to personal injury, wrongful death, loss of use, loss of profits, interruption of service or loss of data, whether in any action in warranty, contract, tort (including, but not limited to negligence or fundamental breach), or otherwise arising out of or in any way connected with the use of, or the inability to use, this website or any service offered through this website or any material or information contained in, accessed through, or products purchased on this website. </p>
      <h3 style="color:black;">13.JURISDICTION</h3>
      <p style="color:black;"> this agreement shall be governed by and construed in accordance with the laws of india. any dispute with Kanoonvala shall exclusively be subject to the jurisdiction of the appropriate courts situated at new delhi, india. any dispute, controversy or claim arising out of or relating to this agreement shall be resolved and finally settled in accordance with the provisions of the indian arbitration and conciliation act, 1996 as may be amended from time to time or its re-enactment (the "ARBITRATION ACT"). the arbitration shall be conducted at new delhi and shall be subject to the indian laws. the arbitration proceedings shall be given in english language. the place of arbitration shall be at new delhi. this arbitration tribunal would constitute of three arbitrators, each party shall appoint one arbitrator, and the two appointed arbitrators shall appoint the third arbitrator who shall act as the presiding arbitrator. </p>
      <h3 style="color:black;">14.EXCLUSION OF WARRANTIES</h3>
      <ul>
        <li style="color:black;">1.you expressly understand and agree that your use of the offering is at your sole risk and that the offering are provided on "as is"basis.</li>
        <li style="color:black;">2.in particular, Kanoonvala does not represent or warrant to you that: (a) your use of the services will meet your requirements, (b) your use of the offering will be uninterrupted, timely, secure or free from error, including specifically from server downtime, (c) any information obtained by you as a result of your use of the offering will be accurate or reliable.</li>
        <li style="color:black;">3.any material downloaded or otherwise obtained through the use of the offering is done at your own discretion and risk and Kanoonvala will not be responsible for any damage to your computer system or other device or loss of data that results from the download of any such material.</li>
        <li style="color:black;">4.no advice or information, whether oral or written, obtained by you from Kanoonvala or through or from the services, shall create any warranty unless expressly stated in the terms.</li>
        <li style="color:black;">5.Kanoonvala further expressly disclaims all warranties and conditions of any kind, whether express or implied, including, but not limited to the implied warranties and conditions of merchantability, fitness for a particular purpose and non-infringement.</li>
      </ul>
      <h3 style="color:black;">15.LIMITATION OF LIABILITY</h3>
      <ul>
        <li style="color:black;">1.subject to overall provision in clauses above, user expressly understands and agrees that Kanoonvala provides the services on "as is" basis and disclaims all warranties of any kind, whether express or otherwise implied, including without limitation the warranties of merchantability, fitness for a particular purpose and non-infringement, as to the information, content, services or other materials made available using the services or as to the results to be obtained from use of the services. Kanoonvala and its affiliates, and each of their directors, employees, agents and representatives do not warrant that: (a) the services will be secure or available at any particular time or location; (b) any defects or errors will be corrected; (c) any content or software available at or through the services is free of viruses or other harmful components; or (d) the results of using the services will meet your expectations or requirements. </li>
        <li style="color:black;">2.you accept all responsibility for the information, content and other materials you post or otherwise communicate using the services. Kanoonvala shall have no liability for the accuracy or content of the information contained in or for delays or omissions therein. nor shall Kanoonvala its affiliates and each of their directors, employees, agents and representatives, be liable for any third-party claims or losses of any nature, including but not limited to, lost profits, punitive, indirect or consequential damages. some states do not allow exclusion of implied warranties or limitation of liability for incidental, exemplary, punitive, direct, indirect, special or consequential damages, so the above limitations or exclusions may not apply to you. in such states, the liability of Kanoonvala shall be limited to the greatest extent permitted by law.</li>
        <li style="color:black;">3.termination and modification of the services: these terms of use are effective until terminated. you agree that Kanoonvala may terminate your access to the services at any time for any reason without prior notice or liability. Kanoonvala may change, suspend, modify or discontinue all or any aspect of the services at any time, including the availability of any feature, without prior notice or liability. if you wish to terminate your access to the services, you may simply discontinue using the services.</li>
      </ul>
      <h3 style="color:black;">16.ANTI BRIBE</h3>
      <p style="color:black;">Kanoonvala, as an organisation strongly condemns, discourages and does not engage in promoting any corrupt or bribery related practices, whatsoever. as an organisation, Kanoonvala strictly adheres to strong anti bribery practices and standards and encourages all vendors, employees and lawyers that it works with to adhere to such strong and stringent practices and standards. Kanoonvala follows a zero tolerance policy on corrupt and bribery related practices and neither by itself or through anyone else who claims to be working with or for it engages or promotes such practices. anyone engaging in any such practices does so at his or her own volition and risk and Kanoonvala neither sanctions not promoted any such behaviour or practices. </p>
      <h3 style="color:black;">17.CHANGES TO THE TERMS OF USE</h3>
      <p>
      <li style="color:black;">1.we reserve the right, at our discretion, to update or revise these terms of use at any time. we will post such changes to these terms of use, and these additional or revised terms will become part of the agreement. please check this terms of use document periodically for changes. your continued use of the services constitutes your binding acceptance of these terms of use, including any changes or modifications made by Kanoonvala as referenced above..</li>
      </p>
    </div>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>


<!-- <div id="myModal" class="modal">

  <!-- Modal content -->
  <!-- <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div> -->

</div> -->




@endsection

@section('after-scripts')
    @if (config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif

    <script type="text/javascript">
function keycode(elm){
          $('#verification_code').val($(elm).val())
        }
        $(document).ready(function() {
            // To Use Select2
            Backend.Select2.init();
        });
    </script>
@endsection
