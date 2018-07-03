# TrusTEC

TrusTEC es una aplicación web de prestamos dentro de un ambiente laboral, se basa en el sistema de publicación y solicitud por medio de notificaciones al usuario. Se maneja el tema de 'estados' para los productos (0: no publicado, 1: publicado, 2: prestado) y prestamos (0: pendiente ,1: aceptado ,2: rechazado ,3: en transcurso).

## Requisitos previos

Para el manejo del proyecto localmente, previamente debes tener instalada la base de datos mysql y tener instalado composer en el equipo.

## Instalación

### Proyecto 		

Lo primero es clonar/descargar el archivo via zip.

Clonar el archivo 
```
git clone git://github.com/SpaceBear96/trustec 
```

Luego debemos instalar las dependencias usando composer.

```
composer install
```

Para el archivo de configuración (.env) haremos lo siguiente.

```
copy .env.example .env
```

-Generando la API KEY-
```
php artisan key:generate
```

### Bade de datos

Lo primero es configurar el archivo .env 

```
DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```
Y por ultimo migrar los datos.

```
php artisan migrate
```

## Usando Git

Para cada usuario nuevo se recomienda crear un rama con su nombre.

```
git checkout -b *nombre*
```

Y cada vez que quieran subir su progreso usaran su respectiva rama.

```
git push trustec *su nombre*
```

## Programadores

* **Junior Aguilar** - *BackEnd* - [SpaceBear96](https://github.com/SpaceBear96)

* **John Fabian** - *BackEnd* - [-](https://github.com/SpaceBear96)

* **Sebastian Cueva** - *FrontEnd* - [-](https://github.com/SpaceBear96)

También pueden revisar la lista de [contribuidores](https://github.com/SpaceBear96/trustec/graphs/contributors).
