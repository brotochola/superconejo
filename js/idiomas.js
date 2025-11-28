//segun idioma cambia los textos de toda la pagina.
//Detección de idioma desde JavaScript (sin PHP)
var language = (navigator.language || navigator.userLanguage).substring(0, 2);

// Intentar obtener idioma de parámetro URL
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has("l")) {
  const paramLang = urlParams.get("l");
  if (paramLang === "es" || paramLang === "en") {
    language = paramLang;
  }
}

// Por defecto español si no es inglés
if (language !== "en" && language !== "es") {
  language = "es";
}

function cambiarIdioma(idioma) {
  if (idioma != "es") {
    if (!$("#menu a#eng").hasClass("active")) {
      $("#menu a#eng").addClass("active");
      $("#menu a#esp").removeClass("active");
    }
    //carga el json, lo convierte en objeto de JS y va item por item con el $.each
    $.getJSON("localization/en.json", function (data) {
      $.each(data, function (key, val) {
        if ($("#" + key)) {
          $("#" + key).html(val);
        }
      });
    });
    //cambia el valor del boton
    if (document.getElementById("botonEnviar")) {
      document.getElementById("botonEnviar").value = "Send";
    }
    //cambia titulo de la pagina
    document.title = "SuperConejo Tailored Animated Cartoons";
    //deja establecido el idioma, para las demas seccinoes
    language = "en";
  } else {
    if (!$("#menu a#esp").hasClass("active")) {
      $("#menu a#esp").addClass("active");
      $("#menu a#eng").removeClass("active");
    }
    //carga el json, lo convierte en objeto de JS y va item por item con el $.each
    $.getJSON("localization/es.json", function (data) {
      $.each(data, function (key, val) {
        if ($("#" + key)) {
          $("#" + key).html(val);
        }
      });
    });

    //el boton no tiene HTML, sino value, asi q va aparte:
    if (document.getElementById("botonEnviar")) {
      document.getElementById("botonEnviar").value = "Enviar";
    }
    //cambia titulo de la pagina
    document.title = "SuperConejo Dibujos Animados Personalizados";
    //deja establecido el idioma, para las demas seccinoes
    language = "es";
  }
}

//esto se ejecuta de una cuando carga la pagina
//ni te das cuenta y alcanzaria para los usuarios
//si la idea es modificar el contenido de la pagina q lee google hay q modificar la linea 41-46 de localization.php
cambiarIdioma(language);
