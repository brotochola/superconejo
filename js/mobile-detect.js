// Reemplazo de Mobile_Detect.php para GitHub Pages
// Detecta si es móvil o computadora

function isMobileDevice() {
  // Detección básica de dispositivos móviles
  const userAgent = navigator.userAgent || navigator.vendor || window.opera;

  // Lista de patrones para móviles y tablets
  const mobilePatterns =
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;

  return mobilePatterns.test(userAgent);
}

// Variable global que reemplaza la detección PHP
var mobile = isMobileDevice() ? 1 : 0;

// Para debugging
console.log("Mobile device detected:", mobile === 1);
