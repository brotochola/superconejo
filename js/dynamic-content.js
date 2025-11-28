// Genera contenido dinámico que antes se hacía con PHP

// Genera el slider de imágenes para móviles
function generateMobileSlider() {
  const images = [
    "img/sliderMobile/1.jpg",
    "img/sliderMobile/2.jpg",
    "img/sliderMobile/3.jpg",
    "img/sliderMobile/4.jpg",
    "img/sliderMobile/5.jpg",
    "img/sliderMobile/6.jpg",
    "img/sliderMobile/7.jpg",
    "img/sliderMobile/8.jpg",
  ];

  const tiempoPorImagen = 5;
  const cantidad = images.length;
  const totalTime = tiempoPorImagen * cantidad;

  // Generar divs
  const reelSC = document.getElementById("reelSC");
  if (reelSC && reelSC.classList.contains("indexMobile")) {
    images.forEach(() => {
      const div = document.createElement("div");
      reelSC.appendChild(div);
    });

    // Generar CSS dinámico
    const style = document.createElement("style");
    let css = `
      #reelSC.indexMobile div {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        color: transparent;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        opacity: 0;
        z-index: 0;
        -webkit-animation: imageAnimation ${totalTime}s linear infinite 0s;
        animation: imageAnimation ${totalTime}s linear infinite 0s;
      }
    `;

    // Generar CSS para cada imagen
    images.forEach((img, i) => {
      const delay = i * tiempoPorImagen;
      css += `
        #reelSC div:nth-child(${i + 1}) {
          background-image: url(${img});
          animation-delay: ${delay}s;
          -webkit-animation-delay: ${delay}s;
        }
      `;
    });

    // Generar keyframes
    const numero = 100 / cantidad / 2;
    const keyframes = `
      ${numero}% {
        opacity: 1;
        display: block;
        transform: scale(1.05) rotate(0deg);
        -webkit-transform: scale(1.05) rotate(0deg);
      }
      ${numero * 2}% {
        opacity: 1;
        transform: scale(1.1) rotate(1deg);
        -webkit-transform: scale(1.1) rotate(1deg);
      }
      ${numero * 3}% {
        opacity: 0;
        transform: scale(1.15) rotate(2deg);
        -webkit-transform: scale(1.15) rotate(2deg);
      }
      ${numero * 3.01}% {
        display: none;
      }
    `;

    css += `
      @keyframes imageAnimation {
        ${keyframes}
      }
      @-webkit-keyframes imageAnimation {
        ${keyframes}
      }
    `;

    style.textContent = css;
    document.head.appendChild(style);
  }
}

// Genera el listado de marcas dinámicamente
function generateMarcas() {
  const marcas = [
    "img/marcas/bidi.png",
    "img/marcas/ecolin.jpg",
    "img/marcas/megafon.png",
    "img/marcas/monsterfix.png",
    "img/marcas/ppy.png",
    "img/marcas/radio10.png",
    "img/marcas/srt.jpg",
    "img/marcas/trisquel.jpg",
    "img/marcas/viraco.jpg",
    "img/marcas/viva.jpg",
    "img/marcas/waze.png",
  ];

  const marcasContainer = document.getElementById("marcas");
  if (marcasContainer) {
    marcas.forEach((marca) => {
      const li = document.createElement("li");
      li.style.backgroundImage = `url(${marca})`;
      marcasContainer.appendChild(li);
    });
  }
}

// Inicializar cuando el DOM esté listo
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", function () {
    // generateMobileSlider(); // Se usa si es necesario
  });
} else {
  // generateMobileSlider(); // Se usa si es necesario
}
