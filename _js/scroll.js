export default function() {
  let didScroll = false;
  let $winOff = $(window).scrollTop();
  let $bgEl = $('.par');
  let $nav = $('nav');
  let $preNav = $('.pre-nav');
  let lastScroll = 0;

  let updateScroller = () => {
    $winOff = $(window).scrollTop();
    didScroll = true;
  }


  let scrollHomeHero = () => {
    if($bgEl) {
      $bgEl.css({
        'transform': 'translateY('+ $winOff/30 +'%)'
      })
    }
  }

  let scrollTicker = () => {
    if(didScroll) {
      scrollHomeHero();
      if($winOff > lastScroll && $winOff >= 5 && !$('.request-box').is(':visible') && !$('.mt-trigger').is(":visible")) {
        $nav.css({
          'transform': 'translate(-'+ 50 + '%,-'+ $preNav.outerHeight() +'px)'
        })
        lastScroll = $winOff;
      } else {
        $nav.css({
          'transform': ''
        })
        lastScroll = $winOff
      }

      didScroll = false;
    }
    requestAnimationFrame(scrollTicker);
  }


  requestAnimationFrame(scrollTicker);
  $(window).on('scroll', updateScroller);
}
