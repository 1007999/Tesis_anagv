/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // Add show-menu class to nav menu
       nav.classList.toggle('show-menu')

       // Add show-icon to show and hide the menu icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

// Función para buscar usuario
function buscarUsuario() {
    var usuario = document.getElementById('usuario').value;
    // Aquí debes implementar la lógica para buscar el usuario en tu base de datos
    // y obtener los datos del certificado
    var certificado = obtenerCertificado(usuario);
    if (certificado) {
      // Mostrar la ventana de impresión de certificado
      $('#impresion-certificado').modal('show');
      // Agregar los datos del certificado a la ventana
      document.getElementById('certificado-usuario').innerHTML = certificado;
    } else {
      alert('No se encontró el usuario');
    }
  }
  
  // Función para obtener el certificado del usuario
  function obtenerCertificado(usuario) {
    // Aquí debes implementar la lógica para obtener el certificado del usuario
    // desde tu base de datos
    return '<h2>Certificado de usuario</h2><p>Nombre: ' + usuario + '</p>';
  }
  
  // Función para imprimir el certificado
  function imprimirCertificado() {
    var certificado = document.getElementById('certificado-usuario').innerHTML;
    // Aquí debes implementar la lógica para imprimir el certificado
    // puedes utilizar una librería como jsPDF para generar un PDF
    console.log(certificado);
  }
  
  // Agregar eventos a los botones
  document.getElementById('form-busqueda-usuario').addEventListener('submit', function(event) {
    event.preventDefault();
    buscarUsuario();
  });
  
  document.getElementById('imprimir-certificado').addEventListener('click', imprimirCertificado);