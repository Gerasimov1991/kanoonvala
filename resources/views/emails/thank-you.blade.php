@extends('emails.layouts.app')

@section('content')
<tbody>
    <tr>
        <td align="left" style="color: #888888; width:20px; font-size: 16px; line-height: 24px;">
            <!-- section text ======-->
            <p  style="font-size:17px; color:#fff; margin:10px; 0">
                Hi {{$name}},
            </p>
        
            <p  style="font-size:17px; color:#fff; margin:10px; 0">
               Thanks for contacting with us. We will get back to you soon.
            </p>
          
            <p style="line-height: 24px color:#fff;">
                Regards,<br>
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