# SistemaWeb
Este es un Sistema Web que gestiona eventos de una Institución Educativa.

Para que el docente pueda revisar este proyecto, necesita tener varias herramientas, ya que el proyecto no pudo ser alojado en un hosting por inconveniente técnicos.

## Requisitos previos

- **XAMPP**: Asegúrese de tener XAMPP instalado en su sistema. Puede descargarlo desde [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
- **Git**: Para clonar este repositorio directamente desde GitHub.

## Instrucciones para configurar y ejecutar el proyecto

### 1. Clonar o descargar el repositorio

1. Puede clonar este repositorio con Git utilizando el siguiente comando:

```bash
git clone https://github.com/tuusuario/nombre-del-repositorio.git

```

2. Alternativamente, puede descargar el repositorio como un archivo ZIP directamente desde GitHub y extraerlo.

### 2. Copiar los archivos al directorio de XAMPP

1. Copie la carpeta del proyecto en el directorio htdocs dentro de la carpeta donde instaló XAMPP. Por ejemplo:

```
"C:/xampp/htdocs/Caso1_HCI_ HugoLainez"

```
Nota: es importante que el directorio principal del proyecto se llame "Caso1_HCI_ HugoLainez", de esta forma se evitará cualquier error en la configuración del sistema

### 3. Importar la base de datos
1. Inicie el servidor MySQL desde el panel de control de XAMPP.
2. Abra su navegador web y acceda a http://localhost/phpmyadmin.
3. Importe el archivo sistemaeducativo.sql (incluido en el repositorio) para crear la base de datos.

### 4. Configurar la conexión a la base de datos
1. Abra el archivo config.php en el directorio raíz del proyecto.
2. Verifique que las credenciales coincidan con su configuración de XAMPP. Por defecto, las credenciales son:

```
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sistemaeducativo';
?>

```

### 5. Ejecutar el proyecto
1. Inicie los servicios de Apache y MySQL desde el panel de control de XAMPP.
2. Abra su navegador web y acceda a http://localhost/Caso1_HCI_ HugoLainez.

## Video de prueba

Se subio un video a YouTube, donde se muestra como funciona el Sistema Web y se prueba que no genera ningun error.

Puede acceder mediante https://youtu.be/ERGcwwHvPd4
