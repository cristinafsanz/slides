# Guión charla TechShessions (30 minutos)

https://cristinafsanz.github.io/slides/techshessions2017/30min/#slide=1

## Presentación

Bienvenidos a la charla de GitHub y el aprendizaje.

Me presento, soy Cristina Fernández y trabajo como desarrolladora front-end desde hace más de 2 años. Me podéis encontrar en twitter y en GitHub como cristinafsanz.

## Épocas de cursitis

Esta charla viene motivada por etapas de Cursitis que he tenido pero que no me han ayudado a avanzar en conocimientos de front-end. ¿Y qué es para mí Cursitis? Empezar a hacer cursos pero no asimilarlos bien y no aprender a ver cómo utilizarlos al no hacer ejercicios o proyectos a partir de ellos.

Un ejemplo sería el curso del preprocesador de CSS Sass que hice el año pasado, que ayuda a hacer un css más mantenible. En el curso estaba el entorno montado, yo no tenía que instalar nada. En cada tema venía la explicación y la parte de ejercicios era más de rellenar huecos, ejecutar y ver el resultado. Después me he dado cuenta que no aproveché bien el curso porque no sé cuándo utilizar las distintas funcionalidades en un proyecto real, no sé los casos de uso de cuando aplicarlos.

## Errores al aprender

Lo que me pasó lo explica bien este tweet al preguntar por errores en la profesión, donde este hombre dice que gastó mucho tiempo leyendo y no tanto escribiendo. Te sientas y aprendes cosas nuevas pero para aprenderlas de verdad necesitas construir cosas.

## Solución: aprender haciendo

Como hay que aprender de los errores, voy a explicar algunas alternativas que he ido viendo para aprender haciendo y publicarlo online para poder acceder a ello cuando lo necesitemos.

## Curso Flexbox

Como ejemplo de curso que he aprovechado mejor es el de Flexbox que impartió Diana Aceves para EscuelaIT. Ella va haciendo todos los ejercicios en la herramienta online Codepen y puedes ver a través de una colección el ejemplo que necesites en algún momento, por ejemplo centrado vertical y horizontal.

## Codepen
Una vez que te metes en un pen concreto puedes ver el código y el resultado en navegador en la misma página, por lo que puedes ver de un vistazo si es lo que necesitas.

## ¿Puedes publicarlos?
Pongo aquí el ejemplo de Wes Bos, un desarrollador que imparte cursos y aquí escribe que sus ejercicios se pueden publicar sin problema. Yo escribí hace poco a EscuelaIT y también me dijeron que los ejemplos los puedo tener públicos, así que si queréis tener online es buena idea preguntar por si hay algún problema en tenerlos visibles.

## ¿Dónde alojar tus experimentos?

Una posibilidad sería Codepen que hemos visto antes. Lo que me faltaría sería tener un sitio para añadir las notas sobre los ejercicios.

## GitHub + servidor propio

Una forma de añadir notas en algo que aprendes es a través de un blog. Jorge Aznar (desarrollador front-end) tiene un blog y escribió un artículo sobre css grid layout. El código de los ejemplos los subió a GitHub y la demo la subió en el servidor donde aloja su blog.

## GitHub + Codepen

Sarah Drasner (desarrolladora front-end) tiene un proyecto con el código en GitHub y el resultado lo muestra a través de Codepen. En los ficheros JavaScript pone el enlace al pen donde está el ejemplo.

## GitHub y GitHub Pages

Los ejemplos anteriores necesitan de 2 plataformas para tener el código y la demo, pero GitHub nos facilita el poder alojar un sitio web con cada repositorio. ¿Por qué no utilizarlo para poder asimilar mejor lo que aprendemos?

Quien no haya trabajao con Git y GitHub puede que crea que es algo complicado, así que voy a poner todos los pasos necesarios para que se vea que no hace falta ser un experto en Git y GitHub para utilizarlo para facilitar el aprendizaje.

## Crear una cuenta

Te creas una cuenta en GitHub con usuario, contraseña y mail.

## Crear repositorio

Eliges un nombre para el repositorio y habilitas que exista un fichero README para poder poner las notas, pasos para instalar, cómo usar el código y dónde ver el contenido. Es un fichero para escribir lo que consideres relevante.

## Trabajar en local

Si solo vas a escribir las notas en el README puedes trabajar desde el navegador pero si vas a añadir código lo mejor es trabajar en local. Para ello en el terminal te sitúas en la carpeta donde vas a alojar el repositorio en local, te clonas el repositorio y te situás en el proyecto en sí haciendo cd nombre-repositorio.

## Añadir código al proyecto 

Añades el código en la raíz (o en subdirectorios) y haces git status para ver qué quieres subir a GitHub

## Subir el código

Con git add preparas los ficheros añadiéndolos al Index, git commit para subirlos al HEAD de tu git local y git push para subirlos a la rama master en GitHub.

## Demo en GitHub Pages

Los pasos anteriores sirven para subir a GitHub. Con eso ya tienes el código en el repositorio remoto. Pero si quieres mostrar el resultado de los ejemplos que has creado (como el de la imagen) puedes habilitar GitHub Pages para obtener una url asociada al repositorio.

## Habilitar GitHub Pages

Eliges desde dónde se publicará en GitHub Pages: desde la rama master, desde el subdirectorio docs de la rama master o de la rama gh-pages si la has creado para subir el código ahí.

El caso más típico sería el de utilizar la rama master para publicar el proyecto web pero después explicaré usos en los cuales tiene sentido utilizar el subdirectorio docs de master o utilizar la rama gh-pages.