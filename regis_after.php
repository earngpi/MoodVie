<?php
$status = 'ok';
$mysqli = new mysqli('localhost','root','','moodvie_b4mid');
if(isset($_POST['submit'])){
  	$email = $_POST['email'];
    $pw = $_POST['pw'];
    $pw_cf = $_POST['pw_conf'];
  	$f_name = $_POST['f_name'];
  	$l_name = $_POST['l_name'];
  	$sex = $_POST['gender'];
  	$dob = $_POST['dob'];
  	$tel = $_POST['tel'];
    if($pw!=$pw_cf){
      $status = 'pw_failed';
    }else{
      $q = "INSERT INTO user(email, pw, f_name, l_name, sex,
            dob, tel)
        VALUES ('$email', '$pw', '$f_name', '$l_name', '$sex', '$dob', '$tel');";
      $result = $mysqli->query($q);
      if(!$result){
      	$status = 'db_failed';
      }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>home.php</title>
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
<table style="padding-left:15px;position:fixed;text-align:center;">
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
  <div id="content_canvas">
    <br><br>
    <?php
    if($status=='pw_failed'){
      echo "<p class=text>Password Mismatched. Please recheck.
      <br><a href='regis.php'>Go back.</a></p>";
    }
    if($status=='db_failed'){
      echo "<p class=text>Database Error. Please recheck.
      <br><a href='regis.php'>Go back.</a></p>";
    }
    if($status=='ok'){
      echo "<p class=text>Registered Succesfully
      <br><a href='home.php'>Return home.</a></p>";
    }
    ?>
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
        <img class="logo" src="facebook.png"></a>
        <a href="https://twitter.com">
        <img class="logo" src="twitter.png"></a>
        <a href="https://www.instagram.com">
        <img class="logo" src="insta.png"></a>
        <a href="https://line.me/en-US/">
        <img class="logo" src="line.png"></a></td>
  </tr>
</table>
</div>

</body>
</html>
