<!DOCTYPE html>
<?php session_start(); //Session başlangıcı
if(isset($_SESSION["sayacBlog"])){ // Kullanıcının session bilgisi kontrolü
  $_SESSION["sayacBlog"]+=1;
}
else{
  $_SESSION["sayacBlog"]=1;
}
$mesaj="Bu sayfayi ".$_SESSION["sayacBlog"]." kere ziyaret ettin.";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/css/genel.css">
      <link rel="stylesheet" href="style/css/blog.css">
      <script type="text/javascript" src="style/js/jquery-3.2.1.min.js"></script>
       <script src="style/js/blog.js"></script>
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
    <div class="headerNavigasyon"> <! nav bar >
        <div class="icerik">
          <ul>
          <a href="index.php"> <li >Anasayfa</li></a>
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
        <h1> Selam! Aşağıda yazılım hakkında yazdığım yazıları bulabilirsin! </h1>
        <h4>Boş zamanlarımda yazılım konuları hakkında yazılar yazıyorum.<br> Genellikle "şu yapı ne işe yarar?" veya "şu yapı nasıl oluşturulur?" şeklinde içerik hazırlıyorum.</h4>

      </div>
      <div class="genelKategoriler">
        <div class="kategoriOps">
          <ul>
          <a href="javascript:void(0)" class="cA"> <li>C#</li></a>
          <a href="javascript:void(0)" class="pA"> <li>PHP</li></a>
          <a href="javascript:void(0)" class="sA"> <li>SQL</li></a>
          </ul>
        </div>

      </div>
      <div class="GizliKategori"> <! Normalde gizli olan, ilgili kategoriye tıklandığı zaman gösterilecek olan divler. >
    <div id="kategoriCSharp">
      <?php
      try{
        $dosyaYorum=fopen("Makaleler/cMakale.txt","r");
        $dosyaBoyut=filesize("Makaleler/cMakale.txt");

          while(  $oku=fgetcsv($dosyaYorum,$dosyaBoyut,',')  )
          {
            echo "
            <a href='blogyazisi.php'>
            <div class='makale cKategori'>
                <img src='style/resimler/image.jpg' alt='' >
              <div class='makaleBaslik'>
                <span id='baslik'>{$oku[0]}</span>
              </div>
              <div class='makaleOzet'>
                {$oku[1]}
              </div>
          </div>
          </a>
                ";
          }
          fclose($dosyaYorum);
        }
        catch(Exception $e) {
        echo 'Hata: ' .$e->getMessage();
        }

      ?>

  </div>
       <div  id="kategoriSQL">
         <?php
         try{
           $dosyaYorum=fopen("Makaleler/sMakale.txt","r");
           $dosyaBoyut=filesize("Makaleler/sMakale.txt");

             while(  $oku=fgetcsv($dosyaYorum,$dosyaBoyut,',')  )
             {
               echo "
               <a href='blogyazisi.php'>
               <div class='makale sKategori'>
                   <img src='style/resimler/image.jpg' alt='' >
                 <div class='makaleBaslik'>
                   <span id='baslik'>{$oku[0]}</span>
                 </div>
                 <div class='makaleOzet'>
                   {$oku[1]}
                 </div>
             </div>
             </a>
                   ";
             }
             fclose($dosyaYorum);
           }
           catch(Exception $e) {
           echo 'Hata: ' .$e->getMessage();
           }

         ?>
       </div>

       <div class="kategoriler" id="kategoriPHP">
         <?php
         try{
           $dosyaYorum=fopen("Makaleler/pMakale.txt","r");
           $dosyaBoyut=filesize("Makaleler/pMakale.txt");

             while(  $oku=fgetcsv($dosyaYorum,$dosyaBoyut,',')  )
             {
               echo "
               <a href='blogyazisi.php'>
               <div class='makale pKategori'>
                   <img src='style/resimler/image.jpg' alt='' >
                 <div class='makaleBaslik'>
                   <span id='baslik'>{$oku[0]}</span>
                 </div>
                 <div class='makaleOzet'>
                   {$oku[1]}
                 </div>
             </div>
             </a>
                   ";
             }
             fclose($dosyaYorum);
           }
           catch(Exception $e) {
           echo 'Hata: ' .$e->getMessage();
           }

         ?>

    </div>

</div>



  </body>
</html>
