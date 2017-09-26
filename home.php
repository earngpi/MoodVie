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
    <table>
      <tr>
        <td rowspan="2" style="padding-top:20px;border-right:1px solid #C0C0C0;width:34%;">
          <div class="form" style='width:60%;margin:15px;'>
              <form class="login-form">
                   <input type="text" placeholder="Username" required>
                   <input type="password" placeholder="Password" required>
                   <input type='submit' name='submit' id="submit_button" value="create">
                   <p class="message">Not registered? <a href="regis.php">Create an account</a></p>
              </form>
          </div>
        </td>
        <td style='padding-left:80px;'>
          <table>
            <tr>
              <p class='text' style='text-transform:uppercase;font-size:20px;text-align:left;'>
              what? <font color=#BF2424><b><i>#deadpool</b></i></font> needs no account?<br>go ahead and search then!
              </p>
            </tr>
            <tr>
              <input type='text' name='search' placeholder='Input movie name and year...' style='width:87%;height:50px;'>
              <button type='submit' name='searcher' class='searcher' style='margin:5px;'></button>
            </tr>
            <tr>
              <p class='text' style='font-style:italic;font-size:12px;text-align:left;'>e.g. Harry Potter (2001)</p>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div><br><br>



  <div id="content_canvas">
    <table width=100% style="table-layout:fixed;">
      <tr><td class="canvas_title" colspan="2">
          <img style="width:auto;height:2%;position:relative;top:10px;" src="deco/popcorn.png">
          new & worthy
          <img style="width:6%;height:auto;position:relative;top:15px;" src="deco/check_it_out_arrow.png">
          </td>
      </tr>
      <tr>
        <td>
          <a href="movie_detail.php?movie=spidey">
          <img class="preview" src="preview_img/spiderman_2017_2.png"></a>
        </td>
        <td>
          <a href="movie_detail.php?movie=optimus">
          <img class="preview" src="preview_img/transformers_2017.jpg"></a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="movie_detail.php?movie=spidey">
          <p class="title_link">Spider-Man: Homecoming (2017)</p></a>
        </td>
        <td>
          <a href="movie_detail.php?movie=optimus">
          <p class="title_link">Transfomers: The Last Knight (2017)</p></a>
        </td>
      </tr>
    </table>
  </div><br><br>

  <table width=100% style="table-layout:fixed;">
    <tr>
      <td style="padding-right:20px;">
        <div id="content_canvas">
          <table width=100%>
            <tr>
              <td class="canvas_title" colspan="2">
              <img style="width:auto;height:19%;position:relative;top:10px;" src="deco/admit_one.png">
              top grossing</td>
            </tr>
            <tr>
              <td>
                <a href="movie_detail.php?movie=avatar">
                <img class="preview_mini" src="preview_img/avatar_2009.jpg"></a>
              </td>
              <td style="text-align:left;">
                <a href="movie_detail.php?movie=avatar">
                <p class="title_link">1. Avatar (2009)</p></a>
              </td>
            </tr>
          </table>
          <table>
            <tr>
              <td style='text-align:left;padding-left:45px;'>
                <a href="movie_detail.php?movie=titanic">
                <p class='title_link'>2. Titanic (1997)</p></a>
              </td>
            </tr>
            <tr>
              <td style='text-align:left;padding-left:45px;'>
                <a href="movie_detail.php?movie=starwars">
                <p class='title_link'>3. Star Wars: The Force Awakens (2015)</p></a>
              </td>
            </tr>
          </table>
      </td>
      <td>
        <div id="content_canvas">
          <table width=100%>
            <tr>
              <td class="canvas_title" colspan="2">now at <font style="font-style:italic;">$4.99</font>
              <img style="width:auto;height:15%;position:relative;top:10px;" src="deco/sale_2.png"></td>
            </tr>
            <tr>
              <td>
                <a href="movie_detail.php?movie=bruce">
                <img class="preview_mini" src="preview_img/batman_2017_2.jpg"></a>
              </td>
              <td>
                <a href="movie_detail.php?movie=bruce">
                <p class="title_link">1. The LEGO Batman Movie (2017)</p></a>
              </td>
            </tr>
          </table>
          <table>
            <tr>
              <td style='text-align:left;padding-left:45px;'>
                <a href="movie_detail.php?movie=barbie">
                <p class='title_link'>2. Barbie in the 12 Dancing Princesses (2007)</p></a>
              </td>
            </tr>
            <tr>
              <td style='text-align:left;padding-left:45px;'>
                <a href="movie_detail.php?movie=tink">
                <p class='title_link'>3. Tinker Bell (2008)</p></a>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>
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
