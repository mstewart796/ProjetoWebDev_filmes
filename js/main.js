(function(){
    var $body = document.querySelector('body');
    $body.classList.remove('no-js')
    $body.classList.add('js')
    
        
    var menu = new Menu({
        container: '.header__nav',
        toggleBtn: '.header__btnMenu',
        widthEnabled: 1024 
    })
    
    var carouselImgs = new Carousel({
        container: '.laptop-slider .slideshow',
        itens: 'figure',
        autoplay: {
            delay: 50,
            disableOnInteraction: false,
          },
        btnPrev: '.prev',
        btnNext: '.next'
    })
    
    var carouselQuotes = new Carousel({
        container: '.quote-slideshow',
        itens: 'figure',
        btnPrev: '.prev',
        btnNext: '.next'
    })

    var swiper = new Swiper(".home", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
       
      });
    
})()

