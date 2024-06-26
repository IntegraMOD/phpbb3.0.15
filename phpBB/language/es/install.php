<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Configuración del administrador',
	'ADMIN_PASSWORD'			=> 'Contraseña del administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirme contraseña del administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Por favor, introduzca una contraseña de entre 6 y 30 caracteres de longitud.',
	'ADMIN_TEST'				=> 'Verificar configuración del administrador',
	'ADMIN_USERNAME'			=> 'Nombre del administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Por favor, introduzca un nombre de entre 3 y 20 caracteres de longitud.',
	'APP_MAGICK'				=> 'Soporte ImageMagikc [ Adjuntos ]',
	'AUTHOR_NOTES'				=> 'Notas del autor<br />» %s',
	'AVAILABLE'					=> 'Disponible',
	'AVAILABLE_CONVERTORS'		=> 'Conversores disponibles',

	'BEGIN_CONVERT'					=> 'Comenzar conversión',
	'BLANK_PREFIX_FOUND'			=> 'Una consulta de sus tablas ha mostrado una instalación válida que no usa prefijos.',
	'BOARD_NOT_INSTALLED'			=> 'No se encontró una instalación',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'El conversor unificado de phpBB requiere una instalación por defecto de phpBB3 para funcionar, por favor <a href="%s">proceda a instalar phpBB3 por primera vez</a>.',
	'BACKUP_NOTICE'					=> 'Por favor, haga una copia de seguridad de su foro antes de la actualización en caso de que surjan problemas durante el proceso de actualización.',

	'CATEGORY'					=> 'Categoría',
	'CACHE_STORE'				=> 'Tipo de caché',
	'CACHE_STORE_EXPLAIN'		=> 'La ubicación física dónde se cachea la información, es preferible el sistema de archivos.',
	'CAT_CONVERT'				=> 'Convertir',
	'CAT_INSTALL'				=> 'Instalar',
	'CAT_OVERVIEW'				=> 'Vista global',
	'CAT_UPDATE'				=> 'Actualizar',
	'CHANGE'					=> 'Cambiar',
	'CHECK_TABLE_PREFIX'		=> 'Por favor, verifique el prefijo y pruebe de nuevo.',
	'CLEAN_VERIFY'				=> 'Limpiando y verificando la estructura final',
	'CLEANING_USERNAMES'		=> 'Borrando nombres de usuario',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> es el nombre limpio para:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Se encontraron nombres de usuario superpuestos en su viejo sitio. Con el fin de completar la instalación por favor borre o renombre a esos usuarios, así habrá solamente un usuario en su viejo sitio para cada nombre.',
	'COLLIDING_USER'			=> '»ID de usuario: <strong>%d</strong> nombre de usuario: <strong>%s</strong> (%d mensajes)',
	'CONFIG_CONVERT'			=> 'Convirtiendo la configuración',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'No fue posible editar el archivo de configuración. Métodos alternativos para que este archivo sea creado y editado correctamente se muestran abajo.',
	'CONFIG_FILE_WRITTEN'		=> 'El archivo de configuración ha sido editado. Ahora puede proceder al siguiente paso de la instalación.',
	'CONFIG_PHPBB_EMPTY'		=> 'La variable de configuración para "%s" está vacía.',
	'CONFIG_RETRY'				=> 'Reintentar',
	'CONTINUE_CONVERT'			=> 'Continuar conversión',
	'CONTINUE_CONVERT_BODY'		=> 'Se ha determinado un intento previo de conversión. Puede elegir entre iniciar una nueva conversión o continuar la existente.',
	'CONTINUE_LAST'				=> 'Continuar al último paso',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar conversión anterior',
	'CONVERT'					=> 'Convertir',
	'CONVERT_COMPLETE'			=> 'Conversión completada',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Ha convertido su sitio a phpBB 3.1 correctamente. Ahora puede identificarse y <a href="../">acceder a su sitio</a>. Recuerde que hay ayuda disponible en línea para usar phpBB3 vía <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentación</a>, y los <a href="https://www.phpbb.com/community/viewforum.php?f=466">foros de soporte</a> (ambos en inglés).',
	'CONVERT_INTRO'				=> 'Bienvenido al conversor unificado de phpBB',
	'CONVERT_INTRO_BODY'		=> 'Desde aquí puede importar datos de otros sitios instalados. La lista de abajo muestra todos los módulos de conversión disponibles actualmente. Si no hay ningún conversor mostrado para la versión que quiere, por favor visite nuestro sitio web dónde puede haber más módulos para descargar.',
	'CONVERT_NEW_CONVERSION'	=> 'Nueva conversión',
	'CONVERT_NOT_EXIST'			=> 'El conversor especificado no existe.',
	'CONVERT_OPTIONS'			=> 'Opciones',
	'CONVERT_SETTINGS_VERIFIED'	=> 'La información que ingresó ha sido verificada. Para iniciar el proceso de conversión, haga clic en el botón de abajo.',
	'CONV_ERR_FATAL'			=> 'Error fatal en la conversión',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'El FTP para subir adjuntos está habilitado en el viejo sitio. Por favor, deshabilite esta opción de FTP y asegúrese de especificar una capeta válida para subir, luego copie todos los adjuntos a esta nueva carpeta. Una vez hecho esto, reinicie el conversor',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'No hay información de conversión disponible para la misma.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Imposible obtener información de acceso al foro.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Imposible obtener las categorías.',
	'CONV_ERROR_GET_CONFIG'				=> 'No se puede recuperar la información de su sitio.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Imposible acceder/leer "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Imposible obtener información de autentificación de grupo.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistencia en tabla de grupos detectada en add_bots() - es necesario agregar manualmente todos los grupos especiales.',
	'CONV_ERROR_INSERT_BOT'				=> 'Imposible insertar bot en la tabla de usuarios.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Imposible insertar bot en la tabla de robots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Imposible insertar usuario en la tabla user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Error de parseo',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota para el desarrollador: tiene que especificar $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'La ruta relativa del sitio no ha sido especificada.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota para el desarrollador: ha de especificar $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'No se puede encontrar el grupo "%1$s" en %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota para el desarrollador: ha de especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota para el desarrollador: ha de especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota para el desarrollador: ha de especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Imposible insertar/actualizar la configuración de permisos.',
	'CONV_ERROR_PM_COUNT'				=> 'Imposible seleccionar carpeta contadora de MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Imposible insertar nuevo foro reemplazando antigua categoría.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Imposible insertar nuevo foro reemplazando antiguo foro.',
	'CONV_ERROR_USER_ACCESS'			=> 'Imposible obtener información de autentificación de usuario.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grupo incorrecto "%1$s" definido en %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página recopila los datos requeridos para acceder al foro antiguo. Introduzca los detalles de la base de datos de su foro; el conversor no cambiará nada en esa base de datos. Debe deshabilitarse el foro antiguo para una conversión correcta.',
	'CONV_SAVED_MESSAGES'				=> 'Mensajes guardados',

	'COULD_NOT_COPY'			=> 'No se puede copiar archivo <strong>%1$s</strong> a <strong>%2$s</strong><br /><br />Por favor, verifique que la carpeta de destino existe y que el webserver pueda escribir ahí.',
	'COULD_NOT_FIND_PATH'		=> 'No se puede encontrar la ruta a su antiguo sitio. Por favor, verifique sus parámetros e intente de nuevo.<br />» La ruta especificada fue %s.',

	'DBMS'						=> 'Tipo de base de datos',
	'DB_CONFIG'					=> 'Configuración de base de datos',
	'DB_CONNECTION'				=> 'Conexión de base de datos',
	'DB_ERR_INSERT'				=> 'Error mientras procesaba consulta <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Error mientras procesaba <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error mientras procesaba <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error mientras procesaba <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Error mientras ejecutaba consulta <code>SELECT</code>.',
	'DB_HOST'					=> 'Nombre del servidor de la base de datos o DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN significa Data Source Name y es relevante solo para instalaciones ODBC. En PostgreSQL, use localhost para conectar con el servidor local a través del dominio del socket UNIX y 127.0.0.1 para conectar via TCP. En SQLite, introduzca la ruta completa a su base de datos.',
	'DB_NAME'					=> 'Nombre de base de datos',
	'DB_PASSWORD'				=> 'Clave de base de datos',
	'DB_PORT'					=> 'Puerto en el servidor de la base de datos',
	'DB_PORT_EXPLAIN'			=> 'Déjelo en blanco a menos que quiera que el servidor opere en un puerto distinto al estándar.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Lo sentimos pero este script no soporta la actualización desde versiones de phpBB anteriores a la “%1$s”. La version que tiene instalada es la “%2$s”. Por favor, actualice a una versión previa antes de ejecutar este script. Si necesita asistancia con esto acuda al Support Forum en phpBB.com (en inglés) o al foro de soporte de phpBB3 en los foros de ayuda en español phpBB-Es.com',
	'DB_USERNAME'				=> 'Usuario de base de datos',
	'DB_TEST'					=> 'Probar conexión',
	'DEFAULT_LANG'				=> 'Idioma por defecto del sitio',
	'DEFAULT_PREFIX_IS'			=> 'El conversor no fue capaz de encontrar tablas con el prefijo especificado. Por favor, asegúrese de haber insertado los detalles correctos para el sitio que está convirtiendo. El prefijo de tabla por defecto para %1$s es <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'No ha sido especificado un valor para la variable test_file en el conversor. Si es un usuario de ese conversor, no debería estar viendo este error, Por favor, reporte este mensaje al autor del conversor. Si es usted, tiene que especificar el nombre de un archivo que exista en el sitio original para permitir que sea verificada la ruta al mismo.',
	'DIRECTORIES_AND_FILES'		=> 'Carpetas y archivos',
	'DISABLE_KEYS'				=> 'Deshabilitar teclas',
	'DLL_FTP'					=> 'Soporte para FTP [ Instalación ]',
	'DLL_GD'					=> 'Soporte para librería GD [ Confirmación Visual ]',
	'DLL_MBSTRING'				=> 'Soporte para caracteres Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ vía ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Nativo ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL con Extensiones MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
    	'DLL_SQLITE'				=> 'SQLite 2',
    	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'Soporte XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Soporte para compresión zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Configuración de descargas',
	'DL_CONFIG_EXPLAIN'			=> 'Puede descargar el config.php en su propio PC. Luego puede subir el archivo manualmente, reemplazando cualquiera existente en el directorio raiz de phpBB 3.1. Por favor, recuerde subir el archivo en formato ASCII (fíjese en la documentación de su programa FTP si no está seguro). Cuando haya subido config.php por favor haga clic en “Done” (Hecho) para proceder al siguiente paso.',
	'DL_DOWNLOAD'				=> 'Descarga',
	'DONE'						=> 'Hecho',

	'ENABLE_KEYS'				=> 'Rehabilitar teclas. Puede tardar un momento.',

	'FILES_OPTIONAL'			=> 'Archivos y carpetas opcionales',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcional</strong> - Estos archivos, carpetas o permisos no son imprescindibles. La instalación intentará varias técnicas para crearlos si no existen o no se pueden escribir. Sin embargo, especificarlos acelerará la instalación.',
	'FILES_REQUIRED'			=> 'Archivos y carpetas',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obligatorio</strong> - Para funcionar correctamente phpBB3 necesita ser capaz de acceder o escribir ciertos archivos o carpetas. Si ve “No encontró” tiene que crear dicho archivo o dicha carpeta. Si ve “No escribe” necesita cambiar los permisos en los archivos o carpetas para permitir a phpBB3 escribir allí.',
	'FILLING_TABLE'				=> 'LLenando tabla <strong>%s</strong>',
	'FILLING_TABLES'			=> 'LLenando tablas',

	'FINAL_STEP'				=> 'Procesando el paso final',
	'FORUM_ADDRESS'				=> 'Dirección del sitio',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Esta es la URL de su antiguo sitio, por ejemplo <samp>http://www.ejemplo.com/phpBB2/</samp>. Si se inserta una dirección aquí y no lo deja vacío cada instancia de esta dirección será reemplazanda por la nueva en mensajes, mensajes privados y firmas.',
	'FORUM_PATH'				=> 'Ruta del sitio',
	'FORUM_PATH_EXPLAIN'		=> 'Esta es la ruta <strong>relativa</strong> en el disco de su antiguo sitio desde el directorio <strong>raíz de su instalación phpBB</strong>.',
	'FOUND'						=> 'Hallado',
	'FTP_CONFIG'				=> 'Transferir configuración por FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB3 ha detectado la presencia de un módulo FTP en este servidor. Puede intentar instalar su config.php por este medio si lo desea. Necesita suministrar la información listada debajo. ¡Recuerde que usuario y clave son los de su servidor! (pregúntele a su proveedor de hosting si no está seguro de cuáles son).',
	'FTP_PATH'					=> 'Ruta FTP',
	'FTP_PATH_EXPLAIN'			=> 'Esta es la ruta desde su directorio raiz al de phpBB3, ej. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Subir',

	'GPL'						=> 'Licencia Pública General',

	'INITIAL_CONFIG'			=> 'Configuración básica',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Ahora que la instalación ha determinado que su servidor puede ejecutar phpBB3 necesita suministrar cierta información específica. Si no sabe cómo conectar a su base de datos, por favor, contacte con su proveedor de hospedaje (en primera instancia) o visite el foro de soporte de phpBB3. Cuando ingrese los datos, por favor, asegúrese de haberlos verificado concienzudamente.',
	'INSTALL_CONGRATS'			=> '¡Felicidades!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '		
		Instaló correctamente phpBB3 %1$s. Por favor, proceda a elegir una de las siguientes dos opciones:</p>
		<h2>Convertir un sitio existente a phpBB3</h2>
		<p>El conversor unificado de phpBB soporta la conversión de phpBB 2.0.x y otros sistemas a phpBB3. Si tiene un sitio que quiera convertir, por favor <a href="%2$s">diríjase al conversor</a>.</p>
		<h2>¡Ingresar en su nuevo phpBB3!</h2>
		<p>Haciendo clic en el botón de abajo llegará a un formulario para enviar información estadística a phpBB en su Panel de Control de Administración (PCA). Le estaríamos muy agradecidos si pudiera ayudarnos enviándonos esa información. Después podría tomarse algún tiempo para examinar las opciones disponibles para usted. Recuerde que hay disponible ayuda en línea mediante <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentación</a>, <a href="%3$s">README</a> y los <a href="https://www.phpbb.com/community/viewforum.php?f=466">foros de soporte</a> (ambos en inglés), lea el documento <a href="%3$s">LEAME</a> para más información.</p><p><strong>Por favor borre, mueva o renombre la carpeta install antes de usar su sitio. Si esta carpeta se encuentra presente, solamente el Panel de Control de Administración (PCA) será accesible.</strong>',
	'INSTALL_INTRO'	=> 'Bienvenido a la Instalación',

	'INSTALL_INTRO_BODY'		=> 'Con esta opción, es posible instalar phpBB en su servidor.</p><p>Para proceder, necesita los configuración de su base de datos. Si no conoce los configuración de su base de datos, por favor, contacte a su proveedor de hosting y pregúntele. No podrá continuar sin ellos. Necesita:</p>

	<ul>
		<li>El tipo de base de datos - la base de datos que va a usar.</li>
		<li>El nombre de servidor o DSN - la dirección del servidor.</li>
		<li>El puerto del servidor - (la mayoría de las veces no se necesita).</li>
		<li>El nombre - El nombre de la base de datos en el servidor.</li>
		<li>Usuario y clave - los datos para identificarse en la base de datos.</li>
	</ul>

	<p><strong>Nota:</strong> Si instala usando SQLite, debería ingresar la ruta completa al archivo de su base de datos en el campo DSN y dejar los campos usuario y clave en blanco. Por razones de seguridad, debería asegurarse de que el archivo de la base de datos no está alojado en una carpeta accesible desde la web.</p>

	<p>phpBB3 soporta las siguientes bases de datos:</p>
	<ul>
		<li>MySQL 3.23 ó superior (MySQLi también)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
        <li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ó superior (directamente o vía ODBC)</li>
		<li>MS SQL Server 2005 ó superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Se mostrarán solamente las bases de datos soportadas por su servidor.',
	'INSTALL_INTRO_NEXT'		=> 'Para comenzar la instalación, por favor pulse el botón de abajo.',
	'INSTALL_LOGIN'				=> 'Identificarse',
	'INSTALL_NEXT'				=> 'Próximo paso',
	'INSTALL_NEXT_FAIL'			=> 'Algunas pruebas fallaron y debería corregir estos problemas antes de proceder al siguiente paso. No hacerlo puede resultar en una instalación incompleta.',
	'INSTALL_NEXT_PASS'			=> 'Todas las pruebas básicas fueron aprobadas y puede proceder al siguiente paso de instalación. Si cambió permisos, módulos, etc. y quiere repetir las pruebas puede hacerlo ahora.',
	'INSTALL_PANEL'				=> 'Panel de Instalación',
	'INSTALL_SEND_CONFIG'		=> 'Desafortunadamente phpBB3 no puede escribir la información de configuración directamente en config.php. Esto puede ser porque el archivo no existe o no se puede escribir en él. Un número de opciones se mostrará debajo permitiéndole completar la instalación de config.php.',
	'INSTALL_START'				=> 'Comenzar instalación',
	'INSTALL_TEST'				=> 'Probar de nuevo',
	'INST_ERR'					=> 'Error de instalación',
	'INST_ERR_DB_CONNECT'		=> 'No se puede conectar a la base de datos, mire el mensaje de error de abajo.',
	'INST_ERR_DB_FORUM_PATH'	=> 'La base de datos especificada está dentro del árbol de carpetas de su sitio. Debería poner este archivo en un lugar no accessible desde la web.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'El prefijo introducido no es válido. Se debe comenzar con una letra y sólo debe contener letras, números y subrayados.',
	'INST_ERR_DB_NO_ERROR'		=> 'No se proporcionó mensaje de error.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'La versión de MySQL instalada en esta máquina es incompatible con la opción “MySQL con extensiones MySQLi” que seleccionó. Por favor pruebe la opción “MySQL” en su lugar.',
	'INST_ERR_DB_NO_SQLITE'		=> 'La versión de la extensión SQLite que tiene instalada es muy antigua, hay que actualizarla al menos a la 2.8.2.',
    	'INST_ERR_DB_NO_SQLITE3'	=> 'La versión de la extensión SQLite que tiene instalada es muy antigua, hay que actualizarla al menos a la 3.6.15.',
    	'INST_ERR_DB_NO_ORACLE'		=> 'La versión de Oracle instalada en esta máquina requiere que configure el parámetro <var>NLS_CHARACTERSET</var> a <var>UTF8</var>. O bien actualice su instalación a 9.2+ o cambie el parámetro.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'La base de datos que seleccionó no fue creada en <var>UNICODE</var> o <var>UTF8</var>. Pruebe a reinstalar con una base de datos <var>UNICODE</var> o <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'No se especificó nombre de base de datos.',
	'INST_ERR_EMAIL_INVALID'	=> 'El email que ingresó no es válido.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Los emails ingresados no concuerdan.',
	'INST_ERR_FATAL'			=> 'Error fatal de instalación',
	'INST_ERR_FATAL_DB'			=> 'Un error fatal de base de datos e irrecuperable ha ocurrido. Esto puede ser porque el usuario especificado no tiene permisos apropiados para <code>CREATE TABLES</code> o <code>INSERT</code>, etc. Más información puede ser proporcionada debajo. Por favor contacte con su proveedor de hospedaje en primera instancia o visite los foros de soporte de phpBB3 para recibir ayuda.',
	'INST_ERR_FTP_PATH'			=> 'No se puede cambiar a la carpeta proporcionada, por favor verifique la ruta.',
	'INST_ERR_FTP_LOGIN'		=> 'No se puede ingresar en el servidor FTP, verifique su usuario y clave.',
	'INST_ERR_MISSING_DATA'		=> 'Tiene que llenar todos los campos en este bloque.',
	'INST_ERR_NO_DB'			=> 'No se puede cargar el módulo PHP para la base de datos seleccionada.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Las claves que ingresó no concuerdan.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'La clave que ingresó es muy larga. La longitud máxima es de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'La clave que ingresó es muy corta. La longitud mímima es de 6 caracteres.',
	'INST_ERR_PREFIX'			=> 'Ya existen tablas con el prefijo especificado, por favor elija uno diferente.',
	'INST_ERR_PREFIX_INVALID'	=> 'El prefijo de tabla que especificó es inválido para la base de datos que seleccionó. Por favor pruebe con otro, eliminando caracteres como por ejemplo guión (-).',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'El prefijo de tabla que especificó es muy largo. La longitud máxima es de %d caracteres.',
	'INST_ERR_USER_TOO_LONG'	=> 'El usuario que ingresó es muy largo. La longitud máxima es de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'El usuario que ingresó es muy corto. La longitud mínima es de 30 caracteres.',
	'INVALID_PRIMARY_KEY'		=> 'Clave primaria no válida : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Por favor, esto puede tardar un poco... Por favor, no detenga el script.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Verificar extensión <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Obligatorio</strong> - <samp>mbstring</samp> es una extensión de PHP que provee funciones multibyte. Ciertas prestaciones de mbstring no son compatibles con phpBB3 y deberán ser deshabilitadas.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funciones de sobrecarga',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> debe estar entre 0 y 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codificación de caracteres transparente',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> debe valer 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Conversión de caracteres de entrada HTML',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> debe valer <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversión de caracteres de salida HTML',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> debe valer <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, asegúrese de que esta carpeta existe y que el servidor web puede escribirla luego pruebe otra vez:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, asegúrese de que estas carpetas existen y que el servidor web puede escribir en ellas; luego pruebe otra vez:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'   => 'El schema de su base de datos MySQL para phpBB quedó obsoleto. phpBB detectó un schema para MySQL 3.x/4.x, pero el servidor funciona con MySQL %2$s.<br /><strong>Antes de que proceda a la actualización necesita actualizar el schema.</strong><br /><br />Por favor, consulte este artículo (en inglés) <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a>. Si encuentra problemas o no se defiende con el inglés, por favor, use los <a href="https://www.phpbb.com/community/viewforum.php?f=466">foros de soporte</a> (en inglés).',

	'NAMING_CONFLICT'			=> 'Conflicto de nombres: %s y %s son alias<br /><br />%s',
	'NEXT_STEP'					=> 'Proceder al siquiente paso',
	'NOT_FOUND'					=> 'No se encontró',
	'NOT_UNDERSTAND'			=> 'No se puede entender %s #%d, tabla %s ("%s")',
	'NO_CONVERTORS'				=> 'No hay disponibles conversores para usar.',
	'NO_CONVERT_SPECIFIED'		=> 'No especificó conversor.',
	'NO_LOCATION'				=> 'No se puede determinar la ubicación. Si está seguro de que ImageMagick está instalado, tiene que especificar su ubicación más tarde con el Panel de Control de Administración (PCA)',
	'NO_TABLES_FOUND'			=> 'No se encontraron tablas.',

	'OVERVIEW_BODY'				=> '¡Bienvenido a phpBB3!<br /><br />phpBB® es la solución de foros libres más usada en el mundo. phpBB3 es el último instalador en una línea de paquetes que comenzó en el año 2000. Como sus predecesores phpBB3 es rico en implementaciones, amigable para el usuario y con soporte completo por el equipo de phpBB. phpBB3 mejora, y mucho, lo que ya hizo popular a phpBB2 y añade implementaciones ampliamente solicitadas que no estaban presentes en versiones previas. Esperamos que cumpla de sobra con sus espectativas. <br /><br />Este sistema de instalación le guiará para instalar phpBB3, actualizando a la última versión de phpBB3 desde versiones anteriores, así como convirtiendo a phpBB3 desde otros sistemas de foros (incluyendo phpBB2). Para más información, le aconsejamos que lea <a href="../docs/INSTALL.html">la guía de instalación</a>.<br /><br />Para leer la licencia de phpBB3 o para saber como obtener soporte y nuestras condiciones al respecto, por favor seleccione las opciones deseadas del menú lateral. Para continuar, por favor seleccione la pestaña apropiada de arriba.',

	'PCRE_UTF_SUPPORT'				=> 'Soporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>no</strong> funcionará si su instalación PHP no está compilada con soporte para UTF-8 en la extensión PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'La función PHP getimagesize() está disponible',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obligatorio</strong> - Para que phpBB3 funcione correctamente, la función getimagesize debe estar disponible.',
	'PHP_JSON_SUPPORT'        		=> 'Soporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'    	=> '<strong>Obligatorio</strong> - Para que phpBB funcione correctamente, la extensión PHP JSON debe estar disponible.',
	'PHP_OPTIONAL_MODULE'			=> 'Módulos opcionales',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Estos módulos o aplicaciones son opcionales. Sin embargo, si están disponibles habilitarán capacidades extras.',
	'PHP_SUPPORTED_DB'				=> 'Bases de datos soportadas',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obligatorio</strong> - Necesitá soporte para al menos una base de datos compatible con PHP. Si no se muestran módulos disponibles debería contactar a su proveedor de hosting o revisar la documentacion de PHP pertinente.',
	'PHP_REGISTER_GLOBALS'			=> 'Parámetro PHP <var>register_globals</var> deshabilitado',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB3 funcionará aún si estos parámetros están habilitados, pero si es posible, se recomiendo que register_globals este deshabilitado en su instalación PHP por razones de seguridad.',
	'PHP_SAFE_MODE'					=> 'Modo seguro',
	'PHP_SETTINGS'					=> 'Versión y parámetros PHP',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obligatorio</strong> - Necesitá al menos la versión 4.3.3 de PHP (PHP 7 no es soportado) con el fin de instalar phpBB3. Si <var>safe mode</var> se muestra debajo su instalación PHP está funcionando en ese modo. Esto provocará limitaciones en la administración remota y en implementaciones similares.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Parámetro PHP <var>allow_url_fopen</var> está habilitado',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Este parámetro es opcional, sin embargo ciertas funciones de phpBB como avatares fuera del sitio no funcionarán adecuadamente sin él.',
	'PHP_VERSION_REQD'				=> 'Versión PHP: >= 5.3.3, < 7.0.0-dev',
	'POST_ID'						=> 'Post ID',
	'PREFIX_FOUND'					=> 'Una revisión de sus tablas ha mostrado una instalación válida usando <strong>%s</strong> como prefijo de tabla.',
	'PREPROCESS_STEP'				=> 'Ejecutando funciones/consultas previas',
	'PRE_CONVERT_COMPLETE'			=> 'Todos los pasos preconversión se han completado correctamente. Ahora puede comenzar el proceso de conversión. Por favor, tenga en cuenta que podría tener que ajustar varios detalles manualmente. Después de la conversión, verifique especialmente los permisos asignados, reconstruya su índice de búsqueda si es necesario y también asegúrese de que los archivos se copien correctamente, por ejemplo avatares y emoticonos.',
	'PROCESS_LAST'					=> 'Haciendo últimos ajustes',

	'REFRESH_PAGE'				=> 'Refresque (F5) la página para continuar con la conversión',
	'REFRESH_PAGE_EXPLAIN'		=> 'Si elige SÍ, el conversor actualizará la página para continuar la conversión después de haber finalizado un paso. Si esta es su primera conversión con propósito de prueba y determinar errores por adelantado, le sugerimos que seleccione NO.',
	'REQUIREMENTS_TITLE'		=> 'Compatibilidad de la instalación',
	'REQUIREMENTS_EXPLAIN'		=> 'Antes de proceder con la instalación completa phpBB3 llevará a cabo algunas pruebas de la configuración y archivos en su servidor para asegurarse de que puede instalar y ejecutar phpBB3. Por favor, asegúrese de leer completa y cuidadosamente los resultados y no continuar hasta que todos las pruebas requeridas estén aprobadas. Si quiere usar algunas de las capacidades dependientes de las pruebas opcionales, debería asegurarse de que esas pruebas también se aprueben.',
	'RETRY_WRITE'				=> 'Reintentar escribir configuración',
	'RETRY_WRITE_EXPLAIN'		=> 'Si lo desea puede cambiar los permisos de config.php para permitir a phpBB3 sobreescribirlo. Si quisiera hacer eso debería hacer clic en Retry (Reintentar) para intentarlo de nuevo. Recuerde restaurar los permisos de config.php después de que phpBB3 haya finalizado la instalación.',

	'SCRIPT_PATH'				=> 'Ruta del script',
	'SCRIPT_PATH_EXPLAIN'		=> 'La ruta dónde está ubicado phpBB3 relativa al nombre de dominio, ej. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Seleccionar idioma',
	'SERVER_CONFIG'				=> 'Configuración del servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> 'El índice de búsqueda no fue convertido',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Su viejo índice de búsqueda no fue convertido. Las búsquedas arrojarán un resultado vacío. Para crear nuevos índices de búsqueda vaya al Panel de Control de Administración (PCA), seleccione Mantenimiento y luego Indice de búsqueda en el submenú.',
	'SELECT_FORUM_GA'			=> 'En phpBB 3.1 los anuncios globales están vinculados a los foros. Seleccione un foro para sus anuncios globales actuales (se pueden mover más adelante):',
	'SOFTWARE'					=> 'Software del sitio',
	'SPECIFY_OPTIONS'			=> 'Especificar opciones de conversión',
	'STAGE_ADMINISTRATOR'		=> 'Detalles del administrador',
	'STAGE_ADVANCED'			=> 'Configuración avanzada',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Los parámetros en esta página son solamente necesarios si sabe qué quiere algo diferente que no sea por defecto. Si no está seguro, simplemente pase a la siguiente página, ya que esos parámetros pueden ser cambiados desde el Panel de Control de Administración (PCA).',
	'STAGE_CONFIG_FILE'			=> 'Archivo de configuración',
	'STAGE_CREATE_TABLE'		=> 'Crear tablas en la base de datos',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Las tablas en la base de datos usadas por phpBB 3.1 han sido creadas y llenadas con algunos datos. Proceda a la siguiente pantalla para terminar de instalar phpBB3.',
	'STAGE_DATABASE'			=> 'Configuración de base de datos',
	'STAGE_FINAL'				=> 'Paso final',
	'STAGE_INTRO'				=> 'Introducción',
	'STAGE_IN_PROGRESS'			=> 'Conversión en progreso',
	'STAGE_REQUIREMENTS'		=> 'Requerimientos',
	'STAGE_SETTINGS'			=> 'Configuración',
	'STARTING_CONVERT'			=> 'Comenzando proceso de conversión',
	'STEP_PERCENT_COMPLETED'	=> 'Paso <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introducción',
	'SUB_LICENSE'				=> 'Licencia',
	'SUB_SUPPORT'				=> 'Soporte',
	'SUCCESSFUL_CONNECT'		=> 'Identificado correctamente',
	'SUPPORT_BODY'				=> 'Se dará soporte completo para la versión estable actual de phpBB3. Proveeremos respuestas a preguntas generales de configuración, problemas de configuración, problemas de conversión y soporte para determinados problemas comunes en su mayoría relacionados con errores de programación. También discutiremos sobre modificaciones y aportes de código/estilo personalizados.</p><p>Para asistencia adicional, por favor visite nuestra <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Guía de Inicio Rápido</a> (en inglés).</p><p>Para asegurarse que está actualizado a la última edición, porqué no <a href="https://www.phpbb.com/support/">se suscribe a nuestra lista de correo</a>..?',
	'SYNC_FORUMS'				=> 'Comenzando a sincronizar foros',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts desde <var>entry</var> %1$s desde %2$s.',
	'SYNC_TOPICS'				=> 'Comenzando a sincronizar temas',
	'SYNC_TOPIC_ID'				=> 'Sincronizando temas de <var>topic_id</var> %1$s a %2$s.',

	'TABLES_MISSING'			=> 'No se puede encontrar estas tablas<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefijo para tablas en la base de datos',
	'TABLE_PREFIX_EXPLAIN'		=> 'El prefijo debe comenzar con una letra y sólo debe contener letras, números y subrayados.',    
	'TABLE_PREFIX_SAME'			=> 'El prefijo para las tablas necesita ser uno usado por el software que está convirtiendo.<br />» El prefijo especificado fue %s.',
	'TESTS_PASSED'				=> 'Pruebas superadas',
	'TESTS_FAILED'				=> 'Pruebas fallidas',

	'UNABLE_WRITE_LOCK'			=> 'Imposible escribir archivo cerrado.',
	'UNAVAILABLE'				=> 'No disponible',
	'UNWRITABLE'				=> 'No escribe',
	'UPDATE_TOPICS_POSTED'		=> 'Generando información de temas publicados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ha ocurrido un error mientras generaba información de topics posteados. Puede reintentar este paso en el Panel de Control de Administración (PCA) después de completar el proceso de conversión.',
	'VERIFY_OPTIONS'			=> 'Verificando las opciones de conversión',
	'VERSION'					=> 'Versión',

	'WELCOME_INSTALL'			=> 'Bienvenido a la instalación de phpBB3',
	'WRITABLE'					=> 'Se puede escribir',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Todos los archivos están actualizados a la última versión de phpBB.',
	'ARCHIVE_FILE'				=> 'Archivo fuente',

	'BACK'				=> 'Volver',
	'BINARY_FILE'		=> 'Archivo binario',
	'BOT'				=> 'Araña-Bot/Robot',

	'CHANGE_CLEAN_NAMES'   			=> 'Se ha cambiado el método usado para asegurarse de que un nombre de usuario no es usado por otros usuarios. Hay algunos usuarios que tienen el mismo nombre cuando se compara con el nuevo método. Tiene que eliminar o renombrar esos usuarios para asegurarse de que cada nombre es usado por un solo usuario antes de que pueda seguir.',
	'CHECK_FILES'					=> 'Verificar archivos',
	'CHECK_FILES_AGAIN'				=> 'Verificar archivos nuevamente',
	'CHECK_FILES_EXPLAIN'			=> 'En el próximo paso todos los archivos serán verificados con los archivos actualizados - esto puede tomar un tiempo si son verificados por primera vez.',
	'CHECK_FILES_UP_TO_DATE'		=> 'De acuerdo a la base de datos su versión está actualizada. Puede proceder con la verificación de archivos para asegurarse de que todos están actualizados verdaderamente con la última versión de phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continuar proceso de actualización',
	'COLLECTED_INFORMATION'			=> 'Información de archivos obtenida',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'La lista de abajo muestra información sobre los archivos que necesitan ser actualizados. Por favor, lea la información frente a cada bloque de estado para entender qué significan y qué puede ser necesario hacer para efectuar una actualización correctamente.',
	'COLLECTING_FILE_DIFFS'			=> 'Obteniendo diferencias en archivos',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Ahora podría <a href="../ucp.php?mode=login">identificarse en su sitio</a> y verificar si todo funciona bien. ¡No olvide borrar, renombrar o mover la carpeta install!',
	'CONTINUE_UPDATE_NOW'			=> 'Continuar el proceso de actualización ahora',	// Mostrado dentro del script actualizador de la base de datos al final, si es llamado por el actualizador
	'CONTINUE_UPDATE'				=> 'Continuar la actualización ahora',					// Mostrado después de la subida del fichero para indicar que el proceso de actualización aún no ha finalizado
	'CURRENT_FILE'					=> 'Comienzo del conflicto - Código del archivo original antes de la actualización',
	'CURRENT_VERSION'				=> 'Versión actual',

	'DATABASE_TYPE'						=> 'Tipo de base de datos',
	'DATABASE_UPDATE_COMPLETE'			=> '¡La actualización de la base de datos ha sido completada!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Continuar la actualización de la base de datos',
	'DATABASE_UPDATE_INFO_OLD'			=> 'La actualización de la base de datos en la carpeta de instalación está desactualizada. Por favor, asegúrese de haber subido la versión correcta del archivo.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'La actualización de la base de datos aún no se ha completado.',
	'DATABASE_VERSION'					=> 'Versión de la base de datos',
	'DELETE_USER_REMOVE'				=> 'Borrar usuario y eliminar sus mensajes',
	'DELETE_USER_RETAIN'				=> 'Borrar usuario, pero mantener sus mensajes',
	'DESTINATION'						=> 'Archivo de destino',
	'DIFF_INLINE'						=> 'Interno',
	'DIFF_RAW'							=> 'Diferencias',
	'DIFF_SEP_EXPLAIN'					=> 'Bloque de código usado dentro del archivo actualizado/nuevo',
	'DIFF_SIDE_BY_SIDE'					=> 'Lado a lado',
	'DIFF_UNIFIED'						=> 'Diferencia unificada',
	'DO_NOT_UPDATE'						=> 'No actualizar este archivo',
	'DONE'								=> 'Hecho',
	'DOWNLOAD'							=> 'Descargar',
	'DOWNLOAD_AS'						=> 'Descargar como',
	'DOWNLOAD_CONFLICTS'            	=> 'Conflictos en la descarga de este archivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'      	=> 'Buscar &lt;&lt;&lt; para descubrir los conflictos',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Descargue el archivo de ficheros modificados (recomendado)',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descargar archivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Una vez descargado, debería desempaquetar el archivo. Encontrará dentro los archivos modificados que necesita subir al directorio raíz de su foro phpBB. Por favor, súbalos a sus respectivas ubicaciones. Después de que los haya subido todos, por favor verifique los archivos de nuevo con el otro botón de abajo.',

	'EDIT_USERNAME'	=> 'Editar nombre de usuario',
	'ERROR'			=> 'Error',
	'EVERYTHING_UP_TO_DATE'		=> 'Todos los archivos están actualizados a la última versión de phpBB. Ahora podría <a href="%1$s">identificarse en su foro</a> y verificar si todo funciona bien. ¡No olvide borrar, renombrar o mover la carpeta install! Por favor envíenos información actualizada sobre su servidor y configuración de foro desde el módulo <a href="%2$s">Enviar estadísticas</a> en su PCA.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'El archivo ya está actualizado.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'El archivo no permite que se le aplique diff.',
	'FILE_USED'						=> 'Información empleada',
	'FILES_CONFLICT'				=> 'Archivos en conflicto',
	'FILES_CONFLICT_EXPLAIN'		=> 'Los siguientes archivos han sido modificados y no coinciden con los archivos originales de la antigua versión. phpBB ha determinado que esos archivos creará conflitos si se intenta insertarlos. Por favor, investigue los conflictos y trate de resolverlos manualmente o continúe la instalación decidiendo el método de integración preferido. Si resuelve los conflictos manualmente verifique los archivos nuevamente despues de modificarlos. También puede decidir un método de integración para cada archivo. El primero dará como resultado un archivo donde las líneas conflictivas de su viejo archivo se perderán, el otro dará como resultado perder los cambios en el nuevo archivo.',
	'FILES_DELETED'					=> 'Archivos borrados',
	'FILES_DELETED_EXPLAIN'			=> 'Los siguientes archivos no existen en la nueva versión. Estos archivos tienen que ser eliminados de su actual instalación.',
	'FILES_MODIFIED'				=> 'Archivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Los siguientes archivos fueron modificados y no coinciden con los archivos originales de la antigua versión. Las modificaciones se insertarán a los archivos actualizados.',
	'FILES_NEW'						=> 'Archivos nuevos',
	'FILES_NEW_EXPLAIN'				=> 'Los siguientes archivos actualmente no existen en su instalación.',
	'FILES_NEW_CONFLICT'			=> 'Archivos nuevos en conflicto',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Los siguientes archivos son nuevos de la última versión pero se ha determinado que ya hay un archivo con el mismo nombre en la misma ubicación. Este archivo será sobreescrito por el nuevo.',
	'FILES_NOT_MODIFIED'			=> 'Archivos sin modificación',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Los siguientes archivos no han sido modificados y coinciden con los archivos originales de phpBB para la versión a la cual quiere actualizar.',
	'FILES_UP_TO_DATE'				=> 'Archivos actualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Los siguientes archivos ya han sido actualizados.',
	'FILES_VERSION'					=> 'Versión de archivos',
	'FTP_SETTINGS'					=> 'Configuración FTP',
	'FTP_UPDATE_METHOD'				=> 'Subir por FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Los archivos actualizados encontrados son incompatibles con la versión instalada. La versión instalada es %1$s y el archivo actualizado es para phpBB %2$s a %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Los archivos actualizados están incompletos.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'La base de datos fue actualizada con éxito. Ahora puede continuar con el proceso de actualización.',

	'KEEP_OLD_NAME'		=> 'Mantener nombre de usuario',

	'LATEST_VERSION'		=> 'Última versión',
	'LINE'					=> 'Línea',
	'LINE_ADDED'			=> 'Agregado',
	'LINE_MODIFIED'			=> 'Modificado',
	'LINE_REMOVED'			=> 'Eliminado',
	'LINE_UNMODIFIED'		=> 'Sin modificar',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Con el fin de actualizar su instalación primero necesita identificarse.',

	'MAPPING_FILE_STRUCTURE'	=> 'Para facilitar la subida aquí están las ubicaciones de los archivos que mapean la instalación de phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Insertar modificaciones',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'No insertar - usar archivo nuevo',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'No insertar - usar el archivo ya instalado',
	'MERGE_MOD_FILE_OPTION'		=> 'Unir modificaciones (elimina el nuevo código phpBB dentro del bloque conflictivo)',
	'MERGE_NEW_FILE_OPTION'		=> 'Unir modificaciones (elimina el código modificado dentro del bloque conflictivo)',
	'MERGE_SELECT_ERROR'		=> 'Los modos de unión del archivo conflictivo no han sido seleccionados correctamente.',
	'MERGING_FILES'				=> 'Diferencias en la unión',
	'MERGING_FILES_EXPLAIN'		=> 'Se están reuniendo los cambios en el archivo final.<br /><br />Por favor, espere hasta que phpBB haya completado todas las operaciones en los archivos cambiados.',

	'NEW_FILE'						=> 'Fin del conflicto',
	'NEW_USERNAME'					=> 'Nuevo nombre de usuario',
	'NO_AUTH_UPDATE'				=> 'No está autorizado para actualizar',
	'NO_ERRORS'						=> 'No hubo errores',
	'NO_UPDATE_FILES'				=> 'No se actualizaron los siguientes archivos',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Los siguientes archivos son nuevos o modificados pero no se puede hallar en su instalación la carpeta en la que normalmente se encuentran. Esta lista contiene archivos en otras carpetas distintas de language/ o styles/ que puede haber modificado en la estructura de carpetas y la actualización será incompleta.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No se encontró una carpeta válida de actualización, por favor asegúrese de que subió todos los archivos.<br /><br />Su instalación <strong>no</strong> parece estar actualizada. Hay actualizaciones diponibles para su versión de phpBB %1$s, por favor visite <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> para obtener el paquete adecuado para actualizar de la versión %2$s a la versión %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Su versión está actualizada. No hay necesidad de ejecutar la herramienta de actualización. Si quiere verificar la integridad de sus archivos asegúrese de haber subido los archivos actualizados correctos.',
	'NO_UPDATE_INFO'				=> 'No se puede encontrar información de actualización de archivos.',
	'NO_UPDATES_REQUIRED'			=> 'No se necesita actualizar',
	'NO_VISIBLE_CHANGES'			=> 'No hay cambios visibles',
	'NOTICE'						=> 'Aviso',
	'NUM_CONFLICTS'					=> 'Número de conflictos',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Las diferencias actuales entre los archivos %1$d y %2$d han sido comprobadas.<br />Por favor, espere hasta que todos los ficheros sean chequeados.',

	'OLD_UPDATE_FILES'		=> 'Los archivos actualizados no tienen la fecha correcta. Los archivos actualizados que se encontraron son para actualizar de phpBB %1$s a phpBB %2$s pero la última versión de phpBB es %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'El paquete actual actualiza a la versión',
	'PACKAGE_VERSION'					=> 'Versión del paquete instalado',
	'PERFORM_DATABASE_UPDATE'			=> 'Realizar actualización de base de datos',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Debajo puede encontrar un enlace al script de actualización de la base de datos. Este script necesita ejecutarse separadamente porque actualizar la base de datos si está identificado puede acarrear comportamientos inesperados. La actualización de la base de datos puede tardar un rato, por favor no detenga la ejecución aunque parezca estar detenida. Después de realizar la actualización siga el enlace para continuar el proceso de actualización.',
	'PREVIOUS_VERSION'					=> 'Versión previa',
	'PROGRESS'							=> 'Progreso',

	'RELEASE_ANNOUNCEMENT'		=> 'Anuncio',
	'RESULT'					=> 'Resultado',
	'RUN_DATABASE_SCRIPT'		=> 'Actualizar mi base de datos ahora',

	'SELECT_DIFF_MODE'			=> 'Seleccionar modo diff',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccionar formato de archivo a descargar',
	'SELECT_FTP_SETTINGS'		=> 'Seleccionar parámetros FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Mostrar diferencias/conflictos',
	'SHOW_DIFF_DELETED'			=> 'Mostrar contenido del archivo',
	'SHOW_DIFF_FINAL'			=> 'Mostrar archivo resultante',
	'SHOW_DIFF_MODIFIED'		=> 'Mostrar diferencias integradas',
	'SHOW_DIFF_NEW'				=> 'Mostrar contenido de archivos',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Mostrar diferencias',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Mostrar diferencias',
	'SOME_QUERIES_FAILED'		=> 'Algunas consultas fallaron, los errores son listados debajo.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Esto probablemente no sea nada de qué preocuparse, la actualización continuará. Si no se puede completar tendría que visitar nuestros foros de ayuda. Visite <a href="../docs/README.html">LEAME</a> para detalles de como obtener ayuda.',
	'STAGE_FILE_CHECK'			=> 'Verificar archivos',
	'STAGE_UPDATE_DB'			=> 'Actualizar base de datos',
	'STAGE_UPDATE_FILES'		=> 'Actualizar archivos',
	'STAGE_VERSION_CHECK'		=> 'Verificar versión',
	'STATUS_CONFLICT'			=> 'El archivo modificado provoca conflictos',
	'STATUS_DELETED'			=> 'Archivo borrado',
	'STATUS_MODIFIED'			=> 'Archivo modificado',
	'STATUS_NEW'				=> 'Archivo nuevo',
	'STATUS_NEW_CONFLICT'		=> 'El archivo nuevo provoca conflictos',
	'STATUS_NOT_MODIFIED'		=> 'Archivo no modificado',
	'STATUS_UP_TO_DATE'			=> 'Archivo ya actualizado',

	'TOGGLE_DISPLAY'			=> 'Ver/Ocultar lista de ficheros',
	'TRY_DOWNLOAD_METHOD'		=> 'Puede querer intentar el método de descarga de ficheros modificados.<br />Este método siempre funciona y además es el camino de actualización recomendado.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Intentar este método ahora',

	'UPDATE_COMPLETED'				=> 'Actualización completada',
	'UPDATE_DATABASE'				=> 'Base de datos actualizada',
	'UPDATE_DATABASE_EXPLAIN'		=> 'En el siguiente paso se actualizará la base de datos',
	'UPDATE_DATABASE_SCHEMA'		=> 'Actualizando esquema de base de datos',
	'UPDATE_FILES'					=> 'Archivos actualizados',
	'UPDATE_FILES_NOTICE'			=> 'Por favor, asegúrese de que ha actualizado también los archivos de su sitio, este archivo está solamente actualizando su base de datos',
	'UPDATE_INCOMPLETE'				=> 'La instalación de phpBB no se ha actualizado correctamente.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Por favor, lea la siguiente información con el fin de corregir este error.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Actualización incompleta</h1>

		<p>Nos dimos cuenta de que la última actualización de la instalación de phpBB no se ha completado. Visite el <a href="%1$s" title="%1$s">script database_update</a> y ejecútelo. Si no lo tiene, por favor <a href="https://www.phpbb.com/downloads/" title="Descargas phpBB">descargue la versión de su paquete</a>, suba la carpeta "install" al directorio raíz de su phpBB (donde está su archivo config.php) y <a href="%1$s" title="%1$s">ejecúte el script de actualización de la base de datos</a>.</p>',

	'UPDATE_INSTALLATION'			=> 'Instalación de phpBB actualizada',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Con esta opción, es posible actualizar su instalacion de phpBB a la última versión.<br />Durante el proceso se verificará la integridad de todos los archivos. Podrá también revisar las diferencias y archivos antes de actualizar.<br /><br /> La actualización de archivos en si misma se puede hacer de dos formas distintas.</p><h2>Actualización Manual</h2> <p>Con esta actualización solamente descarga su paquete de archivos cambiados personalizado para asegurarse de no perder sus modificaciones de archivos (MODs).',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anuncio de la publicación</h1>

		<p>Por favor, lea el anuncio de la publicación para la última versión antes de continuar el proceso de actualización, puede tener información útil. También tiene enlaces a la descarga completa y al registro de cambios.</p>

		<br />

		<h1>Cómo actualizar su instalación</h1>

		<p>La forma recomendada de actualizar su instalación consta solo de estos pasos:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Visite la <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">página de descargas de phpBB.com</a> y descargue el archivo "Paquete de Actualización phpBB" correspondiente.<br /><br /></li>
			<li>Desempaquete el archivo.<br /><br /></li>
			<li>Suba las carpetas de instalación descomprimida "install" y "vendor" completa a la carpeta raiz de phpBB (donde está el archivo config.php).<br /><br /></li>
		</ul>

		<p>Una vez subido su sitio estará fuera de línea para los usuarios normales debido a que la carpeta de instalación se halla presente.<br /><br />
		<strong><a href="%1$s" title="%1$s">Ahora comenzará el proceso de actualización yendo con su navegador a la carpeta install</a>.</strong><br />
		<br />
		Posteriormente será guiado a través del proceso de actualización. Será notificado después de que la actualización se complete..
		</p>
	',
	'UPDATE_METHOD'					=> 'Método de actualización',
	'UPDATE_METHOD_EXPLAIN'			=> 'Ahora puede elegir su método de actualización. Usar la subida por FTP le presentará un formulario donde tendrá que insertar los datos de su cuenta FTP. Con este método los archivos serán movidos a su nueva ubicación y se creará una copia de seguridad de los archivos viejos agregando .bak al nombre del archivo. Si elige descargar los archivos modificados tiene que desempaquetarlos y subirlos posteriormente a su ubicación correcta manualmente.',
	'UPDATE_REQUIRES_FILE'			=> 'El actualizador requiere que el siguiente archivo esté presente: %s',
	'UPDATE_SUCCESS'				=> 'Se actualizó con éxito',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Todos los archivos actualizados con éxito. El siguiente paso incluye verificar todos los archivos nuevamente para asegurarnos de que se actualizaron correctamente.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Actualizando versión y optimizando tablas',
	'UPDATING_DATA'					=> 'Actualizando datos',
	'UPDATING_TO_LATEST_STABLE'		=> 'Actualizando base de datos a la última versión estable',
	'UPDATED_VERSION'				=> 'Versión actualizada',
	'UPGRADE_INSTRUCTIONS'			=> 'Una nueva actualización <strong>%1$s</strong> está disponible. Por favor, lea <a href="%2$s" title="%2$s"><strong>el anuncio de la actualización</strong></a> para saber que tiene, y que ofrece, y cómo actualizar.',
	'UPLOAD_METHOD'					=> 'Método de subida',

	'UPDATE_DB_SUCCESS'				=> 'Base de datos actualizada correctamente.',
	'UPDATE_FILE_SUCCESS'			=> 'Archivo actualizado correctamente.',
	'USER_ACTIVE'					=> 'Usuario activo',
	'USER_INACTIVE'					=> 'Usuario inactivo',

	'VERSION_CHECK'					=> 'Verificar versión',
	'VERSION_CHECK_EXPLAIN'			=> 'Verifica si su instalación de phpBB está actualizada.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Su instalación de phpBB no está actualizada. Por favor, continúe el proceso de actualización.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Su instalación de phpBB no está actualizada.<br />Debajo encontrará un enlace al anuncio de publicación de la última versión así como también instrucciones de cómo realizar la actualización.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Su instalación de phpBB no está actualizada.',
	'VERSION_UP_TO_DATE'			=> 'Su instalación de phpBB está actualizada. Aunque no haya actualizaciones disponibles en este momento puede que desee continuar con objeto de realizar una comprobación de validación de ficheros.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Su instalación de phpBB está actualizada. No hay actualizaciones disponibles en este momento.',
	'VIEWING_FILE_CONTENTS'			=> 'Viendo contenido de archivos',
	'VIEWING_FILE_DIFF'				=> 'Viendo diferencias de archivos',

	'WRONG_INFO_FILE_FORMAT'	=> 'Información incorrecta de formato de archivo',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Gracias, La Administración del Foro',
	'CONFIG_SITE_DESC'				=> 'Un breve texto para describir su Foro',
	'CONFIG_SITENAME'				=> 'sudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Este es un mensaje de ejemplo en su instalación phpBB3. Puede borrar este mensaje, este tema e incluso este foro si quiere, ¡ya que todo parece estar funcionando! Pero es buena idea usar la categoría y el foro creados por defecto para copiar los permisos en los futuros foros a crear. Le simplificará la tarea. ¡Gracias!',

	'FORUMS_FIRST_CATEGORY'			=> 'Mi primera categoría',
	'FORUMS_TEST_FORUM_DESC'		=> 'Es solo para probar el foro.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Foro de Prueba 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador del Sitio',
	'REPORT_WAREZ'					=> 'El mensaje contiene enlaces a software ilegal o pirateado (warez).',
	'REPORT_SPAM'					=> 'El mensaje reportado solo tiene la intención de informar de un sitio web u otro producto.',
	'REPORT_OFF_TOPIC'				=> 'El mensaje reportado es Off-Topic.',
	'REPORT_OTHER'					=> 'El mensaje reportado no se ajusta a ninguna categoría, por favor use el campo de descripción.',

	'SMILIES_ARROW'					=> 'Flecha',
	'SMILIES_CONFUSED'				=> 'Confundido',
	'SMILIES_COOL'					=> 'Tranquilo',
	'SMILIES_CRYING'				=> 'Llorando o muy triste',
	'SMILIES_EMARRASSED'			=> 'Ofuscado',
	'SMILIES_EVIL'					=> 'Malo o muy loco',
	'SMILIES_EXCLAMATION'			=> 'Exclamación',
	'SMILIES_GEEK'					=> 'Friki',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Riendo',
	'SMILIES_MAD'					=> 'Loco',
	'SMILIES_MR_GREEN'				=> 'Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Pregunta',
	'SMILIES_RAZZ'					=> 'Vacilar',
	'SMILIES_ROLLING_EYES'			=> 'Harto',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Sacudido',
	'SMILIES_SMILE'					=> 'Sonrisa',
	'SMILIES_SURPRISED'				=> 'Sorprendido',
	'SMILIES_TWISTED_EVIL'			=> 'Diablo',
	'SMILIES_UBER_GEEK'				=> 'Microsiervo',
	'SMILIES_VERY_HAPPY'			=> 'Muy Feliz',
	'SMILIES_WINK'					=> 'Guiño',

	'TOPICS_TOPIC_TITLE'			=> 'Bienvenido a phpBB3',
));
