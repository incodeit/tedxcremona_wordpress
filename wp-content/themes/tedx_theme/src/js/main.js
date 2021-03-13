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
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    centerPadding: '100px',
    centerMode: true,
    responsive: [

      {
      breakpoint: 590,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          centerPadding: '90px'
        }
      },
        {breakpoint: 1140,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          centerPadding: '100px'
        }
      }
    ]
    
    // responsive: [{
    //   breakpoint: 480,
    //   settings: {
    //     centerPadding: '80px',
    //     centerMode: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
        
    //   }
    // },
    //   {breakpoint: 1024,
    //     settings: {
    //       centerPadding: '80px',
    //       centerMode: true,
    //       slidesToShow: 2,
    //       slidesToScroll: 2,
    //       infinite: false,
          
    //     }
    //   },
    //   {breakpoint: 1400,
    //   settings: {
    //     centerMode: true,
    //     centerPadding: '80px',        
    //     slidesToShow: 3,
    //     slidesToScroll: 3,
    //     infinite: true,
        
    //   }
    // }
    //]
    
  });

}
