<!DOCTYPE html>

<?php session_start();
if(isset($_SESSION["sayacOzgecmis"])){
  $_SESSION["sayacOzgecmis"]+=1;
}
else{
  $_SESSION["sayacOzgecmis"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacOzgecmis"]." kere ziyaret ettin.";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
  <link rel="stylesheet" href="style/css/ozgecmis.css">
  <script type="text/javascript" src="style/js/jquery-3.2.1.min.js"></script>
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

      </div>

    <div class="headerKucukYazi">
  İstanbul Bilgi Üniversitesi'nde <b>Öğrenciyim</b> - Aynı zamanda INSIDER şirketinde <b>QA Engineerim</b>
    </div>


    <div class="headerNavigasyon">
        <div class="icerik">
          <ul>
          <a id="indexID" href="index.php"> <li>Anasayfa</li></a>
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
      <div class="ozgecmis">
        <div class="ozgecmisAnaBaslik">
            <h2>Özgecmisim</h2>
            <p>Selahattin Ulaşcan Kılıç 23.10.1998 tarihinde Bahçelievler Devlet Hastanesinde dünyaya gelmiştir. İlkokul eğitimini Cihangir İlköğretim okulunda, lise eğitimini ise Kumburgaz Mehmet Erçağ Çok Programlı Anadolu Lisesi / Veritabanı Programcılığı bölümünde tamamlamıştır. Üniversite eğitimine 2016 yılında başladığı İstanbul Bilgi Üniversitesi / Bilgisayar Programcılığı bölümünde 3.83 GPA ile devam etmektedir.</p>
        </div>
        <div class="ozgecmisBaslik">
            <h1>Eğitim</h1>
          </div>

          <hr style="height:3px;background-color:#333;">
          <div class="egitimIcerik">
           <h2>İLKOKUL EĞİTİMİ</h2>
           <h3>Cihangir İlköğretim Okulu</h3>
           <h2>LİSE EĞİTİMİ</h2>
           <h3>Kumburgaz Mehmet Erçağ ÇPAL - Veritabanı Programcılığı</h3>
           <h2>ÜNİVERSİTE EĞİTİMİ</h2>
           <h3>İstanbul Bilgi Üniversitesi - Bilgisayar Programcılığı</h3>
          </div>
          <div class="ozgecmisBaslik">
              <h1>İŞ TECRÜBESİ</h1>
            </div>
                <hr style="height:3px;background-color:#333;">
                <div class="isIcerik">
                  <h3>Dorak Holding - Stajyer - 2015 Ekim - 2016 Haziran </h3>
                  <h3>nerdeicek.com (KWORKS) - Yazılım Geliştiricisi - 2017 Haziran - 2017 Ekim </h3>
                  <h3>Insider - Yazılım Test Mühendisi - 2017 Ekim - Devam Ediyor </h3>
                </div>
                <div class="ozgecmisBaslik">
                    <h1>Projeler - Yarışmalar</h1>
                </div>
                <div class="projeler">
                  <h3></h3>
                </div>
                  <hr style="height:3px;background-color:#333;">
                  <div class="projelerIcerik">
                    <h3>İstanbul Bilgi Üniversitesi Final Projesi - kuafors.net <br>
                      <h5>Veritabanı tasarımının yapılması - Back-end kodlamalarının yapılması - 12 Grup / 60 kişi arasından seçilen en iyi proje</h5>
                    </h3>
                    <h3>Tubitak Üniversiteler arası Yazılım Geliştirme Yarışması
                      <h5>İlkokul ve ortaokul düzeyine yönelik algoritma-veritabanı öğretme oyunu / uygulaması - Final öncesi aşamada elendi</h5>
                    </h3>
                  </div>
                  <div class="ozgecmisBaslik">
                      <h1>İletişim</h1>
                  </div>
                    <hr style="height:3px;background-color:#333;">
                    <div class="iletisim">
                      <img src="style/resimler/facebook.png" alt="" style="width:5%;height:7%;">
                      <img src="style/resimler/linkedin.png" alt="" style="width:5%;height:7%;">
                      <a href="ulascanCV.pdf" download>CV INDIRMEK ICIN TIKLAYIN</a>
                    </div>

        </div>



  </body>
</html>
