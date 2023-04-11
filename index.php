<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/app.js"></script>
</head>
<body>
<div class="divAna">

<div class="divIc" id="aKabul" ondrop="birakA(event)" ondragover="allowDrop(event)">
<h1>Meyve</h1>
</div>

<div class="divIc" id="ortaKabul" ondrop="birakOrta(event)" ondragover="allowDrop(event)">
<h1>ORTA</h1>
<?php 
include("baglan.php");
$bul="select meyveismi from meyve";
$kayit=$baglanti->query($bul);
if ($kayit->num_rows>0) {
$i = 1;
  while ($satir=$kayit->fetch_assoc()) {
    echo '<div draggable="true" ondragstart="surukle(event)" id="drag' .$i. '"><h3> '
     .$satir["meyveismi"]. //divin içerisinde tablodan çekilen veri var
     ' </h3></div> ';
    $i++;
  }
}
?>
</div>

<div class="divIc" id="bKabul" ondrop="birakB(event)" ondragover="allowDrop(event)"><!--sağdaki b divi-->
<h1>Sebze</h1>
</div>

</div>
</body>
</html>