(function () {
  'use strict'
  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
// Variables Globales
    var btnMenu = document.getElementById('btnMenu')
    var navbarMenu = document.getElementById('navbarMenu')
    var headerElem = document.querySelector('header')

// Menú
    btnMenu.addEventListener('click', onClickMenu)
    function onClickMenu () {
      navbarMenu.classList.toggle('header__menu--list--show')
      navbarMenu.classList.toggle('header__menu--list')
    }

// Load CSS
    var url = [
      'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css',
      'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css'
    ]
    function loadCSS (url) {
      for (var i = 0; i < url.length; i++) {
        var elem = document.createElement('link')
        elem.rel = 'stylesheet'
        elem.href = url[i]
        document.head.appendChild(elem)
      }
    }
    loadCSS(url)
  }
}())

