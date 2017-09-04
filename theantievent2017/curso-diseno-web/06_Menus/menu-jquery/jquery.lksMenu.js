/* @version 1.0 lksMenu
 * @author Lucas Forchino
 * @webSite: http://www.tutorialjquery.com
 * lksMenu.
 * jQuery Plugin to create a css menu
 */

// esta técnica es una forma de hacer convivir el script con el hecho de que algunas
// páginas tienen mas de una librería que genera conflicto con el simbolo $
// arrancando con esta funcion que pasa por parametro la misma libreria jQuery
// nos aseguramos que todo funcione correctamente en futuros usos , algo fundamental
// si lo que hacemos es una extension o plugin jquery donde no sabemos donde se
// implementará
(function($){
    // fn es un shortcut al prototipo (prototypo) de la libreria jquery
    // declarando un metodo dentro de esta librería la extendemos para ser usada
    // con cualquier selector
    $.fn.lksMenu=function(){
        // para mantener la posibilidad de concatenar metodos es que retornamos la función en
        // lugar de solo ejecutar algo y ya.
        // en este caso usamos un each, porque el selector sobre el que aplicamos la funcion
        // podria contener mas de un elemento , esto es , aplicaria $('.menu').menu() lo cual
        // ejecutaria el codigo para todos los elementos que tengan la clase menu, como puede
        // haber mas de uno es que ejecutamos el each para que corra sobre todos ellos
        return this.each(function(){
            // obtenemos el elemento que se esta analizando en esta vuelta del each
            var menu= $(this);
            // localizamos los links principales y le asignamos un evento click
            menu.find('ul li > a').bind('click',function(event){
                // identificamos el elemento sobre el que se hizo click
                var currentlink=$(event.currentTarget);
                // los ul que tengan la clase active seran los que estan abiertos
                // si el link sobre que presionamos ya estaba abierto , es decir tenia
                // la clase active, lo cerramos y nada mas
                if (currentlink.parent().find('ul.active').size()==1)
                {
                    //cerramos el link porque apretamos sobre el mismo abierto
                    currentlink.parent().find('ul.active').slideUp('medium',function(){
                        // le quitamos la clase
                        currentlink.parent().find('ul.active').removeClass('active');
                    });
                }
                // si ningun link estaba apretado
                else if (menu.find('ul li ul.active').size()==0)
                {
                    //no hace falta cerrar ninguno y solo abrimos el elemento al
                    // cual se le hizo click
                    show(currentlink);
                }
                else
                {
                    // si ya habia un item abierto , simplemente lo localizamos
                    // con find, y lo cerramos con slideup,
                    menu.find('ul li ul.active').slideUp('medium',function(){
                        // una vez que cerramos el que estaba abierto
                        // le quitamos la clase active
                        menu.find('ul li ul').removeClass('active');
                        // abrimos uno nuevo que corresponde al que se clickeo
                        show(currentlink);
                    });
                }
            });

            // esta funcion es de soporte
            // todo lo que hace es abrir el elemento y asignarle la clase active
            function show(currentlink){
                currentlink.parent().find('ul').addClass('active');
                currentlink.parent().find('ul').slideDown('medium');
            }
        });
    }
    // esto es lo que deciamos al principio , ejecutamos la funcion por eso los
    // parentesis y le pasamos por parametro la libreria jQuery.
})(jQuery);