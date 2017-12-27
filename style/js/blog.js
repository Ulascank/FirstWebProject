$(document).ready(function(){

  $('.cA').click(function () {
      $('.sKategori').slideUp(1000);
         $('.pKategori').slideUp(1000);
            $('.cKategori').slideToggle(1000);
});
   $('.pA').click(function () {
       $('.cKategori').slideUp(1000);
          $('.sKategori').slideUp(1000);
            $('.pKategori').slideToggle(1000);
    });
    $('.sA').click(function () {
      $('.cKategori').slideUp(1000);
         $('.pKategori').slideUp(1000);
            $('.sKategori').slideToggle(1000);
     });

});
