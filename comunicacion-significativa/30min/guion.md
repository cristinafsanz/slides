# Guión charla 30 minutos

## Ilusionismo con GitHub Pages

🎨 [Cartel de magia con el título de la charla]

Bienvenidos a la charla de "Ilusionismo con GitHub Pages.

## Presentación

🎨 [Avatar a la izquierda y mi nombre, qué soy y dónde trabajo a la derecha]

Me presento, soy Cristina Fernández, trabajo como desarrolladora Front-end y desde hace unos meses trabajo en Kairós Digital Solutions.

## 📌 Agenda

En la charla voy a hablar de:

- ¿Por qué surge esta charla?

- ¿Qué es GitHub Pages?

- ¿Qué necesitas saber?

- Funcionalidad

- Casos de casos

- Alternativas

## 📌¿Por qué surge esta charla?

🎨 [Porfolio web]

Cuando empecé como desarrolladora front-end quería realizar un portfolio con todas las maquetaciones web que fuera realizando.

Para ello necesitaba: 

🎨 [💻 </> ✍️]

- 💻Un alojamiento web para tenerlo publicado en Internet.

Sin embargo, también quería:

- </> Tener disponible el código para poder consultarlo en los siguientes desarrollos.

- ✍️ Poder consultar las notas que iba apuntando al crear las maquetaciones.

## </> GitHub

🎨 [</> Imagen de GitHub]

Para tener disponible el código podía utilizar la plataforma GitHub, que permite alojar el código en remoto a través de repositorios y tener distintas versiones del mismo usando el sistema de control de versiones Git.

## ✍️ Notas

🎨 [✍️ Imagen de notas]

Para las notas estaba usando Evernote, que te permite acceder a ellas desde distintos dispositivos.

## 💻 Alojamiento web

🎨 [💻]

Para el alojamiento web no tenía claro qué contratar, porque yo no quería algo profesional sino más ir publicando experimentos para ir practicando. Y entonces escuché hablar de GitHub Pages y tuve mi momento eureka.

## Cinematógrafo

Para explicaros cómo me sentí voy a utilizar la historia de un personaje de finales del siglo XIX.

🎨 [Gif de una de las primeras películas representadas con el cinematógrafo]

Georges Méliès era un ilusionista que  asistió, invitado por los hermanos Lumière, a la primera representación del Cinematógrafo. Méliès quedó impresionado y se decidió a incluirlo en su función. Como los hermanos Lumière no se lo quisieron vender, se compró un artilugio similar, el Animatógrafo de Robert W. Paul, transformándolo para que sirviera también como cámara para hacer películas. Ya tenía una cámara-proyector para hacer sus experimentos, el Kinetógrafo, y llegó a hacer más de 500 películas.

## 📌GitHub Pages

🎨 [Repo y página web]

GitHub Pages es una funcionalidad de GitHub que te permite publicar en Internet el código que tienes subido en un repositorio, es decir, GitHub te proporciona un alojamiento web.

🎨 [Gif de alegría relacionado con Méliès]

Permite publicar código estático (html, css y JavaScript), que es lo que yo quiero. Y es gratuito, siempre que tengas los repositorios públicos, así que para experimentos también me viene bien.

## User Site y Project Sites

Cuando habilitas esta funcionalidad te proporciona un dominio que puede ser de 2 formas:

🎨 [Repo + url user site / Repo + url Project site]

- Para un repositorio que nombres como "username.github.io" tendrás una url https://username.github.io.

- Para cualquier otro nombre de repositorio tendrás una url https://username.github.io/repo.

 🎨 [Imagen una cabeza Méliès y varias cabezas]

 Puedes tener un único User Site y múltiples Project Sites.

## 📌¿Qué necesitas saber?

Nivel básico de Git y de cómo trabajar con la interfaz gráfica de GitHub.

Para que veáis que es sencillo trabajar, os pongo la lista de pasos que suelo hacer:

- La primera vez crear cuenta en la aplicación web de GitHub e instalar git en local.

🎨 [Crear repo]

🎨 [Clonar en local]

🎨 [Añadir el código al repo]

🎨 [Subir el código]

🎨 Habilitar GitHub Pages]

🎨 [Repo con url: código y README + resultado con url]

## 📌 Qué código publicas

🎨 [Truco de sobreimpresión]

Para explicar desde dónde podemos publica voy a basarme en el truco de sobreimpresión, donde Méliès tenía que rebobinar la cinta para grabar su cabeza varias veces en distintos sitios.

🎨 [Orígenes en Settings]

Yo voy a utilizar el proyecto que usó Jose Dongil en su charla de Vue y voy a publicarlo de distintas formas.

🎨 [Octotree]

Para explicarlo mejor voy a utilizar la extensión de Chrome Octotree, que añade un panel a la izquierda en la página de GitHub y que muestra el proyecto en forma de árbol, siempre que el proyecto sea público.

 🎨 [Proyecto en rama master]

 Voy a subir el mismo proyecto a 3 repositorios distintos y en cada uno de ellos voy a publicar desde un origen distinto. 

 Para el primer repositorio voy a utilizar el origen más común, master.

 Se trata de un proyecto vue que utiliza webpack para preparar la aplicación para producción. El código que quiero generar lo tenemos en el directorio dist, por lo que si habilitamos GitHub Pages desde master, tendremos la aplicación en https://username.github.io/repo/dist.

🎨 [Proyecto en directorio /docs de rama master]

Como sólo queremos publicar lo que hay en una carpeta y GitHub Pages nos permite publicar lo que tenemos en /docs, podemos cambiar la carpeta donde se genera el contenido para producción para que sea docs. Así tendremos la aplicación directamente en https://username.github.io/repo.

Sin embargo, puede quedar un poco raro que tengas en una carpeta docs cosas que no son documentación, pero GitHub Pages sólo admite esta carpeta por ahora.

🎨 [Proyecto en rama gh-pages]

Por ello hay una tercera posibilidad, que es subir el código que queremos publicar en otra rama, que tiene que llamarse gh-pages por convención.

Este proceso es un poco más enfarragoso porque hay que hacer push a 2 ramas con contenido distintos.

🎨 [Fichero Travis.yml] 

Por ello normalmente se utiliza un servicio de integración continua como Travis para que cuando hagas push a master, se genere el código para gh-pages y se suba automáticamente. Además ahora Travis integra con GitHub Pages y sólo necesitas añadir un fichero travis.yml añadiendo el script necesario para generar los ficheros de producción, el directorio y la rama origen.

## 📌Casos de uso

🎨 [Casos de uso: Cursos, presentación, blog y documentación]

Os voy a contar algunos casos de uso que considero interesantes.

## Cursos y tutoriales

🎨 [Truco mujer a la izquierda y un esqueleto a la derecha] 

Voy a usar el truco de parra para explicar este caso de uso.

Se grababa una escena, se paraba la cámara, se añadían o quitaban elementos y se volvía a grabas.

Yo os voy a enseñar el mismo proyecto en 2 repositorios. En el segundo voy a añadir una librería como idea para usar en ejercicios de cursos.

Voy a partir de 2 ejemplos del curso de Flexbox de Diana Aceves. 

Vamos a subir estos ejemplos a la rama master y habilitamos master para GitHub Pages. Con esto tenemos los ejemplos en:

https://username.github.io/repo/example1/
https://username.github.io/repo/example2/.

🎨 [Ejemplo con demo, código y notas]

Ahora añado una librería que se llama Jotted, que es similar a un emulador como JSFiddle pero para demos que queremos tener en un entorno propio:

🎨 [Librería Jotted y resultado]

Tenemos los mismos ejemplos que antes en https://username.github.io/repo/example1/
https://username.github.io/repo/example2/. 

Sin embargo en la misma página tenemos el código html, css y js en distintas pestañas y en otra el resultado de cómo se ve en un navegador.

## Presentación

Para hacer esta presentación he utilizado el proyecto WebSlides y el resultado está publicado en GitHub Pages.

Estáis viendo un caso de uso sin daros cuenta, ese es el truco.

🎨 [Url de las slides]

## Blog

Me creé un blog para hablar del proceso de esta charla, pero también para probar un generador estático distinto al de por defecto (Jekyll).

🎨 [Url del blog]

El truco es que he usado un generador estático, no por la velocidad o la tecnologías, sino por el nombre. Se llama igual que una película que homenajea a Georges Méliès. Éste es el truco.

🎨 [Película Hugo]

## Documentación

Puedes documentar un proyecto para explicar de qué va usando el fichero README o la wiki disponible en GitHub.

Un truco que he visto si no quieres complicarte añadiendo un estilo inicial es usar GitHub theme, que activa un diseño entre unos cuantos posibles usando el generador estático por defecto GitHub.

🎨 [Ejemplo de diseños predefinidos]

## 📌Alternativas

Además de GitHub Pages podemos utilizar otras plataformas para publicar nuestros experimentos.

Como primera alternativa podemos contratar un hosting y enlazar con el repositorio de GitHub donde tengamos el código.

Un ejemplo de esto lo podemos encontrar en el blog de Jorge Aznar en el que explica Grid Layout.

🎨 [Demo en blog y código en GitHub]

También podemos usar Codepen u otro emulador como JSFiddle para publicar la demo de un código que tenemos en GitHub, como hace Sarah Drasner.

🎨 [Repo y Codepen]

Y como última alternativa que os propongo podemos tener el código en GitHub y publicarlo en otras plataformas como Surge o Netlify, como hace Angel de Miguel en un proyecto de Open Source.

🎨 [Repo con urls a las distintas plataformas]

También podemos probar GitLab en vez de GitHub. A muchos desarrolladores les gusta más porque la plataforma en sí es open source.

## Por qué elijo GitHub Pages

Porque me ha sido más sencillo de utilizar al conocer GitHub.

Porque es bastante usado en la comunidad y uso un único sitio para experimentar.

Porque puedo tener código, demo y notas en el mismo sitio.

## 📌Conclusión

Georges Méliès combinó distintas pasiones que tenía utilizando los instrumentos que encontró a su alcance. Yo solo os he contado uno que encontré, pero espero que esto os sirva de inspiración para encontrar el vuestro o para probar éste. ¿Os imagináis qué podríais crear?

¡Gracias!