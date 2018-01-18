<?php
/**
 * Created by PhpStorm.
 * User: weapo
 * Date: 1/11/2018
 * Time: 7:00 PM
 */
include("php/connect.php");
$query = "SELECT id, title, description, link, img from list";
$result = mysqli_query($link, $query);
if($result===FALSE){
    die(mysqli_error());
}
$listItems = Array();
while($row =mysqli_fetch_array($result, MYSQLI_BOTH)){
    $listItems[]=Array(
        "id"=>$row["id"],
        "title"=>$row["title"],
        "description"=>$row["description"],
        "link"=>$row["link"],
        "img"=>$row["img"],
        );


}
?>
<DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Listings</title>
    </head>

    <body>
    <!-- BEGIN Bootstrap Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">Listings</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                </li>
        </div>
    </nav>

    <!-- END Bootstrap Navbar -->
    <div id="particles-js"></div>
    <div class="container">


        <div class="row">
             <!-- column for content -->
<?php
foreach ($listItems as $listItem){
//    if($listItem["id"]% 2 === 0){
//    echo '<div class="w-100"></div> <br/>';
//}
    echo '<div class="col-md-5" onclick="swal(\'Website Link:\', \''.$listItem["link"].'\')"><div class="item-pic" style="background-image: url('.$listItem["img"].')"></div><div class="mli"> '. $listItem["title"].': <br/>'.$listItem["description"].'</div></div>';

}
?>
            <script type="text/javascript" src="js/particles.min.js"></script>
            <script type="text/javascript" src="js/app.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
