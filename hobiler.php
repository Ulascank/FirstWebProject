<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacHobiler"])){
  $_SESSION["sayacHobiler"]+=1;
}
else{
  $_SESSION["sayacHobiler"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacHobiler"]." kere ziyaret ettin.";

?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
      <link rel="stylesheet" href="style/css/hobiler.css">
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


        <div class="bolumler">
          <div class="sagBolum">
            <div class="sagBaslik">
            <h2>Yazılım Hobilerim</h2>
            </div>
            <div class="sagYazilim">
            <p>Back-end tarafını çok seviyorum ve front-end tarafını pek sevmiyorum. Bu yüzden çok yüksek oranda back-end içerikli bir yazı olacaktır.</p>
            <p>Programlama hayatıma ilk olarak C# ile başladım ve çeşit çeşit proje geliştirdim. Genellikler server-side işler yapmak hoşuma gidiyor ve veritabanı tarafını da çok seviyorum.</p>
            <p>Fikir, içerik üretmeyi çok seviyorum. Sürekli bir proje yapma peşindeyim. Şuan görüntü ve ses işleme kullanarak akıllı bir asistan yazmaya çalışıyorum.</p>
            <p>Bir dönem photoshop üzerinde illisturasyon yapmaya sarmıştım fakat belirli bir süre sonra sıkılıp bıraktım.</p>
            <p>Boş zaman buldukça tanım yerine örnek ağırlıklı konular yazdığım bloğumda paylaşım yapıyorum (ulascank.blogspot.com). Şuan yoğunluğumdan dolayı düzenli olarak bir konu paylaşamıyorum fakat bu projeyi de bahane ederek bloğumu belirli bir ölçüde bu siteye entegre edeceğim.</p>

            </div>
          </div>
          <div class="solBolum">
        <div class="solBaslikKitaplar">
          <h2>Sevdiğim yazarlar ve favori kitaplarım</h2>
          <div class="yazar1">
            <span>J.R.R TOLKIEN :</span><br>
           HOBBIT - YÜZÜKLERİN EFENDİSİ 1-2-3 - SILMARILLION - BİTMEMİŞ ÖYKÜLER - GÜÇ YÜZÜKLERİNE DAİR <br> BEREN AND LUTHIEN - KAYIP ÖYKÜLER
          </div>
          <div class="yazar2">
            <span>MAKSIM GORKI :</span><br> ANA - ÇOCUKLUĞUM
          </div>
          <div class="yazar3">
          <span>ANDRZEJ SAPKOWSKI :</span><br> THE WITCHER SERISI ( SON DILEK-ELFLERIN KANI-KADER KILICI )
          </div>
        </div>
        <div class="solBaslikEtc">
          <h2>HOBILERIM</h2>
          <p>Kış mevsimi geldiği zaman eve kapanırım, dışarıda pek bir aktivite yapmam. Fakat yaz mevsimi geldiği zaman her sabah avcılar sahile inip düşük tempolu koşu yaparım. Paten, bisiklet sürmek hobilerim arasında.<br> Ama benim için en en güzel hobi yağmurlu bir kış gününde battaniyenin altında TOLKIEN okumaktır. Hakkımda sayfasında belirttiğim gibi pek bir hobim yok aslında.</p>
   <h1>yüzüğü neden <span>kartallar</span> götürmedi??</h1>
        </div>

          </div>
        </div>

  </body>
</html>
