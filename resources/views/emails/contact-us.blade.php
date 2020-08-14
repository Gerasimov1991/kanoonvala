@extends('emails.layouts.app')

@section('content')
<tbody>
    <tr>
        <td align="left" style="color: #888888; width:20px; font-size: 16px; line-height: 24px;">
            <!-- section text ======-->
            <p style="font-size:17px; color:#fff; margin:10px; 0">
                Hi Team,
            </p>

            <p style="font-size:17px; color:#fff; margin:10px; 0">
               New enquiry posted on the site. Please find details below:
            </p>
            <table align="left" style="color: #888888; width:100%; line-height: 24px;">
            <tr>

            
            </tr>

                <tr>
                    <td style="font-size:17px; color:#fff; margin:10px; 0">Name</td>
                    <td style="font-size:17px; color:#fff; margin:10px; 0">{{$name}}</td>
                </tr>
                <tr>
                    <td style="font-size:17px; color:#fff; margin:10px; 0">Email</td>
                    <td style="font-size:17px; color:#fff; margin:10px; 0">{{$email}}</td>
                </tr>
                <tr>
                    <td style="font-size:17px; color:#fff; margin:10px; 0">Message</td>
                    <td style="font-size:17px; color:#fff; margin:10px; 0">{{$user_message}}</td>
                </tr>
            </table><br><br>
            <p style="line-height: 24px color:#fff;">
                Regards,<br/>
               Kanoonvala
            </p>
            <br />
        </td>
    </tr>
    <tr>
    <td height="70">&nbsp;</td>
    </tr>
</tbody>
@endsection