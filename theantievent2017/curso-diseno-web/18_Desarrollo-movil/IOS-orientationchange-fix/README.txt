A fix for the iOS orientationchange zoom bug.
=======================

Authored by @scottjehl, rebounded by @wilto.
MIT / GPLv2 License.

Demo: http://scottjehl.github.com/iOS-Orientationchange-Fix/

Minified src:

	/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this);	
Instructions: 
Include the script, enable your zooms. (I'll fill that out more later...).





Así es como funciona: Esta corrección funciona al escuchar el acelerómetro del dispositivo para predecir cuándo un cambio de orientación está a punto de ocurrir. Cuando se considere inminente un cambio de orientación, el script deshabilita usuario hacer zoom, lo que permite el cambio de orientación que se produzca adecuadamente, con el zoom desactivados. La secuencia de comandos restaura zoom de nuevo una vez que el dispositivo es o bien cerrar orientado a vertical, o después de su orientación ha cambiado. De esta manera, el usuario hacer zoom nunca se desactiva mientras la página está en uso.