# Guión Charla TheAntiEvent2017

Nota: las slides aparecen descritas *(utilizando cursiva y entre paréntesis)*. La idea la tuve haciendo el curso de [Mindshift](https://melies-hugo.js.org/post/preparacion-guion/).

## Presentación

Hola, soy Cristina Fernández, soy desarrolladora Front-end desde hace 2 años *(slide con mi avatar y mis datos, con twitter y GitHub)*.

Quizás me conozcáis por la charla de "Trucos fantásticos y cómo encontrarlos" *(portada de la charla, similar a la de Animales fantásticos y cómo encontrarlos de J.K.Rowling)*.

En la charla contaba algunos [trucos para aprender Front-end](https://docs.google.com/presentation/d/1P6h7f-LoZFA4r7hCydScep8u39k80x85hLt5I4tNI_0/edit#slide=id.g210aea5884_0_73) *(slide con los puntos de la charla)*: 

1. Aprender la base y buenas prácticas.

2. Añadir herramientas de desarrollo, atajos de teclado y plugins para el editor que uses.

3. Organizarse utilizando un kanban o documentando el how to para cada proyecto.

4. Ir a conferencias, meetups, hacer cursos, escuchar podcasts, leer blogs, etc.

5. Practicar lo que aprendes y publicarlo en Codepen o GitHub Pages.

Esta charla sería un spin-off de aquella, ya que voy a centrarme en el último punto, el de practicar y publicar lo que aprendes.

Para ello voy a hablar un poco del período de aprendizaje desde que empecé con el desarrollo front-end, qué me ha servido y qué no, para intentar mejorarlo en el futuro.

## Curso de diseño web adaptativo: ¿Dónde dejo mis apuntes y ejercicios?

Empecé haciendo un curso bastante práctico, cogía apuntes en una libreta (para asentar mejor los conceptos) y la parte de ejercicios la hacíamos también en clase, cada uno con nuestro ordenador. 

Intenté tener un conjunto de carpetas separados por temas *(imagen de las carpetas del curso)* y nombrar los ficheros de forma que se supiera de qué iba el ejercicio *(ejemplo de ficheros creados)*. Luego simplemente podía ver el resultado en un navegador a partir del fichero html *(gif haciendo click en el fichero y abriéndose en el navegador)* o mirar el código con un editor de texto para ver de qué iba el ejercicio un tiempo después *(screenshot de VSCode con código)*.

Al cabo de unos meses me di cuenta que utilizaba Internet para buscar las dudas, porque no recordaba bien cuándo había hecho el ejercicio que me hacía falta o no tenía el código en el ordenador que estaba usando (lo tenía guardado en un disco extraíble). Y las notas no las consulté después casi nunca, ¿dónde estaría apuntada esa explicación de CSS que necesitaba?

Sin embargo, sí que interiorizé la mayoría de conceptos, ya que practicábamos casi todos haciendo ejercicios sobre ello, era un aprendizaje activo, práctico.

## GitHub al rescate: Disponible desde cualquier sitio con Internet

El problema de tener los ejercicios en un disco duro local y no poder acceder a él desde cualquier sitio se puede solucionar con GitHub. 

Subiríamos todos los ejercicios a un repositorio *(carpetas con ejemplos de ficheros y README, similar a como lo muestra la extensión de Chrome Octotree: https://github.com/buunguyen/octotree/)*. Además se podrían poner las notas más importantes en el README o en la wiki del repositorio, para poder acceder a la parte que queremos más rápidamente.

El problema que tiene esto es que pierdo lo que hacía antes en local de ver el resultado en el navegador. 

La primera solución sería clonar el repositorio en local y abrirlo desde ahí.

Otra posible opción es utilizar un recurso que encontró [Joan León](https://twitter.com/nucliweb) que se llama [HTML Preview](https://github.com/htmlpreview/htmlpreview.github.com).

Te posicionas en GitHub en el fichero html que quieras ver, por ejemplo https://github.com/LRodriAce/AJAX/blob/master/index.html y añades antes de la url http://htmlpreview.github.io/?. Para el ejemplo el resultado sería éste: http://htmlpreview.github.io/?https://github.com/LRodriAce/AJAX/blob/master/index.html *(slide con screenshot del proyecto de la antiasistente Laura de Adalab)*.

Funcionamiento: Intenta cargar el HTML utilizando YQL, procesa todos los enlaces, frames, scripts y los carga con YQL para que se evalúe en el navegador.

Sin embargo esta solución muchas veces no funciona. 

## Dónde publicar el resultado: Opciones posibles

Voy a compartir algunos ejemplos que he visto para publicar tanto el código como el resultado.

- Resultado en tu propio servidor: Jorge Aznar, otro antiasistente, tiene un par de repositorios para publicar los ejemplos que pone en su blog:

    - Blog: http://jorgeatgu.com/blog/

    - Resultado: http://jorgeatgu.com/ejemplos/css-grid/

    - GitHub: https://github.com/jorgeatgu/ejemplos-blog/tree/master/css-grid

- Resultado en Codepen: Sarah Drasner tiene un repositorio cuyos resultados están en Codepen:

    - GitHub: https://github.com/sdras/JS-stroll

    - JS de un ejemplo: https://github.com/sdras/JS-stroll/blob/master/1-chapter-1-1-nature-of-code-in-js-svg/js/index.js

    - Comentario en el JS: live demo at http://codepen.io/sdras/pen/d953d844fb3bed2c053fb83874844f64

- Resultado en Dabblet: Lea Verou tiene una lista de ejemplos de su libro:

    - Repositorio: LeaVerou.github.io/play.csssecrets.io

    - Resultado con HTML, CSS y JS (parecido a Codepen): http://dabblet.com/gist/012289cc14106a1bd7a5

## Habilitando GitHub Pages: Solución por defecto al usar GitHub

La solución más rápida sería usar GitHub Pages, un servicio que proporciona GitHub para publicar contenido web a partir del código de un repositorio.

Un ejemplo que encontré hace poco es éste: https://andreidbr.github.io/JS30/ *(slide con el resultado)*. Se trata de una página web con los resultados de los ejercicios [JavaScript30](https://javascript30.com/), de Wes Box.

Se trata de un repositorio con GitHub Pages habilitado en master, donde tiene cada ejercicio en una carpeta distinta. El código lo puedes ver en GitHub y el resultado lo ves en la url habilitada. Además escribe sobre el curso en Medium y en el README vienen las lecciones aprendidas en un readme dentro de la carpeta del ejercicio.

## ¿Qué se puede hacer con GitHub Pages?: Otros casos de uso que te podrías servir

Si se quiere ver el html, css y js como en Codepen o Dabblet lo que podríamos hacer es utilizar [Jotted](https://github.com/ghinda/jotted) y tendrías el resultado completo en GitHub Pages. Quiero hacer el curso de JavaScript para probarlo. Por ahora sólo tengo la página de "Hello World": https://cristinafsanz.github.io/JavaScript30/00-test/.

Y para mostrar directamente el resultado podemos consultar muchos ejemplos que están en GitHub:

- Proyecto Midi-redux de Elena Torró *(mostrar árbol de ficheros y resultado en 2 slides)*, habilitando la rama master:

    - GitHub: https://github.com/elenatorro/midi-redux

    - Resultado: https://elenatorro.github.io/midi-redux/

- Página web TheAntiEvent creada por Naiara Abaroa *(mostrar árbol de ficheros resaltando /docs y resultado en 2 slides)*, habilitando la carpeta /docs de la rama master:

    - GitHub: https://github.com/theantievent/theAntiEvent

    - Resultado: http://theantievent.org/

 En el primer proyecto se muestra el index.html de la raíz del proyecto mientras en el segundo se muestra el index.html de la carpeta /docs dejando la el resto del repositorio para configuración de gulp. 

 Como analogía se podría ver GitHub Pages como una apertura que se hace en una caja, que es GitHub, para mostrar el interior. Puedes mostrar todo o puedes mostrar solo lo que haya en docs. Este último caso sirve para cuando generar el código web a partir de uno fuente o para cuando quieres mostrar un código distinto, como la documentación de tu proyecto.

 ## Conclusiones: No solo leas, practica, documenta y publica código y demo/resultado.

 - Hay muchas alternativas para poder consultar lo que vas aprendiendo. Aquí he puesto solo algunos ejemplos, cada uno que use lo que mejor le venga.

 - Es importante documentar lo que haces, tanto para tu yo futuro como para otros a los que le pueda servir.

 - Es aún más importante practicar lo que vas aprendiendo. Yo he hecho algún curso donde iba haciendo algún test de lo aprendido y cuando he tenido que ponerme a ello no sabía cómo.

 ## Muchas gracias

 - Estoy documentando los proyectos que voy haciendo y cómo los hice en https://github.com/cristinafsanz/github-pages.

 - Escribo sobre el proceso del proyecto en https://melies-hugo.js.org/.

 - Las slides están en https://cristinafsanz.github.io/slides/techtheantievent2017/ y están hechas con Webslides. El cómo trabajo con Webslides está en https://github.com/cristinafsanz/melies-origen.

 - Mi twitter es https://twitter.com/cristinafsanz.

 - Mi GitHub es https://github.com/cristinafsanz.

