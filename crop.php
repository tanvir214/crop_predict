<?php
    session_start();
    if(isset($_POST['btn'])){

        $LandTypes = $_POST['LandTypes'];
        $SoilRelief = $_POST['SoilRelief'];
        $WaterRemovalCondition = $_POST['WaterRemovalCondition'];
        $DrainageCondition = $_POST['DrainageCondition'];
        $SoilTexture = $_POST['SoilTexture'];
        $SoilConsistance = $_POST['SoilConsistance'];
        $StatusOfExtractableSapInSoil = $_POST['StatusOfExtractableSapInSoil'];
        $SoilReaction = $_POST['SoilReaction'];
        $SoilRelief = $_POST['SoilRelief'];
        $Salinit = $_POST['Salinit'];
        $NSuit = $_POST['NSuit'];
        $PSuit = $_POST['PSuit'];
        $KSuit = $_POST['KSuit'];
        


        $command = escapeshellcmd("c:/users/tanvir/appdata/local/programs/python/python39/python.exe pythonFile.py $LandTypes $SoilRelief $WaterRemovalCondition $DrainageCondition $SoilTexture $SoilConsistance $StatusOfExtractableSapInSoil $SoilReaction $Salinit $NSuit $PSuit $KSuit");
        $output = shell_exec($command);

        $_SESSION['result'] = $output;

        header('location:result.php');
    
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop</title>
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


    <section class="sectionimg">
        <div class="container">
            <div class="sc1">
                <h1>ENTER THE VALUES</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row text-center">
                            <div class="col-md-6 mt-5">
                                <div class="mb-3">
                                    <label for="" class="text-left">Soil Reaction</label>
                                    <input type="text" class="form-control" name="SoilReaction" placeholder="Enter Soil reaction" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Nitrogen Content</label>
                                    <input type="text" class="form-control" name="NSuit" placeholder="Enter Nitrogen" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Potassium Content</label>
                                    <input type="text" class="form-control" name="PSuit" placeholder="Enter Potassium" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Phosphorus Content</label>
                                    <input type="text" class="form-control" name="KSuit" placeholder="Enter Phosphorus" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="text-left">Soil Reilef</label>
                                    <input type="text" class="form-control" name="SoilRelief" placeholder="Enter Soil reilef">
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Land Type</label>
                                    <input type="text" class="form-control" name="LandTypes" placeholder="Enter Landtype" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-5">
                                <div class="mb-3">
                                <label for="" class="text-left">Soil Salianty</label>
                                    <input type="text" class="form-control" name="Salinit" placeholder="Enter Soil Salinity" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Water Removal Condition</label>
                                    <input type="text" class="form-control" name="WaterRemovalCondition" placeholder="Enter Water Removal Condition" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Drainage Condition</label>
                                    <input type="text" class="form-control" name="DrainageCondition" placeholder="Enter Drainage Condition" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Soil Texture</label>
                                    <input type="text" class="form-control" name="SoilTexture" placeholder="Enter Soil texture" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Soil Consistance</label>
                                    <input type="text" class="form-control" name="SoilConsistance" placeholder="Enter Soil consistance" required>
                                </div>
                                <div class="mb-3">
                                <label for="" class="text-left">Status Of Extractable Sap In Soil</label>
                                    <input type="text" class="form-control" name="StatusOfExtractableSapInSoil" placeholder="Enter Status of Extractable Sao in soil">
                                </div>
                                
                            </div>
                        </div> 
                        <div class="text-center mt-2">
							<button type="submit" name="btn" class="btn btn-primary ms-auto">See Result</button>
						</div>  
                    </div>
                </form>
            </div>

        </div>
    </section>
   
</body>
</html>