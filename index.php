<?php 
    // redirect to PHP pages
    function redirectToDataGDP() {
        header("Location: data_gdp.php");
        exit;
    }    
    function redirectToDataPopulation() {
        header("Location: data_population.php");
        exit;
    } 
    function redirectToDataCAB() {
        header("Location: data_cab.php");
        exit;
    } 
    function redirectToDataERate() {
        header("Location: data_e_rate.php");
        exit;
    } 

    if (isset($_GET['data_gdp'])) {
        redirectToDataGDP();
    } else if (isset($_GET['data_population'])) {
        redirectToDataPopulation();
    } else if (isset($_GET['data_cab'])) {
        redirectToDataCAB();
    } else if (isset($_GET['data_exchange_rate'])) {
        redirectToDataERate();
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EconoMy USA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">EconoMy USA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Add <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Edit <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Delete <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Economic Factors
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?data_gdp=true">GDP of USA</a>
                <a class="dropdown-item" href="index.php?data_population=true">Population of USA</a>
                <a class="dropdown-item" href="index.php?data_cab=true">Current Account Balance of USA</a>
                <a class="dropdown-item" href="index.php?data_exchange_rate=true">Exchange Rate of China Against USA</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>

        <p style="margin-left: 10%; margin-top: 20px;" class="h3">Move On Your Need In EconoMy USA!!!</p>

        <div class="row" style="width:100%; margin-top: 50px; ">
            <div class="col" align="center">
                <img src="https://imageio.forbes.com/specials-images/imageserve/608b1289ae7bd9de116050b2/United-States-Economy-Improves-and-Returns-to-Normal-After-Crisis/960x0.jpg?format=jpg&width=960" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <a class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px;" href='index.php?data_gdp=true'>GDP of USA</a>
            </div>
            <div class="col" align="center">
                <img src="https://images.pexels.com/photos/2432110/pexels-photo-2432110.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <a class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px; " href='index.php?data_population=true'>Population of USA</a>
            </div>
        </div>
        <div class="row" style="width:100%; margin-top: 100px;">
            <div class="col" align="center">
                <img src="https://images.pexels.com/photos/210574/pexels-photo-210574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <a class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px; " href='index.php?data_cab=true'>Current Account Balance of USA</a>
            </div>
            <div class="col" align="center">
                <img src="https://images.pexels.com/photos/730547/pexels-photo-730547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <a class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px; " href='index.php?data_exchange_rate=true'>Exchange Rate of China Against USA</a>
            </div>
        </div>


        <p style="margin-left: 35%; margin-right: 35%; margin-top: 50px;" class="h2">EconoMy USA Quiz.. </p>
        <p style="margin-left: 35%; margin-right: 35%;" class="h4">Try To Upgrade Your Knowledge!!</p>

        <form class="form-inline" style="margin-left: 35%; margin-right: 35%; margin-top: 30px; ">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">1. What is the current Income Level of Unites States of America?</label>
            <select class="custom-select my-1 mr-sm-2" id="income_level" onChange="update()">
                <option selected>Choose...</option>
                <option value="High income">High income</option>
                <option value="Upper-middle income">Upper-middle income</option>
                <option value="Lower-middle income">Lower-middle income</option>
                <option value="Low income">Low income</option>
            </select>
        </form>
        <button style="margin-left: 35%; margin-right: 35%;" class="btn btn-primary my-1" type="button" onclick="loadAnswer()">Is it correct answer?</button>

        <p style="margin-left: 35%; margin-right: 35%; margin-top: 20px; color: green;" id="yes_or_no" class="h2"></p>
        <p style="margin-left: 35%; margin-right: 35%; margin-top: 10px;  margin-bottom: 200px; color: green;" id="answer" class="h2"></p>


    </div>

    <script type="text/javascript">
            
            // get the value of selection of income level
            function update() {
                var select = document.getElementById('income_level');
                var text = select.options[select.selectedIndex].text;

                return text;
            }

            // AJAX function to update the webpage with answer of income level
            function loadAnswer() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                    }
                };
                xhttp.open("GET", "xml/data_income_level.xml", true);
                xhttp.send();
            }

            function myFunction(xml) {
                var xmlDoc = xml.responseXML;
                if (xmlDoc.getElementsByTagName("incomelevel")[0].childNodes[0].nodeValue == update()) {
                    document.getElementById("yes_or_no").innerHTML = "Your answer is correct...";
                    document.getElementById("answer").innerHTML = xmlDoc.getElementsByTagName("incomelevel")[0].childNodes[0].nodeValue;
                } else {
                    document.getElementById("yes_or_no").innerHTML = "Your answer is not correct... try again";
                    document.getElementById("answer").innerHTML = "";
                }
            }
            

        </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>