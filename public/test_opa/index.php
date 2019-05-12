<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OPACAK</title>
<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="stil.css?v=1.1">
<link rel="icon" type="image/png" href="favicon.png" />
</head>

<?php
$tekst="home";

if(isset($_GET['q'])) {
    $tekst=$_GET['q'];
}
?>


<body>

<div class="container">
    
	<div class="row mt-5">
		<div class="col-lg-2">

        </div>
            <div class="col-lg-8 mt-5">
                <div class="text-lg-center mb-2"><a href="index.php"><img src="opacak.jpg"></a></div>
                <div class="linija mb-4 mt-4"></div>

                <div class="text-left">
                    <?php
                        include $tekst.".php";
                    ?>
                    <p><a href="index.php?q=impressum">Impressum</a> | <a href="index.php?q=daten">Datenschutz</a></p>
                </div>

            </div>
        <div class="col-lg-2">

        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-lg-4">
            <a href="http://www.krafttec.de" target="_blank"><img src="krafttec.jpg" alt="" class="img-fluid  p-2"></a>
        </div>
        <div class="col-lg-4">
            <a href="http://www.pointcolor.de/" target="_blank"><img src="pointcolor.jpg" alt="" class="img-fluid  p-2"></a>
        </div>
        <div class="col-lg-4">
            <a href="http://www.oppy.one/" target="_blank"><img src="oppy1.jpg" alt="" class="img-fluid  p-2"></a>
        </div>
    </div>
    
</div>

</body>
</html>




