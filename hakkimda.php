<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacHakkimda"])){
  $_SESSION["sayacHakkimda"]+=1;
}
else{
  $_SESSION["sayacHakkimda"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacHakkimda"]." kere ziyaret ettin.";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
  <link rel="stylesheet" href="style/css/hakkimda.css">
    <script type="text/javascript" src="style/js/jquery-3.2.1.min.js"></script>
 <script src="style/js/hakkimda.js"></script>
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
<div class="hakkimda">
  <div class="hakkimdaBaslik">
    <h1> Kimdir bu Ulaşcan ? </h1>
  </div>
    uyarı! az sonra büyük oranda ego kasılacaktır. Yetti bu mütevazilik.
  <div class="hakkimdaIcerik">
    <p>Selam! benim adım Ulaşcan. 1998 yılının Ekim ayında İstanbul'da dünyaya geldim. Kitap okumak hobi olarak sayılıyor ise, bunun dışında pek bir hobim olduğu söylenemez. Tam anlamıyla J.R.R Tolkien hastasıyım.
    İstanbul Bilgi Üniversitesi 2. sınıf öğrencisiyim ve aynı zamanda Insider'da QA Engineer pozisyonunda part time olarak çalışıyorum.</p>

  </div>
  <div class="buyukIsim">
    <h2>Selahattin <span>Ulascan</span> Kilic</h2>
  </div>
  <div class="hakkimdaDetay">
    <h3>biraz daha detay?</h3>
    <p>Hani üniversitede <span>(ego strike)</span> başarılı, ortamı güzel olan, iyilik meleği olan çocuk var ya, heh işte o benim. Vize ve final dönemlerinde genellikle 10-12 kişilik gruplara ders anlatmayı şu geçtiğimiz iki sene içerisinde alışkanlık haline getirdim, genellikle kalıyorlar ama olsun.  iş teklifleri <a href="https://www.linkedin.com/in/selahattin-ula%C5%9Fcan-k%C4%B1l%C4%B1%C3%A7-898605141/" style:"border-bottom:1px solid #333;">için</a><span> (end of the ego strike)</span>. Gereğinden fazla çirkinleştim sanırım. </p>
  </div>
  <div class="hakkimdaDetayDevam">
 <span>Şaka bir yana</span> cana yakın, samimi ve çok pozitif bir yapıya sahibim. Anlık 10.000 kişinin online olduğu serverim çöksün, yine ağlamam yani o derece. Fakat bu vurdumduymazlık olarak anlaşılmamalıdır çünkü oturup ağlamanın o serveri geri getirmeyeceğinin gayet farkındayımdır. İşin ilk gününde saat akşam 10'a kadar çalışan ve işin ikinci gününde şirkette sabahlayan, yaklaşık bir haftadır günlük iki-üç saatlik uyku ile idare edip web teknolojilerini araştıran ben, sıkıntılı derecede sorumluluk hastasıyımdır. Yakın çevremde genellikle gerçekleşmeyen projelerim ile tanınırım. Bir şeyler üretmeyi, kendi kendime projeler yapmayı çok seviyorum. Şuan güncel olarak görüntü ve ses işleme üzerine bir proje ile uğraşıyorum. Şu geçtiğimiz yıl içerisinde en az 30-40 adet projeyi çöpe atmışımdır herhalde. <span class="kucuk">başka konuya atlanıyor</span> Çevresinde bol bol "yahu benim bilgisayar çok ağır bir bakar mısın?" sorularına maruz kalan ben, çok ilginç bir abi olduğumu düşünüyorum. Akşam 10 yaşındaki kız kardeşi ile "bir çobanın köpeği varmış adı da çomaaaaarrrmııış" şeklinde şarkı söyleyen ben, ertesi sabah proje takımıma sayıp sövebilmekteyim. <span class="kucuk">başka konuya atlanıyor </span> Çok rekabetçi bir yapıya sahibim. Nerede yazılım ile ilgili bir yarışma vs. görsem atlıyorum. Geçtiğimiz yaz Yrd.Doç.Dr Mahmut Bağcı hocamızın teşvik etmesi sonucu Tubitak - Üniversiteler arası Yazılım Projeleri yarışmasına toplam iki kişi olarak bir arkadaşım ile katıldık. İlkokul ve Ortaokul derecesindeki öğrencilere çok kolay ve eğlenceli bir şekilde veritabanı-algoritma kavramını aşılayabileceğimiz projemiz red yedi.(Kabeyi tavaf eden robot yapmalıydık) Yılmadım, bünyesinde bulunan bir şirkette staj yapmış oluğum KWORKS'e bir arkadaşım ile startup kurma hayali ile başvuru yaptık. Fakat yine kabul edilmedik.(bkz: Jack ma). Yine ve yine yılmadım bu sefer diplomaya hiç yapmadığım kadar asıldım ve bölüm birincisi olduğum programda, ikinci ile aramı bayağı bir açtım ve fakülte birinciliğine doğru kasmaya başladım. Ardından Insider şirketinden gelen teklif ile part time olarak çalışmaya başladım. Güncel : Masamda 3 adet kahve fincanı ve PHP,JQuery,Css kitapları var. Saat sabah 5:23.
 <div>

   <h4 style="text-align:center">Dünyanın en iyi playlisti</h4>
   <iframe src="https://open.spotify.com/embed/user/ulascank1/playlist/4PAIoDZHTAMUw5S7EXQvAP" width="680" height="300" frameborder="0" allowtransparency="true" style="position:relative;"></iframe>

 </div>
  </div>
  <div class="buyukIsimDevam">
    <h2 class="yuzuk">Cüceler ve Elfler <span>Adam</span> mıdır? </h2>
    <hr style="position:relative;bottom:90px;height:5px;background-color:#e0000e;">
    <h4 class="Efsaneler">AC/DC <br> MICHAEL JACKSON <br> IRON MAIDEN <br> CEM KARACA <br> SCORPIONS</h4>
  </div>

</div>

  </body>
</html>
