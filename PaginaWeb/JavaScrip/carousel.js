window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'), {
        slidesToScroll: 1,
        slidesToShow: 3,
        draggable: false,
        dots: '.carousel__indicadores',
        arrows: {
          prev: '.carousel__anterior',
          next: '.carousel__siguiente'
        },
        responsive: [
            {
              // si la pantalla es mas grande que  >= 500px
              breakpoint: 500,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },{
              // si la pantalla es mas grande de >= 800px
              breakpoint: 800,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 2,
                
              }
            }
          ]
    })

});
window.addEventListener('load', function(){
  new Glider(document.querySelector('.carousel__lista1'), {
      slidesToScroll: 1,
      slidesToShow: 3,
      draggable: false,
      dots: '.carousel__indicadores1',
      arrows: {
        prev: '.carousel__anterior1',
        next: '.carousel__siguiente1'
      },
      responsive: [
          {
            // si la pantalla es mas grande que  >= 500px
            breakpoint: 500,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
          },{
            // si la pantalla es mas grande de >= 800px
            breakpoint: 800,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 2,
              
            }
          }
        ]
  })

});
window.addEventListener('load', function(){
  new Glider(document.querySelector('.carousel__lista2'), {
      slidesToScroll: 1,
      slidesToShow: 3,
      draggable: false,
      dots: '.carousel__indicadores2',
      arrows: {
        prev: '.carousel__anterior2',
        next: '.carousel__siguiente2'
      },
      responsive: [
          {
            // si la pantalla es mas grande que  >= 500px
            breakpoint: 500,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
          },{
            // si la pantalla es mas grande de >= 800px
            breakpoint: 800,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 2,
              
            }
          }
        ]
  })

});