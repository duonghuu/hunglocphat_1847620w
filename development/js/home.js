$(document).ready(function() {

  $('input[type="radio"]').click(function(){
    var id_city = $(this).val();
    $.ajax({
      type:'post',
      url:'ajax/place.php',
      data:{act:'id_list',id:id_city},
      success:function(rs){
        $('#id_list').html(rs);
      }
    });
  });
  $('.video-main').slick({
      centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
  });
    $('.quangcao2-main').on({
          beforeChange: function(event, slick, currentSlide, nextSlide) {
              myLazyLoad.update();
          }
      }).slick({
          lazyLoad: 'ondemand',
          infinite: false,
          accessibility: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: js_autoplay,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: true,
          centerMode: false,
          dots: false,
          draggable: true,
          responsive: [{
              breakpoint: 830,
              settings: {
                  slidesToShow: 2
              }
          },{
              breakpoint: 500,
              settings: {
                  slidesToShow: 2
              }
          },{
              breakpoint: 330,
              settings: {
                  slidesToShow: 2
              }
          }]
      });
      });