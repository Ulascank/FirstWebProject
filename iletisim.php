<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacIletisim"])){
  $_SESSION["sayacIletisim"]+=1;
}
else{
  $_SESSION["sayacIletisim"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacIletisim"]." kere ziyaret ettin.";
?>
<html>

  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="style/css/genel.css">
      <link rel="stylesheet" href="style/css/iletisim.css">
      <script type="text/javascript" src="style/js/jquery-3.2.1.min.js"></script>
        <style media="screen">

        .header
       {
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
        <h1> Benimle İletişime mi Geçmek İstiyorsun ?</h1>
        <hr style="height:6px;background: rgba(124, 75, 170, 0.89);">
        <div class="sekilliYazi">
          <h1>görüyorum ki </h1>
          <h2>mail göndermek istiyorsun..</h2>
        <div class="iconlar">
        <a href="https://www.facebook.com/ulascank1"><img src="style/resimler/facebook.png" style="width:10%;height:10%;" alt=""></a>
          <a href="https://www.linkedin.com/in/selahattin-ula%C5%9Fcan-k%C4%B1l%C4%B1%C3%A7-898605141/"><img src="style/resimler/linkedin.png"  style="width:10%;height:10%;" alt=""></a>
        </div>
        </div>

        </div>

        <div class="iletisimFormDiv">
          <form class="iletisimFormu" action="index.html" method="post">
            <input type="text" name="isim" value="" placeholder="İsminiz" required><br>
              <input type="text" name="mail" value="" placeholder="Mailiniz"><br>
                <textarea name="mesaj" rows="8" cols="80" placeholder="Mesajınız.." required></textarea><br>
                <button type="button" name="button">Gönder</button>
          </form>
        </div>

  </body>
</html>
