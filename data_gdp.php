<?php
    // redirect to Home page
    function redirectToHome() {
        header("Location: index.php");
        exit;
    } 

    if (isset($_GET['index'])) {
        redirectToDataGDP();
    } 

    // load data using XML file
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("xml/data_gdp.xml");

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">EconoMy USA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?index=true">Home <span class="sr-only">(current)</span></a>
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

    <?php

    // use this at another page to DOM 

        // print the XML data
        // print $xmlDoc->saveXML();

    ?>

    </br>
    <p style="margin-left: 50px;" class="h1">Gross Domestic Production of USA</p>

    <form class="form-inline" style="margin-left: 70%; margin-top: -55px;">
            <select class="custom-select my-1 mr-sm-2" id="selected_year" onChange="update()">
                <option selected>Select Year...</option>
                <option value="1">2021</option>
                <option value="2">2020</option>
                <option value="3">2019</option>
                <option value="4">2018</option>
                <option value="5">2017</option>
                <option value="6">2016</option>
                <option value="7">2015</option>
                <option value="8">2014</option>
                <option value="9">2013</option>
                <option value="10">2012</option>
                <option value="11">2011</option>
            </select>
        </form>

    </br>


    <p style="margin-left: 25%; margin-right: 25%; margin-top: 10px;  margin-bottom: 30px; color: green;" id="answer" class="h2"></p>

    <table id="data" class="table table-striped table-dark" border="1">
        <tr>
            <th scope="col"></th>
        </tr>
    </table>
   

    <script type="text/javascript">

        // get the value of selection of income level
        function update() {
            var select = document.getElementById('selected_year');
            var text = select.options[select.selectedIndex].text;

            // Ajax function to display the related GDP of the selected year
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                myFunction(this);
                }
            };
            xhttp.open("GET", "xml/data_gdp.xml", true);
            xhttp.send();
            
            function myFunction(xml) {
                var xmlDoc = xml.responseXML;
                var data = xmlDoc.getElementsByTagName("data");
                for(var i = 0; i < data.length; i++) {
                    if (data[i].getElementsByTagName("date")[0].childNodes[0].nodeValue== text) {
                        document.getElementById("answer").innerHTML = "GDP of USA in " + text + " is: " + data[i].getElementsByTagName("value")[0].childNodes[0].nodeValue;
                    } 
                }
            }
        }
        

        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "xml/data_gdp.xml", false);
        xhttp.send();
        var xml = xhttp.responseXML;
        table = "<tr><th>Date</th><th>GDP</th><tr>";
        var data = xml.getElementsByTagName("data");
        for(var i = 0; i < data.length; i++) {
            table += "<tr><td>" + data[i].getElementsByTagName("date")[0].childNodes[0].nodeValue + "</td><td>" + data[i].getElementsByTagName("value")[0].childNodes[0].nodeValue + "</td></tr>";
        }
        document.getElementById("data").innerHTML = table;

    </script>

        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>