<?php

    // redirect to Home page
    function redirectToHome() {
        header("Location: index.php");
        exit;
    } 

    if (isset($_GET['index'])) {
        redirectToDataGDP();
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


    <p style="margin-left: 35%; margin-right: 35%; margin-top: 50px; color: gray;" class="h4">Exchange Rate of China Against USA</p>
    <p style="margin-left: 40%; margin-right: 40%; margin-top: 50px;  margin-bottom: 200px; color: green;" id="data" class="h4"></p>

    <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            showResult(xhttp.responseXML);
        }
    };
    xhttp.open("GET", "xml/data_e_rate.xml", true);
    xhttp.send(); 

    // added XPath for this function to redirect to elements of XML  
    function showResult(xml) {
        var txt = "";
        path = "/data_set/data/value"
        if (xml.evaluate) {
            var nodes = xml.evaluate(path, xml, null, XPathResult.ANY_TYPE, null);
            var result = nodes.iterateNext();
            var year = 2021;
            while (result) {
                txt +=  year + " -- " + result.childNodes[0].nodeValue + "<br>";
                year = year - 1;
                result = nodes.iterateNext();
            } 
        // Code For Internet Explorer
        } else if (window.ActiveXObject || xhttp.responseType == "msxml-document") {
            xml.setProperty("SelectionLanguage", "XPath");
            nodes = xml.selectNodes(path);
            for (i = 0; i < nodes.length; i++) {
                txt += nodes[i].childNodes[0].nodeValue + "<br>";
            }
        }
        document.getElementById("data").innerHTML = txt;
    }
    </script>
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>