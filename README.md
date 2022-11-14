# Frontend buscar usuario de GitHub By [JordanGarciaDev] 

Project By [JordanGarciaDev]  - https://github.com/JordanGarciaDev

Live: https://jordangarciadev.github.io/doublevparthers

Api http RESTFUL, CRUD para Tickets

Realizar la prueba con POSTMAN

GET: Se utiliza para consultar información de los tickets al servidor
POST: Se utiliza para crear un nuevo tickets.
PUT: Se utiliza para actualizar un ticket existente.
DELETE: Este método se utiliza para eliminar un ticket.


Crear una base de datos en localhost llamada:  doublevparthers


Correr el Script para crear tabla tickets en MYSQL:  tickets.sql


Se debe Importar el archivo "Servicios Rest Api Tickets.postman.json" en la aplicacion de POSTMAN una vez haya sido
instalada la tabla en la base de datos


Si tiene puerto 8080 configurado consultar el api con el siguiente endpoint :  http://localhost:8080/

Sino tiene puerto 8080 configurado consultar el api con el siguiente endpoint:  http://localhost/doublevparthers/APIS/



Apis Links y Peticion

GET/    - http://localhost:8080/doublevparthers/APIS/listarTicket.php             - se obtienen todos los tickets
GET/1   - http://localhost:8080/doublevparthers/APIS/listarTicket.php?id=1        - se obtiene 1 registro
POST/   - http://localhost:8080/doublevparthers/APIS/crearTicket.php              - se crea un ticket
PUT/    - http://localhost:8080/doublevparthers/APIS/actualizarTicket.php         - actualizar un ticket
DELETE/1 - http://localhost:8080/doublevparthers/APIS/eliminarTicket.php?id=1     - elimina 1 ticket


Formato JSON Para Crear:

{
"usuario": "doublevparthers",
"descripcion": "Este es un ticket de prueba, somos doublevparthers",
"estatus":"1",
"fecha_creacion": "2022-11-13 04:30:00"
}


Para actualizar un registro se debe colocar los siguientes valores en JSON pasando el id del ticket para actualizarlo

 {
    "id": 9,
    "usuario": "doublevparthers",
    "descripcion": "Este es un ticket de prueba, somos doublevparthers",
    "estatus": "1",
    "fecha_creacion": "2022-11-14 20:03:19"
  }



