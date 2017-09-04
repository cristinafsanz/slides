<?php
/* 
PHP no puede detectar la resolución al ser lenguaje servidor, por lo que incrustamos dentro JavaScript que si puede detectarla

Modernizr.mq prueba una consulta de medios del tipo @media queries de CSS3

Resolución tramos: 0 a 480 / 481 a 768 / mas de 768px

Luego con document.location refrescamos la página, ya sabiendo la resolución que tiene, y le pasamos en el parámetro 'carpeta' parte de la ruta dónde tiene que buscar la imagen: <img src="imagenes/<? echo $_GET['carpeta'] ?>/vuelo.jpg" alt="vuelo" /> de esta forma sabemos que sólo se llama y se carga 1 imagen por dispositivo 
*/

echo "<script>

	function detectaResolucion(){
		
		if(Modernizr.mq('only all and (min-width: 769px)') || navigator.userAgent.match(/MSIE\s(?!9.0)/)){  //PC sup. 768px e IE 7 y 8
		  document.location=\"$PHP_SELF?carpeta=escritorio&check=ok\";
		}

		else if(Modernizr.mq('only all and (min-width: 481px) and (max-width: 768px)')){  //tableta
		  document.location=\"$PHP_SELF?carpeta=tableta&check=ok\";
		}
		
		else{  
		  document.location=\"$PHP_SELF?carpeta=movil&check=ok\";  //movil
		}

	}

	</script>";

if(!isset($_GET['check']))//si no hay valor para check (se entra en la pag. primera vez):
{
	/* Este código se ejecuta para detectar la resolución */
	echo "<script> detectaResolucion(); </script>";
}

/* Este "else" es opcional: este código se ejecuta al detectar cambios de orientación (vertical/horizontal) en movil y tableta, y refresca la página, y la ruta de carpeta imágenes.  */

/*
else
{
echo "<script>
		
		window.addEventListener(\"orientationchange\", function() {
				detectaResolucion();
		}, false);

	 </script>";
}
*/
?> 

