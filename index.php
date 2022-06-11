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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
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
            function redirectToDataGDP() {
                header("Location: data_gdp.php");
                exit;
            }    
            function redirectToDataPopulation() {
                header("Location: data_gdp.php");
                exit;
            } 
            function redirectToDataCAB() {
                header("Location: data_gdp.php");
                exit;
            } 
            function redirectToDataERate() {
                header("Location: data_gdp.php");
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
            
        <div class="row" style="width:100%; margin-top: 100px; ">
            <div class="col" align="center">
                <img src="https://imageio.forbes.com/specials-images/imageserve/608b1289ae7bd9de116050b2/United-States-Economy-Improves-and-Returns-to-Normal-After-Crisis/960x0.jpg?format=jpg&width=960" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <a class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px;" href='index.php?data_gdp=true'>GDP of USA</a>
            </div>
            <div class="col" align="center">
                <img src="https://imageio.forbes.com/specials-images/imageserve/608b1289ae7bd9de116050b2/United-States-Economy-Improves-and-Returns-to-Normal-After-Crisis/960x0.jpg?format=jpg&width=960" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <Button class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px; " href='index.php?data_population=true'>Population of USA</Button>
            </div>
        </div>
        <div class="row" style="width:100%; margin-top: 100px;">
            <div class="col" align="center">
                <img src="https://imageio.forbes.com/specials-images/imageserve/608b1289ae7bd9de116050b2/United-States-Economy-Improves-and-Returns-to-Normal-After-Crisis/960x0.jpg?format=jpg&width=960" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <Button class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px; " href='index.php?data_cab=true'>Current Account Balance of USA</Button>
            </div>
            <div class="col" align="center">
                <img src="https://imageio.forbes.com/specials-images/imageserve/608b1289ae7bd9de116050b2/United-States-Economy-Improves-and-Returns-to-Normal-After-Crisis/960x0.jpg?format=jpg&width=960" alt="Snow" style="width:40%; border-radius: 50px;  box-shadow: -5px 5px 8px 10px black; " >
                <Button class="btn btn-outline-primary" style="width:300px; border-radius: 10px; margin-left:20px; " href='index.php?data_exchange_rate=true'>Exchange Rate of China Against USA</Button>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>