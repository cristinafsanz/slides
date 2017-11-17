# Guión charla Codemotion

## Ilusionismo con GitHub Pages

🎨 [Cartel de Viaje a la luna con el título de la charla]

Bienvenidos a la charla de "Ilusionismo con GitHub Pages".

Antes de empezar me gustaría contar un poco el por qué de usar este cartel.

Voy a mezclar la charla de hoy con la historia de Georges Méliès, uno de los pioneros del cine. En sus películas era director, guionista, actor, decorador, operador y montador.  __Creo que sólo le faltaba vender las palomitas. En nuestro sector se le considera un gran artista full-stack__ 😂 .

## Presentación

🎨 [Avatar a la izquierda y mi nombre, qué soy y dónde trabajo a la derecha]

Me presento, soy Cristina Fernández, trabajo como desarrolladora Front-end y me podéis seguir en las redes como @cristinafsanz, tanto en twitter como en GitHub. Trabajo actualmente en Kairos Digital Solutions aunque la charla de hoy la he hecho a partir de un proyecto personal.

## 📌 Agenda

En la charla voy a hablar de:

- ¿Por qué surge esta charla?

- ¿Qué es GitHub Pages?

- ¿Qué necesitas saber?

- Casos de casos

- Alternativas

- ¿Por qué elijo GitHub Pages?

__Además, para amenizar la charla voy a explicar varios trucos de magia que creó Georges Méliès. Y es que antes de pionero del cine fue ilusionista__ 😍

## 📌¿Por qué surge esta charla?

🎨 [Porfolio web]

Cuando empecé como desarrolladora front-end quería tener un portfolio con todas las maquetaciones web que fuera realizando. 

__En la presentación os pongo cómo hubiera sido el portfolio de Méliès, que me parece más curioso__ 😂

Un tiempo después me di cuenta que sería también útil poder acceder al código de esas páginas web, para poder consultarlo y reutilizarlo en otros proyectos.

🎨 [GitHub]

Para alojar el código una alternativa bastante popular es GitHub, una plataforma que te permite alojar repositorios de código en remoto. Además usa el sistema de control de versiones Git, que te permite volver a anteriores versiones de tus proyectos. __Lo de poder volver atrás en el tiempo siempre me ha gustado, como buena fan de Regreso al Futuro__ 😂

Sin embargo veía la publicación de la página web y el alojamiento del código para 2 situaciones distintas. Fue entonces cuando escuché hablar de GitHub Pages y tuve mi momento eureka.

## Cinematógrafo

Para explicaros cómo me sentí voy a retroceder a finales del siglo XIX.

🎨 [Gif de una de las primeras películas representadas con el cinematógrafo]

Georges Méliès era un ilusionista que  asistió, invitado por los hermanos Lumière, a la primera representación del Cinematógrafo. Méliès quedó impresionado y se decidió a incluirlo en su función. Como los hermanos Lumière no se lo quisieron vender, se compró un artilugio de la competencia y lo transformó para que sirviera como cámara-proyector para hacer sus experimentos. __Y aquí es cuando me di cuenta de que Georges Méliès y yo tenemos vidas paralelas, él llegó a crear 500 películas y yo he llegado a tener 30 repositorios, a lo mejor os parecen pocos, pero dadme tiempo.__ 😂.

## 📌GitHub Pages

GitHub Pages es una funcionalidad de GitHub que te permite publicar en Internet el código web estático (html, css y JavaScript) que tienes subido en un repositorio.

## User Site y Project Sites

Cuando habilitas esta funcionalidad te proporciona un dominio (__por desgracia no un dominio de la tecnología, sino un dominio web__ 😂.) El dominio que te da es a partir de tu nombre de usuario:

🎨 [Repo + url user site / Repo + url Project site]

- Para un repositorio que nombres como "username.github.io" tendrás la url https://username.github.io.

- Para cualquier otro nombre de repositorio tendrás una url https://username.github.io/repo.

🎨 [Ejemplo página web de User Site]

 Puedes tener un único User Site y múltiples Project Sites.

## 📌¿Qué necesitas saber?

Nivel básico de Git y del terminal para ejecutar los comandos. Y nivel básico de cómo trabajar con la interfaz gráfica de GitHub.

Para que veáis que es sencillo trabajar, os pongo la lista de pasos que suelo hacer:

- La primera vez crear cuenta en la aplicación web de GitHub e instalar git en local.

🎨 [Crear repo]

🎨 [Clonar en local]

🎨 [Añadir el código al repo]

🎨 [Subir el código]

🎨 [Habilitar GitHub Pages]

🎨 [Imagen de la luna como si fuera un ejemplo de página web publicada]

## 📌 Qué código publicas

🎨 [Octotree]

__Ha llegado el momento de explicar los trucos de magia__ 😂 y para ellos voy a utilizar la extensión de Chrome Octotree, que añade un panel a la izquierda en la página de GitHub y que muestra el proyecto en forma de árbol, siempre que el proyecto sea público.

🎨 [Truco de sobreimpresión]

Para explicar las formas en las que podemos publicar voy a basarme en el truco de sobreimpresión, donde Méliès rebobinaba la cinta para grabar su cabeza en distintos sitios.

🎨 [Página web resultante del proyecto de Jose para Codenares]

Basándome en ese truco voy a utilizar el proyecto que usó Jose Dongil en su charla de Vue y voy a publicarlo de distintas formas.

 🎨 [Proyecto en rama master]

 Voy a subir el mismo proyecto a 3 repositorios distintos y en cada uno de ellos voy a publicar desde un origen distinto. 

 Para el primer repositorio voy a utilizar el origen más común, master. El código que subes en master es el que se publica.

 Se trata de un proyecto vue que utiliza webpack para preparar la aplicación para producción. El código que quiero generar lo tenemos en el directorio dist, por lo que si habilitamos GitHub Pages desde master, tendremos la aplicación en https://username.github.io/repo/dist.

🎨 [Proyecto en directorio /docs de rama master]

GitHub Pages nos permite publicar lo que se sube a la carpeta /docs de master, así que vamos a usar esta opción para el segundo repositorio.

Como sólo queremos publicar lo que hay en una carpeta /dist, podemos renombrar esta carpeta destino para que se llame /docs. Así tendremos la aplicación directamente en https://username.github.io/repo.

Sé que puede quedar un poco raro que tengas en una carpeta docs cosas que no son documentación, lo que pasa es que GitHub Pages sólo admite este nombre de carpeta por ahora, así que mucho no podemos hacer.

🎨 [Proyecto en rama gh-pages]

Por ello hay una tercera posibilidad, que es subir el código que queremos publicar en otra rama, que tiene que llamarse gh-pages por convención.

Este proceso es un poco más enfarragoso porque hay que hacer push a 2 ramas con contenidos distintos, en una el proyecto y en otra el código para publicar (el que estaría en /dist o en /docs en los repositorios anteriores).

🎨 [Fichero Travis.yml] 

Por ello normalmente se utiliza un servicio de integración continua como Travis para que cuando hagas push a master, se genere el código de producción y se haga push automáticamente a gh-pages.

Además ahora Travis integra con GitHub Pages y sólo necesitas añadir un fichero travis.yml añadiendo el script necesario para generar los ficheros de producción, el directorio y la rama origen.

## 📌Casos de uso

🎨 [Casos de uso: Cursos, presentación, blog y documentación]

Os voy a contar algunos casos de uso que considero interesantes.

## Cursos y tutoriales

🎨 [Truco mujer a la izquierda y un esqueleto a la derecha] 

Voy a usar el truco de parar para explicar este caso de uso.

Se grababa una escena, se paraba la cámara, se añadían o quitaban elementos y se volvía a grabar.

Yo basándome en este truco os voy a enseñar el mismo proyecto de dos formas distintas. En el segundo repositorio voy a añadir una librería que nos puede venir bien al subir nuestros cursos.

Voy a partir de 2 ejemplos del curso de Flexbox de Diana Aceves. 

Vamos a subir estos ejemplos a la rama master y habilitamos master para GitHub Pages. Con esto tenemos los ejemplos en:

https://username.github.io/repo/example1/

https://username.github.io/repo/example2/

🎨 [Ejemplo con demo, código y notas]

Ahora añado una librería que se llama Jotted, que es similar a un emulador como JSFiddle pero para demos que queremos tener en un entorno propio:

🎨 [Librería Jotted y resultado]

Tenemos los mismos ejemplos que antes en:

https://username.github.io/repo/example1/

https://username.github.io/repo/example2/ 

Sin embargo en la misma página tenemos el código html, css y js en distintas pestañas y en otra el resultado de cómo se ve en un navegador.

## Presentación

Para hacer esta presentación he utilizado el proyecto WebSlides y el resultado está publicado en GitHub Pages.

__Estáis viendo un caso de uso en esta misma presentación, ese es el truco__ 😂.

🎨 [Url de las slides]

## Blog

Me creé un blog para hablar del proceso de esta charla, pero también para probar un generador estático distinto al de por defecto (Jekyll).

🎨 [Url del blog]

El truco es que __he usado un generador estático en concreto, no por la velocidad o la tecnologías, sino por el nombre que tiene__ 😂. Se llama igual que una película que homenajea a Georges Méliès. Éste es el truco.

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

Porque es bastante usado en la comunidad y puedes tener ayuda de mucha gente que lo utiliza.

Y sobre todo porque puedo tener código, demostraciones y notas en el mismo sitio.

De hecho GitHub se puede utilizar para casi todo: para escribir novelas, como JJMerelo; para organizarse una charla, como he estado haciendo yo. __Sólo faltaría poder grabar y proyectar películas para que fuese perfecto__ 😂.

## 📌Conclusión

Los hermanos Lumiere inventaron el cine pero Méliès lo convirtió en arte. Yo encontré GitHub y he empezado a experimentar con el código web.

Espero que esta charla os inspire para buscar el medio para hacer vuestro arte. ¿Os imagináis qué podríais crear?

¡Gracias!

## Recursos utilizados

- Giphy

- Youtube to gif: https://github.com/F1LT3R/youtube-to-gif

Ejemplo:

youtube-to-gif -u https://www.youtube.com/watch\?v\=uvfwgA6mBu0 -b 40 -d 14 -s 500x375
