$(document).ready(function() {

  
  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Header fixed on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 50) {
    $('#header').addClass('header-scrolled');
  }

  // Real view height for mobile devices
  if (window.matchMedia("(max-width: 767px)").matches) {
    $('#intro').css({ height: $(window).height() });
  }

  // Initiate the wowjs animation library
  new WOW().init();

  // Initialize Venobox
  $('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });

    $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
        $('#mobile-nav-toggle').addClass('mobile-nav-toggle-scrolled');
      } else {
        $('#mobile-nav-toggle').removeClass('mobile-nav-toggle-scrolled');
      }
    });
  
    if ($(window).scrollTop() > 50) {
      $('#mobile-nav-toggle').addClass('mobile-nav-toggle-scrolled');
    }

  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // menu-active


  // Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center:true,
    responsive: { 0: { items: 1 }, 768: { items: 3 }, 992: { items: 4 }, 1200: {items: 5}
    }
  });

  // Buy tickets select the ticket type on click
  $('#buy-ticket-modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var ticketType = button.data('ticket-type');
    var modal = $(this);
    modal.find('#ticket-type').val(ticketType);
  })

  // custom code

  if(document.getElementById("default-select")){
    $('select').niceSelect();
  };

  if(document.getElementById("default-selects")){
    $('select').niceSelect();
  };   

  if(document.getElementById("default-selects2")){
    $('select').niceSelect();
  };    

  const currentLocation = location.href;
  const nav = $('#nav-menu-container');
  const menuLi = nav.find('li');
  const menuItem = nav.find('a');
  
  menuItem.each(function(index) {
    if (currentLocation.indexOf($(this).attr('href')) !== -1) {
      console.log($(this).attr('href'));
      menuLi.eq(index).addClass('menu-active');
    }
  });

  if (currentLocation.includes('/home')) {
    $('body').css('backgroundColor', '#eee');
  } else if (currentLocation.includes('/our_services')) {
    $('body').css('backgroundColor', '#dd6632');
  } else if (currentLocation.includes('/facilities')) {
    $('body').css('backgroundColor', '#c02222');
    $('#header').css('backgroundColor', '#dd6632');
    $('#header').find('nav').find('ul').find('li').css('backgroundColor', '#eee');
    $('#header').find('nav').find('ul').find('li').find('a').css('color', '#dd6632');
    $('#header nav ul li').hover(
      function() {
        $(this).css('backgroundColor', 'white');
      },
      function() {
        $(this).css('backgroundColor', '#eee');
        if ($(this).hasClass('menu-active')) {
          $(this).css('backgroundColor', 'white');
        }
      }
    );
    $('#header').find('nav').find('ul').find('li.menu-active').css('backgroundColor', 'white');
  } else if (currentLocation.includes('/our_staff')) {
    $('body').css('backgroundColor', '#e3922f');
    console.log('our_staff');
  } else if (currentLocation.includes('/our_partners')) {
    $('body').css('backgroundColor', '#d62c38');
    $('#header').find('nav').find('ul').find('li').css('backgroundColor', '#d62c38');
    $('#header').find('nav').find('ul').find('li.menu-active').css('backgroundColor', '#ff4350');
    $('#header').find('nav').find('ul').find('li.menu-active').find('a').css('color', 'white');
    $('#header').css('backgroundColor', '#606060');
    $('#header nav ul li').hover(
      function() {
        $(this).css('backgroundColor', '#ff4350');
        $(this).find('a').css('color', 'white');
      },
      function() {
        $(this).css('backgroundColor', '#d62c38');
        if ($(this).hasClass('menu-active')) {
          $(this).css('backgroundColor', '#ff4350');
        }
      }
    );
  } else if (currentLocation.includes('/contact')) {
    $('body').css('backgroundColor', '#606060');
  }
});
