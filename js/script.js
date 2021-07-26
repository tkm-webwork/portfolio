/*==========================================
# page-top
===========================================*/
jQuery(window).on("scroll", function () {
  if (100 < jQuery(this).scrollTop()) {
    jQuery('.page-top').addClass('is-show');
  } else {
    jQuery('.page-top').removeClass('is-show');
  }
});

jQuery('a[href^="#"]').click(function () {
  let header = jQuery(".header").innerHeight();
  let speed = 500;
  let id = jQuery(this).attr("href");
  let target = jQuery("#" == id ? "html" : id);
  let position = jQuery(target).offset().top - header;
  jQuery("html, body").animate({
      scrollTop: position
    },
    speed
  );
  return false;
});

/*==========================================
# header
===========================================*/
jQuery('a[href^="#"]').click(function () {
  let header = jQuery(".header").innerHeight();
  let speed = 500;
  let id = jQuery(this).attr("href");
  let target = jQuery("#" == id ? "html" : id);
  let position = jQuery(target).offset().top - header;
  jQuery("html, body").animate({
      scrollTop: position
    },
    speed
  );
  return false;
});

/*==========================================
# drawer
===========================================*/
jQuery('.drawer-icon').on('click',function(e){
  e.preventDefault();
  jQuery('.drawer-icon').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-bg').toggleClass('is-active');
  return false;
});

/*==========================================
# modal
===========================================*/
jQuery('.js-modal-open').each(function () {
  jQuery(this).on('click', function () {
    let target = jQuery(this).data('target');
    let modal = document.getElementById(target);
    jQuery(modal).fadeIn(300);
    return false;
  });
});

jQuery('.js-modal-close').on('click', function () {
  jQuery('.js-modal').fadeOut(300);
  return false;
});

/*==========================================
# works
===========================================*/
jQuery('.filter [data-filter]').on('click', function () {
  let filters = jQuery('.filter [data-filter]');
  let boxes = jQuery('.boxes [data-category]');
  let $this = jQuery(this);

  filters.removeClass('active');
  $this.addClass('active');

  let filterColor = $this.attr('data-filter');

  if (filterColor == 'all') {
    boxes.removeClass('is-animated')
      .fadeOut().promise().done(function () {
        boxes.addClass('is-animated').fadeIn();
      });
  } else {
    boxes.removeClass('is-animated')
      .fadeOut().promise().done(function () {
        boxes.filter('[data-category = "' + filterColor + '"]')
          .addClass('is-animated').fadeIn();
      });
  }
  return false;
});

/*==========================================
# wow
===========================================*/
new WOW().init();