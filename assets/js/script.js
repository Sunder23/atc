jQuery(document).ready(function ($) {

  gsap.registerPlugin(ScrollTrigger, ScrollSmoother)

  ScrollSmoother.create({
    smooth: 1.7,
    effects: true
  })

  // Header
  gsap.fromTo('.site_header', { opacity: 0, y: -50 }, {
    opacity: 1, y: 0, duration: 1.5,
  })
  // Header END

  //Hero Section 
  gsap.fromTo('.header_hero__title', { opacity: 0, y: 50 }, {
    opacity: 1, y: 0, duration: 1.5,
  })
  gsap.fromTo('.header_hero__since', { opacity: 0, y: 60 }, {
    opacity: 1, y: 0, duration: 1.5,
  })
  gsap.fromTo('.header_hero__scroll', { opacity: 0, y: 70 }, {
    opacity: 1, y: 0, duration: 1.5, delay: 1.5,
  })
  gsap.fromTo('.header_hero__bottom', { opacity: 0, y: 100 }, {
    opacity: 1, y: 0, duration: 1.5,
  })
  //Hero Section END
  // transform: perspective(290px) scaleZ(1) rotateX(10deg);

  // let itemsSmallTitle = gsap.utils.toArray('.small_title')

  // itemsSmallTitle.forEach(item => {
  //   gsap.fromTo(item, { opacity: 0, x: -50 }, {
  //     opacity: 1, x: 0,
  //     scrollTrigger: {
  //       trigger: item,
  //       start: '-450',
  //       end: '-100',
  //       scrub: true
  //     }
  //   })
  // })
  // let itemsSectionTitle = gsap.utils.toArray('.section_title')

  // itemsSectionTitle.forEach(item => {
  //   gsap.fromTo(item, { opacity: 0, x: 50 }, {
  //     opacity: 1, x: 0,
  //     scrollTrigger: {
  //       trigger: item,
  //       start: '-450',
  //       end: '-100',
  //       scrub: true
  //     }
  //   })
  // })


  // let itemsL = gsap.utils.toArray('.left_item__anim')

  // itemsL.forEach(item => {
  //   gsap.fromTo(item, { opacity: 0, x: -50 }, {
  //     opacity: 1, x: 0,
  //     scrollTrigger: {
  //       trigger: item,
  //       start: '-450',
  //       end: '-100',
  //       scrub: true
  //     }
  //   })
  // })

  // let itemsR = gsap.utils.toArray('.right_item__anim')

  // itemsR.forEach(item => {
  //   gsap.fromTo(item, { opacity: 0, x: 50 }, {
  //     opacity: 1, x: 0,
  //     scrollTrigger: {
  //       trigger: item,
  //       start: '-450',
  //       end: '-100',
  //       scrub: true
  //     }
  //   })
  // })

  // let benefitsItems = gsap.utils.toArray('.benefits_item')

  // benefitsItems.forEach(item => {
  //   gsap.fromTo(item, { opacity: 0, x: 20 }, {
  //     opacity: 1, x: 0,
  //     scrollTrigger: {
  //       trigger: item,
  //       start: '-450',
  //       end: '-100',
  //       scrub: true
  //     }
  //   })
  // })

  // gsap.fromTo('.services_bottom', { opacity: 0, y: -50 }, {
  //   opacity: 1, y: 0,
  //   scrollTrigger: {
  //     trigger: '.services_bottom',
  //     start: '-450',
  //     end: '-100',
  //     scrub: true
  //   }
  // })
  // let fleetTitle = document.querySelector('.fleet__title.section_title')
  // gsap.fromTo(fleetTitle, { opacity: 0, y: 0, x: 0 }, {
  //   opacity: 1, y: 0, x: 0,
  //   scrollTrigger: {
  //     trigger: fleetTitle,
  //     start: '-450',
  //     end: '-100',
  //     scrub: true
  //   }
  // })
  // let fleetWrapper = document.querySelector('.fleet__wrapper')
  // gsap.fromTo(fleetWrapper, { opacity: 0, y: 50, x: 0 }, {
  //   opacity: 1, y: 0, x: 0,
  //   scrollTrigger: {
  //     trigger: fleetWrapper,
  //     start: '-450',
  //     end: '-100',
  //     scrub: true
  //   }
  // })



  // gsap.fromTo('.footer_left', { opacity: 0, x: -50 }, {
  //   opacity: 1, x: 0,
  //   scrollTrigger: {
  //     trigger: '.footer_left',
  //     start: '-450',
  //     end: '-100',
  //     scrub: true
  //   }
  // })


  // gsap.fromTo('.footer_right', { opacity: 0, x: 50 }, {
  //   opacity: 1, x: 0,
  //   scrollTrigger: {
  //     trigger: '.footer_right',
  //     start: '-1000',
  //     end: '-700',
  //     scrub: true
  //   }
  // })
  // gsap.fromTo('.footer_items', { opacity: 0, y: 50, x: 0 }, {
  //   opacity: 1, y: 0, x: 0,
  //   scrollTrigger: {
  //     trigger: '.footer_items',
  //     start: '-1000',
  //     end: '-700',
  //     scrub: true
  //   }
  // })
  // gsap.fromTo('.about_top__content', { opacity: 0, y: 50, x: 0 }, {
  //   opacity: 1, y: 0, x: 0,
  //   scrollTrigger: {
  //     trigger: '.about_top__content',
  //     start: '-1000',
  //     end: '-700',
  //     scrub: true
  //   }
  // })

  $('.fleet_list').infiniteslide({
    'speed': 40,
  });



  let aboutElem = document.querySelector('.about__swiper');
  //Swiper Directions
  const aboutSwiper = new Swiper(aboutElem, {
    // If we need pagination
    slidesPerView: 2,
    spaceBetween: 0,
    pagination: {
      el: '.about_swiper__pagination',
    },
    effect: 'creative',
    creativeEffect: {
      prev: {
        translate: [0, -20, -100],
        scale: [1.1],
        opacity: [0],
      },
      next: {
        translate: ['100%', 0, 0],
        scale: [0.9],
        opacity: [1],
      },
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 'auto',
        spaceBetween: 0,
        effect: 'creative',
        creativeEffect: {
          prev: {
            translate: [0, -10, -50],
            scale: [1],
            opacity: [0],
          },
          next: {
            translate: ['100%', 0, 0],
            scale: [0.9],
            opacity: [1],
          },
        },
      },
      // when window width is >= 765px
      765: {
        slidesPerView: 'auto',
        spaceBetween: 0,
      },
      // when window width is >= 980px
      980: {
        slidesPerView: 2,
        spaceBetween: 0,

      }
    },
    navigation: {
      nextEl: '.about__swiper__next',
      prevEl: '.about__swiper__prev',
    },
    on: {
      reachEnd: function () {
        this.snapGrid = [...this.slidesGrid];
      },
    },

  });

  let cards = document.querySelectorAll('.about_bottom__left .about__title');
  aboutSwiper.on('slideChange', function () {
    let activeIndex = aboutSwiper.realIndex
    cards.forEach((item, index) => {
      if (index === activeIndex) {
        item.classList.add('active');
      } else {
        item.classList.remove('active')
      }
    });
  })


  // aboutSwiper.on('slideChange', function(){
  //   // on the first slide
  //   // most right postion

  // })

  let servicesElem = document.querySelector('.services_slider');
  //Swiper Directions
  const servicesSwiper = new Swiper(servicesElem, {
    // If we need pagination
    navigation: {
      nextEl: '.services__swiper__next',
      prevEl: '.services__swiper__prev',
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 'auto',
        spaceBetween: 10,
      },
      // when window width is >= 765px
      765: {
        slidesPerView: 'auto',
        spaceBetween: 10,
      },
      // when window width is >= 980px
      980: {
        slidesPerView: 4,
        spaceBetween: 20,
      }
    },

  });

  //Swiper Directions END
  // Video
  let galleryVideo =  $('.services_pop__video__wrapper video')
  galleryVideo.prop("volume", 0.05);
  // Video end
  let galleryItems = $('.services_pop__card')
  if ($(window).width() >= '980') {
    galleryItems.on('click', function () {

      if ($(this).hasClass('active') ) {
        galleryVideo.trigger('pause')
        $(this).removeClass('active')
      } else {
        galleryItems.removeClass('active')
        galleryVideo.trigger('pause')
        $(this).children('.services_pop__video__wrapper').children('video').trigger('play')
        $(this).toggleClass('active')
      }
    })
  }
  $('.services_pop__next').on('click', function (e) {
    galleryItems.removeClass('active')
    galleryItems.removeClass('small')
    galleryVideo.trigger('pause')
  })
  $('.services_pop__prev').on('click', function () {
    galleryItems.removeClass('active')
    galleryItems.removeClass('small')
    galleryVideo.trigger('pause')

  })
  if ($(window).width() <= '980') {
    galleryItems.on('click', function () {
      if ($(this).hasClass('active')) {
        $(this).removeClass('active')
        galleryItems.removeClass('small')
        galleryVideo.trigger('pause')

      } else {
        galleryItems.removeClass('active')
        galleryItems.addClass('small')
        galleryVideo.trigger('pause')
        $(this).children('.services_pop__video__wrapper').children('video').trigger('play')
        $(this).toggleClass('active')
      }
    })
  }

})
// Mobile Accordion END