# [Guión charla Comunidad CODE](https://cristinafsanz.github.io/slides/comunidadcode2018/guion)

## [Ilusionismo con GitHub Pages](https://cristinafsanz.github.io/slides/github-pages/#slide=1)

![Cartel de Viaje a la luna con el título de la charla](../codemotion2017/imagenes-guion/1.portada.png?raw=true)

Bienvenidos a la charla de "Ilusionismo con GitHub Pages".

Antes de empezar me gustaría contar un poco el por qué de usar este cartel como portada.

Para esta charla voy a contar **la historia de Georges Méliès, uno de los pioneros del cine**. En sus películas hacía de todo, era director, guionista, actor, decorador, operador, montador... Aunque os parezca raro, **sí que tiene un por qué el incluirlo en esta charla**.

Si queréis saber más, hay un libro que escribió el mismo sobre su vida: ["Vida y obra de un pionero del cine / Georges Méliès"](http://www.madrid.org/biblio_publicas/cgi-bin/abnetopac?TITN=999193#absysNET) en bibliotecas de la Comunidad de Madrid.

## Presentación

![Avatar a la izquierda y mi nombre, qué soy y dónde trabajo a la derecha](../codemotion2017/imagenes-guion/2.presentacion.png?raw=true)

Soy Cristina Fernández, trabajo como desarrolladora Front-end, es decir, hago aplicaciones del lado cliente con HTML, CSS y JavaScript. 

Trabajo actualmente en Kairós Digital Solutions aunque la charla de hoy la he creado a partir de un proyecto personal.

Y me podéis seguir en las redes como @cristinafsanz, tanto en twitter como en GitHub. 

## 📌 Agenda

![Agenda](../codemotion2017/imagenes-guion/3.agenda.png?raw=true)

En la charla voy a hablar de:

- ¿Por qué surgió esta charla?

- ¿Qué es GitHub Pages y qué necesitáis saber para empezar?

- Casos de casos que me han parecido interesantes

- Alternativas y por qué elijo GitHub Pages?

Además, para amenizar la charla **voy a incluir algunos trucos de magia** que creó Georges Méliès. Porque **antes de cineasta ya trabajaba como ilusionista**.

## 📌¿Por qué surge esta charla?

![Por qué surge esta charla](../codemotion2017/imagenes-guion/4.por-que.png?raw=true)

![Porfolio web](../codemotion2017/imagenes-guion/5.portfolio.png?raw=true)

Cuando empecé como desarrolladora front-end quería **crear una página web a modo de portfolio** para mostrar los proyectos que fuera realizando a nivel personal. Y veía que podía ser también my **útil poder acceder al código** de esos proyectos desde cualquier sitio, para poder consultarlo y reutilizarlo en otros proyectos.

![GitHub](../codemotion2017/imagenes-guion/6.github.png?raw=true)

Para **alojar el código** una alternativa bastante popular es **GitHub**, una plataforma que te permite tener repositorios de código en remoto.

Sin embargo **no veía conexión entre la publicación de la página web y el alojamiento del código con GitHub**. Fue entonces cuando **escuché hablar de GitHub Pages** y tuve mi momento **eureka**.

## Cinematógrafo

Para que **véais cómo me sentí**, vamos a **retroceder hasta finales del siglo XIX**.

![Gif de una de las primeras películas representadas con el cinematógrafo](../codemotion2017/imagenes-guion/7.cinematografo.png?raw=true)

Georges Méliès era un ilusionista que  asistió, invitado por los hermanos Lumière, a la **primera representación del Cinematógrafo**. Méliès quedó **impresionado** (como yo con GitHub Pages) y se **decidió a incluirlo en su función**. Como los hermanos Lumière no se lo quisieron vender, se compró un artilugio de la competencia y lo transformó para que sirviera como cámara y proyector para hacer sus experimentos. Él **llegó a crear 500 películas**.

Con el **descubrimiento de GitHub Pages me pasó algo parecido** aunque a menor escala, porque llevo **30 repositorios** para **publicar distintos experimentos**. 

## 📌GitHub Pages

![Qué es GitHub Pages](../codemotion2017/imagenes-guion/8.que-es-ghp.png?raw=true)

**GitHub Pages es una funcionalidad de GitHub** que te permite **publicar sitios web estáticos** a partir del **código** que subes en un **repositorio**.

## User Site y Project Sites

Cuando **habilitas esta funcionalidad** GitHub te proporciona un **subdominio de github.io** con tu **nombre de usuario** en GitHub:

![Repo + url user site / Repo + url Project site](../codemotion2017/imagenes-guion/9.usersite-projectsites.png?raw=true)

- Para un repositorio con nombre **"username.github.io"** tendrás tu **código publicado en la url https://username.github.io**. Donde username es tu nombre de usuario.

- Para cualquier **otro nombre** de repositorio tendrás tu **código publicado en la url https://username.github.io/repo**.

![Ejemplo sitio web de User Site](../codemotion2017/imagenes-guion/10.usersite-ejemplo.png?raw=true)

 Puedes tener un único User Site y múltiples Project Sites. En la presentación pongo el ejemplo de mi User Site, donde pongo los enlaces a las redes sociales y al blog que tengo.

 Ejemplo User Site: https://cristinafsanz.github.io/.

 Ejemplo Project Site: https://cristinafsanz.github.io/projects/.

## 📌¿Qué necesitas saber?

![Qué necesitas saber](../codemotion2017/imagenes-guion/11.que-necesitas-saber.png?raw=true)

**Nivel básico** de **Git** y del **terminal** para ejecutar los comandos. Y nivel básico de **cómo trabajar con la aplicación web de GitHub**.

Para que veáis que es sencillo trabajar, os pongo la lista de pasos que suelo hacer:

- La primera vez crear cuenta en la aplicación web de GitHub e instalar git en local.

![Crear repo](../codemotion2017/imagenes-guion/12.crear-repositorio.png?raw=true)

Hay que crearse un repositorio en GitHub para almacenar allí tu código.

![Clonar en local](../codemotion2017/imagenes-guion/13.clonar-repositorio.png?raw=true)

Clonamos el repo en local para incluir todos los ficheros en nuestro local.

Dentro del repo puedes copiar la url para hacer "git clone" haciendo click en "Clone or download".

Como podéis ver, a Méliès le gustaba clonarse a sí mismo para sus películas.

![Añadir el código al repo](../codemotion2017/imagenes-guion/14.anadir-codigo.png?raw=true)

Añadimos al código dentro el proyecto clonado. Para ello en el terminal haces "cd nombre-proyecto" para añadir desde ahí el código.

![Subir el código](../codemotion2017/imagenes-guion/15.subir-codigo.png?raw=true)

Subes el código a GitHub primero añadiendo el código en local con git add y git commit y luego haciendo push al repositorio remoto.

![Código en GitHub](../codemotion2017/imagenes-guion/16.codigo-github.png?raw=true)

Los gifs de esta parte son de la película viaje a la luna (de 1902) y el gif actual es como me imagino que llega el código a remoto.

![Habilitar GitHub Pages](../codemotion2017/imagenes-guion/17.habilitar-github-pages.png?raw=true)

Una vez subido el código vas a la pestaña Settings a la sección de GitHub Pages y habilitas GitHub Pages. Lo más común sería elegir la opción de publicar desde master, aunque os explicaré a continuación un caso donde podría resultar mejor subir desde otro origen.

Podéis ver todos los pasos juntos en https://github.com/cristinafsanz/github-pages#origen.

![Imagen de la luna como si fuera un ejemplo de página web publicada](../codemotion2017/imagenes-guion/18.pagina-web-publicada.png?raw=true)

Una vez habilitado GitHub Pages tenemos la página web publicada en la url de User Site o Project Site, dependiendo de qué repositorio hayamos creado.

## 📌 Qué código publicas

![Qué código publicas](../codemotion2017/imagenes-guion/19.que-codigo-publicas.png?raw=true)

![Octotree](../codemotion2017/imagenes-guion/20.octotree.png?raw=true)

Para explicar las distintas formas de publicar con GitHub Pages voy a utilizar la **extensión de Chrome** **Octotree**, que **añade un panel a la izquierda** en la página web de GitHub y que muestra el **proyecto en forma de árbol**, siempre que el proyecto sea público. También lo usaré al mostrar otros repositorios de ejemplo.

A mí me resulta muy útil para ver toda la estructura del proyecto.

![Truco de sobreimpresión](../codemotion2017/imagenes-guion/21.truco-sobreimpresion.png?raw=true)

Para explicar las formas en las que podemos publicar voy a basarme en el truco de sobreimpresión, donde Méliès rebobinaba unas cuantas veces la cinta para grabar un mismo elemento en partes distintas de ella y hacer un efecto de duplicación.

![4 repositorios de código](../codemotion2017/imagenes-guion/22.unproyecto-4formas.png?raw=true)

Basándome en ese truco voy a usar el mismo proyecto y lo voy a publicar de 3 formas distintas, utilizando un repositorio para cada una. Para la última forma se va a explicar a su vez distintas formas de hacerlo.

https://github.com/cristinafsanz/vue-master

https://github.com/cristinafsanz/vue-master-docs

https://github.com/cristinafsanz/vue-gh-pages

https://github.com/cristinafsanz/vue-gh-pages-travis

https://github.com/cristinafsanz/vue-gh-pages-npm

![Página web resultante del proyecto de Jose para Codenares](../codemotion2017/imagenes-guion/23.vue.png?raw=true)

He cogido el proyecto que usó Jose Dongil en su charla de Vue para explicar las distintas formas de publicar.

 ![Proyecto en rama master](../codemotion2017/imagenes-guion/24.vue-master.png?raw=true)

 Para el primer repositorio voy a utilizar el origen más común, master. El código que subes en master es el que se publica.

 En **un ejemplo más sencillo**, como https://github.com/cristinafsanz/cristinafsanz.github.io, lo que queremos es que **todo el código del repositorio se publique**, por lo que habilitando master lo conseguiríamos.

 Pero en el caso del **proyecto de Vue** se utiliza **webpack** para preparar la aplicación para producción. **El código que quiero publicar lo tenemos en el directorio dist**, por lo que si habilitamos GitHub Pages desde master, tendremos la aplicación en https://username.github.io/repo/dist.

![Proyecto en directorio /docs de rama master](../codemotion2017/imagenes-guion/25.vue-docs.png?raw=true)

GitHub Pages nos permite publicar lo que se sube a la carpeta /docs de master, así que vamos a usar esta opción para el segundo repositorio.

Como sólo queremos publicar lo que hay en una carpeta /dist, podemos renombrar esta carpeta destino para que se llame /docs. Así tendremos la aplicación directamente en https://username.github.io/repo.

Sé que puede quedar un poco raro que tengas en una carpeta docs cosas que no son documentación, lo que pasa es que GitHub Pages sólo admite este nombre de carpeta por ahora, así que más no podemos hacer.

Además hay mucha gente que no quiere subir a GitHub el código generado para producción, no quiere subir esa carpeta de distribución.

![Proyecto en rama gh-pages](../codemotion2017/imagenes-guion/26.vue-gh-pages.png?raw=true)

Por ello hay una tercera posibilidad, que es subir el código que queremos publicar en otra rama, que tiene que llamarse gh-pages por convención.

Este proceso es un poco más enfarragoso porque hay que hacer push a 2 ramas con contenidos distintos, en una el proyecto y en otra el código para publicar (el que estaría en /dist o en /docs en los repositorios anteriores).

![Fichero Travis.yml](../codemotion2017/imagenes-guion/27.vue-gh-pages-travis.png?raw=true)

Por ello normalmente se utiliza un servicio de integración continua como Travis para que cuando hagas push a master, se genere el código de producción y se haga push a gh-pages automáticamente.

Además ahora Travis integra con GitHub Pages de forma más sencilla y sólo necesitas añadir un fichero travis.yml. En él indicas el script para generar los ficheros de producción, dónde se generan y la rama origen.

Y también existe la posibilidad de hacer esta publicación en gh-pages usando un plugin de npm: https://github.com/cristinafsanz/vue-gh-pages-npm. Sigues las instrucciones (un par de comandos) y ya lo tienes en gh-pages sin necesidad de complicarte.

## 📌Casos de uso

![Casos de uso: Cursos, presentación, blog y documentación](../codemotion2017/imagenes-guion/28.casos-uso.png?raw=true)

Os voy a contar algunos casos de uso que considero interesantes.

## Cursos y tutoriales

![Casos de uso: Cursos, presentación, blog y documentación](../codemotion2017/imagenes-guion/29.cursos.png?raw=true)

![Truco mujer a la izquierda y después vacío](../codemotion2017/imagenes-guion/30.truco-parar.png?raw=true)

Voy a usar el truco de parar para explicar este caso de uso. Se grababa una escena, se paraba la cámara, se añadían o quitaban elementos y se volvía a grabar.

![Un proyecto y una librería](../codemotion2017/imagenes-guion/31.unproyecto-libreria.png?raw=true)

Yo basándome en este truco os voy a enseñar el mismo proyecto de dos formas distintas. En el segundo repositorio voy a añadir una librería que nos puede venir bien al subir nuestros cursos (o tutoriales, manuales, ...).

https://github.com/cristinafsanz/flexbox-master

https://github.com/cristinafsanz/flexbox-jotted

Voy a partir de 2 ejemplos del curso de Flexbox de Diana Aceves.

Antes de subir nada, hay que saber si tenemos permiso para alojar los cursos de una determinada escuela. En el caso de EscuelaIT les pregunté a ellos y a Diana y me dijeron que no había problema.

Vamos a subir estos ejemplos a la rama master y habilitamos master para GitHub Pages. Con esto tenemos los ejemplos en:

https://username.github.io/repo/example1/

https://username.github.io/repo/example2/

![Repositorio Flexbox](../codemotion2017/imagenes-guion/32.flexbox.png?raw=true)

![Ejemplo Flexbox](../codemotion2017/imagenes-guion/33.ejercicio-flexbox.png?raw=true)

Ahora añado una **librería** que se llama **Jotted**, que es **similar** a un **emulador como JSFiddle** pero para **demos** que queremos tener **en un entorno propio**:

![Librería Jotted](../codemotion2017/imagenes-guion/34.jotted.png?raw=true)

Tenemos los mismos ejemplos que antes en:

https://username.github.io/repo/example1/

https://username.github.io/repo/example2/ 

![Repositorio Flexbox Jotted](../codemotion2017/imagenes-guion/35.flexbox-jotted.png?raw=true)

![Ejercicio Flexbox Jotted](../codemotion2017/imagenes-guion/36.ejercicio-jotted.png?raw=true)

Con esto en la misma página tenemos el código html, css y js en distintas pestañas y en otra el resultado de cómo se ve en un navegador. 

Tanto en el caso de subir el curso sin esta librería como con ella tenemos la ventaja de que **podemos ver la demo sin tener que bajarnos el código de GitHub a local para ver el resultado**, lo que agiliza mucho las cosas. Esta aplicación de GitHub Pages es la que me parece más interesante y que quiero seguir probando en el futuro.

Tengo pendiente mejorar la organización para los cursos y tutoriales que vaya haciendo. Un ejemplo de mejor organización puede ser el que propone Elena Torró con su [e-journal](https://github.com/elenatorro/e-journal).

- Estructura en el fichero INDEX. 3 niveles en carpetas: Curso, Lección y Actividades.

- Calendario para mostrar progreso.

## Presentación

Para hacer esta presentación he utilizado el proyecto WebSlides y el resultado está publicado en GitHub Pages.

![Presentacion](../codemotion2017/imagenes-guion/37.presentacion.png?raw=true)

Estáis viendo un caso de uso en esta misma presentación, ese es el truco.

![Ejemplo esta presentacion](../codemotion2017/imagenes-guion/38.esta-presentacion.png?raw=true)

https://cristinafsanz.github.io/slides/codemotion2017/#slide=1

https://github.com/cristinafsanz/melies-origen

![Instrucciones presentacion](../codemotion2017/imagenes-guion/39.instrucciones-presentacion.png?raw=true)

## Blog

Me creé un blog para hablar del proceso de esta charla, pero también para probar un generador estático distinto al de por defecto (Jekyll).

![Blog](../codemotion2017/imagenes-guion/40.blog.png?raw=true)

https://github.com/cristinafsanz/melies-hugo

https://melies-hugo.js.org/

![Instrucciones Blog](../codemotion2017/imagenes-guion/41.instrucciones-blog.png?raw=true)

El truco es que he usado un generador estático en concreto, no por la velocidad o la tecnologías, sino por el nombre que tiene. Se llama igual que una película que homenajea a Georges Méliès. Éste es el truco.

![Película Hugo](../codemotion2017/imagenes-guion/42.hugo.png?raw=true)

## Documentación

![Documentación](../codemotion2017/imagenes-guion/43.documentacion.png?raw=true)

Puedes documentar un proyecto para explicar de qué va usando el fichero README o la wiki disponible en GitHub.

Un **ejemplo** de documentación sería para las **configuraciones de desarrollo** que tengas (extensiones editor, Chrome, scripts, terminal...): **[Setup](https://github.com/cristinafsanz/setup)**. Así te puede servir para ti y para otros.

Un ejemplo de documentación muy completo es el de **[Guías, tutoriales y snippets](https://github.com/taniarascia/guides) de Tania Rascia**.

La documentación que subes a GitHub se puede escribir en **Markdown**, un lenguaje de marcado más rápido que html:

- [¿Qué es?](https://dev.to/kazz/boost-your-productivity-using-markdown-1be)

- [Extensión de VSCode para ver cómo queda antes de subir a GitHub](https://marketplace.visualstudio.com/items?itemName=hnw.vscode-auto-open-markdown-preview).

Un truco que he visto si no quieres complicarte **añadiendo un estilo inicial** es usar **GitHub theme** en la pestaña de Settings, que activa un diseño entre unos cuantos posibles usando el generador estático por defecto de GitHub, Jekyll.

https://github.com/cristinafsanz/github-page-theme

![Ejemplo de diseños predefinidos](../codemotion2017/imagenes-guion/44.tema-jekyll-inicial.png?raw=true)

![Instrucciones tema Jekyll](../codemotion2017/imagenes-guion/45.instrucciones-tema-jekyll.png?raw=true)

## 📌Alternativas

![📌Alternativas](../codemotion2017/imagenes-guion/46.alternativas.png?raw=true)

Además de GitHub Pages podemos utilizar otras plataformas para publicar nuestros experimentos.

Como primera alternativa podemos contratar un hosting y enlazar con el repositorio de GitHub donde tengamos el código.

Un ejemplo de esto lo podemos encontrar en el blog de Jorge Aznar en el que explica Grid Layout.

http://jorgeatgu.com/ejemplos/css-grid/

https://github.com/jorgeatgu/ejemplos-blog/tree/master/css-grid

![Demo en blog y código en GitHub](../codemotion2017/imagenes-guion/47.hosting.png?raw=true)

También podemos usar Codepen u otro emulador como JSFiddle para publicar la demo de un código que tenemos en GitHub, como hace Sarah Drasner.

https://codepen.io/sdras/pen/d953d844fb3bed2c053fb83874844f64?editors=0110

https://github.com/sdras/JS-stroll/blob/master/1-chapter-1-1-nature-of-code-in-js-svg/js/index.js

![Repo y Codepen](../codemotion2017/imagenes-guion/48.codepen.png?raw=true)

Y como última alternativa que os propongo podemos tener el código en GitHub y publicarlo en otras plataformas como Surge o Netlify, como hace Angel de Miguel en un proyecto de Open Source.

https://github.com/Angelmmiguel/rock-the-open-source

https://angelmmiguel.github.io/rock-the-open-source/

https://rock-the-open-source.surge.sh/

https://rock-the-open-source.netlify.com/

https://www.youtube.com/watch?v=-MXVtFwS6Gw

![Repo con urls a las distintas plataformas](../codemotion2017/imagenes-guion/49.surge-netlify.png?raw=true)

También podemos probar GitLab en vez de GitHub. A muchos desarrolladores les gusta más porque la plataforma en sí es open source.

GitLab también tiene un servicio GitLab Pages.

![GitLab](../codemotion2017/imagenes-guion/50.gitlab.png?raw=true)

## Por qué elijo GitHub Pages

![Por qué elijo GitHub Pages](../codemotion2017/imagenes-guion/51.por-que-github-pages.png?raw=true)

![Un único sitio](../codemotion2017/imagenes-guion/52.un-unico-sitio.png?raw=true)

Porque me ha sido más sencillo de utilizar al conocer GitHub.

Porque es bastante usado en la comunidad y puedes tener ayuda de mucha gente que lo utiliza.

Y sobre todo porque puedo tener código, demostraciones y notas en el mismo sitio. No hace falta bajarte el código del repo a local para ver el resultado, sólo acceder a la url de la demo.

Un ejemplo de esto lo podéis ver con el repositorio https://github.com/cristinafsanz/vuejs-primeros-pasos donde cree una carpeta para publicar los ejercicios del libro de vue de Jose Dongil y tener demo, notas y código en un mismo sitio: https://github.com/cristinafsanz/vuejs-primeros-pasos/tree/master/libro-vue#cap%C3%ADtulo-4-creando-componentes.

## 📌Conclusión

![Conclusión](../codemotion2017/imagenes-guion/53.conclusion.png?raw=true)

Como dije al principio, cuando empecé como desarrolladora front-end quería **crear un portfolio** que **mostrara los proyectos** que fuera realizando, lo que no me esperaba es que el **medio para exponerlo** fuera **GitHub**.

Con cada repositorio explico lo que hecho y cómo lo he hecho. Me sirve tanto para alojar proyectos web como para organizarme y **centralizar lo que aprendo y utilizo**. Y puedo compartirlo con otros a los que les pueda servir. Me sirve para mostrar parte de mi trabajo.

Creo que mi objetivo ha sido cumplido.

![Busca tu medio](../codemotion2017/imagenes-guion/54.busca-tu-medio.png?raw=true)

Espero que esta historia os haya **inspirado** para buscar **vuestra manera de experimentar** y exponer vuestros trabajos. Puede ser GitHub Pages o cualquier otro medio que encontréis.

**Los hermanos Lumiere inventaron el cine pero Méliès lo convirtió en arte. Yo encontré GitHub y lo he convertido en charla.**

![Muchas gracias](../codemotion2017/imagenes-guion/55.gracias.png?raw=true)

¡Muchas gracias!

Os comparto el repo donde tengo todos los casos de uso, las slides con el guión y el blog sobre el proyecto.

[Repo Casos Uso GitHub Pages](https://github.com/cristinafsanz/github-pages)

[Slides y guión](https://github.com/cristinafsanz/slides#comunidad-code)

[Blog](https://melies-hugo.js.org/)

## Creditos

![Creditos](../codemotion2017/imagenes-guion/56.creditos.png?raw=true)

![Creditos](../codemotion2017/imagenes-guion/57.creditos2.png?raw=true)

## Recursos utilizados

- Giphy

- Youtube to gif: https://github.com/F1LT3R/youtube-to-gif

Ejemplo:

youtube-to-gif -u https://www.youtube.com/watch\?v\=uvfwgA6mBu0 -b 40 -d 14 -s 500x375

## Convertir a PDF

Versión inicial: Todas las imágenes de la carpeta imagenes-guion pasarlas de png a archivo pdf con https://pdfcandy.com/png-to-pdf.html.

Después usar la funcionalidad de recortar pdf para adaptarlo al tamaño de la imagen.

## Dominio propio

Si quieres tener un dominio propio tienes que añadir un fichero CNAME con el dominio contratado. 

La desventaja es que pierdes el https y si quieres mantenerlo como en el caso de username.github.io tienes que utilizar CloudFlare u otra alternativa, aunque yo no lo he probado por ahora, para los experimentos que hago suelo dejar el dominio por defecto.


