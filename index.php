<?php
error_reporting(0);
    $key='ATQWYKZL1WM7278U';
    $ch='1932824';
    $url='https://api.thingspeak.com/channels/'.$ch.'/feeds/last.json?api_key='.$key;

    $data=json_decode(file_get_contents($url),true);
    $pH=$data ['field1'];
    $m=$data ['field2'];
    $n=$data ['field3'];
    $p=$data ['field4'];
    $k=$data ['field5'];


    $page = $_SERVER['PHP_SELF'];
    $sec = "30";

    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
                                <a class="nav-link" href="#showdata">Data</a>
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

    <section class="banner">
        <div class="">
            <div class="banner-top">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="banner-info text-center">
                            <h3 class="text-wh">Soilify</h3>
                            <h4 class="text-wh mx-auto my-4"><b>Get informed about your farming soil condition.</b></h4>
                           
                            <h4 class="text-wh mx-auto my-4"><strong> Here are some questions we'll answer</strong></h4>
                            <p class="text-li mx-auto mt-2">
                                1. What's the soil condition? <br>
                                2. What crop to plant here? <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="result" id="showdata">
        <div class="container">

            <div>
                <h1 class="result-h1">Soil pH,Moisture,Nutrients</h1>
            </div>

            <div class="row text-center result-border">
                <div class="col-md-6 mx-auto pt-5 result-border-right">
                    <div>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1932824/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>

                    </div>
                    <div class="text-center pt-2">
                        <h2 class="result-h2">Latest pH : <?php echo $pH; ?></h2>
                    </div>
                </div>

                <div class="col-md-6 mx-auto pt-5">
                    <div>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1932824/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>

                    </div>
                    <div class="text-center pt-2">
                        <h2 class="result-h2">Latest Moisture : <?php echo $m; ?></h2>
                    </div>
                </div>
            </div>

            <div class="row text-center result-border">
                <div class="col-md-6 mx-auto pt-5 result-border-right">
                    <div>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1932824/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>

                    </div>
                    <div class="text-center pt-2">
                        <h2 class="result-h2">Latest Nitrogen Content : <?php echo $n; ?></h2>
                    </div>
                </div>

                <div class="col-md-6 mx-auto pt-5">
                    <div>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1932824/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>

                    </div>
                    <div class="text-center pt-2">
                        <h2 class="result-h2">Latest Phosphorus Content: <?php echo $p; ?></h2>
                    </div>
                </div>
            </div>

            <div class="row text-center result-border">
                <div class="col-md-6 mx-auto pt-5">
                    <div>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1932824/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>

                    </div>
                    <div class="text-center pt-2">
                        <h2 class="result-h2">Latest Potassium Content: <?php echo $k; ?></h2>
                    </div>
                </div>
               
            </div>
        </div>
    </section>


    <!-- footer -->
	<footer class="text-center py-5">
		<div class="container py-md-3">
			<!-- logo -->
			<h2 class="logo2 text-center">
				<a href="#home">
					Soilify
				</a>
			</h2>
			<div class="w3l-copy text-center">
				<p class="text-da">A Friend Of Farmer<br> </p>
			</div>
			<p>Made by Tanvir</p>
		</div>
	</footer>
	<!-- //footer -->
    
</body>
</html>