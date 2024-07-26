// document.getElementById('toggleDarkMode').addEventListener('click', function() {
//     document.body.classList.toggle('dark-mode');
// });

// function activarModoOscuro() {
//     localStorage.setItem('modoOscuro', true); // Almacenar indicador en localStorage
//     // Aplicar estilos de modo oscuro
//   }
  
//   // Verificar modo oscuro al cargar una página
//   function verificarModoOscuro() {
//     if (localStorage.getItem('modoOscuro') === 'true') {
//       activarModoOscuro(); // Activar modo oscuro si está almacenado
//     }
//   }
  
//   // Ejecutar al cargar la página
//   verificarModoOscuro();

// Activar modo oscuro
function activarModoOscuro(evento) {
    localStorage.setItem('modoOscuro', true); // Almacenar indicador en localStorage
    // Aplicar estilos de modo oscuro
  
    // Almacenar información del evento (opcional)
    if (evento) {
      const tipoEvento = evento.type === 'click' ? 'interaccionUsuario' : 'cargaPagina';
      localStorage.setItem('eventoModoOscuro', tipoEvento);
    }
  }
  
  // Verificar modo oscuro al cargar una página
  function verificarModoOscuro() {
    if (localStorage.getItem('modoOscuro') === 'true') {
      activarModoOscuro(); // Activar modo oscuro si está almacenado
    }
  }
  
  // Ejecutar al cargar la página
  verificarModoOscuro();
  
  // Agregar evento click al botón de alternar modo oscuro
  document.getElementById('toggleDarkMode').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    activarModoOscuro(this); // Pasar el elemento del botón como argumento
  });

  
  