# Recuperacion
 
El proyecto consiste en una aplicacion web que permite registrar vehiculos, los cuales tienen un dueño y una marca, la aplicacion ademas   permite ver todos los vehiculos registrados en el sistema y ver cuantos vehiculos pertenecen a una marca registrada.
Los pasos para que el proyecto funcione son:
1. configurar el archivo .env dependiendo del gestor y el nombre de la base de datos que se vaya a usar.
2. realizar una migracion con el comando php artisan migrate
3. cargar los datos iniciales a la base de datos con el comando php artisan db:seed
4. poner a correr el pryecto con el comand php artisan serve

Como utlizar el proyecto:
Debe ingresar la url localhost:8000/A765 o 127.0.0.1:8000/A765, al hacer esto le aparecera una interfaz con 3 botones, uno que permite registrar vehiculos, uno para ver los vehiculos registrados en el sistema y uno para ver cuantos vehiculos  pertenecen a cada marca registrada, todas las interfaces del sistema poseen un boton para volver a esta interfaz principal con los 3 botones, si da click en registrar le aparecera un formualrio, cuando llene el formulario orpima el boton registrar, esto registrara el vehiculo, el cual podra observar si da click en listar vehiculos.
