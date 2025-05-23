$.ajaxSetup({ 
    cache: false,
    headers: { 
        'X-CSRF-TOKEN': window.csrfToken
    }
});

function getFlashMessage() {
	$('.alert').remove();

	//uso il controller dei contatti
	$.get(window.baseUrl + '/contacts/getFlashMessage', function (data) {

		if (data.length) {
			$('body').append(data);
			$('.alert').addClass('visible');
		}
	});
}

const body = document.querySelector('body');

window.addEventListener('DOMContentLoaded', () => {
	body.classList.remove('no-transition');
})

const currentLocation = window.location.pathname;
const menus = $('.menu');

$(menus).each(function (i, menu) {
	const links = $('.menu__link', menu);

	$.each(links, function (i, link) { 
		const href = $(link).attr('href');
		
		if(href === currentLocation){
			$(link).parent('li').addClass('current-page');
			$(link).attr('aria-current', 'page');
		};
	});
	
});

$(function () {
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	});

	// conteggio click su numero di telefono
	$('a[href^="tel:"]').click(function () {
		var href = $(this).attr('href')
		//gtag('event', 'generate_lead', {'event_category' : 'Telefono', 'event_label' : href}); // da abilitare per tracciamento Google Analytics
		return true;
	})

	// conteggio click su email
	$('a[href^="mailto:"]').click(function () {
		var href = $(this).attr('href')
		//gtag('event', 'generate_lead', {'event_category' : 'Email', 'event_label' : href}); // da abilitare per tracciamento Google Analytics
		return true;
	})

	//apertura alert
	$('.alert').addClass('visible');

	//chiusura alert
	$('body').on('click', '[data-close-alert]', function (ev) {
		ev.stopPropagation();
		$(this).parent().removeClass('visible');
	});

	// Menu utente mobile
	$('[data-usermenu-toggler]').on('click', function (ev) {
		if (window.matchMedia("(max-width: 1270px)").matches) {
			$('[data-usermenu]').toggleClass('visible');
			return false;
		}
	});
    
	// Menu di navigazione mobile
	$('[data-menu-toggler]').on('click', (e) => {
		$([e.currentTarget, '[data-main-menu]']).toggleClass('open');
		$(body).toggleClass('scroll-locked');
	})

	$('[data-languages]').each(function(i,el){
		let $languages = $(el),
			$toggler = $('[data-languages-toggler]', el),
						isOpen = false;

				$toggler.on('click', function(){
						$languages.toggleClass('open');
						isOpen = !isOpen;
				});

				$(document).on('click', function(event) { 
						var $target = $(event.target);
						if(!$target.closest('[data-languages]').length && isOpen) {
								$languages.removeClass('open');
								isOpen = false;
						}        
				});
	});

	// Incrementa e decrementa custom
	$('body').on('click', '.number .number__plus,.number .number__minus', function (ev) {
		ev.stopPropagation();
		const decreaseQuantity = $(this).hasClass('number__minus');
		var input = $(this).closest('div').find('input');
		input[0][decreaseQuantity ? 'stepDown' : 'stepUp']()
		input.trigger('input');
	})

	//accordion
	$("[data-accordion]").each(function (i, el) {
		let toggler = $("[data-accordion-toggler]", el),
			content = $("[data-accordion-content]", el),
			open = false,
			outerHeight = 0,
			elements = {},

		startHeight = content.outerHeight();

		toggler.on("click", function (ev) {
			ev.preventDefault();
			$(el).toggleClass("open");

			if (!open) {
				elements = content.find(">");
				elements.each(function () { outerHeight += $(this).outerHeight(true) });

				content.animate(
					{ height: outerHeight + 30 },
					300
				);
			} else {
				content.animate({ height: startHeight }, 300);
			}
			outerHeight = 0;
			open = !open;
		});
	});

    //swiper
    $('[data-slider]').each(function(i, wrapper){
        let swiper = new Swiper($('.swiper', wrapper).get(0), {
            // Optional parameters
            slidesPerView: 1,
          
            // Navigation arrows
            navigation: {
                nextEl: $('[data-slider-arrow-next]', wrapper).get(0),
                prevEl: $('[data-slider-arrow-prev]', wrapper).get(0),
            },

            pagination: {
                el: $('[data-slider-pagination]', wrapper).get(0),
                type: 'fraction'
            },
            
        });
          
    });

    $('[data-page-slider]').each(function(i, wrapper){
        let swiper = new Swiper($('.swiper', wrapper).get(0), {
            // Optional parameters
            slidesPerView: 1,
        
          
            // Navigation arrows
            navigation: {
                nextEl: $('[data-slider-arrow-next]', wrapper).get(0),
                prevEl: $('[data-slider-arrow-prev]', wrapper).get(0),
            },

            breakpoints: {
                1000: {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                },
                1201: {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                },
                1551: {
                    slidesPerView: 'auto',
                    spaceBetween: 40,
                }
            }
            
        });
          
    });

    //chiusura popup
    $('[data-popup-close]').on('click', function (ev) {
		$('[data-popup]').addClass('hidden');
        return false;
	});


    //popup newsletter

    $('a[href="#newsletterPopup"]').on('click', function(ev){
        ev.preventDefault();
        ev.stopPropagation();

        $('[data-newsletter-popup]').removeClass('hidden');
    });

    $('[data-newsletter-popup-close]').on('click', function (ev) {
		$('[data-newsletter-popup]').addClass('hidden');
        return false;
	});


});

//menu hamburger
$(function () {
    $menu = $('[data-mobile-menu]'),
    $menuToggler = $('[data-menu-toggler]'),
    level = 0,
    isOpen = false,
    $parents = $('.menu__link--parent', $menu),
    $backLinks = $('.menu__back', $menu);


    $parents.on('click', function(ev){
        ev.preventDefault();
        level++;
        $menu.attr('data-level', level);
        $(this).parent().addClass('open');
    });

    $backLinks.on('click', function(ev){
        ev.preventDefault();
        level--;
        $menu.attr('data-level', level);
        $(this).closest('.menu__item').removeClass('open');
    });

    $menuToggler.on('click', function(){
        if (isOpen) {
            level = 0;
            $menu.removeClass('open').attr('data-level', level);
            $('.menu__item', $menu).removeClass('open');
            isOpen = false;
        } else {
            $menu.addClass('open');
            isOpen = true;
        }
    });
});

const lenis = new Lenis();


const loader = document.querySelector(".loader");

if (loader) {
  lenis.stop();
}

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// SWIPER METHODS

const swiperMethods = new Swiper('.swiper--methods', {
	slidesPerView: 1,
	spaceBetween: 67,

	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},	

	breakpoints: {
		2600: {
			slidesPerView: 2.8,
		},

		2200: {
			slidesPerView: 2.4,
		},

		1400: {
			slidesPerView: 2.1,
		},

		1000: {
			slidesPerView: 1.9,
		},

		800: {
			slidesPerView: 1.7,
		},

		551: {
			slidesPerView: 1.4,
		},
	}
});

// MORE NEWS

const buttonNews = document.querySelector('.more-news'); 

if(buttonNews) {
	buttonNews.addEventListener('click', function () {
		if (!buttonNews.classList.contains('active')) {
			buttonNews.classList.add('active');
			buttonNews.innerHTML = 'Mostra meno articoli';
		} else {
			buttonNews.classList.remove('active');
			buttonNews.innerHTML = 'Carica altri articoli';
		}
	});
}	

// BLOCCO SCHERMATA E ANIMAZIONI LOADER

document.addEventListener("DOMContentLoaded", () => {
  const svg = document.querySelector("#Sanacasa_Logo");
  const letters = svg.querySelectorAll("path");
  const letters2 = svg.querySelectorAll(".letter");

  const iconPath = document.querySelector("#Icona");
  const boundIcon = iconPath.getBoundingClientRect();
  const scaleIcon = 1.5;
  const halfScreen = window.innerWidth / 2;
  const iconWidth = boundIcon.width * scaleIcon;
  const iconWidthOriginal = boundIcon.width;
  const variationScale = (iconWidth - iconWidthOriginal) / 2;
  const iconLeftOriginal = boundIcon.left;
  const iconLeft = iconLeftOriginal - variationScale;
  const xFinal = halfScreen - iconLeft - (iconWidth / 2);

	console.log("Metà schermo: " + halfScreen);
	console.log("metà box con scale: " + (iconWidth / 2));
	console.log("Distanza da sinistra: " + iconLeft);
	console.log("Risultato: " + xFinal);

  let tl = gsap.timeline()
  .to(letters, {
    duration: 1,
    opacity: 1,
    stagger: 0.05,  
    ease: "power2.out"  
  })
  .to(letters2, {
    duration: 1,
    opacity: 0,
    stagger: 0.05,
    ease: "power2.out"  
  }, ">=0.5")
  .to(iconPath, {
    duration: 1,
    ease: "power2.out",
	scale: scaleIcon,
	x: 184.80001831054688,
    transformOrigin: "50% 50%",
  })
  .to(".loader", {
    duration: 1,
    ease: "power2.out",
    opacity: 0,
    onComplete: () => {
      document.querySelector(".loader").style.visibility = "hidden";
      lenis.start();
    }
  }, ">=1")
});

