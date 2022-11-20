<?php 
    error_reporting(0);
    session_start();
    $result = $_SESSION['result'];

    function RemoveSpecialChar($str){
        $res = preg_replace('/[^a-zA-Z0-9_ ]/s',' ',$str);
        return $res;
    }

    $result = RemoveSpecialChar($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href='css/style.css'>
</head>
<body>
    <section class="backcolor" id="home">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top justify-content-between" style="background-color: #1C00ff00;">
                <div class="container font-weight-bold">
                    <a class="navbar-brand" href="index.php">
                        <h1>Soilify</h1>
                    </a>
                </div>
                <div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link font-weight-bold" href="index.php">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="crop.php">Crop</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="cropbg">
        <div class="banner-overlay">
            <div class="container">
                <div class="croppd mt-auto text-center">
                    <div class="croph">
                        <h1>you should grow <span><?php echo $result; ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>