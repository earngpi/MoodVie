<!DOCTYPE html>
<html>
<head>
<title>movie_detail.php</title>
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
<table style="padding-left:15px;text-align:center;position:">
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


<div id='mid_bg'>
<div id='content_canvas'>
<?php
  $movie = 'none';
  if(isset($_GET['movie'])){
    $movie = $_GET['movie'];
  }
?>

<br><br>
<table width=100%>
  <tr>
    <td>
      <?php
        if($movie=='spidey'){
          echo "<img class='poster' src='poster/spidey.jpg'>";
        }elseif($movie=='optimus'){
          echo "<img class='poster' src='poster/optimus.jpg'>";
        }elseif($movie=='avatar'){
          echo "<img class='poster' src='poster/avatar.jpg'>";
        }elseif ($movie=='bruce'){
          echo "<img class='poster' src='poster/bruce.jpg'>";
        }
      ?>
    </td>
    <td class='canvas_title' style="text-align:left; padding-left:10px;">
      <?php
        if($movie=='spidey'){
          echo "Spider-Man: Homecoming (2017)
                <p style='color:#606060;
                font-size:13px;
                font-weight:normal;
                text-transform:none'>
                <b style='font-size:14px;'><i>$19.99</b></i> &#9474 Action Adventure Sci-Fi &#9474 133 minutes &#9474 PG13 &#9474 English
                </p>
                <iframe width=auto height=200px src='https://www.youtube.com/embed/U0D3AOldjMU?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>";
        }elseif($movie=='optimus'){
          echo "Transformers: The Last Knight (2017)
                <p style='color:#606060;
                font-size:13px;
                font-weight:normal;
                text-transform:none'>
                <b style='font-size:14px;'><i>$19.99</b></i> &#9474 Action Adventure Sci-Fi &#9474 154 minutes &#9474 PG13 &#9474 English
                </p>
                <iframe width=auto height=200px src='https://www.youtube.com/embed/6Vtf0MszgP8?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>";
        }elseif($movie=='avatar'){
          echo "Avatar (2009)
          <p style='color:#606060;
          font-size:13px;
          font-weight:normal;
          text-transform:none'>
          <b style='font-size:14px;'><i>$19.99</b></i> &#9474 Action Adventure Fantasy &#9474 161 minutes &#9474 PG13 &#9474 English
          </p>
          <iframe width=auto height='200px' src='https://www.youtube.com/embed/5PSNL1qE6VY?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>";
        }elseif ($movie=='bruce'){
          echo "The LEGO Batman Movie (2017)
          <p style='color:#606060;
          font-size:13px;
          font-weight:normal;
          text-transform:none'>
          <b style='font-size:14px;'><i>$4.99</b></i> &#9474 Animation Action Adventure &#9474 104 minutes &#9474 PG &#9474 English
          </p>
          <iframe width=auto height='200px' src='https://www.youtube.com/embed/rGQUKzSDhrg?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>";
        }
      ?>
    </td>

    <td>
      <?php
      if($movie=='spidey'){
        echo '<td rowspan="2" style="border-style:none none none solid;
                              border-width:1px;
                              border-color:#C0C0C0;
                              text-align:left;
                              padding-left:30px;
                              font-size:13px">
          <p class="text" style="font-weight:bold;">Cast:</p>
          <p class="text" style="padding-left:12px;">
          Tom Holland<br>
          Michael Keaton<br>
          Robert Downey Jr.<br>
          Marisa Tomei<br></p>
          <p class="text"><b>Rating:</b>
          <span class="imdbRatingPlugin" data-user="ur80609845" data-title="tt2250912" data-style="t1">
          <a href="http://www.imdb.com/title/tt2250912/?ref_=tt_plg_rt"><img alt="Spider-Man: Homecoming (2017) on IMDb" src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_46x22.png"></a></span><script>
          (function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];
          if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;
          js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";
          stags.parentNode.insertBefore(js,stags);})(document,"script","imdb-rating-api");
          </script></p>
          <p class="text"><b>Director:</b> Jon Watts</p>
          <p class="text"><b>Based On:</b> Spider-Man by
                          <br>Stan Lee & Steve Ditko</p>
          <p class="text"><b>Production:</b> Columbia Pictures,
                          <br>Marvel Studios & Pascal Pictures</p>
          <p class="text"><b>Distributor:</b> Sony Pictures</p>
          </td>';
      }elseif($movie=='optimus'){
        echo '<td rowspan="2" style="border-style:none none none solid;
                              border-width:1px;
                              border-color:#C0C0C0;
                              text-align:left;
                              padding-left:30px;
                              font-size:13px">
          <p class="text" style="font-weight:bold;">Cast:</p>
          <p class="text" style="padding-left:12px;">
          Mark Wahlberg<br>
          Anthony Hopkins<br>
          Josh Duhamel<br>
          Laura Haddock<br></p>
          <p class="text"><b>Rating:</b>
          <span class="imdbRatingPlugin" data-user="ur80609845" data-title="tt3371366" data-style="t1">
          <a href="http://www.imdb.com/title/tt3371366/?ref_=tt_plg_rt">
          <img alt="Transformers: The Last Knight (2017) on IMDb" src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_46x22.png"></a></span>
          <script>
          (function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];
          if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;
          js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";
          stags.parentNode.insertBefore(js,stags);})(document,"script","imdb-rating-api");
          </script></p>
          <p class="text"><b>Director:</b> Michael Bay</p>
          <p class="text"><b>Based On:</b> Transformers by Hasbro</p>
          <p class="text"><b>Production:</b> di Bonaventura Pictures,
                          <br>Hasbro Studios & Angry Films</p>
          <p class="text"><b>Distributor:</b> Paramount Pictures</p>
          </td>';
      }elseif($movie=='avatar'){
        echo '<td rowspan="2" style="border-style:none none none solid;
                              border-width:1px;
                              border-color:#C0C0C0;
                              text-align:left;
                              padding-left:30px;
                              font-size:13px">
          <p class="text" style="font-weight:bold;">Cast:</p>
          <p class="text" style="padding-left:12px;">
          Sam Worthington<br>
          Zoe Saldana<br>
          Sigourney Weaver<br>
          Stephen Lang<br></p>
          <p class="text"><b>Rating:</b>
          <span class="imdbRatingPlugin" data-user="ur80609845" data-title="tt0499549" data-style="t1">
          <a href="http://www.imdb.com/title/tt0499549/?ref_=tt_plg_rt">
          <img alt="Avatar (2009) on IMDb" src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_46x22.png"></a></span>
          <script>
          (function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];
          if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;
          js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";
          stags.parentNode.insertBefore(js,stags);})(document,"script","imdb-rating-api");
          </script></p>
          <p class="text"><b>Director:</b> James Cameron</p>
          <p class="text"><b>Production:</b> Lightstorm Entertainment,
                          <br>Dune Entertainment & Ingenious Media</p>
          <p class="text"><b>Distributor:</b> 20th Century Fox</p>
          </td>';
      }elseif ($movie=='bruce'){
        echo '<td rowspan="2" style="border-style:none none none solid;
                              border-width:1px;
                              border-color:#C0C0C0;
                              text-align:left;
                              padding-left:30px;
                              font-size:13px">
          <p class="text" style="font-weight:bold;">Cast:</p>
          <p class="text" style="padding-left:12px;">
          Will Arnett<br>
          Michael Cera<br>
          Rosario Dawson<br>
          Ralph Fiennes<br>
          Zach Galifianakis</br></p>
          <p class="text"><b>Rating:</b>
          <span class="imdbRatingPlugin" data-user="ur80609845" data-title="tt4116284" data-style="t1">
          <a href="http://www.imdb.com/title/tt4116284/?ref_=tt_plg_rt">
          <img alt="The LEGO Batman Movie (2017) on IMDb" src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_46x22.png">
          </a></span>
          <script>
          (function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];
          if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;
          js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";
          stags.parentNode.insertBefore(js,stags);})(document,"script","imdb-rating-api");
          </script></p>
          <p class="text"><b>Director:</b> Chris McKay</p>
          <p class="text"><b>Based On:</b> DC Comics <br>Lego Construction Toys</p>
          <p class="text"><b>Production:</b> DC Entertainment,
                                        <br>Warner Animation Group, Lego System A/S
                                        <br> Lin Pictures & Lord Miller Production</p>
          <p class="text"><b>Distributor:</b> Warner Bros. Pictures</p>
          </td>';
      }
      ?>
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
