$(document).ready(function() {
  $(".first-carousel").owlCarousel({
    loop: true,
    padding: 6,
    nav: true,
    responsive: {
      0: {
        items: 1,
      }, 
      768: {
        items: 2, 
      },
      991: {
        items: 3,
      
      },
    }
  })
})

$(document).ready(function() {
  $(".second-carousel").owlCarousel({
    loop: true,
    margin: 22,
    nav: true,
    responsive: {
      0: {
        items: 1,
        center: false, 
        loop: true,
      }, 
      768: {
        items: 2,
        center: false, 
        loop:true,
      },
      991: {
        items: 3,     
        center: true,                        
      },
    }
  })
})

$(document).ready(function() {
  $(".gallery-carousel").owlCarousel({
    loop: true,
    margin: 1,
    items: 1,
    nav: true,
    
  })
})