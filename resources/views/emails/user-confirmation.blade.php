@extends('emails.layouts.app')

@section('content')
        <tbody>
            <tr>
                <!-- <td  style="color: #888888; width:20px; font-size: 16px; line-height: 24px;"> -->
                    <!-- section text ======-->

                    <p style="font-size:17px; color:#fff; margin:10px; 0">
                        Hello!
                    </p>
                    
                    <p style="font-size:17px; color:#fff; margin:10px; 0">
                        Click here to confirm your account:
                    </p>
                    <table border="0" align="center" width="120" cellpadding="0" cellspacing="0" bgcolor="5caad2" style="margin-bottom:20px; background: #003bd7; border-radius: 5px;">

                        <tr>
                            <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                        </tr>

                        <tr>
                            <td align="center" style="color: #ffffff; font-size: 14px; line-height: 22px;letter-spacing: 1px;font-weight: bold;">
                                <!-- main section button -->
                                <div style="line-height: 22px;">
                                    <a href="{{ $confirmation_url }}" style="background: #dc373d; color: #fff; font-weight: 600;display: inline-block;text-decoration: none;font-size: 14px; width: 160px; height: 36px;line-height: 36px; text-align: center;">Confirm Account</a>
                                    
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                        </tr>

                    </table>

                    <p style="font-size:17px; color:#fff; margin:10px; 0">
                        Thank you for using our application!
                    </p>

                    <p style="line-height: 24px color:#fff;">
                        Thanks & Regards,<br>
                        Kanoonvala Support Team<br>
                        91-9354419320
                        <!-- @yield('title', app_name()) -->

                    </p>

                    <br/>

                    <p class="small" style="font-size:17px; color:#fff; margin:10px; 0">
                            If you’re having trouble clicking the "Confirm Account" button, copy and paste the URL below into your web browser: 
                    </p>

                    <p class="small" style="font-size:17px; color:#fff; margin:10px; 0">
                        <a href="{{ $confirmation_url }}" target="_blank" class="lap">
                            {{ $confirmation_url}}
                        </a>
                    </p>
                </td>
            </tr>
            <tr>
            <td height="70">&nbsp;</td>
            </tr>
        </tbody>

@endsection
                        