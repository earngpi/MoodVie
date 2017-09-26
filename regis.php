<!DOCTYPE html>
<html>
<head>
<title>regis.php</title>
<link rel="stylesheet" type="text/css" href="default.css">
</head>

<body>
  <div id="header">
  <p class="head">
  <a href="home.php">home</a>
  <a href="log_in.php">sign-in</a>
  <a href="regis.php">sign-up</a>
  browse</p>
  <br><br><br>
  <table style="padding-left:15px; position:fixed; text-align:center;">
    <tr><td style="padding-left:9px;"><p class="text"
         style="color:#BF2424;
                font-weight:bold;
                font-size:11px;
                font-style:;
                line-height:0px;">Project Under
                <font color=#434343>ITS351</font> Database Programming Laboratory</p></td>
    </tr>
    <tr><td style="padding:0px;">
      <img src="logo_3.png"
        style="width:350px;
               height:auto;"></td>
    </tr>
    <tr><td style="padding:0px;"><p class="text"
         style="font-size:20px;
                font-weight:100;
                line-height:0px;">
                What MoodVie Are You In?</p></td>
    </tr>
  </table>
  </div>

<div id="mid_bg">

<div class="login-page" style="width:400px;">
    <div class="form">
        <form class="register-form" action="regis_after.php" method="post">
            <input type="text" name="email" placeholder="Email Address" required>
            <input type="password" name="pw" placeholder="Password" required>
            <input type="password" name="pw_conf" placeholder="Confirm Password" required>
            <input type="text" name="f_name" placeholder="First Name" required>
            <input type="text" name="l_name" placeholder="Last Name" required>
            <p class='text' style="line-height:0px; font-size:14px">Gender:</p>
            <select name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>
            <p class='text' style="line-height:0px;font-size:14px;">Date of Birth:</p>
            <input type='text' name='dob' placeholder="mm/dd/yyyy" onfocus="(this.type='date')" required>
            <input type="text" name='tel' placeholder="Phone Number" required>
            <p style="font-family:sans-serif; font-size:15px;">
              If you agree to the <a href='https://dict.longdo.com/search/*terms+and+conditions*' style='color:#4CAF50;'>Terms & Conditions</a>
            </p>
            <input type='submit' name='submit' id="submit_button" value="create">
            <p class="message">Already registered? <a href="log_in.php">Sign In</a></p>
        </form>
    </div>
</div>

</div>

<div id="footer">
<br>
<table width=100%>
  <tr class="top_row">
    <td>CONTACT US</td>
    <td>FOLLOW US</td>
  </tr>
  <tr>
    <td class="contact">contactus@moodvie.com<br>
      99 Moo 18, Km. 41 on Paholyothin Highway<br>
      Klong Luang, Pathumthani 12120, Thailand<br>
      Tel. +66-2-564-3221</td>
    <td><a href="https://www.facebook.com">
        <img class="logo" src="facebook.png"</a>
        <a href="https://twitter.com">
        <img class="logo" src="twitter.png"</a>
        <a href="https://www.instagram.com">
        <img class="logo" src="insta.png"</a>
        <a href="https://line.me/en-US/">
        <img class="logo" src="line.png"</a></td>
  </tr>
</table>
</div>

</body>
</html>
