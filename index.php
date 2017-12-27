<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacIndex"])){
  $_SESSION["sayacIndex"]+=1;
}
else{
  $_SESSION["sayacIndex"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacIndex"]." kere ziyaret ettin.";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
  <link rel="stylesheet" href="style/css/index.css">
<script type="text/javascript" src="style/js/jquery-3.2.1.min.js"></script>
 <script src="style/js/index.js"></script>
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


      <div class="headerOzetIcerik">
        <h2>Selahattin Ulaşcan Kılıç</h2><br>
        <h5><b>ÖĞRENCİ - DEVELOPER - TESTER</b></h5><br>
        <hr style="position:relative;bottom:70px;"width="199%">
        <h4>
      <b>Ulaşcan kimdir ?</b>
    </h4>
    <p>Öğrenmeye ve öğretmeye aç, araştırma meraklısı bir insan. İstanbul Bilgi Üniversitesi Bilgisayar Programcılığı Bölümü 2. sınıf
    öğrencisi olmakla birlikte aynı zamanda INSIDER'da QA Engineer pozisyonunda çalışmaktadır.</p>
    <p>İnsanlar ile iyi geçinen, back-end tarafına aşık, front-end tarafından tiksinen Ulaşcan, bu proje ile front-end ile barışmıştır.</p>

      </div>

      <div class="siteHaritasi">
    <h5> ANA SAYFA - İLETİŞİM - BLOG - ÖZGEÇMİŞ
    </h5><br><span style="position:relative;left:330px;">ve dahası...</span>
      </div>
<div class="GenelKategori">
  <a href="blog.php">
    <div class="kategoriler" id="kategoriBlog">
      BLOG
  <div class="gizliDiv" id="gizliBlog">  <! Hover eventi esnasında gösterilecek olan divler >
    <div class="gizliYazi">
  Burada yazılım hakkında yazdığım, ilgimi çeken konuları bulabilirsiniz.
    </div>
  </div>
    </div>
  </a>
  <a href="hakkimda.php">
    <div class="kategoriler" id="kategoriHakkimda">
  HAKKIMDA
  <div class="gizliDiv" id="gizliHakkimda">
    <div class="gizliYazi">
    Kendimi anlattığım, brnim hakkımda bir çok bilgi bulabileceğiniz sayfa.
    </div>
  </div>
    </div>
  </a>
<a href="ozgecmis.php">
  <div class="kategoriler" id="kategoriOzgecmis">
ÖZGEÇMİŞ
<div class="gizliDiv" id="gizliOzgecmis">
  <div class="gizliYazi">
  Burada özgeçmişimi, iş hayatım hakkında bilgileri bulabilirsiniz.
  </div>
</div>
  </div>
</a>
  <a href="pcbilgisi.php">
    <div class="kategoriler" id="kategoriPcBilgisi">
  PC BİLGİSİ
  <div class="gizliDiv" id="gizliPcBilgisi">
    <div class="gizliYazi">
    Burada gerek yazılım dilleri, gerek programlar hakkında sahip olduğum bilgileri bulabilirsiniz.
    </div>
  </div>
    </div>
  </a>
  <a href="iletisim.php">
    <div class="kategoriler" id="kategoriIletisim">
  İLETİŞİM
  <div class="gizliDiv" id="gizliIletisim">
    <div class="gizliYazi">
    Buradan bana ulaşabilir, görüşlerinizi herkesle paylaşabilirsiniz!
    </div>
  </div>
    </div>
  </a>
  <a href="ziyaretci.php">
    <div class="kategoriler" id="kategoriZiyaret">
  Ziyaretci Defteri
  <div class="gizliDiv" id="gizliZiyaret">
    <div class="gizliYazi">
    Buradan bana yorum bırakabilir, başkalarının yorumlarını okuyabilirsiniz.
    </div>
  </div>
    </div>
  </a>


</div>
  </body>
</html>
