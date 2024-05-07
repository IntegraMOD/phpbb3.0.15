<?php
/** 
*
* acp_language.php [Mexican Spanish]
*
* @package language
* @copyright (c) 2007 phpBB Group.
* @author 2013-7-13 - Traducido por cisco007 for phpbbmexico.com.
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
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
//


$lang = array_merge($lang, array(
	'ACP_FILES'							=> 'Archivos de Admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'		=> 'Aquí puedes instalar/desinstalar paquetes de idiomas. El paquete de idioma por defecto está marcado con un asterisco (*).',

	'EMAIL_FILES'						=> 'Plantillas de emails',

	'FILE_CONTENTS'						=> 'Contenido de archivos',
	'FILE_FROM_STORAGE'					=> 'Archivo de carpeta storage',

	'HELP_FILES'						=> 'Archivos de ayuda',

	'INSTALLED_LANGUAGE_PACKS'			=> 'Paquetes de idiomas instalados',
	'INVALID_LANGUAGE_PACK'				=> 'El paquete de idioma seleccionado parece no ser válido. Por favor verifícalo y súbelo de nuevo si es necesario.',
	'INVALID_UPLOAD_METHOD'				=> 'El método seleccionado no es válido, por favor elije otro.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detalles del idioma actualizados correctamente.',
	'LANGUAGE_ENTRIES'					=> 'Entradas',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aquí puedes editar entradas ya existentes o aún no traducidas.<br /><strong>Nota:</strong> Una vez editado un archivo de idioma, los cambios serán guardados en una carpeta aparte para poder descargarlos. Los cambios no serán visibles para los usuarios hasta que reemplaces el archivo original en el servidor (subiéndolo).',
	'LANGUAGE_FILES'					=> 'Archivos de idioma',
	'LANGUAGE_KEY'						=> 'Código',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Este paquete de idioma ya está instalado.',
	'LANGUAGE_PACK_DELETED'				=> 'El paquete de idioma <strong>%1$s</strong> ha sido deshabilitado. Todos los usuarios de este idioma han sido reasignados al idioma por defecto del Foro.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalles',
	'LANGUAGE_PACK_INSTALLED'			=> 'El paquete de idioma <strong>%1$s</strong> ha sido instalado correctamente.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'En los campos personalizados de Perfil, las cadenas de idioma serán copiadas del idioma por defecto. Por favor, cambia esto si es necesario.',    	
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nombre local',
	'LANGUAGE_PACK_NAME'				=> 'Nombre',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'El paquete de idioma seleccionado no existe.',
	'LANGUAGE_PACK_USED_BY'				=> 'Usado por (incluyendo robots)',
	'LANGUAGE_VARIABLE'					=> 'Idioma variable',
	'LANG_AUTHOR'						=> 'Autor',
	'LANG_ENGLISH_NAME'					=> 'Nombre en inglés',
	'LANG_ISO_CODE'						=> 'Código ISO',
	'LANG_LOCAL_NAME'					=> 'Nombre local',

	'MISSING_LANGUAGE_FILE'				=> 'Archivo de idioma perdido: <strong style="color:red">%1$s</strong>',
	'MISSING_LANG_VARIABLES'			=> 'Variables de idioma perdidas',
	'MODS_FILES'						=> 'Archivos de idioma de MODs',

	'NO_FILE_SELECTED'					=> 'No has especificado un archivo.',
	'NO_LANG_ID'						=> 'No has especificado un idioma.',
	'NO_REMOVE_DEFAULT_LANG'			=> 'No puedes deshabilitar el paquete de idioma por defecto.<br />Cambia el idioma por defecto del Foro antes.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'		=> 'Ho hay paquetes desinstalados',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Borrar de la carpeta storage',

	'SELECT_DOWNLOAD_FORMAT'			=> 'Selecciona formato de descarga',
	'SUBMIT_AND_DOWNLOAD'				=> 'Enviar y descargar',
	'SUBMIT_AND_UPLOAD'					=> 'Enviar y subir',

	'THOSE_MISSING_LANG_FILES'			=> 'Los siguientes archivos no se encuentran en la carpeta de idioma  %1$s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Las siguientes variables no se encuentran en el paquete <strong>%1$s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'		=> 'Paquetes desinstalados',

	'UNABLE_TO_WRITE_FILE'				=> 'No se puede escribir en el archivo %1$s.',
	'UPLOAD_COMPLETED'					=> 'La subida se completó correctamente.',
	'UPLOAD_FAILED'						=> 'La subida falló por razones desconocidas. Tendrás que reemplazar el archivo manualmente.',
	'UPLOAD_METHOD'						=> 'Método de subida',
	'UPLOAD_SETTINGS'					=> 'Configuración de subida',

	'WRONG_LANGUAGE_FILE'				=> 'El archivo de idioma seleccionado no es válido.',
));

?>