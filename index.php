<!DOCTYPE html>
<meta charset="utf-8">
<?php
  function isValidJSON($str) {
    json_decode($str);
    return json_last_error() == JSON_ERROR_NONE;
  }
  $data_array=array();
  $json_params = file_get_contents("php://input");
  
  if (isValidJSON($json_params)) {
    $decoded_params = json_decode($json_params);
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $myfile2 = fopen("log.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $decoded_params);
    fwrite($myfile2, $decoded_params);
    fclose($myfile);
    fclose($myfile2);
  }
?>
<html>
  <head>
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </head>
  <body>
    <p>
      <img id="main_logo" src="assets/img/logo.png"
      style="margin-left: auto; margin-right: auto; display: block;margin-top: 50px"/>
    </p>
  </body>
  <script>
    $("p").click(function () {
      jQuery("#main_logo").fadeOut("slow", function() {
        // Animation complete.
        location.href="home.php";
      });
    });


  </script>
</html>
