<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacZiyaretci"])){
  $_SESSION["sayacZiyaretci"]+=1;
}
else{
  $_SESSION["sayacZiyaretci"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacZiyaretci"]." kere ziyaret ettin.";
?>
<?php
error_reporting(0);
if(isset($_POST["gonder"])){

  date_default_timezone_set('Europe/Istanbul');
  $dosyaadi = "./ziyaretciDefteri.txt";
 $dosya =fopen($dosyaadi,"a");
 $cinsiyet=$_POST["cinsiyet"];
 $resimYolu;
 switch ($cinsiyet) {
   case '1':
    $resimYolu ="style/resimler/girl.png";
     break;
   case '2':
    $resimYolu ="style/resimler/man.png";
     break;
   case '0':
     $resimYolu ="style/resimler/users.png";
     break;
     default :
     $resimYolu ="style/resimler/users.png";
     break;
 }
 if($dosya==false){
   echo "dosya a ile acilamadi!";
   exit();
 }
 else {
 fwrite($dosya,$_POST["isim"].",".$_POST["mesaj"].",".$resimYolu.",".$_POST["email"].",".date('d.m.Y H:i:s').",\n");
 fclose($dosya);
 }
   setcookie("ZiyaretciIsim",$_POST["isim"],time()+3600, "/", "",  0);
     setcookie("ZiyaretciMail",$_POST["email"],time()+3600, "/", "",  0);
}
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/css/genel.css">
      <link rel="stylesheet" href="style/css/ziyaretci.css">
    <title></title>
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
      <div class="ziyaretFormuDiv">
        <form class="ziyaretFormu" action="" method="post">
    <textarea name="mesaj"  placeholder="Yorumunuz" required></textarea>
      <input type="text" name="isim" value="" placeholder="İsminiz" required>
      <input type="text" name="email" value="" placeholder="Mail adresiniz" required><br>
      <input type="text" name="telefon" value="" placeholder="Telefon Numaranız" required>
      <select class="ziyaretFormuCinsiyet" name="cinsiyet">
        <option value="0">Cinsiyetiniz</option>
          <option value="1">Kadın</option>
            <option value="2">Erkek</option>
      </select>
        <input type="submit" name="gonder" value="Gönder!">
        </form>

      </div>
      <?php
      try{
        $dosyaYorum=fopen("ziyaretciDefteri.txt","r");
        $dosyaBoyut=filesize("ziyaretciDefteri.txt");

          while(  $oku=fgetcsv($dosyaYorum,$dosyaBoyut,',')  )
          {
            echo "
                <div class='yorumDiv'>
                  <div class='yorumBaslik'><img src='{$oku[2]}'/>
                    <div class='kullaniciBilgi'>
                      <div class='bilgiYazi'>
                      {$oku[0]} -
                        {$oku[3]}
                        <p class='tarih'>{$oku[4]}</p>
                      </div>

                    </div>
                  </div>
                  <div class='kullaniciYorum'>
                    <p >{$oku[1]}</p>
                  </div>
                </div>
                ";
          }
          fclose($dosyaYorum);


        }
        catch(Exception $e) {
        echo 'Hata: ' .$e->getMessage();
        }

      ?>


  </body>
</html>
