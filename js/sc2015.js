var min_w = 360; // minimum video width allowed
var vid_w_orig; // original video dimensions
var vid_h_orig;

function hideAddressBar() {
  if (
    document.documentElement.scrollHeight <
    window.outerHeight / window.devicePixelRatio
  )
    document.documentElement.style.height =
      window.outerHeight / window.devicePixelRatio + "px";
  setTimeout(window.scrollTo(1, 1), 0);
}
window.addEventListener("load", function () {
  hideAddressBar();
});
window.addEventListener("orientationchange", function () {
  hideAddressBar();
});

$(function () {
  // runs after DOM has loaded

  vid_w_orig = 360;
  vid_h_orig = 202;
  $(window).resize(function () {
    resizeToCover();
  });
  $(window).trigger("resize");
  var player;

  //valida el formu
  $("#form1").validate();
  //el largo del #sliderHome depende de la cantidad de divs hijos q tenga
  var largoSlider = $(".botonesSlider").length * 480;
  $("#sliderHome").width(largoSlider);

  //el largo del slider de homenajes tambien:
  var largoSliderHomenajes = $(".slidesHomenajes").length * screen.width;
  $("#sliderHomenajes").width(largoSliderHomenajes);
  $(".slidesHomenajes").width(screen.width);
});

function abrirVideo(video) {
  $("#popupVideo iframe").attr(
    "src",
    "http:////www.youtube.com/embed/" + video
  );
  $("#popupVideo").fadeIn(0);
}

function cerrarVideo() {
  $("#popupVideo").fadeOut(300);
  setTimeout(() => {
    $("#popupVideo iframe").attr("src", "");
  }, 300);
}
function resizeToCover() {
  // set the video viewport to the window size
  $("#video-viewport").width(screen.width);
  $("#video-viewport").height(screen.height);

  // use largest scale factor of horizontal/vertical
  var scale_h = screen.width / vid_w_orig;
  var scale_v = screen.height / vid_h_orig;
  var scale = scale_h > scale_v ? scale_h : scale_v;
  //alert(scale_h+" "+scale_v+ " " +scale);
  // don't allow scaled width < minimum video width
  if (scale * vid_w_orig < min_w) {
    scale = min_w / vid_w_orig;
  }

  // now scale the video
  $("#reelSC.indexPC").width(scale * vid_w_orig);
  $("#reelSC.indexPC").height(scale * vid_h_orig);
}

function mandaMail() {
  if ($("#form1").valid()) {
    $("#form1").fadeOut(200);
    $("#formu_ok").delay(200).fadeIn(200);
  }
}

var cargado = [0, 0, 0, 0, 0, 0];
var activo = 0;
function seccion(cual) {
  if (mobile == 1) {
    tiempo = 0;
  } else {
    tiempo = 400;
  }
  //se va el menu
  $("#menuDesplegado").animate({ top: "-350px" }, 200);
  // #retraerMenu es el recuadro q se pone en toda la pagina cuando sale el menu desplegable
  //al elegir seccion se va el recuadro para sacar el menu
  $("a#retraerMenu").fadeOut(0);

  if (activo != cual) {
    activo = cual;
    $(".contenidos.activo").fadeOut(tiempo);
    $("#seccion" + cual.toString()).fadeIn(tiempo, function () {
      $(".botonesNav").removeClass("activo");
      $("#botonNav" + cual.toString()).addClass("activo");
      $("#menuDesplegado #botonNav" + cual.toString()).addClass("activo");
      $(".contenidos").removeClass("activo");
      $("#seccion" + cual.toString()).addClass("activo");
    });

    //cargo el contenido cuando se necesita:

    if (cual == 3 && cargado[3] == 0) {
      var url = "homenajes.html?v=" + Math.random();
      $.ajax({
        url: url,
        success: function (html) {
          //cuando se carga el contenido de la seccion...
          $("#seccion3").html(html);
          cargado[cual] = 1;
          //despues de cargar la pagina de la seccion correspondiente, vuelvo a cambiar el idioma
          //porq hay objetos html nuevos q no tomaron el idioma
          //	$('body, html').css({'overflow-y':'scroll'});
          cambiarIdioma(language);
        },
      });
    }

    if (cual == 1 && cargado[1] == 0) {
      var url = "queEs.html?v=" + Math.random();
      $.ajax({
        url: url,
        success: function (html) {
          //cuando se carga el contenido de la seccion
          $("#seccion1").html(html);
          cargado[cual] = 1;
          //despues de cargar la pagina de la seccion correspondiente, vuelvo a cambiar el idioma
          //porq hay objetos html nuevos q no tomaron el idioma
          //$('body, html').css({'overflow-y':'hidden'});
          cambiarIdioma(language);
        },
      });
    }
    if (cual == 2 && cargado[2] == 0) {
      var url = "institucionales.html?v=" + Math.random();
      $.ajax({
        url: url,
        success: function (html) {
          //cuando se carga el contenido de la seccion
          $("#seccion2").html(html);
          cargado[cual] = 1;
          //despues de cargar la pagina de la seccion correspondiente, vuelvo a cambiar el idioma
          //porq hay objetos html nuevos q no tomaron el idioma
          //	$('body, html').css({'overflow-y':'scroll'});
          cambiarIdioma(language);
        },
      });
    }
    if (cual == 4 && cargado[4] == 0) {
      var url = "videojuegos.html?v=" + Math.random();
      $.ajax({
        url: url,
        success: function (html) {
          //cuando se carga el contenido de la seccion
          $("#seccion4").html(html);
          cargado[cual] = 1;
          //despues de cargar la pagina de la seccion correspondiente, vuelvo a cambiar el idioma
          //porq hay objetos html nuevos q no tomaron el idioma
          //	$('body, html').css({'overflow-y':'scroll'});
          cambiarIdioma(language);
        },
      });
    }

    if (cual == 5 && cargado[5] == 0) {
      var url = "contacto.html?v=" + Math.random();
      $.ajax({
        url: url,
        success: function (html) {
          //cuando se carga el contenido de la seccion
          $("#seccion5").html(html);
          cargado[cual] = 1;
          //despues de cargar la pagina de la seccion correspondiente, vuelvo a cambiar el idioma
          //porq hay objetos html nuevos q no tomaron el idioma
          //	$('body, html').css({'overflow-y':'hidden'});

          cambiarIdioma(language);
        },
      });
    }
  } //fin if
} //fin funcion

function cambiarSlider(cual) {
  $(".botonesSlider").removeClass("activo");
  $("#botonSlider" + cual.toString()).addClass("activo");

  $("#sliderHome").animate({ left: -480 * cual }, 200, function () {
    // Animation complete.
  });
}

function scrollear(numero) {
  $(".contenidos.activo").animate(
    {
      scrollTop: numero,
    },
    600
  );
}

function desplegarMenu() {
  if ($("#menuDesplegado").css("top") == "50px") {
    $("#menuDesplegado").animate({ top: "-350px" }, 200);
    $("a#retraerMenu").fadeOut(0);
    $("nav").css({ opacity: 0.9 });
  } else {
    $("#menuDesplegado").animate({ top: "50px" }, 200);
    $("a#retraerMenu").fadeIn(0);
    $("nav").css({ opacity: 1 });
  }
}

//cuando se scrollea en la seccion de videojuegos, me fijo si esta visible o no cada elemento q quiero animar

function isScrolledIntoView(elem) {
  //devuelve true o false
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();
  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();
  return (
    elemBottom - 0.5 * $(elem).height() <= docViewBottom &&
    elemTop + 0.5 * $(elem).height() >= docViewTop
  );
}
