window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'), {
        slidesToScroll: 1,
        slidesToShow: 3,
        draggable: true,
        dots: '.carousel__indicadores',
        arrows: {
          prev: '.carousel__anterior',
          next: '.carousel__siguiente'
        },
        responsive: [
            {
              // si la pantalla es mas grande que  >= 775px
              breakpoint: 500,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },{
              // si la pantalla es mas grande de >= 1024px
              breakpoint: 800,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25
              }
            }
          ]
    })

});