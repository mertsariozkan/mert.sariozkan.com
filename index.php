<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<title>Mert Sarıözkan</title>
</head>
<body>
    <div class="header">
    </div>

    <div class="topnav">
      <a href="index.php">Homepage</a>
      <a href="about.php">About</a>
      <a href="blog.php">Blog</a>
      <a href="projects.php">Projects</a>
      <a href="contact.php">Contact</a>
    </div>

    <div class="row">
      <div class="column1" style="background-color:#aaa;">
        <?php
        $jsondata = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Izmir&units=metric&APPID=b82f4180da78f00f69bba545428a6d48");
        $array = json_decode($jsondata);
        echo "<b>İzmir</b><br></br>";?>
        <img src="izmir.jpg"/><br><?php
        echo "Temperature is ".$array->main->temp."°C.</br>";
        echo "Weather: ".$array->weather[0]->main."<br><br>";
        $jsondata = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Istanbul&units=metric&APPID=b82f4180da78f00f69bba545428a6d48");
        $array = json_decode($jsondata);
        echo "<b>İstanbul</b></br></br>";?>
        <img src="istanbul.jpg"/><br><?php
        echo "Temperature is ".$array->main->temp."°C.</br>";
        echo "Weather: ".$array->weather[0]->main."<br><br>";

        $jsondata = file_get_contents("http://data.fixer.io/api/latest?access_key=7e8c2f947a99a5d42bde3dabbc426fb8");
        $array = json_decode($jsondata);
        echo "<b>Date: ".$array->date."</b><br><br>";
        echo "TRY: ".$array->rates->TRY." €<br><br>";
        echo "USD: ".$array->rates->USD." €<br><br>";
        echo "AUD: ".$array->rates->AUD." €<br><br>";
        ?>
      </div>
      <div class="column2" style="background-color:#ccc;">
        <?php
          $jsondata = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=e47fb6439e25441b83b4067ffb05850b");
          $array = json_decode($jsondata);
          echo "<b>News</b><br><br>";
          $numnews = $array->totalResults;
          for($i=0;$i<$numnews;$i++) {
            echo $array->articles[$i]->title."    <b>".$array->articles[$i]->source->name."</b><br><br>";
          }
        ?>
      </div>
    </div>

</body>
</html>
