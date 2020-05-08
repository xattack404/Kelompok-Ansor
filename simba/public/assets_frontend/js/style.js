$('.page-scroll').on('click', function(scroll){
    // ambil isi href
    var tujuan = $(this).attr('href');
    //  tangkap elemen ybs
    var elemenTujuan = $(tujuan);
    // pindahkan scroll
    $('html,body').animate({
        scrollTop: elemenTujuan.offset().top - 70
    }, 500, 'swing');

    scroll.preventDefault();
     
});