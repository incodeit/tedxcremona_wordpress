import $ from 'jquery'
// import { renderMap } from './components/renderMap'
import * as project from './functions'
import './polyfill'
import * as slick from 'slick-carousel'

window.onload = () => {
  project.lazyLoad()
  project.smoothScroll()
  project.menuOverlay()
  project.setupModalVideo()
  project.setupSlideshow()

  const bodyClasses = $('body').attr("class").split(/\s+/)
  
  $.each(bodyClasses, function(key, value) {
    switch(value) {
      case "home":
        break;
      default:
        $('#loader').fadeOut(500)
    }
  })

  $('.event-carousel').slick({
    infinite: true,
    dots: false,
    speed: 300,
    mobileFirst:true,
    slidesToShow: 1,
    slidesToScroll: 3,
    arrows: false,
    
    responsive: [{breakpoint: 1400,
      settings: {
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
      {breakpoint: 1024,
      settings: {
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
  });

}
