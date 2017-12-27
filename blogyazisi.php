<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacBlogYazisi"])){
  $_SESSION["sayacBlogYazisi"]+=1;
}
else{
  $_SESSION["sayacBlogYazisi"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacBlogYazisi"]." kere ziyaret ettin.";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
      <link rel="stylesheet" href="style/css/blogyazisi.css">
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
        <h1> Örnek Konu Başlığı </h1>
        <hr style="height:6px;background: rgba(124, 75, 170, 0.89);">
      </div>
      <div class="icerikYazi" ><!Pratik olması açısından burayı normal blogum olan http://ulascank.blogspot.com.tr adresinden aldım  >
        <b><br /></b>
        <b>Bridge yapısı nasıl oluşturulur ?&nbsp;</b><br />
        <div>
        Eveet. Geldik Bridge tasarım desenine. Bu abimizin tanım kısmı şu şekilde : Aynı iş için soyut ve somut işleri farklı class yapılarında kurma blablablbablabla.</div>
        <div>
        <br /></div>
        <div>
        Genel yapısından bahsedeyim : Her zaman olduğu gibi global olarak tabir ettiğimiz bir abstract classımız olacak, ürünlerimiz bu global classı miras alacak ve içerisinde somutlama işlemi<br> yapacağımız, property yöntemini kullanacağımız bir classımız ve bu classı da tam anlamıyla somut hale getiren bir classımız daha olacak. Genel yapı bu şekilde.
        <br> Kafalar çorba sanırım? Güzel bir örnek ile devam edelim.</div>
        <div>
        <br /></div>
        <div>
        1) İlk olarak ürünlerimizin miras alacağı global bir class oluşturalım.</div>
        <div>
        <br /></div>
        <div>
        <b><span style="color: #0b5394;">public abstract class&nbsp; </span><span style="color: #6aa84f;">Oyun </span><span style="color: #38761d;">// Global classimiz</span></b></div>
        <div>
        <b>{</b></div>
        <div>
        <b><span style="color: #0b5394;">&nbsp; &nbsp; public abstract string </span>Turu();</b></div>
        <div>
        <b>}</b></div>
        <div>
        <b><br /></b></div>
        <div>
        2) Global classımızı oluşturduğumuza göre sıra ürünlerimize geldi</div>
        <div>
        <br /></div>
        <div>
        <b><span style="color: #0b5394;">public class </span><span style="color: #6aa84f;">KasetOyun</span><span style="color: #0b5394;"> : </span><span style="color: #6aa84f;"><span style="color: #6aa84f;">Oyun</span></span></b></div>
        <div>
        <b>{</b></div>
        <div>
        <b>&nbsp; &nbsp; <span style="color: #0b5394;">public override string</span> Turu() <span style="color: #38761d;">// Miras aldığımız classımızın Fonksiyonunu override edip çağırdık.</span></b></div>
        <div>
        <b><span style="color: #0b5394;">&nbsp; &nbsp;</span> {</b></div>
        <div>
        <b>&nbsp; &nbsp; &nbsp;<span style="color: #0b5394;">return</span> <span style="color: #b45f06;">"Eski Kaset Oyun"</span>;</b></div>
        <div>
        <b>&nbsp; &nbsp; }</b></div>
        <div>
        <b>}</b></div>
        <div>
        <div>
        <b><span style="color: #0b5394;">public class </span><span style="color: #6aa84f;">CdOyun</span><span style="color: #0b5394;">: </span><span style="color: #6aa84f;"><span style="color: #6aa84f;">Oyun</span></span></b></div>
        <div>
        <b>{</b></div>
        <div>
        <b>&nbsp; &nbsp;&nbsp;<span style="color: #0b5394;">public override string</span>&nbsp;Turu()</b></div>
        <div>
        <b><span style="color: #0b5394;">&nbsp; &nbsp;</span>&nbsp;{</b></div>
        <div>
        <b>&nbsp; &nbsp; &nbsp;<span style="color: #0b5394;">return</span>&nbsp;<span style="color: #b45f06;">"Yeni CD Oyun"</span>;</b></div>
        <div>
        <b>&nbsp; &nbsp; }</b></div>
        <div>
        <b>}</b><br />
        <b><br /></b>
        3) Şimdi ise SoyutOyun classımızı somut hale getireceğimiz classı oluşturalım.<br />
        <br />
        <div>
        <b><span style="color: #0b5394;">public class </span><span style="color: #6aa84f;">OyunSoyutlama</span></b></div>
        <div>
        <b>{</b></div>
        <div>
        <b>&nbsp; &nbsp; <span style="color: #0b5394;">protected</span> <span style="color: #6aa84f;">Oyun</span> oyn;</b><br />
        <b>&nbsp; &nbsp; <span style="color: #0b5394;">public</span> <span style="color: #6aa84f;">Oyun</span> OYUN</b><br />
        <b>&nbsp; &nbsp; {</b><br />
        <b>&nbsp; &nbsp; &nbsp; <span style="color: #0b5394;">set</span> { oyn<span style="color: #0b5394;">=value;</span>&nbsp;} <span style="color: #38761d;">//Kapsülleme yapıyoruz.</span></b><br />
        <b>&nbsp; &nbsp; }</b><br />
        <b>&nbsp; &nbsp;<span style="color: #351c75;"> </span><span style="color: #0b5394;">public virtual string</span> getOyun()</b><br />
        <b>&nbsp; &nbsp; {</b><br />
        <b>&nbsp; &nbsp; &nbsp; oyn.Turu();</b><br />
        <b>&nbsp; &nbsp; }</b></div>
        <div>
        <b>}</b><br />
        <b><br /></b>
        <b><span style="color: #0b5394;">public class </span><span style="color: #6aa84f;">YenidenOyunSoyutlama:OyunSoyutlama</span></b><br />
        <b>{</b><br />
        <b>&nbsp;</b><b>&nbsp;<span style="color: #351c75;">&nbsp;</span><span style="color: #0b5394;">public override string</span>&nbsp;getOyun()</b><br />
        <b>&nbsp; &nbsp; {</b><br />
        <b>&nbsp; &nbsp; &nbsp; oyn.Turu();</b><br />
        <b>&nbsp; &nbsp; }</b><br />
        <b>}</b><br />
        <b><br /></b>
        4) Şimdi main bloğumuza geçiyoruz<br />
        <br />
        <b><span style="color: #0b5394;">&nbsp;static void </span>Main(<span style="color: #0b5394;">string[] </span>args)</b><br />
        <b>&nbsp; &nbsp; &nbsp; &nbsp; {</b><br />
        <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #6aa84f;">OyunSoyutlama</span> os = <span style="color: #0b5394;">new</span> <span style="color: #6aa84f;">YenidenOyunSoyutlama();</span></b><br />
        <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; os.OYUN = <span style="color: #0b5394;">new</span> <span style="color: #6aa84f;">KasetOyun();</span></b><br />
        <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #0b5394;">Console</span>.WriteLine(os.getOyun());</b><br />
        <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #0b5394;">Console</span>.ReadKey();</b><br />
        <b>&nbsp; &nbsp; &nbsp; &nbsp; }</b><br />
        <b><br /></b></div>
        </div>
        </div>
        <div>
        <b><br /></b></div>
        <div>
        <b><br /></b></div>
        <div>
        <br /></div>
        <div>
        <span style="color: #0b5394;"><b><br /></b></span></div>
        <div>
        <br /></div>
      </div>
  </body>
</html>
