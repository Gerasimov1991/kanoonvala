<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kanoonvala</title>
<style>
body {
	margin:0px;
	padding:0px;
}
</style>
</head>
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td align="left" valign="top" style="background:#06558d;"><a href="#!"><img src="https://kanoonvala.com/assets/images/header.jpg" width="800" height="410" alt="" border="0" /></a></td>
    </tr>
    <tr>
      <td align="left" valign="top" style="background:#06558d; font-family:Arial, sans-serif;"><table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
          
            @yield('content')
          
        </table></td>
    </tr>
    @include('emails.layouts.footer')
  </tbody>
</table>
</body>
</html>
