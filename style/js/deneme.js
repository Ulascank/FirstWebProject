$(document).ready(function(){
    $("#kategoriBlog").hover(function(){
        $("#gizliBlog").slideDown("slow");
    }, function(){
        $("#gizliBlog").slideUp("slow");
    });
    $("#kategoriHakkimda").hover(function(){
        $("#gizliHakkimda").slideDown("slow");
    }, function(){
        $("#gizliHakkimda").slideUp("slow");
    });
    $("#kategoriOzgecmis").hover(function(){
        $("#gizliOzgecmis").slideDown("slow");
    }, function(){
        $("#gizliOzgecmis").slideUp("slow");
    });
    $("#kategoriPcBilgisi").hover(function(){
        $("#gizliPcBilgisi").slideDown("slow");
    }, function(){
        $("#gizliPcBilgisi").slideUp("slow");
    });
    $("#kategoriIletisim").hover(function(){
        $("#gizliIletisim").slideDown("slow");
    }, function(){
        $("#gizliIletisim").slideUp("slow");
    });
    $("#kategoriZiyaret").hover(function(){
        $("#gizliZiyaret").slideDown("slow");
    }, function(){
        $("#gizliZiyaret").slideUp("slow");
    });
});
