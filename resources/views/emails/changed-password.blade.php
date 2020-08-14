@extends('emails.layouts.app')

@section('content')

    <tbody>
        <tr>
            <td align="left" style="color: #888888; width:20px; font-size: 16px; line-height: 24px;">
                <!-- section text ======-->

                <p style="font-size:17px; color:#fff; margin:10px; 0">
                    Hello!
                </p>
                
                <p style="font-size:17px; color:#fff; margin:10px; 0">
                    Your Password has successfully been changed to : {{ $password }}
                </p>

                <p style="font-size:17px; color:#fff; margin:10px; 0">
                    If you did not change your password, try resetting your password using above password.
                </p>

                <p style="line-height: 24px color:#fff;">
                    Regards,<br>
                    @yield('title', app_name())
                </p>

                <br/>
            </td>
        </tr>
        <tr>
            <td height="70">&nbsp;</td>
        </tr>
    </tbody>
@endsection
                        