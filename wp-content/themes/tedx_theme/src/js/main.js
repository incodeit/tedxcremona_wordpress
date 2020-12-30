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
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false
    
  });

}
