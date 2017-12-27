<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["sayacPcBilgisi"])){
  $_SESSION["sayacPcBilgisi"]+=1;
}
else{
  $_SESSION["sayacPcBilgisi"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacPcBilgisi"]." kere ziyaret ettin.";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="style/css/genel.css">
        <link rel="stylesheet" href="style/css/pcbilgisi.css">
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
        <div class="baslik">
        <h1> Selam! Aşağıda hangi dilleri, programları bildiğimi bulabilirsin!</h1>
        <hr style="height:6px;background: rgba(124, 75, 170, 0.89);">
        </div>
        <div class="genelDuzey">
          <div class="DilDuzey">
            <div class="duzeyBaslik">
            <h3>Programlama Dilleri</h3>
            </div>
            <div class="duzeyler">
              <div class="diller"  id="php">
  PHP
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="csharp">
  C#
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="java">
  Java
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="asp">
  ASP.NET
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="sql">
  SQL
              </div>
            </div>
          </div>
          <div class="ProgramDuzey">
            <div class="duzeyBaslik">
            <h3>Programlar</h3>
            </div>
            <div class="duzeyler">
              <div class="diller" id="photoshop">
 Photoshop
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="git" >
  Git
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="selenium">
  Selenium
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="mssql">
MSSQL Server
              </div>
            </div>
            <div class="duzeyler">
              <div class="diller" id="mysql">
MySQL Server
              </div>
            </div>
          </div>

        </div>

  <script type="text/javascript" src="style/js/pcbilgisi.js"></script>
  </body>
</html>
