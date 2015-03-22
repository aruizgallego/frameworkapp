FRAMEWORK MPWAR ALEJANDRO RUIZ GALLEGO

----------------------------------------------------

1 - Creación del VirtualHost

		<VirtualHost *:80>
			DocumentRoot /www/dro\Documents\frameworkapp/public
			ServerName framework.dev
			ServerAlias *.framework.dev
			RewriteEngine On
			RewriteCond %{REQUEST_FILENAME} !^(.+)\.(js|css|gif|png|jpg|swf|ico|txt|html)$
			RewriteRule ^/(.+) /index.php [QSA,L]
		</VirtualHost>

		Añadir al Hosts

2 - Una vez clonado el repositiorio de la app:

		Cargar el dump.sql
		COMPOSER UPDATE

3 - Estructura y configuración:
	
		En el directorio src/Config se encuentas los archivos de configuración.
			Databases ya está con los parametros para el acceso a la BBDD
			En el Container hay dos servicios Test, uno de ellos con dependencias.
			En Route se encuentran las Rutas.
			En el directorio Languages, encontramos archivos yaml para i18n.

		En el directorio src/Controller se encuentran los Controlladores

		En el directorio src/Templates se encuentran los templates de las vistas.

4 - Para acceder a la pagina principal

		http://framework.dev/

		En la pagina principal podemos ver un menú lateral desde el cual se accede a todos los Metodos del Controlador Home. Cada metodo utiliza uno de los requisitos del framework.
