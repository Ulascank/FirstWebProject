<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacPanel"])){
  $_SESSION["sayacPanel"]+=1;
}
else{
  $_SESSION["sayacPanel"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacPanel"]." kere ziyaret ettin.";
?>
<?php
if(isset($_POST["gonder"])){

  date_default_timezone_set('Europe/Istanbul');
  $dosyaadi = "./Makaleler.txt";

$resimYolu="style/resimler/icerik1.png";
$kategori=$_POST["kategori"];
switch ($kategori) {
  case '1':
    $dosyaadi="Makaleler/cMakale.txt";
    break;
case '2':
    $dosyaadi="Makaleler/pMakale.txt";
  break;
  case '3':
      $dosyaadi="Makaleler/sMakale.txt";
    break;
}
$dosya =fopen($dosyaadi,"a");
 if($dosya==false){
   echo "dosya a ile acilamadi!";
   exit();
 }
 else {
 fwrite($dosya,$_POST["makaleIsim"].",".$_POST["makaleOzet"].",".$resimYolu.",\n");
 fclose($dosya);
 }
}

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
      <link rel="stylesheet" href="style/css/panel.css">
      <style media="screen">
      .header {

          background-image: url("image.jpg");
      }
      </style>
  </head>
  <body>
    <section class="header" id="home">
      <div class="headerYazi">
        <h1>Selamlar, ben <b>Ulaşcan<b> Kılıç</h1>


      </div>
      <div class="cookie" style="float:right;position:absolute;color:#fff;bottom:45px;">
        Selam <?php
        if(isset($_COOKIE["ZiyaretciIsim"]))
        {
            echo $_COOKIE["ZiyaretciIsim"];
        }
        else{ echo "ziyaretçi!"; }
        ?>
       <br>
       <?php
       if(isset($_COOKIE["ZiyaretciMail"]))
       {
           echo $_COOKIE["ZiyaretciMail"];
       }
       else{}
       ?>
       <br>
        <?php echo "$mesaj" ?><br>
    <script type="text/javascript">saatkacTT_iDate=1;saatkacTT_country="TR";saatkacTT_region="";saatkacTT_fontColor="#fff";saatkacTT_fontType="Tahoma";</script><script type="text/javascript" src="http://www.saatkac.com/dateTimeText.js"></script>

      </div>
    <div class="headerKucukYazi">
    İstanbul Bilgi Üniversitesi'nde <b>Öğrenciyim</b> - Aynı zamanda INSIDER şirketinde <b>QA Engineerim</b>
    </div>


    <div class="headerNavigasyon">
        <div class="icerik">
          <ul>
          <a href="index.php"> <li>Anasayfa</li></a>
        <a href="hakkimda.php"> <li>Hakkimda</li></a>
            <a href="ozgecmis.php"><li>Özgeçmiş</li> </a>
              <a href="hobiler.php"> <li>Hobilerim</li> </a>
          <a href="blog.php"><li>Blog</li></a>
          <a href="pcbilgisi.php"><li>Bilgisayar Bilgisi</li></a>
          <a href="ziyaretci.php"><li>Ziyaretci Defteri</li></a>
          <a href="iletisim.php"><li>İletisim</li></a>
            <a href="panel.php"><li>Panel</li></a>
          </ul>
        </div>
      </div>
      </section>
      <div class="baslik">
          <h1>Makale Ekleme Paneli</h1>
            <hr style="height:6px;background: rgba(124, 75, 170, 0.89);">
            <h3 style="margin:0;">Bu sayfa üzerinden Blog sayfasına makale ekleyebilirsiniz.</h3>
              <h6 style="text-align:center;">Pratik olması açısından login sistemi koymadım. İstek doğrultusunda eklenebilir.</h6>
      </div>
      <div class="eklemeFormu">

        <form class="eklemeForm" action="" method="post">
          <input type="text" name="makaleIsim" value="" placeholder="Makalenin Başlığı" required><br>
            <input type="text" name="makaleOzet" value="" placeholder="Özet"><br>
            <select name="kategori">
              <option value="1">C#</option>
                <option value="2">PHP</option>
                  <option value="3">SQL</option>
            </select>
              <textarea name="makaleIcerik" rows="8" cols="80" placeholder="İçerik" required></textarea><br>
              <input type="submit" name="gonder" value="Gönder!"></input>
        </form>

      </div>
  </body>
</html>
