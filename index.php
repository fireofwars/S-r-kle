<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--mobil uyumlu-->
    <link rel="stylesheet" type="text/css" href="css/style.css"><!-- css linki -->
    
</head>
<body>
<script src="app.js"></script>
<div class="divAna">

<div class="divIc" id="aKabul" ondrop="birakA(event)" ondragover="allowDrop(event)"><!--soldaki a divi-->
<h1>meyve</h1>
</div>

<div class="divIc" id="ortaKabul" ondrop="birakOrta(event)" ondragover="allowDrop(event)"><!--orta div-->
<h1>ORTA</h1>
<?php 
include("baglan.php");//veri tabanı ile bağlantı
$bul="select meyveismi from meyve";//hangi tablodan hangi sütun
$kayit=$baglanti->query($bul);//sorguyu çalıştır
if ($kayit->num_rows>0) {//eğer satır bulduysa çalışır
$i = 1;
  while ($satir=$kayit->fetch_assoc()) {//satırları sırayla döndürüyor
    echo '<div class="divSuruklenebilir" draggable="true" ondragstart="surukle(event)" id="drag' .$i. '"><h3> '//$i sayesinde her seferinde yeni id veriliyor
     .$satir["meyveismi"]. //divin içerisinde tablodan çekilen veri var
     ' </h3></div> ';
    $i++;
  }
}
?>
</div>

<div class="divIc" id="bKabul" ondrop="birakB(event)" ondragover="allowDrop(event)"><!--sağdaki b divi-->
<h1>sebze</h1>
</div>

</div>
</body>
</html>