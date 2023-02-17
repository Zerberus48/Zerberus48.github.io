let btnAbrirWindow = document.getElementById("btn-Abrir-Window"),
    overlay  = document.getElementById("overlay"),
    popup  = document.getElementById("popup"),
    btnCerrarWindow  = document.getElementById("bnt-cerrar-popup");


btnAbrirWindow.addEventListener('click', function () {
  overlay.classList.add('active');
  popup.classList.add('active');
})
btnCerrarWindow.addEventListener('click', function () {
  overlay.classList.remove('active');
  popup.classList.remove('active');
})
