# Sistema-Ticket // Proyecto Practica Laboral.

Hecho anteriormente con Codeigniter 3.1.11, pero ahora se utilizó version 3.1.13 debido al tema de la libreria de sesiones.

## Tecnologías utilizadas:
- PHP
- Codeigniter 3 (3.1.13)
- MVC (Modelo-Vista-Controlador)
- PostgreSQL
- HTML
- CSS
- JavaScript
- Bootstrap 4
- jQuery (ajax) -> Select Dinamico (https://www.youtube.com/watch?v=bxA6M9LYrPk)
- DataTables
- XAMPP
- AdminLTE 3 | Dashboard -> https://adminlte.io/themes/v3/

## Instalación
- ```git clone https://github.com/diegoivg98/Sistema-Ticket.git```
- Crear BD en pgAdmin e importar el archivo bdticket.sql
- Configurar archivo database.php 
- Ejecutar modulo Apache del XAMPP 

## Descripción:

Cuenta con 4 tipos de usuario(Funcionario, Administrador, Técnico y Superusuario)
- **Funcionario**: Creacion de tickets y visualizar los distintos tipos de estados (Solucionado/Cancelado/Derivado).
- **Administrador**: Recibir tickets por parte de Funcionario, dar solucion/cancelar/derivar tickets al Técnico y creacion de tickets.
- **Tecnico**: Solo Recibe tickets de Funcionario/Administrador, los derivados por parte de Administrador y dar solución o cancelar los tickets.
- **Superusuario**: Acceso a todas las vistas, creacion y edición de los mantenedores (Usuario, Perfil, Establecimiento, Categoría, Subcategoría, etc....). 
- Contraseñas encriptadas con **SHA256**.
- Script para validar RUT (sin puntos pero con digito identificador unico)
 
# Login
<p align="center">
  <img src="https://github.com/diegoivg98/Sistema-Ticket/blob/main/res/login.png" width="350">
  <img src="https://github.com/diegoivg98/Sistema-Ticket/blob/main/res/loginerror.png" width="300">
</p>

# Creación de usuario y su rol
<p align="center">
  <img src="https://github.com/diegoivg98/Sistema-Ticket/blob/main/res/form.png" width="750">
</p>

# Creación del ticket
<p align="center">
  <img src="https://github.com/diegoivg98/Sistema-Ticket/blob/main/res/formticket.png" width="800">
</p>

# Estado del ticket (Solucion/Cancelar)
<p align="center">
  <img src="https://github.com/diegoivg98/Sistema-Ticket/blob/main/res/solucion.png" width="800">
  <img src="https://github.com/diegoivg98/Sistema-Ticket/blob/main/res/solucion2.png" width="800">
</p>
