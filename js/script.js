
//Меню актив
let link = document.querySelectorAll('.menu__link');
let url = document.location.href;
for(let i = 0; i < link.length; i++){
    if(url == link[i].href){
        link[i].className += ' menu_active';
    }
}

//Бургер меню

let item = document.querySelectorAll('.menu__item');
let bur_link = document.location.href;
for(let i = 0; i < item.length; i++){
    if(bur_link == item[i].href){
        item[i].className += ' burger_item';
    }
}


// Слайдер 
let j = 1;
  setInterval(function(){
    currentSlide(j)
    
    let count = document.getElementsByClassName("item");
    if(j == count.length+1)
        {
            j = 1;
        }
        j++;
},3600)

/* Индекс слайда по умолчанию */
var slideIndex = 1;
showSlides(slideIndex);


/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
  function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item");
    let dots = document.getElementsByClassName("slider-dots_item");
    url = document.documentURI;
    if(url == 'testing'){
  
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
}




// Табс


class ItcTabs {
    constructor(target, config) {
      const defaultConfig = {};
      this._config = Object.assign(defaultConfig, config);
      this._elTabs = typeof target === 'string' ? document.querySelector(target) : target;
      this._elButtons = this._elTabs.querySelectorAll('.tabs__btn');
      this._elPanes = this._elTabs.querySelectorAll('.tabs__pane');
      this._eventShow = new Event('tab.itc.change');
      this._init();
      this._events();
    }
    _init() {
      this._elTabs.setAttribute('role', 'tablist');
      this._elButtons.forEach((el, index) => {
        el.dataset.index = index;
        el.setAttribute('role', 'tab');
        this._elPanes[index].setAttribute('role', 'tabpanel');
      });
    }
    show(elLinkTarget) {
      const elPaneTarget = this._elPanes[elLinkTarget.dataset.index];
      const elLinkActive = this._elTabs.querySelector('.tabs__btn_active');
      const elPaneShow = this._elTabs.querySelector('.tabs__pane_show');
      if (elLinkTarget === elLinkActive) {
        return;
      }
      elLinkActive ? elLinkActive.classList.remove('tabs__btn_active') : null;
      elPaneShow ? elPaneShow.classList.remove('tabs__pane_show') : null;
      elLinkTarget.classList.add('tabs__btn_active');
      elPaneTarget.classList.add('tabs__pane_show');
      this._elTabs.dispatchEvent(this._eventShow);
      elLinkTarget.focus();
    }
    showByIndex(index) {
      const elLinkTarget = this._elButtons[index];
      elLinkTarget ? this.show(elLinkTarget) : null;
    };
    _events() {
      this._elTabs.addEventListener('click', (e) => {
        const target = e.target.closest('.tabs__btn');
        if (target) {
          e.preventDefault();
          this.show(target);
        }
      });
    }
  }

  // инициализация .tabs как табов
  if(document.documentElement.querySelector('.tabs')){
    new ItcTabs('.tabs');
  }
    


  // скрол вверх кнопка

  (function(){
    function trackScroll() {
      let scrolled = window.pageYOffset;
      let coords = document.documentElement.clientHeight;
  
      if (scrolled > coords) {
        goTopBtn.classList.add('wiget_bootom_show');
      }
      if (scrolled < coords) {
        goTopBtn.classList.remove('wiget_bootom_show');
      }
    }

    function wigetToTop() {
      if (window.pageYOffset > 0) {
        window.scrollBy(0, -80);
        setTimeout(wigetToTop, 0);
      }
    }

    let goTopBtn = document.querySelector('.wiget_bootom_top');
    window.addEventListener('scroll', trackScroll);
    goTopBtn.addEventListener('click', wigetToTop);
  }) ();





