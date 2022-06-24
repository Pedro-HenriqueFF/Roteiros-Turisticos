/*!
* Start Bootstrap - Creative v7.0.6 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

  // Navbar shrink function
  var navbarShrink = function () {
      const navbarCollapsible = document.body.querySelector('#mainNav');
      if (!navbarCollapsible) {
          return;
      }
      if (window.scrollY === 0) {
          navbarCollapsible.classList.remove('navbar-shrink')
      } else {
          navbarCollapsible.classList.add('navbar-shrink')
      }

  };

  // Shrink the navbar 
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener('scroll', navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector('#mainNav');
  if (mainNav) {
      new bootstrap.ScrollSpy(document.body, {
          target: '#mainNav',
          offset: 74,
      });
  };

  // Collapse responsive navbar when toggler is visible
  const navbarToggler = document.body.querySelector('.navbar-toggler');
  const responsiveNavItems = [].slice.call(
      document.querySelectorAll('#navbarResponsive .nav-link')
  );
  responsiveNavItems.map(function (responsiveNavItem) {
      responsiveNavItem.addEventListener('click', () => {
          if (window.getComputedStyle(navbarToggler).display !== 'none') {
              navbarToggler.click();
          }
      });
  });

  // Activate SimpleLightbox plugin for portfolio items
  new SimpleLightbox({
      elements: '#portfolio a.portfolio-box'
  });

});

// Formulario Sugestao variaveis

var btn_plus_sugest = document.getElementById('btn_plus_sugest');
var btn_minor_sugest = document.getElementById('btn_minor_sugest');
var div_1_sugest = document.getElementById("div_1_sugest");
var div_2_sugest = document.getElementById("div_2_sugest");
var div_3_sugest = document.getElementById("div_3_sugest");

// Formulario Notificacao variaveis

var btn_plus_notif = document.getElementById('btn_plus_notif');
var btn_minor_notif = document.getElementById('btn_minor_notif');
var div_1_notif = document.getElementById("div_1_notif");
var div_2_notif = document.getElementById("div_2_notif");
var div_3_notif = document.getElementById("div_3_notif");

// Formulario Sugestao eventos dos botoes

btn_plus_sugest.addEventListener("click", function(){
    if (div_2_sugest.classList.contains('hide')){
        div_2_sugest.classList.toggle('hide');
        btn_minor_sugest.classList.toggle('hide');
    }
    else{
        div_3_sugest.classList.toggle('hide');
        btn_plus_sugest.classList.toggle('hide');
    }
    
 
});

btn_minor_sugest.addEventListener("click", function(){
    if (!div_3_sugest.classList.contains('hide')){
        div_3_sugest.classList.toggle('hide');
        div_3_sugest.children[0].selectedIndex = 0;
        btn_plus_sugest.classList.toggle('hide');
    }
    else{
        div_2_sugest.classList.toggle('hide');
        div_2_sugest.children[0].selectedIndex = 0;
        btn_minor_sugest.classList.toggle('hide');
    }
});

// Formulario Notificacao eventos dos botoes

btn_plus_notif.addEventListener("click", function(){
    if (div_2_notif.classList.contains('hide')){
        div_2_notif.classList.toggle('hide');
        btn_minor_notif.classList.toggle('hide');
    }
    else{
        div_3_notif.classList.toggle('hide');
        btn_plus_notif.classList.toggle('hide');
    }
    
 
});

btn_minor_notif.addEventListener("click", function(){
    if (!div_3_notif.classList.contains('hide')){
        div_3_notif.classList.toggle('hide');
        div_3_notif.children[0].selectedIndex = 0;
        btn_plus_notif.classList.toggle('hide');
    }
    else{
        div_2_notif.classList.toggle('hide');
        div_2_notif.children[0].selectedIndex = 0;
        btn_minor_notif.classList.toggle('hide');
    }
});
