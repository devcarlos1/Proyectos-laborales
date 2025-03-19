# ![EL GUERO MASONRY]

## Folder Directory

Los archivos de la pagina web se subdividen de la siguiente manera:

* `./fonts `: Archivo donde se alojan las fuentes usadas en la pagina web.
* `./fonts `: Archivo donde se alojan la fuente rubik usada en la pagina web.
* `./icon `: Carpeta donde se alojan la iconografia usadas en la pagina web.
* `./img `: Carpeta donde se alojan las imagenes usadas en la pagina web.
* `./img/img-min `: Carpeta donde se alojan las imagenes usadas en la seccion de Gallery.

## Upload Images

La carga de archivos se debe realizar en la carpeta `./img/img-min`. Antes de cargar los archivos debe tener en cuenta lo siguiente: 
1. Los archivos deben ser en formato 'jpg' para asegurar la busqueda y carga correcta del archivo por parte del archivo `js.js`.
2. Los archivos deben seguir la secuencia establecida numericamente, es decir deben ser nombrados de la siguiente manera: img-min-"Numero".

Despues de seguido lo establecido anteriormente, puede hacer carga de archivo(s) y debe seguir los siguientes pasos:
1. Ingresar en el archivo `./js.js`.
2. Buscar dentro del codigo y editar el valor de la variable denominada "maxImg". Por ejemplo si la linea de codigo donde esta ubicada la variable muestra esta forma: "const maxImg = 84", debe modificar el valor numerico por el ultimo valor de la secuencia de las imagenes en la carpeta `./img/img-min`. 
3. Verifique el correcto funcionamiento y visualizacion de la seccion de 'Gallery' de la pagina web.

