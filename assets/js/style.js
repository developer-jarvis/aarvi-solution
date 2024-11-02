document.querySelectorAll('.dropdown-toggle').forEach(item => {
  item.addEventListener('click', event => {
 
    if(event.target.classList.contains('dropdown-toggle') ){
      event.target.classList.toggle('toggle-change');
    }
    else if(event.target.parentElement.classList.contains('dropdown-toggle')){
      event.target.parentElement.classList.toggle('toggle-change');
    }
  })
});

//Slick Slider Js for our service
$('.service_slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true, // Add this line
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.techno_slider').slick({
  dots: false,
  prevArrow: '', // Hide the left navigation icon
  nextArrow: '', // Hide the right navigation icon
  infinite: true,
  speed: 4000,
  autoplaySpeed: 1,
  slidesToShow: 8,
  slidesToScroll: 2,
  autoplay: true, // Add this line
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3, // Display 3 slides per line
              slidesToScroll: 1,
              autoplay: false // Stop autoplay in mobile version
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

//===========software service page slider=============
$('.soft_techno_slider').slick({
  dots: false,
  prevArrow: '', // Hide the left navigation icon
  nextArrow: '', // Hide the right navigation icon
  infinite: true,
  speed: 3000,
  autoplaySpeed: 1,
  slidesToShow: 9,
  slidesToScroll: 2,
  autoplay: true, // Add this line
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3, // Display 3 slides per line
              slidesToScroll: 1,
              autoplay: true // Stop autoplay in mobile version
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


//==============Testimonials===============
$('.testi_slider').slick({
dots: false,
prevArrow: '', // Hide the left navigation icon
nextArrow: '', // Hide the right navigation icon
infinite: true,
speed: 300,
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true, // Add this line
responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});


//Slick Slider Js for  service page
$('.pricing_box').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true, // Add this line
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

//==============Service page FAQ js==========
const faqs = document.querySelectorAll('.faq');

faqs.forEach((faq) => {
  faq.addEventListener('click', () => {
    if (!faq.classList.contains('active')) {
      const activeFaq = document.querySelector('.faq.active');
      if (activeFaq) {
        activeFaq.classList.remove('active');
        activeFaq.querySelector('.answer').style.display = 'none';
      }

      faq.classList.add('active');
      faq.querySelector('.answer').style.display = 'block';
    }
  });
});