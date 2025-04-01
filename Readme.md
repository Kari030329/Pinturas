# Ejemplo MVC

##  
Este sistema permite registrar, editar y eliminar pinturas utilizando el patrón de arquitectura Modelo-Vista-Controlador (MVC). Está diseñado para gestionar de manera eficiente la información de pinturas en una tienda.

<a id='contents'></a>
## Contenido.
<ul>
<li><a href="#intro">Introdución.</a></li>
<li><a href="#Instalacion">Instalación.</a></li>
<li><a href="#Arq">Arquitectura.</a></li>
<li><a href="#conclusions">Conclusions</a></li>
<li><a href="#reference">Referencias</a></li>
</ul>
  
<a id='intro'></a>
### Introdución.

En el desarrollo de aplicaciones web para la gestión de una tienda de pinturas, la base de datos juega un papel fundamental al almacenar información clave sobre los productos, como marcas, colores, precios y disponibilidad. Para acceder y manipular estos datos de manera eficiente, se utilizan peticiones URL que permiten a los clientes y administradores interactuar con el sistema a través de una interfaz web intuitiva.

Cada URL representa una solicitud específica que el servidor web Apache procesa mediante archivos ocultos de acceso de hipertexto, ubicados en la raíz de la aplicación y en directorios clave como public y app. Estas solicitudes pueden utilizarse para mostrar catálogos de pinturas, recuperar detalles de productos almacenados en la base de datos y facilitar operaciones como la compra, actualización de inventario o generación de reportes de ventas.

Gracias a esta estructura, el sistema de la tienda de pinturas garantiza una navegación fluida y segura, optimizando la experiencia del usuario y la gestión interna del negocio.<br>
<a href="#contents">Ir a Contenido.</a>

<a id='Instalacion'></a>
### Instalación
1. Clonar el repositorio en el servidor local:
   ```sh
   git clone https://github.com/usuario/pinturas.git
   ```
2. Configurar la base de datos MySQL:
   - Crear una base de datos llamada `pinturas`.
   - Importar el archivo `db.sql` que contiene la estructura de la base de datos.
3. Configurar el archivo `/config/config.php` con las credenciales de la base de datos.
4. Asegurarse de que el servidor tenga habilitado PHP y MySQL.

## Funcionalidades
- **Registrar Pinturas:** Agregar nuevas pinturas con su marca, color, precio y tamaño.
- **Editar Pinturas:** Modificar los detalles de una pintura existente.
- **Eliminar Pinturas:** Eliminar una pintura de la base de datos.
- **Listar Pinturas:** Mostrar todas las pinturas disponibles en la tienda.

## Uso del Proyecto
1. Acceder al sistema a través del navegador ingresando a:
   ```
   http://localhost/pinturas/
   ```
2. Desde la interfaz principal, se pueden ver las pinturas registradas y acceder a las opciones de edición o eliminación.
3. Para agregar una nueva pintura, hacer clic en "Agregar" y completar el formulario.<br>
<a href="#contents">Ir a Contenido.</a>

<a id='Arq'></a>

## Arquitectura MVC
### **Modelo (`modelo/PinturaModelo.php`):**
Maneja las operaciones de base de datos, como:
- Obtener todas las pinturas.
- Insertar una nueva pintura.
- Actualizar información de una pintura.
- Eliminar una pintura.

### **Vista (`vista/pinturas.php`):**
Contiene la estructura HTML y muestra la información proporcionada por el controlador.

### **Controlador (`controlador/PinturaControlador.php`):**
Se encarga de:
- Procesar las solicitudes de los usuarios.
- Obtener datos del modelo.
- Enviar la información a la vista correspondiente.




<a href="#contents">Ir a Contenido.</a>

<a id='conclusions'></a>
### Conclusiones.

El uso de una base de datos en una tienda de pinturas, junto con la correcta gestión de peticiones URL, permite optimizar la organización y disponibilidad de los productos, asegurando una experiencia eficiente tanto para los clientes como para los administradores. A través del servidor web Apache y los archivos de acceso de hipertexto, el sistema puede responder dinámicamente a las solicitudes, mostrando información en tiempo real, gestionando el inventario y facilitando transacciones seguras.

En conclusión, la integración de estas tecnologías no solo mejora la operatividad de la tienda, sino que también garantiza un acceso rápido y estructurado a los recursos electrónicos. Esto permite una administración eficaz y un servicio ágil para los usuarios, consolidando un entorno digital moderno y funcional.

## Autor
Desarrollado por [Rios Gomez Karina Rubi].

## Licencia
Este proyecto está bajo la licencia MIT. Puedes utilizarlo y modificarlo libremente.<br>
<a href="#contents">Ir a Contenido.</a>

<a id='reference'></a>
### Referencia.

[GUIA de ejemplo MVC de Profesor: Martin Cordero Ocampo repositorio MVC ejemplo:https:](https://github.com/miRepositorioGit/EjemploMvcObjetos)
