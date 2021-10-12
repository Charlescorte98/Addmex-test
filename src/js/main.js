/* ============ SHOW MENU HIDDEN ============ */
const navMenu = document.getElementById('nav-menu'),
        navToggle = document.getElementById('nav-toggle'),
        navClose = document.getElementById('nav-close');

/* ============ MENU SHOW ============ */
    if(navToggle){
        navToggle.addEventListener('click', () =>{
            navMenu.classList.add('show-menu')
        })
    }

/* ============ MENU HIDDEN ============ */

if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}


/* ============ REMOVE MOBILE MENU ============ */

const navLink = document.querySelectorAll('.nav__link');

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
/* ============ Cuando alguien da click en cualquier parte del menú se esconderá ============ */
    navMenu.classList.remove('show-menu')

}
navLink.forEach( n => n.addEventListener('click', linkAction))



/* ============ ACORDEON HOW ============ */

const howContent = document.getElementsByClassName('how__content'),
      howHeader = document.querySelectorAll('.how__header')

function toggleHow(){
    let itemClass = this.parentNode.className

    for(i = 0; i < howContent.length; i++){
        howContent[i].className = 'how__content how__close'
    }
    if(itemClass === 'how__content how__close'){
        this.parentNode.className = 'how__content how__open'
    }

}

howHeader.forEach((el) => {
        el.addEventListener('click', toggleHow)
})



/* ================================== SERVICES MODAL ===================================== */ 

const modalViews = document.querySelectorAll('.services__modal'),
        modalBtns = document.querySelectorAll('.services__button'),
        modalCloses = document.querySelectorAll('.services__modal-close')

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active-modal')
}

modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener('click', () =>{
        modal(i)
    })
})

modalCloses.forEach((modalClose) =>{
    modalClose.addEventListener('click', () =>{
        modalViews.forEach((modalView) =>{
            modalView.classList.remove('active-modal')
        })
    })
})


/* ================================== SWIPER EXPERIENCE ===================================== */

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:8000,
        autoplayHoverPause:true,
        margin:10,
        nav:true,
        merge:true,
        responsive:{
            0:{
                items:1
            },
            1500:{
                items:3
            },
            2500:{
                items:4
            }
        }
    })
  
  });


  /* ============================= SCROLL SECTIONS ACTIVE ================================ */

  const sections = document.querySelectorAll('section[id]')

  function scrollActive(){
      const scrollY = window.pageYOffset

      sections.forEach(current =>{
          const sectionHeight = current.offsetHeight
          const sectionTop = current.offsetTop - 50;
          sectionId = current.getAttribute('id')

          if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
              document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
          }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
          }
      })
  }

  window.addEventListener('scroll', scrollActive)


/* =================================== CHANGE BACKGROUND HEADER ============================= */

function scrollHeader(){
    const nav = document.getElementById('header')

    if(this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}

window.addEventListener('scroll', scrollHeader)


/* =================================== SHOW SCROLLUP ============================= */

function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');

    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


/* =================================== DARK LIGHT THEME ============================= */

const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'fa-sun'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => document.body.classList.contains(iconTheme) ? 'fa-moon' : 'fa-sun'

if (selectedTheme){
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    document.body.classList[selectedIcon === 'fa-moon' ? 'fa-sun' : 'remove'](iconTheme)
}


themeButton.addEventListener('click', () => {
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)

    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})