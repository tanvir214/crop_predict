<?php
    error_reporting(0);

    $m=rand(70,90);
    $ph=rand(1,7);
    $n=rand(50,200);
    $p=rand(50,200);
    $k=rand(50,200);
    $url = 'https://api.thingspeak.com/update?api_key=B02G0KHGAD6QW8JV&field1='.$ph.'&field2='.$m.'&field3='.$n.'&field4='.$p.'&field5='.$k;

    $data=json_decode(file_get_contents($url),true);

    $page = $_SERVER['PHP_SELF'];
    $sec = "180";

    echo $data;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Document</title>
</head>
<body>
    
</body>
</html>