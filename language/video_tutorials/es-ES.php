<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Tutoriales en video');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Panel de control');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Este tutorial le muestra cómo usar el panel de control de administración de propiedades.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Línea de tiempo');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Cómo usar el calendario de la línea de tiempo. En este video creamos un nuevo invitado ingresando sus detalles en la ventana emergente, los invitados existentes se pueden reutilizar seleccionando su nombre en el menú desplegable de la ventana emergente.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Propiedades de lista');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Cómo usar la página de Propiedades de la lista para ver información adicional, cambiar columnas y buscar propiedades específicas.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Edite los detalles de su propiedad');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Editando los detalles de su propiedad, incluyendo arrastrar en el mapa para establecer su ubicación.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Cambiar modo de edición de tarifas');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Su modo de edición de tarifas determina el método que puede utilizar para establecer los precios de su propiedad. Hágalo a través de la página Configuración de la propiedad.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Modo de edición de tarifas normal para hoteles, pensiones, B&B');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'El modo de edición de tarifas normal es una función de edición de tarifas simple que le permite seleccionar el número de habitaciones en una propiedad, el precio de la habitación, el número de huéspedes que puede acomodar cada habitación y el número máximo de huéspedes en una fiesta. Cuando se guardan, estos precios son válidos para los próximos 10 años. ');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Edición de tarifas normales para villas y apartamentos');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'El modo de edición de tarifa normal es una función de edición de tarifa simple que le permite seleccionar el subtipo de propiedad, el precio de la propiedad por noche y el número máximo de invitados en una fiesta. Cuando se guardan, estos precios se entonces válido por los próximos 10 años. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Modo de edición de tarifas de microgestión (recomendado)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'El modo de edición de tarifas Micromanage te permite configurar tanto el precio como el número mínimo de días que una estadía puede ser válida, para todos los días del año. Es una poderosa herramienta que te brinda un control completo En este ejemplo, le mostraremos cómo crear múltiples conjuntos de precios para el mismo tipo de habitación, establecer diferentes precios para diferentes períodos y diferentes precios para días específicos de la semana dentro de un período. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Modo de edición de tarifas de microgestión para villas / apartamentos (recomendado)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'El modo de edición de tarifas Micromanage te permite configurar tanto el precio como el número mínimo de días que una estancia puede ser válida, para todos los días del año. Es una poderosa herramienta que te da un control completo sobre los precios. En este ejemplo, le mostraremos cómo crear varios conjuntos de precios. Estableceremos diferentes precios para diferentes períodos y diferentes precios para días específicos de la semana dentro de un período. Una vez hecho esto, crearemos múltiples tarifas para el mismo propiedad, pero con diferentes números de huéspedes que nos permiten controlar con precisión los precios para cada escenario. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Diferentes tarifas para diferentes números de huéspedes');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Puedes crear varias tarifas para el mismo tipo de habitación, así que si quieres diferentes precios para diferentes números de huéspedes, puedes hacerlo.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Por persona por noche - Tipos de invitados');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Para cobrar por persona por noche, deberá crear tipos de huéspedes. Los diferentes tipos de huéspedes pueden tener variaciones en el precio base de una habitación, por lo que los niños de diferentes edades pueden tener diferentes descuentos según sus edades. no necesita cobrar por persona por noche para usar los tipos de huéspedes, también puede usarlos si cobra una tarifa plana pero aún desea capturar el número de huéspedes o porque desea limitar el número de huéspedes en una reserva ');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Centro multimedia - Carga de imágenes');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Todas las imágenes se cargan a través del centro de medios. En este video subiremos la imagen de la propiedad principal, algunas imágenes de presentación de diapositivas, una pequeña selección de imágenes que se mostrarán en la página de resultados de búsqueda e imágenes de una de las habitaciones.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Centro multimedia - Carga de imágenes');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Todas las imágenes se cargan a través del centro multimedia. En este video subiremos la imagen de la propiedad principal, una pequeña selección de imágenes para mostrar en la página de resultados de búsqueda y algunas imágenes de presentación de diapositivas.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Panel de control del administrador');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Esta es su página de destino predeterminada en el área del administrador. Puede ver un resumen de varias estadísticas del sitio y ver qué propiedades existen en el sistema, cuáles están completas y cuáles se completaron y están esperando revisión antes de su aprobación . Una vez que una propiedad ha sido aprobada, el administrador de la propiedad puede publicarla. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Administrador de complementos, instalación y uso');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Este video le muestra cómo usar el Administrador de complementos, incluida la instalación del administrador de complementos y luego la instalación y desinstalación de un complemento. Si no tiene una clave de licencia, se le pedirá que guarde en el sitio Configuración antes de que pueda instalar el administrador. Si no ha utilizado el administrador de complementos antes, esta lista estará inicialmente vacía, en este ejemplo ya tengo una variedad de complementos instalados. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Administradores de propiedades');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Los administradores de propiedades se agregan de dos maneras. O crean propiedades ellos mismos (se pueden deshabilitar en la Configuración del sitio) o el administrador del sitio puede asignar un administrador existente a ciertas propiedades. Los administradores solo pueden acceder a las propiedades que tienen creado o asignado. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Control de acceso');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Puede usar la función Control de acceso para deshabilitar las opciones del menú, haciéndolas visibles solo para ciertas clases de usuarios, o incluso haciéndolas desaparecer por completo. Si la barra de menú no tiene ninguna opción de menú para mostrar, entonces desaparecerá por completo, por lo que si no desea que los visitantes del sitio vean ninguna opción, puede configurar todas las opciones para que sean visibles para los usuarios registrados, por ejemplo. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Tipos de propiedades y habitaciones');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'En este video verás dos conceptos importantes. El primero es la creación de tipos de propiedad y tipos de habitaciones asociados. También verás a un usuario registrado que aún no es administrador crear su propia propiedad y convertirse en administrador (pero solo puede configurar la propiedad que han creado). Los tipos de propiedad y habitación están vinculados, una vez que haya creado un tipo de propiedad, debe agregar un tipo de habitación; de lo contrario, los administradores de propiedades verán mensajes de error rojos al intentar configurar sus propiedades. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Subiendo marcadores de mapa');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Utiliza el Centro de medios para cargar marcadores de mapa. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Puede encontrar una gran fuente de marcadores aquí. < / a> El procedimiento para cargar características de propiedad, características de habitación, tipos de habitación y otros es el mismo. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Características de propiedad');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'En este video le mostraremos cómo crear características de propiedad y cargar imágenes para ellas.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Los códigos cortos son una característica excepcionalmente poderosa de Jomres. El principio es el mismo para Joomla y Wordpress. En este video, le mostraremos dónde ver los códigos cortos (esta lista cambiará dependiendo de los complementos instalado) y cómo usarlos. Puede usar los códigos en artículos o módulos. ');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Archivos de registro');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Este video le mostrará cómo ver los archivos de registro. Se produce un registro extenso cuando se ejecuta el sistema. En el modo de producción (Configuración del sitio> Depuración) se generan menos registros, por lo que si está probando una nueva función, debe configurar su sitio en Desarrollo. Si desea agregar su propio registro a sus scripts de Jomres, eche un vistazo a <a href="https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> nuestra página de manual sobre cómo hacerlo. </a> Aquí arrojaremos un error falso, luego veremos el archivo de registro. Porque el sitio está configurado para Desarrollo allí es mucha información, normalmente solo verá un mensaje que dice que hubo un error y que se ha informado. ');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Traducir etiquetas y otras cadenas');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Hay varias formas de traducir cadenas de idioma en Jomres, puede editar archivos de idioma, pero es posible que se sobrescriban al actualizar. En su lugar, le recomendamos que utilice las herramientas de traducción integradas que son exclusivas de nuestro Si la cadena es algo que se ha ingresado en un formulario, como el nombre de un tipo de habitación, puede usar la página de Edición de etiquetas. Si la cadena es del archivo de idioma, puede usar la herramienta de edición de archivos de idioma. Simplemente use la herramienta de búsqueda del navegador para encontrar la cadena que desea cambiar y luego haga clic en el enlace para cambiarla. Estos cambios se guardan en la base de datos y, por lo tanto, se actualizan de manera segura. Puede tener diferentes etiquetas para diferentes tipos de propiedades, por lo que puede cambie Nueva propiedad a Nuevo campamento, por ejemplo, cambiando el menú desplegable Contexto de idioma en la parte superior de la página antes de cambiar la etiqueta. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Añadiendo propiedades');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> En esta etapa, Jomres se ha instalado en el CMS y se ha agregado al menú de la interfaz (o en Wordpress ha creado una página y le ha agregado el código corto básico de Jomres). </ p>
<p> Aquí verás cómo un usuario registrado que aún no es administrador de propiedades en Jomres puede crear una nueva propiedad, configurar algunos ajustes básicos y publicarla. </p>
<p> Al final, verá que el administrador se ha configurado automáticamente como administrador de la propiedad, sin embargo, solo puede configurar sus propias propiedades. </p>
<p> Aunque la interfaz en Wordpress se ve diferente, el proceso es exactamente el mismo para Joomla o Wordpress. </p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Categorías de propiedad');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Categorías de propiedades es una característica simple que permite a los administradores de propiedades asignar sus propiedades a una categoría determinada. Los administradores del sitio pueden crear códigos cortos que enumerarán todas las propiedades en una categoría, como se muestra en este video.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Propiedades de visualización del administrador del sitio');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> No administra propiedades desde aquí, solo puede administrar propiedades desde la interfaz, sin embargo en esta lista puede ver las propiedades que están pendientes de aprobación (si la función está habilitada) y las que están incompleta (por ejemplo, todavía es necesario cargar imágenes, establecer precios, etc.). Haga clic en el nombre de la propiedad para acceder al panel de control de esa propiedad. Luego, podrá utilizar las secciones de la guía en la parte superior de la página para ver los pasos que debe tomar para completar y publicar una propiedad. </p> ');
