window.addEventListener('load', function(){
  let botonAbrir = document.getElementById('menu-mobile-abrir-boton');
  let botonCerrar = document.getElementById('menu-mobile-cerrar-boton');
  let botonCerrarContenedor = document.getElementById('menu-mobile-cerrar-boton-contenedor');
  let menuMobile = document.getElementById('menu-mobile');

  let menuAbrir = (event) => {
    menuMobile.classList.remove('menu-mobile-inactivo');
    menuMobile.classList.add('menu-mobile-activo');
    botonCerrarContenedor.classList.remove('boton-cerrar-contenedor-cerrar');
    botonCerrarContenedor.classList.add('boton-cerrar-contenedor-abrir');
    botonCerrar.classList.remove('boton-cerrar-cerrar');
    botonCerrar.classList.add('boton-cerrar-abrir');
  }

  let menuCerrar = (event) => {
    menuMobile.classList.remove('menu-mobile-activo');
    menuMobile.classList.add('menu-mobile-inactivo');
    botonCerrarContenedor.classList.remove('boton-cerrar-contenedor-abrir');
    botonCerrarContenedor.classList.add('boton-cerrar-contenedor-cerrar');
    botonCerrar.classList.remove('boton-cerrar-abrir');
    botonCerrar.classList.add('boton-cerrar-cerrar');
  }

  botonAbrir.onclick = menuAbrir;
  botonCerrar.onclick = menuCerrar;
});
