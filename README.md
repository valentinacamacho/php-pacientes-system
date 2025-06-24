<a id="readme-top"></a> <details>
  <summary>Tabla de contenido</summary>
  <ol>
    <li>
      <a href="#acerca-del-proyecto">Acerca del Proyecto</a>
      <ul>
        <li><a href="#objetivo-del-proyecto">Objetivo del Proyecto</a></li>
        <li><a href="#tecnologias-utlizadas">Tecnologías Utilizadas</a></li>
        <li><a href="#funcionalidades">Funcionalidades Implementadas</a></li>
      </ul>
    </li>
    <li>
      <a href="#guia-inicial">Guía Inicial</a>
      <ul>
        <li><a href="#prerequisitos">Prerequisitos</a></li>
        <li><a href="#instalacion">Instalación</a></li>
      </ul>
    </li>
  </ol>
</details>

---

### Objetivo del Proyecto

Desarrollar un sistema de gestión de pacientes mediante la implementación de un CRUD (Crear, Leer, Actualizar y Eliminar) utilizando el lenguaje de programación PHP, con conexión a una base de datos MySQL, permitiendo el almacenamiento, consulta y administración eficiente de la información de los pacientes. El sistema será ejecutado en un entorno local con XAMPP y contará con herramientas de apoyo como Postman para pruebas de API y Visual Studio Code como entorno de desarrollo.

<p style="text-align: right;">
  <a href="#readme-top">volver arriba</a>
</p>

---

### Tecnologías Utilizadas

![PHP-logo]<br>
*Propósito:* Lenguaje de programación del lado del servidor utilizado para desarrollar la lógica del sistema de gestión de pacientes. Permite la creación de controladores, modelos y conexión con bases de datos.
[PHP Manual][Php-url] 

![MySQL-logo]<br>
*Propósito:* Sistema de gestión de bases de datos relacional utilizado para almacenar información de pacientes.
[MySQL][Mysql-url]

![Workbench-logo]<br>
*Propósito:* Herramienta gráfica oficial de MySQL que permite diseñar, modelar, consultar y administrar la base de datos del sistema de pacientes de forma visual e intuitiva.
[MySQL Workbench][Mysql-url]

![XAMPP-logo]<br>
*Propósito:* Entorno de desarrollo local que incluye Apache, MySQL y PHP. Facilita el despliegue y pruebas del sistema de pacientes sin necesidad de un servidor en producción.
[XAMPP][Xampp-url]

![Postman-logo]<br>
*Propósito:* Herramienta para probar APIs REST creadas en PHP. Permite enviar peticiones GET, POST, PUT y DELETE para validar el funcionamiento del backend del sistema.
[Postman][Postman-url]

<p style="text-align: right;">
  <a href="#readme-top">volver arriba</a>
</p>

---


##  Endpoints del API - Pacientes


###  Obtener todos los pacientes
- **Método:** `GET`  
- **URL:** `http://localhost/sistema_pacientes/backend/routes/PacienteRoute.php` 
- **Endpoint:** `/PacienteRoute`   
- **Descripción:** Retorna todos los pacientes registrados en la base de datos.  
- **Código de respuesta esperado:** `200 OK`  
- **Errores posibles:**  
  - `500 Internal Server Error` – si hay un problema con la conexión o la consulta

---

### Obtener paciente por ID
- **Método:** `GET`  
- **URL:** `http://localhost/sistema_pacientes/backend/routes/PacienteRoute.php?id=1`  
- **Endpoint:** `/PacienteRoute?id={id}`  
- **Descripción:** Retorna los datos de un paciente específico según su ID.  
- **Código de respuesta esperado:** `200 OK`  
- **Errores posibles:**  
  - `404 Not Found` – si no existe un paciente con ese ID  
  - `400 Bad Request` – si el parámetro `id` no es válido

**Ejemplo de respuesta JSON:**
```json
{
  "id": 1,
  "tipo_documento_id": 1,
  "numero_documento": "1234567890",
  "nombre1": "Carlos",
  "nombre2": "Andrés",
  "apellido1": "Pérez",
  "apellido2": "Gómez",
  "genero_id": 1,
  "departamento_id": 1,
  "municipio_id": 1,
  "correo": "andresperez@example.com"
}
````

### Crear u nuevo paciente
- **Método:** `POST`  
- **URL:** `
http://localhost/sistema_pacientes/backend/routes/PacienteRoute.php`  
- **Descripción:** Registra un nuevo paciente en la base de datos.
- **Código de respuesta esperado:** `201 Created`  
- **Errores posibles:**  
  - `400 Bad Request` – si los datos están incompletos o son inválidos.
  - `500 Internal Server Error` – si falla la inserción en la base de datos.

**Ejemplo de respuesta JSON:**
```json
{
  "tipo_documento_id": 2,
  "numero_documento": "1231231230",
  "nombre1": "Lucía",
  "nombre2": "María",
  "apellido1": "Ramírez",
  "apellido2": "Tovar",
  "genero_id": 2,
  "departamento_id": 3,
  "municipio_id": 5,
  "correo": "lucia.ramirez@example.com"
}
````


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->


[PHP-logo]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white  
[PHP-url]: https://www.php.net/manual/es/

[MySQL-logo]: https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white  
[MySQL-url]: https://www.mysql.com/

[Workbench-logo]: https://img.shields.io/badge/MySQL%20Workbench-4479A1?style=for-the-badge&logo=mysql&logoColor=white  
[Workbench-url]: https://dev.mysql.com/doc/workbench/en/

[XAMPP-logo]: https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=apache&logoColor=white  
[XAMPP-url]: https://www.apachefriends.org/es/index.html

[Postman-logo]: https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white  
[Postman-url]: https://www.postman.com/