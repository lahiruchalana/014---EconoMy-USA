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

        // print the XML data
        // print $xmlDoc->saveXML();

    ?>

    </br>
    <p style="margin-left: 50px;" class="h1">Gross Domestic Production of USA</p>

    <div class="btn-group" style="margin-left: 80%; margin-top: -90px;">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Year
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">2021</a>
            <a class="dropdown-item" href="#">2020</a>
            <a class="dropdown-item" href="#">2019</a>
            <a class="dropdown-item" href="#">2018</a>

        </div>
    </div>

    </br>


    <table id="data" class="table table-striped table-dark" border="1">
        <tr>
            <th scope="col"></th>
        </tr>
    </table>


    <script type="text/javascript">

        var request = new XMLHttpRequest();
        request.open("GET", "xml/data_gdp.xml", false);
        request.send();
        var xml = request.responseXML;
        table = "<tr><th>Date</th><th>GDP</th><tr>";
        var data = xml.getElementsByTagName("data");
        for(var i = 0; i < data.length; i++) {
            table += "<tr><td>" + data[i].getElementsByTagName("date")[0].childNodes[0].nodeValue + "</td><td>" + data[i].getElementsByTagName("value")[0].childNodes[0].nodeValue + "</td></tr>";
            // console.log( data[i].getElementsByTagName("date")[0].childNodes[0].nodeValue);
        }
        document.getElementById("data").innerHTML = table;

    </script>

        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>