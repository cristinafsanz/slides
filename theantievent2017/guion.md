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

## Curso de diseño web adaptativo

Empecé haciendo un curso bastante práctico, cogía apuntes en una libreta (para asentar mejor los conceptos) y la parte de ejercicios la hacíamos también en clase, cada uno con nuestro ordenador. 

Intenté tener un conjunto de carpetas separados por temas *(imagen de las carpetas del curso)* y nombrar los ficheros de forma que se supiera de qué iba el ejercicio *(ejemplo de ficheros creados)*. Luego simplemente podía ver el resultado en un navegador a partir del fichero html o mirar el código con un editor de texto para ver de qué iba el ejercicio un tiempo después.

Al cabo de unos meses me di cuenta que utilizaba Internet para buscar las dudas, porque no recordaba bien cuándo había hecho el ejercicio que me hacía falta o no tenía el código en el ordenador que estaba usando (lo tenía guardado en un disco extraíble). Y las notas no las consulté después casi nunca, ¿dónde estaría apuntada esa explicación de CSS que necesitaba?

Sin embargo, sí que interiorizé la mayoría de conceptos, ya que practicábamos casi todos haciendo ejercicios sobre ello, era un aprendizaje activo, práctico.

## GitHub al rescate

El problema de tener los ejercicios en un disco duro local y no poder acceder a él desde cualquier sitio se puede solucionar con GitHub. 

Subiríamos todos los ejercicios a un repositorio *(carpetas con ejemplos de ficheros y README, similar a como lo muestra la extensión de Chrome Octotree: https://github.com/buunguyen/octotree/)*. Además se podrían poner las notas más importantes en el README o en la wiki del repositorio, para poder acceder a la parte que queremos más rápidamente.

El problema que tiene esto es que pierdo lo que hacía antes en local de ver el resultado en el navegador. 

La primera solución sería clonar el repositorio en local y abrirlo desde ahí.

Otra posible opción es utilizar un recurso que encontró [Joan León](https://twitter.com/nucliweb) que se llama [HTML Preview](https://github.com/htmlpreview/htmlpreview.github.com).

Te posicionas en GitHub en el fichero html que quieras ver, por ejemplo https://github.com/LRodriAce/AJAX/blob/master/index.html y añades antes de la url http://htmlpreview.github.io/?. Para el ejemplo el resultado sería éste: http://htmlpreview.github.io/?https://github.com/LRodriAce/AJAX/blob/master/index.html *(slide con screenshot del proyecto de la antiasistente Laura de Adalab)*.

Funcionamiento: Intenta cargar el HTML utilizando YQL, procesa todos los enlaces, frames, scripts y los carga con YQL para que se evalúe en el navegador.

Sin embargo esta solución muchas veces no funciona. 

## Habilitando GitHub Pages

La solución más efectiva sería usar GitHub Pages, un servicio que proporciona GitHub para publicar contenido web a partir del código de un repositorio *(slide con el código de GitHub en forma de árbol y a la derecha el resultado)*.