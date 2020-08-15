@extends('emails.layouts.app')

@section('content')
        <tbody>
            <tr>
                <!-- <td  style="color: #888888; width:20px; font-size: 16px; line-height: 24px;"> -->
                    <!-- section text ======-->

                    <p style="font-size:17px; color:#fff; margin:10px; 0">
                    Hello {{ $usernamea }}
                    </p>
                    
                    <p style="font-size:17px; color:#fff; margin:10px; 0">
                        Your account has been approved.
                    </p>
                   

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
                    
                </td>
            </tr>
            <tr>
            <td height="70">&nbsp;</td>
            </tr>
        </tbody>

@endsection
                        