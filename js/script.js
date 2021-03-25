$(function() {

  $('.down1').hover(
    function(){
      $('.submenu1').slideDown(230);
    },
    function(){
      $('.submenu1').hide();
  });

  $('.down2').hover(
    function(){
      $('.submenu2').slideDown(230);
    },
    function(){
      $('.submenu2').hide();
  });

  $('.down3').hover(
    function(){
      $('.submenu3').slideDown(230);
    },
    function(){
      $('.submenu3').hide();
  });

  $('.down4').hover(
    function(){
      $('.submenu4').slideDown(230);
    },
    function(){
      $('.submenu4').hide();
  });

  $('.down5').hover(
    function(){
      $('.submenu5').slideDown(230);
    },
    function(){
      $('.submenu5').hide();
  });



    // ハンバーガーメニュー部分
  $('.ham-btn').click(function(){
    $(this).toggleClass('active');
    $('.h-nav').slideToggle(230);
  });  

  $(window).on('resize', function () {
    if (window.matchMedia('(min-width:1200px)').matches) {
      $(".h-nav").slideUp(200);
      $('.ham-btn').removeClass('active');
    }
  });

  $('.h-menu__down1').hover(
    function(){
      $('.h-submenu__1').slideDown(230);
    },
    function(){
      $('.h-submenu__1').hide();
  });

  $('.h-menu__down2').hover(
    function(){
      $('.h-submenu__2').slideDown(230);
    },
    function(){
      $('.h-submenu__2').hide();
  });

  $('.h-menu__down3').hover(
    function(){
      $('.h-submenu__3').slideDown(230);
    },
    function(){
      $('.h-submenu__3').hide();
  });

  $('.h-menu__down4').hover(
    function(){
      $('.h-submenu__4').slideDown(230);
    },
    function(){
      $('.h-submenu__4').hide();
  });

  $('.h-menu__down5').hover(
    function(){
      $('.h-submenu__5').slideDown(230);
    },
    function(){
      $('.h-submenu__5').hide();
  });


  $('.h-menu').hover(
    function(){
      $(this).removeClass('close');
    },
    function(){
      $(this).addClass('close');
  });


    
  });