$(document).ready(function(){
  $('.cA').click(function () {
      $('.cKategori').slideUp('slow');
         $('.sKategori').slideUp('slow');
       if ($('.cKategori').is(":hidden")) {
           $('.cKategori').slideDown();
       } else {
           $('.cKategori').slideUp('slow');
       }
   });
   $('.pA').click(function () {
       $('.cKategori').slideUp('slow');
          $('.sKategori').slideUp('slow');
        if ($('.pKategori').is(":hidden")) {
            $('.pKategori').slideDown();
        } else {
            $('.pKategori').slideUp('slow');
        }
    });
    $('.sA').click(function () {
      $('.cKategori').slideUp('slow');
         $('.pKategori').slideUp('slow');
         if ($('.sKategori').is(":hidden")) {
             $('.sKategori').slideDown();
         } else {
             $('.sKategori').slideUp('slow');
         }
     });

});
