

<?php
// arrays names and images:
$strings = array("Kirito", "Erza", "Akatsuki", "Shiro", "Leo", "Rundel-Haus-Code", "Ken Kaneki", "Glenn Radars", "Momonga-Sama",);
$pictures = array("https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
"https://wallpaperaccess.com/full/190815.jpg",
"https://images7.alphacoders.com/528/528418.jpg",
"https://wallpaperaccess.com/full/300068.jpg",
"https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg");

// random image in header:
$randomBackground = $pictures[mt_rand(0, count($pictures) - 1)];

$username ="Rafael Lambelin Selene Nijst";
$rand_color = '#' . substr(md5(mt_rand()), 0, 6);

$arr_string = explode("", $username);

/*
$r = rand(255);
$g = rand(255);
$b = rand(255);
*/
//$name = "<span style='color:rgb($r, $g, $b)'>$username</span>";

// $rgbColor = array($username);
/*
//Create a loop.
foreach(array(r, g, b) as $color){
    //Generate a random number between 0 and 255.
    $rgbColor[$color] = mt_rand(0, 255);
}

var_dump($rgbColor);
*/
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<title>Javascript to PHP</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='styles.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
</head>
<body class='bg-light'>
  <header id="header" style="background-image:url(<?php echo $randomBackground ?>)">
    <div class="overlay"></div>
      <div class="overlay-content">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1>Welcome to the Javascript - PHP exercise</h1>
              <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!</p>
            </div>
          </div>
        </div>
      </div>
  </header>
   <section id="exercises">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border">
            <h2>Exercise 1: Loops and stuff</h2>
              <ul>
              <?php
               for ($i = 0; $i <= 10; $i++) {
                echo "<li>" . $strings[mt_rand(0, count($strings) - 1)] . "</li>";
                };
               ?>
             </ul>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-12">
             <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border">
             <span style="color: <?php echo $rand_color; ?>"><?php echo $username ?></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
