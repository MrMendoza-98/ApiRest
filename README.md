## API RestFul - Tickets ##

### Gestion de la DB ###
Primer paso: Crear una base de datos MySQL con la tabla tickets, la estructura de la tabla se puede observar en el archivo tickets.sql
Segundo paso: Para realizar la demostración se puede insertar los datos tambien descritos en el archico tickets.sql

### Aplicación en tiempo real ###
- Read
Probaremos nuestro ejemplo de lectura para obtener todos los registros de la API REST.
(http://localhost/ApiRest/items/read)
Ahora se quiere recuperar un registro especifico.
(http://localhost/ApiRest/items/read?id=0)
- Create
Probaremos el ejemplo Crear un ticket desde la API REST usando la siguiente URL
(http://localhost/ApiRest/items/create)
Para crear un nuevo registro la API aceptará ingresar los siguientes campos como el ejemplo
{
"user": "Usha",
"description": "its best machine",
"created":"2019-11-09 04:30:00",
"status": "abierto"
}
- Update
Probaremos el ejemplo de actualización desde nuestra API REST
(http://localhost/ApiRest/items/update)
Para actualizar registro la API aceptará ingresar los siguientes campos como el ejemplo
{
"id": "60",
"user": "Kariane",
"description": "its best machine",
"modified":"2019-11-09 04:30:00",
"status": "abierto"
}
- Delete
Probaremos el ejemplo de Eliminar un registro de la API REST usando la siguiente URL
(http://localhost/ApiRest/items/delete)
Para poder eliminar registros será obligatorio el Id del registro.
{
"id": 60
}