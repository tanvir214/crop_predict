<?php
    session_start();
    if(isset($_POST['btn'])){

        $ok1 = $_POST['ok1'];
        $ok2 = $_POST['ok2'];
        $ok3 = $_POST['ok3'];
        $ok4 = $_POST['ok4'];
        $ok5 = $_POST['ok5'];
        $ok6 = $_POST['ok6'];
        $ok7 = $_POST['ok7'];
        $ok8 = $_POST['ok8'];
        $ok9 = $_POST['ok9'];
        $ok10 = $_POST['ok10'];
        $ok11 = $_POST['ok11'];
        $ok12 = $_POST['ok12'];
        $ok13 = $_POST['ok13'];
        


        //$command = escapeshellcmd("python pythonFile.py $LandTypes $SoilRelief $WaterRemovalCondition $DrainageCondition $SoilTexture $SoilConsistance $StatusOfExtractableSapInSoil $SoilReaction $SoilRelief $Salinit $NSuit $PSuit $KSuit");
        //$command = escapeshellcmd('python test.py .$LandTypes');
        //$output = shell_exec("test.py '".$LandTypes."'");

        //$output = passthru("test.py ".$NSuit." ".$PSuit);
        //$output = shell_exec("c:/users/tanvir/appdata/local/programs/python/python39/python.exe test.py '$ok1' '$ok2' '$ok3' '$ok4' '$ok5'  '$ok6' '$ok7' '$ok8' '$ok9' '$ok10' '$ok11' '$ok12' '$ok13'");


        $command = escapeshellcmd("c:/users/tanvir/appdata/local/programs/python/python39/python.exe test.py $ok1 $ok2 $ok3 $ok4 $ok5  $ok6 $ok7 $ok8 $ok9 $ok10 $ok11 $ok12");
        $output = shell_exec($command);
        //$result = shell_exec('python C:/xampp/htdocs/project497/pythonFile.py' . $LandTypes);

        echo $output;
        //header('location:test.py');
    
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="ok1" id="">
        <input type="text" name="ok2" id="">
        <input type="text" name="ok3" id="">
        <input type="text" name="ok4" id="">
        <input type="text" name="ok5" id="">
        <input type="text" name="ok6" id="">
        <input type="text" name="ok7" id="">
        <input type="text" name="ok8" id="">
        <input type="text" name="ok9" id="">
        <input type="text" name="ok10" id="">
        <input type="text" name="ok11" id="">
        <input type="text" name="ok12" id="">
        <input type="text" name="ok13" id="">
        <button type="submit" name="btn"></button>
    </form>
</body>
</html>