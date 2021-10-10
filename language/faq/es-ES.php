<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Preguntas frecuentes');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Propiedades');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', '¿Cómo creo una propiedad?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Haga clic en Propiedades> Nueva propiedad para agregar una nueva propiedad.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', '¿Cómo puedo ver el aspecto de mi propiedad para los huéspedes?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Haga clic en Propiedades> Vista previa para ver cómo ven su propiedad a los huéspedes.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', '¿Cómo agrego habitaciones?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "La forma de agregar habitaciones depende del modo de edición de tarifas. En el modo de edición de tarifas normal, no es necesario agregar habitaciones, ya que se agregan automáticamente cuando configura sus precios. En el modo de microgestión o edición avanzada de tarifas, luego en Configuración> Habitaciones puede agregar, editar y eliminar habitaciones. También podrá crear características de habitación y asignar estas características a esas habitaciones. Además, podrá cargar imágenes para salas que utilizan el Centro de medios. Cuando cree salas, debe intentar asegurarse de que reflejen las habitaciones del mundo real en su propiedad, ya que eso las hará más fáciles de administrar. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', '¿Cómo establezco los precios de las habitaciones?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Esto depende de su modo de edición de tarifas. Si está utilizando el modo de edición de tarifas normal (Configuración de la propiedad> pestaña Modos de edición de tarifas), puede configurar el número de habitaciones que tiene, el precio, el número de personas que puede acomodar cada habitación y el número total de personas que desea en cada reserva. Este modo le permite establecer los precios de las habitaciones para los próximos 10 años. <br/> Si está utilizando los modos de edición de tarifas Avanzado o Micromanage, entonces está puede establecer precios de habitación para todos los días durante los próximos años. También puede tener varias tarifas para el mismo tipo de habitación, por ejemplo, puede tener una tarifa para alojamiento y desayuno y otra para alojamiento, desayuno y cena. A menos que tenga una necesidad específica , le recomendamos que utilice Micromanage todo el tiempo, Advanced funcionará de la misma manera, pero debe tener cuidado de asegurarse de que las fechas de inicio y finalización de las diferentes tarifas sean consecutivas. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', '¿Cómo creo extras opcionales?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Los extras se pueden agregar a las reservas y se configuran en Ajustes> Extras. Estos pueden ser opcionales o 'forzados', es decir, el huésped no puede deseleccionarlos en la reserva. Puede ofrecer diferentes métodos de cobrar por extras opcionales, y si se muestran o no en la página de detalles de la propiedad. Debido a que se pueden hacer extras para que solo se muestren si una reserva se realiza dentro de ciertas fechas (por ejemplo, para frutas de temporada), debe asegurarse de haya establecido las fechas Válidas desde y Hasta. Una vez que haya creado extensiones opcionales, puede cargar imágenes para ellas a través del Administrador de medios. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', '¿Cómo puedo aceptar pagos en línea?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Para aceptar pagos en línea, debe tener una cuenta con un proveedor de pago en línea, llamado Gateway. Para ver las puertas de enlace disponibles, vaya a Configuración de la propiedad> pestaña Gateways. Haga clic en el nombre de una puerta de enlace. a su página de configuración. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', '¿Puedo dar descuentos?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Se pueden otorgar descuentos, hay varias formas diferentes de hacerlo. Si está haciendo una reserva en nombre de un cliente, puede establecer sus propios totales de depósito y reserva en el formulario de reserva , utilizando los campos Anular total de alojamiento y Anular depósito (los huéspedes no pueden usar esta función). Otra forma de otorgar un descuento a un invitado es crear cupones de descuento, que se pueden configurar para que solo se puedan usar entre ciertas fechas (Válido desde / hasta) o se aplica solo cuando la reserva cae entre ciertas fechas (reserva válida desde / hasta). Estos cupones de descuento se pueden asignar a un solo huésped, o si lo desea, puede imprimir los cupones. La impresión incluye un código QR que los huéspedes pueden escanear en sus teléfonos que los lleva a su formulario de reserva con el código de descuento que ya se aplica. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Reservas');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Cuando hago clic en Nueva reserva, me lleva al formulario de contacto, ¿por qué?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Antes de poder realizar reservas en línea, primero debe configurar algunos precios (tarifas) para cada tipo de habitación que tenga en su propiedad real. Una vez que haya creado algunas tarifas, podrá aceptar reservas . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', '¿Qué son las reservas negras?');
    jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Las reservas negras son reservas que se crearon para dejar una habitación o habitaciones fuera de servicio. No están asociadas con ningún huésped y son útiles, por ejemplo, si una habitación necesita ser renovada");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Imágenes');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', '¿Cómo subo imágenes?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Para cargar imágenes, debe visitar la página Configuración> Centro de medios. En esta página verá varios paneles. En la parte superior puede ver algunas notas, y debajo de ellas verá un menú desplegable. Este menú desplegable le permite seleccionar para qué recurso está cargando imágenes. <br/> A la derecha hay una columna con Agregar imágenes, Borrar lista y Cargar todo. Haga clic en Agregar imágenes y seleccione algunas imágenes de su computadora de escritorio o dispositivo móvil. Cuando ya lo hizo, la columna cambiará a una lista de miniaturas. Desde aquí puede cargar una o más imágenes para sus recursos. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "¿Qué es la imagen 'Principal'?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'La imagen principal es la que aparece en los resultados de búsqueda y en el encabezado de su propiedad (el área en la parte superior de las páginas que muestran algo sobre su propiedad). Debe elegir una imagen que muestre su propiedad en el la mejor luz posible. Para cargar una imagen principal, asegúrese de que la imagen principal de la propiedad esté seleccionada en la lista desplegable en la parte superior izquierda, luego cargue una o más imágenes. Si carga más de una imagen, todas las imágenes se utilizarán en la búsqueda la página de resultados se muestra como una pequeña presentación de diapositivas. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', '¿Qué son los íconos de características de la habitación?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Los usuarios de los modos de edición de tarifas Micromanage o Advanced pueden crear funciones de habitación. Pueden vincularse a una o más habitaciones y se muestran en el formulario de reserva. Una vez que haya creado una función de habitación, puede cargue una imagen para esa función seleccionando primero los íconos de características de la habitación en el menú desplegable del Centro de medios, luego seleccione el nombre de la característica de la sala en el menú desplegable que aparecerá debajo. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', '¿Cómo subo imágenes de habitaciones?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Los usuarios de los modos de edición de tarifas Micromanage o Advanced pueden crear salas. Una vez que se han creado una o más salas, puede cargar varias imágenes para cada sala a través del Centro de medios (seleccione el nombre / número de la sala después seleccionando Imágenes de habitaciones en el menú desplegable). Estas imágenes se pueden ver en una presentación de diapositivas al ver la página Vista previa y seleccionar la pestaña Nuestras habitaciones y luego hacer clic en el enlace Disponibilidad. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', '¿Cómo subo imágenes de presentación de diapositivas?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Las imágenes de la presentación de diapositivas se ven en la página Detalles de la propiedad (vista previa), junto al botón Reservar ahora.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', '¿Cómo subo imágenes adicionales?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Al igual que las habitaciones y las características de la habitación, primero debes crear un Extra. Una vez hecho esto, puedes seleccionar Extras en el menú desplegable superior. Cuando hayas hecho eso, debes seleccionar el nombre de el Extra de la lista desplegable a continuación. Cuando se selecciona el nombre, puede cargar una o más imágenes para ese Extra. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Algo relacionado con los invitados');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', '¿Cómo hago blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Tú blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', '¿Cómo guardo descripciones en varios idiomas?');



