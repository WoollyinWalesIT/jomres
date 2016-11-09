<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Translated to pt-PT by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 17Set2010 - www.marioliveira.net - Updated 21Jun2011 for ver 5.1
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Reserva rápida' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Perfis' );
jr_define( '_JOMRES_COM_MR_QUICK______DESC', 'Deixado em branco intencionalmente' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configuração geral' );
jr_define( '_JOMRES_COM_MR_BACK', 'Voltar' );
jr_define( '_JOMRES_COM_MR_YES', 'Sim' );
jr_define( '_JOMRES_COM_MR_NO', 'Não' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Novo' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Nova propriedade' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Nova característica da propriedade' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Novo cliente' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Guardar' );
// View bookings
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nome' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Data de chegada' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Data de partida' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'em branco' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Designar funções de administrador' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Nome' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Nome de utilizador' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Autorizado' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Propriedade por defeito' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Alterar' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Nível de acesso' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Utilizador modificado' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Recepção' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Gerente da propriedade' );
// Edit bookings
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Todas as reservas' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Novas reservas (Por pagar)' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editar reservas para ' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Chegada/Partida' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Cliente' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Quarto' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Pagamento' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Cancelar reserva' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Nome' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Sobrenome' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nº porta' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Rua/Local' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Cidade/Localidade' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Cód. postal' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telef. fixo' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telemóvel' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Endereço email' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Pedidos especiais: ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Note que pedidos especiais poderão ter preço acrescido' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr/design casa' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Rua' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Localidade' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Cód. postal' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telef. fixo' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telemóvel' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_CANCELBOOKING', 'Cancelar reserva' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_USER_EXPL', 'Iserid do website' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_HOUSE_EXPL', 'Número ou nome da casa' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_STREET_EXPL', 'Rua' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_TOWN_EXPL', 'Cidade' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_POSTCODE_EXPL', 'Código Postal' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_LANDLINE_EXPL', 'Telefone' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_MOBILE_EXPL', 'Telemóvel' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_FAX_EXPL', 'Fax' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_EMAIL_EXPL', 'Email' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_PREFERENCES_EXPL', 'Preferências' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_MOSRES_CAR_REGNO_EXPL', 'Matrícula do carro' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dias até à chegada' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Năo pode cancelar esta reserva. O cliente já deu entrada.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Cancelar reserva' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirmar o cancelamento da reserva' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Reserva cancelada' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tipo de reserva' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Preta' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Balcão' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Nome do quarto' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Número do quarto' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Andar' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Desactivar acesso disponível?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Máx pessoas' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tipo de quarto' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Descrição do tipo de quarto' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Características do quarto' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Pagamento efectuado' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Introduzir pagamento' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total a pagar' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Referência da caução' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Número de reserva' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Caução' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Caução gravada' );
// Edit Language
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP1_Em alternativa', 'Em alternativa' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Apartamentos disponíveis' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Propriedade' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tipo de quarto' );
// Display guest form
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Editar dados do cliente' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Nome' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Sobrenome' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Nr' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Rua' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Localidade' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Código Postal' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefone' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Telemóvel' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Nr Cartão de crédito' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Cartão emitido em' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Cartão expira em' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Número de emissão' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Nome no cartão' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seleccione um apartamento' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Dias de permanência' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Número de pessoas' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total' );
// Rooms tab
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Ver configurações de apartamentos/propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Apartamentos' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Características dos apartamentos' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Tipos de apartamentos' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Características da propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Quarto' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tipo' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nome' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nş' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Andar' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Desactivar acesso?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Máximo pessoas' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Características' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Quarto adicionado' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Editar' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Características do quarto' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descrição das características' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Característica do quarto adicionada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Característica do quarto alterada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Tipo de quarto' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Abreviatura de tipo de quarto' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Descrição do tipo de quarto' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tipo de quarto adicionado' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Tipo de quarto alterado' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editar' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nome' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Rua' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Cidade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Regiăo' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'País' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Código postal' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Características' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Propriedade adicionada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Propriedade actualizada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Característica da propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Abreviatura da característica da propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descrição completa das características da propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Característica da propriedade adicionada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Característica da propriedade actualizada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifa' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Título da Tarifa' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descrição' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Válida de' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Valida até' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Taxa por noite' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Mín dias' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Máx dias' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Mín pessoas' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Máx pessoas' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tipo de quarto' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorar PPPN' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permitir fins de semana' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarifa adicionada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarifa actualizada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editar' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Clonar' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa apagada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editar tarifa' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Feriado' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Reserva guardada' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Reservar' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Registar entrada' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Registar saída' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Listar reservas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Listar NOVAS reservas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Calendário de reservas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Clientes' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Configurações' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Ver disponibilidade' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Confirmar os seus dados' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Primeiro nome' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Sobrenome' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_HOUSE_EXPL', 'Nş' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_STREET_EXPL', 'Rua' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_TOWN_EXPL', 'Cidade' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_POSTCODE_EXPL', 'Código postal' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_LANDLINE_EXPL', 'Telefone fixo' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_MOBILE_EXPL', 'Telemóvel' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_MOSRES_FAX_EXPL', 'Fax' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Não existem apartamentos disponíveis que satisfaçam os parâmetros especificados' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Obrigado pela sua reserva, e desejamos-lhe desde já uma excelente estadia. A recepção irá brevemente entrar em contacto consigo por telefone ou email para confirmar o método de pagamento.<br><br> <b>Tenha em atenção que se trata apenas de uma reserva preliminar, que será válida após receber uma confirmação nossa, o que faremos o mais rapidamente possível.</b><br></center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Reserva do cliente ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Escolha cliente ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Cliente reservou em ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Nenhum cliente é suposto chegar hoje' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Cliente marque sua saída ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Nenhum cliente é suposto partir hoje' );
// Config panel
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Suplementos' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Tarifas e Moeda' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Descontos' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload de ficheiros' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Definições actuais' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Explicação' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Suplementos por single' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Assegure-se de que selecciona Sim se quiser cobrar suplementos por pessoa só' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Suplemento por "single"' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Percentagem do depósito necessário?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'A percentagem do depósito necessário é da reserva total? Se năo, entăo ao depósito será aplicado um valor fixo' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Valor de depósito necessário' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'Por pessoa, por noite' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Escolha Sim se pretende que seja cobrado no esquema pessoa-por-noite. Se năo, os custos serăo calculados com base em por-quarto-por-noite' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Tamanho do ficheiro' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Tamanho máx. da imagem em Kilobytes' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Registado' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalhes da reserva' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Relembramos-lhe que uma reserva é um contrato legalmente vinculativo, logo se por qualquer motivo necessita de cancelar ou atrasar a sua reserva, será responsável por pagar a sua totalidade.' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Despesas de cancelamento ou alteração</i> Se cancelar as suas férias entăo terá de ser por escrito. As taxas para cancelamentos são as seguintes:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Até 14 dias da data de chegada' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Imprima a carta de confirmação' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Impressão de Factura' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Número de noites: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Contrato inicialmente acordado: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Custo por noite: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Total' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Obrigado por ter escolhido ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Esperamos voltar a vê-lo.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Imprimir pagamento' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Adicionar serviço a cobrar' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descrição do serviço' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Valor do serviço' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Outros items cobrados' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Outros itens cobrados. Valor total: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Item adicionado à conta' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Upload de imagem' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Upload de ficheiro' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'Só é permitido o upload de ficheiros do tipo:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Por favor escolha um ficheiro para transferir' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'O ficheiro só pode conter caracteres alfanuméricos e sem espaços.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'Tamanho máximo excedido.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'O ficheiro não foi transferido.' );
jr_define( '_JOMRES_FILE_UPDATED', 'O ficheiro foi transferido.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'Calendário JS' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'Ficheiro de idioma do Calendário JS' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Escolha o idioma que deve ser usado no calendário Javascript. Note que parece haver actualmente alguns problemas com o calendário Javascript. Por alguma razão, apenas o ficheiro de língua inglesa parece funcionar. Veja http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse para informação adicional.' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'Ficheiro CSS do Calendário JS' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Escolha o ficheiro CSS que deve ser usado com o calendário Javascript' );
jr_define( '_JOMRES_COM_A_ODDS', 'Diversos' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Listar chamadas de minicomponentes' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Mude para Sim para ver um <i>Log</i> dos minicomponentes invocados ao fundo da página após o Jomres ter terminado de funcionar. Isto também desactiva a funcão de redireccionamento interno. É util se está a tentar identificar que minicomponentes estão a executar determinados serviços.' );
jr_define( '_JOMRES_FILE_DELETE', 'Apagar esta imagem' );
jr_define( '_JOMRES_FILE_DELETED', 'Ficheiro apagado' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Apagar quarto' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Não é possível apagar este quarto, ainda se encontram reservas para ele. Cancele as reservas e tente outra vez.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Quarto apagado' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Apagar característica do quarto' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Não foi possível remover a característica deste quarto, pois é a mesma para vários apartamentos. Remova a característica para esses apartamentos e tente novamente.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Característica do quarto apagada' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Apagar característica da propriedade' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Năo foi possível remover caracteristica da propriedade, pois está ligada a uma propriedade. Remova a caracteristica dessa propriedade e tente novamente.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Característica da propriedade apagada' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Apagar tipo de quarto' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Náo é possível apagar este tipo pois está atribuido a um quarto. Atribua a esse quarto um outro tipo e tente outra vez.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Não é possível apagar este tipo de quarto pois está associado a uma tarifa. Tente atribuir a tarifa a outro tipo de quarto e tente outra vez.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tipo de quarto apagado' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Propriedade apagada' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Propriedade apagada' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Não tem autorização para apagar esta propriedade.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Largura da imagem em tamanho real' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descrição da propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Horas de check in' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Actividades na área' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Direcções para os automobilistas' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aeroportos' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Outros transportes' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', ' Condições' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Endereço' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Os visitantes podem reservar online' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Escolha sim para garantir que os visitantes podem reservar apartamentos online.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'As reservas săo para um periodo fixo' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Se seleccionar Sim entăo as reservas serăo para um periodo fixo. Se escolher Năo, tem de garantir que o dia suposto de chegada năo será escolhido como Sim (a năo ser que especifique que obriga as pessoas a chegar num certo dia, caso contrário năo terá muitos links no calendário das disponibilidades).' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Período da reserva: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Reserva de apartam./quartos' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Períodos máximos, por ex. 3 x 7 períodos de reserva = 21 dias' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'É uma propriedade única (SRP)?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'Por ex., está a alugar toda uma propriedade, em lugar de quartos numa propriedade. Se for este o caso, deve assegurar-se de que só tem um quarto registado em cada uma dessas propriedades.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Rever reserva' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirmar reserva' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Segunda-feira' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Terça-feira' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Quarta-feira' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Quinta-feira' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Sexta-feira' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sábado' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Domingo' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Seg' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Ter' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Qua' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Qui' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Sex' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sáb' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Dom' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Calendário de disponibilidade' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Cor do tipo de letra, para o dia corrente' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'Cor do tipo de letra, para os dias no ecrã do mês ' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Cor do tipo de letra, para os dias que não estão no ecrã do mês' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cor de fundo para a célula, para os dias em que uma propriedade/quarto está disponível' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cor de fundo para a célula, para os dias que não estão no ecrã do mês' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cor de fundo da célula, para os dias ocupados' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cor de fundo da célula, para apartamentos reservados provisoriamentes (reservas para as quais não tenha havido depósito)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cor de fundo da célula, para datas passadas' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Ocupado/Não disponível' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponível para reservas' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Reservas provisórias' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Dia de chegada pré-definido' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Apenas para sites que oferecem períodos fixos de reservas. Escolha o dia em que a chegada tem de ocorrer.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Dia de chagada fixo' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Período durante o qual tenciona ficar (dias)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Ver calendários de disponibilidades?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Escolha Sim para ver o calendário das disponibilidades' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Disponibilidade' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Clique numa data livre para ver o formulário da reserva.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Indisponibilidades' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Estado' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Auditoria de alterações' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nova indisponibilidade' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Remover cliente' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Cliente removido' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Arquivar todos os registos' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', 'registos arquivados' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'O auditor arquivou os registos verificados' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Impossível apagar este cliente uma vez que existem reservas abertas por ele. Cancele-as e tente outra vez.' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Utiliz. desconhecido' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Custo actual do Quarto: ' );




jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Chegada pendente' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'A chegar hoje' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Actualmente residente' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'A partir hoje' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Partida ultrapassada' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Ainda não chegou' );


jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Fumador' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Ambivalente' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Formato do Calendário' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Permite ao utilizador modificar o formato das datas de saída do Mosres' );
jr_define( '_JOMRES_COM_CALENDARINPUT', ' Formato de introdução do Calendário' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Permite ao utilizador mudar o formato das datas do Mosres.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Os períodos fixados para reserva permitem intervalos curtos' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Extensão do período mais curto' );
// Translate from here
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Gateways' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Cancelar' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'P.f. escolha o(s) quarto(s) que pretende retirar de serviço, e as datas respectivas dates. <br>Se um quarto não tiver uma marca de verificação, não pode ser incluído nas indisponibilidades até que todas as reservas relativas tenham sido completadas/canceladas.<br/>Quando tiver seleccionado as datas apropriadas, clique no botão azul "Aplicar" para reverificar a disponibilidade do quarto. ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Parece que o Joomla pôs termo ao seu login por inactividade</b><br />Por favor faça login e tente de novo.' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Mostrar extras quando da reserva?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Defina Sim se quiser mostrar quaisquer extras que pretenda propor ao hóspede' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Motivo' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Usar <i>gateways</i> de pagamento?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Defina para Sim se quiser usar <i>gateways</i> ou estruturas de pagamento online. <b>Nota:</b>Esta opção não desactiva o cálculo de depósito mostrado durante o processo de reserva. Para o desactivar, pode editar os <i>templates</i> (temas) que mostram os quartos e retirar os elementos que se referem a depósitos.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'P.f. escolha o método de pagamento.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', '<i>Gateway</i> activado?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Modificada a definição do <i>plugin</i>' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Inserida a definição do <i>plugin</i>' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Ver o website desta propriedade' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Ligação externa' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Introduza aqui uma ligação para o seu <i>website</i>.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Cartão de crédito visto' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Cartão de crédito actualizado' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Editar cartão de crédito' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Tamanho dos ícones' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Extras' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Carga em grupo de imagens da propriedade' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Imagens já na pasta' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Slideshows' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Mostrar ligação para os slideshows?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Mostrar slideshow em linha?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Altura do alvo das imagens reduzidas do slideshow' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Slideshow' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Desculpe, mas não há imagens para esta propriedade' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Mostrar ligação para as tarifas?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', '<i>Popups</i> permitidos?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Se definido para Não, as ligações que normalmente se teriam aberto num <i>popup</i> abrir-se-ão em linha. EXPERIMENTAL! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Carga de imagens em conjunto' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Admin. Extras' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Descrição' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Nome' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Preço' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Filtrar por nome de utilizador' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Filtrar por operação' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Data' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Utilizador desconhecido' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Quarto criado' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Quarto actualizado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Quarto eliminado' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Caract. quarto criada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Caract. quarto actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Caract. quarto eliminada' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Tipo de quarto inserido' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Tipo de quarto actualizado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Tipo de quarto apagado' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Propriedade criada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Propriedade actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Propriedade eliminada' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Caract. propr. criada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Caract. propr. actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Caract. propr. eliminada' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Pormen. propr. editados' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Propr. publicada.' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifa criada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifa actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Tarifa eliminada' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Desp. serviço adicionada' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Data entr. de Hóspede' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Dada saída de hóspede' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Entr. de depósito' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Hóspede criado' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Hóspede actualiz.' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Hóspede removido' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Quarto reservado' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Extra criado' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Extra actualiz.' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Extra eliminado' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Extra publicado' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Não há extras a incluir na conta' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Assinado em representação de ' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtrar por data' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extras opcionais.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Editar idioma' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Pesquisar aqui por: ' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Quartos constantes da lista de indisponibilidades' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Indisponib. introduzida' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Indisponib. eliminada' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Hora' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Utilizador (nome de utilizador)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Operação' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Ver detalhes' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Nr de registos não arquivados: ' );
jr_define( '_JOMRES_A_TABS_MISC', 'Diversos' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Data de início de indisponibilidade' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Indisponibilidade' );
jr_define( '_JOMRES_A', 'Configuração do site' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Use características globais da propriedade' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Defina Sim se quiser forçar todas as propriedades a usar somente as características de propriedade definidas pelo webmaster.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Ícone' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Seleccione o plugin de pesquisa que quer usar.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Desculpe, mas a sua pesquisa não mostra quaisquer resultados. P.f. modifique-a e tente novamente.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Tem a certeza de querer fazer isto?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Reservar um quarto' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Reservar esta propriedade' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Código de segurança' );
//v1.4c
jr_define( '_JOMRES_COM_A_RESET', 'Reiniciar' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Taxa' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Mostrar tarifas em linha?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Endereço' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Informação detalhada' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Clique para ver Quartos e Disponibilidade' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Mostrar informação de tarifas' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Mostrar opção fumador?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Defina Sim se quiser mostrar a opção fumadores.' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Opção fumador por defeito' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Limitar reservas antecipadas?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Defina Sim se quiser limitar as reservas antecipadas (use o campo seguinte para definir o nr de dias de limite). Se definir Sim, e se o utilizador tentar reservar com um número superior de dias de antecipação, a sua data de chegada será reposta para a data de hoje' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dias fixados para limitar reservas antecipadas:' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Mostrar informação de endereço abaixo desta ligação' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Mostrar informação detalhada de propriedade abaixo desta ligação' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Mostrar quartos e disponibilidade abaixo désta ligação' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Mostrar informação de tarifas abaixo desta ligação' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifas de taxa uniforme' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Médias' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Que modelo de tarifas quer usar?' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Nº de estrelas' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Tem duas opções de método de cálculo de tarifas. O primeiro, o 'taxa uniforme' permite-lhe oferecer diversas tarifas diferentes ao hóspede, sendo a taxa da estadia a mesma para todo o período desta. Isto é útil se quiser oferecer diversas tarifas diferentes para a mesma data, por ex. tarifa Cama e Pequeno Almoço e tarifa Cama, Pequeno Almoço e Jantar. Escolha a tarifa 'médias' se pretender ajustar os seus preços em função da data em questão. O Jomres encontrará todas as tarifas para cada dia da reserva, adiciona-as e apresenta a taxa média durante todo o período." );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrar <i>input</i> de data de partida?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Defina Não se não quiser mostrar o campo para introdução de data de partida. Use esta opção apenas se souber bem o que está a fazer, porque deste modo a data de partida nas reservas será sempre definida como a do dia a seguir ao de chegada." );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Limite da descrição' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Limita o número de caracteres mostrados na listagem da propriedade, quando se selecciona a descrição desta." );
// v1.4g
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Formato da data() usada?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Seleccione Sim para formatar as datas de acordo com o parâmetro date() (veja <a href="http://www.php.net/manual/en/function.date.php">aqui</a>). Defina para Não para utilizar o formato strftime() (veja <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Clique para publicar' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Clique para despublicar' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Cor de fundo de erro de introdução' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'País por defeito no formulário de reserva' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Mais info' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Os campos assinalados com uma estrela vermelha são de preenchimento obrigatório.' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Listar tipos de propriedades' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Os utilizadores podem registar propriedades?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Defina Sim se quiser que os utilizadores possam registar as suas próprias propriedades sem intervanção de Administrador.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'P.f. introduza o País e região da sua propriedade.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'P.f. complete os pormenores da sua propriedade.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'IOs campos assinalados com uma estrela vermelha são de preenchimento obrigatório.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Propriedade criada' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Desculpe, mas não pode criar uma propriedade neste sistema. Deve ser um utilizador registado e com <i>login</i> feito, e não deve ter criando ainda nenhuma propriedade." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Criada a propriedade: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Para o utilizador: ' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Antever' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Meses de calendário a mostrar' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'Na disponibilidade dos quartos, quantos meses de calendário devem ser mostrados?' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Mostrar calendário desde o início do ano?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'O calendário de disponibilidade é mostrado desde o início do ano corrente.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Nr de quartos disponíveis' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Voltar aos pormenores da propriedade' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Tipos de quarto' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Saldo a pagar' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>NOTA: Não é recomendado que defina ambas as opções seguintes para Sim, pois deve usar somente um dos cálculos de taxas disponíveis. </FONT>' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editar item' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Use este formulário para fazer a sua reserva. Coloque o cursor do rato sobre as imagens "i" para informação adicional sobre a coluna. Defina ou altere os pormenores da reserva, como por exemplo datas de chegada e partida e número de hóspedes, depois seleccione o(s) quarto(s) que pretende na lista dos disponíveis. Clique em qualquer deles para os adicionar à sua reserva. Quando tiver terminado, pode adicionar quaisquer extras opcionais que possa desejar e completar o formulário com os seus dados pessoais. Quando o formulário contiver informação suficiente proporcionar-lhe-á um botão de confirmação para finalizar a reserva.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Use este formulário para fazer a sua reserva. Coloque o cursor do rato sobre as imagens "i" para informação adicional sobre a coluna. Altere os seus detalhes de reserva, como sejam datas de chegada e partida, e quantidade de hóspedes. Quando terminar, pode adicionar extras opcionais que possa desejar, e indicar os pormenores do seu endereço. Quando o formulário contiver informação suficiente proporcionar-lhe-á um botão de confirmação para finalizar a reserva.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Detalhes da reserva' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleccione os pormenores do seu pedido de reserva' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilidade ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Seleccione os quartos que pretende' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Veja aqui se a propriedade está disponível nesta altura.' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Tipo de propriedade' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Extras opcionais' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleccione quaisquer extras que queira incluir na sua reserva' );
jr_define( '_JOMRES_COM_PERDAY', 'por noite' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Os seus dados' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'P.f. introduza os elementos necessários. Atenção aos campos obrigatórios.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Quartos disponíveis' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Quartos seleccionados' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>A data de chegada mais próxima possível é: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'Por noite:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extras:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'Taxa:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Desconto:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total Geral:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hóspedes' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Clique agora para adicionar este quarto à sua selecção' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Click now to remove this room from your selection' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipos de hóspede' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Tipo' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Tipo de cliente, por ex. Adulto, Criança, ou Estudante ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Notas' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Notas que queira tomar acerca deste tipo de cliente' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Máximo' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Nr máximo de clientes deste tipo que podem ser seleccionados no formulário de reserva' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Em percentagem?' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'O valor calculado é uma percentagem do valor Base calculado para o quarto. Se for definido para Não, então o valor especificado é simplesmente adicionado ou subtraído ao valor base do quarto.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Adicionar variação?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'O valor calculado é adicionado ou retirado ao valor Base calculado para o quarto. Defina para Não se quiser que este seja um desconto ao valor Base. ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Variação' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Valor da variação' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Ordem de tipo de cliente alterada' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Tipo de cliente publicado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Tipo de cliente eliminado' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Tipo de cliente criado' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Tipo de cliente actualizado' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Tipo de cliente actualizado' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Mostrar ligação para a lista de quartos na página de pormenores da propriedade?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Mostrar <b>somente</b> calendário de disponibilidade/lista de quartos?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Defina como Sim para desactivar a exibição do cabeçalho da propriedade e dos detalhes, de modo a que apenas a lista de quartos/calendário de disponibilidade na secção de pormenores da propriedade. Destinado somente a utilizadores que aluguem propriedades de um só quarto (únicas), <i>cottages</i>, etc.' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Intervalo mínimo chegada-saída' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'O intervalo mínimo no formulário de reserva, entre as datas de chegada e de partida.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Mostrar nr do quarto na lista de quartos do formulário de reserva' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Mostrar nome do quarto na lista de quartos do formulário de reserva' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Mostrar título da tarifa na lista de quartos do formulário de reserva' );
jr_define( '_JOMRES_ORDER', 'Ordem' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Requeridos' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dias antes da chegada' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'O número mínimo de dias que devem decorrer desde "hoje", antes da data de chegada.' );
jr_define( '_JOMRES_DTV', 'Variantes de tipo de data' );
jr_define( '_JOMRES_DTV_DOW', 'Dia da semana' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Número de hóspedes por defeito' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Número, por defeito, do primeiro tipo de hóspede. Se utiliza tipos de hóspede, este é o número por defeito que será definido para o primeiro tipo de cliente visível no formulário de reserva.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Só utilizadores registados podem reservar online?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Desculpe, tem de se registar para poder reservar online. Clique aqui para se registar neste site. ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Cor do tipo de letra para as reservas correntes' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Rebordos assinalando fim de semana' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'O quarto está marcado' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Indisponibilidade' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Arredondar para cima o depósito?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Cobrar depósitos?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarifas guardadas como valores semanais?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Tem a opção de guardar as tarifas como valores diários ou semanais. Se os guardar como semanais, TEM DE definir esta opção como Sim.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Taxa por semana' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Recorr. das datas de chegada fixas: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Quando são seleccionadas datas de chegada fixas, o nr de datas que pode ser mostrado na lista <i>dropdown</i>. Note que a lista de datas não incluirá nenhuma data se uma reserva não for possível devido a reservas anteriores, e que a lista será na realidade duas vezes mais longa que o número seleccionado, porque terá um número similar no histórico de datas (quando isto se aplicar)' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Opção fumador inválida' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Data de chegada incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Data de partida incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'A reserva tem uma duração demasiado curta. Têm de decorrer pelo menos estes dias entre as datas de chegada e de partida: ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'O seu intervalo é' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Variante tipo de hóspede incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Seleccione o número/tipo de hóspedes' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Tem demasiadas pessoas no grupo para as tarifas seleccionadas' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Escolheu mais quartos do que o número de hóspedes' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Demasiados hóspedes para as camas disponíveis' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Precisa de escolher mais quartos' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Seleccione um quarto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'O primeiro nome é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'O sobrenome é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Nr/nome de casa é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'A rua é requerida' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'A cidade é requerida' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'A região é requerida' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'O código postal é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'O País é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'O telefone fixo é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'O telemóvel é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'O endereço email é requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'O endereço email não é válido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Não é possível validar o domínio email' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Temos alojamentos disponíveis!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Ainda não há quartos seleccionados' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Reserva nr' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok para reservar, cor de fundo da caixa de mensagem' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', '<i>Dump</i> das variáveis de tema?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Utilize para permitir um <i>dump</i> DHTML de variáveis de tema para cada tema de <i>front end</i> à medida que essa página for vista. Útil se quiser ver se um determinado elemento está disponível para ser usado num dado tema (template).' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'O valor é percentagem?' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Defina como Sim se o valor de cálculo por pessoa só é uma percentagem. Caso contrário, será aplicado o valor directo indicado.' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Limite de quartos disponíveis/tarifa' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Use este parâmetro para limitar o número de quartos & tarifas disponíveis entre as que são listadas no formulário de reserva. Defina para zero se não quiser definir nenhum limite. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Não há disponibilidades nesta data!' );
// Introduced in v2.5
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Reserve agora: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Modo de edição global?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Tenha cuidado com esta função. Se estiver definida Sim, o modo de dição afectará o texto adaptável de TODAS as propriedades no sistema, para a constante que estiver a editar.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Símbolo global de moeda' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Componente confinado' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Defina Sim se o componente for confinado de tal modo que não sejam visíveis as áreas de módulo e de cabeçalho' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super Gerente de Propriedade' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Apenas fins de semana' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Dias de fim de semana' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Defina os dias de fim de semana. As tarifas que permitem, ou não, fins de semana utilizarão esta definição quando gerarem a lista de quartos.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Seleccione o seu País antes de adicionar qualquer informação sobre a propriedade' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Guarde as alterações à sua propriedade antes de carregar uma imagem' );
jr_define( '_JOMRES_TARIFFSFROM', 'Preços desde - ' );
jr_define( '_JOMRES_SEARCH_ALL', 'Tudo' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Pesquisar por País' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Pesquisar por região' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Pesquisar por localidade' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Pesquisa de características.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Pesquisar' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Introduza uma palavra de pesquisa e tecle no botão.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Palavra(s) de pesquisa: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'P.f. introduza as datas em que tenciona chegar e partir, para complementar pesquisa de disponibilidade' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Listar todas as propriedades por tipo.' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Listar todas as propriedades por tipo de quarto' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'Por defeito' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Nome da propriedade' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Região da propriedade' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Cidade da propriedade' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Estrelas' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Lista de propriedades' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detalhes da propriedade - ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Formulário de reserva' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Actualize os seus detalhes de morada' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'A reverificar disponibilidade de quartos<br/>(A selecção de quartos será reinicializada)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'A reverificar disponibilidade' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'A modificar os seus extras opcionais' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'A alterar a sua selecção de quartos' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'A actualizar os seus detalhes de morada' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Desculpe, um ou mais campos de endereço está(ão) incorrecto(s).' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Imagem do quarto' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Formato de moeda' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Mostrar as opções dos Gerentes como imagens' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opções de pesquisa' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Logs disponíveis' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'Não há entradas de <i>logs</i>. Isto é normal, porque precisa de modificar manualmente o ficheiro jomres.php para activar o registo de <i>logs</i>' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Mensagem' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avançado' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Modo de configuração de tarifa' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Aviso: Alternar entre tipos diferentes de tipos de tarifa pode resultar em perda de dados.<br /> Veja a nota abaixo sobre isto</b>.
<br/>
Tem três opções para configurar as suas tarifas.<br/>
Modo normal: Terá uma tarifa para cada tipo de quarto, válida para os próximos 10 anos.<br/>
Micromanage: Pode modificar o valor de cada e em cada dia diferente para cada tipo de quarto/propriedade. <br/>
Avançado: O \"velho\" método Jomres de gerir tarifas. <br/>
<br/>
Os diferentes modos permitem escolher o método e configurar tarifas que melhor se adapte à sua preferência.<br/>
O modo Normal é o mais simples e fácil de entender porque cruza referências de quartos e tarifas com tipos de quarto/propriedade e permite configurar quartos e preços na mesma página.<br/>
O Micro manage permite variar as tarifas numa base diária sem ter que gerir quartos ou tarifas; é feito por cruzamento de referências de muitas tarifas diferentes entre si. isto resulta num certo número de tarifas que são criadas para si cobrindo um determinado período de tempo, mas não pode sobrepor tarifas umas em relação às outras.<br/>
O modo Avançado deixa-o criar um quarto e associá-lo com um tipo de quarto. Cria então uma tarifa e associa essa tarifa com um tipo de quarto. Utilizando este método é possível \"sobrepor\" tarifas umas sobre as outras, por exemplo um quarto do tipo \"Cama dupla\" pode ter uma tarifa para <i>bed & breakfast</i> (dormida e pequeno almoço) e outra para dormida, pequeno almoço e jantar. O m
etodo avançado requer um pouco mais de atenção ao pormenor, porque é possível dissociar um quarto ou tarifa de um tipo de quarto/propriedade, ou incorrectamente definir datas De e PARA, mas dá-lhe opções de configuração que os outros modos não proporcionam. <br/>
<br/>
Porque os modos Normal e Micromanage requerem uma definição específica de quartos e tarifas, para que o modo tarifa funcione o sistema pode necessitar de reiniciar alguns dados para tornar as configurações actuais de tarifas compatíveis com o presente modo de edição de tarifa.<br/>
<br/>
Normal -> Avançado. Não muda. As tarifas existentes são mantidas.<br/>
Normal -> Micromanage. Todas as tarifas existentes são removidas.<br/>
Avançado -> Normal. Todas as tarifas existentes são removidas.<br/>
Avançado -> Micromanage. Todas as tarifas existentes são removidas.<br/>
Micromanage -> Avançado. Todas as referências cruzadas existentes entre tarifas são removidas, mas as próprias tarifas permanecem inalteradas.<br/>
Micromanage -> Normal. Todas as referências cruzadas e tarifas são removidas.<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Mostrar lista de quartos na página de pormenores da propriedade?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Tipo de propriedade' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'SRP (Single Rooom Propriety - Propriedade Única) somente' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Máx pessoas por quarto' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Máx pessoas na reserva' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Adicionar nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Editar nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Apagar nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Ver notas' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Nova nota adicionada' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Nota editada' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Nota apagada' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'As minhas opções' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Listar reservas' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'As minhas reservas' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Ver reserva' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Ver favoritos' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Ainda não adicionou quaisquer favoritos!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Adicionar a favoritos' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipo de propriedade' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Propriedades no site' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Preço sensato' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Activo' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Este <i>plugin</i> permite-lhe disponibilizar e configurar os preços dos seus quartos dinamicamente.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Muitos comerciantes recalculariam os preços dos quartos com base no número de quartos de um dado tipo requerido, disponíveis numa determinada data. Este modo permite-lhes oferecer descontos num tipo de quarto que não estiver ocupado durante um determinado período, com o objectivo de atrair marcações que de outro modo poderiam perder-se.<br/>Activando e configurando este plugin permite oferecer preços ajustáveis baseados no número de quartos de um certo tipo seleccionado que estejam disponíveis na propriedade num determinado dia.<br/>O intervalo de dias define o número de dias que devam decorrer até à data de chegada, antes de os preços dos quartos serem ajustados por este utilitário. As opções de percentagem permitem configurar a percentagem de quartos que podem estar disponíveis antes de um dado desconto ser aplicado.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Intervalo (Nr de dias entre a chegada e hoje)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentagem de quartos ocupados 10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentagem de quartos ocupados 25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentagem de quartos ocupados 50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentagem de quartos ocupados 75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Desconto %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' foi descontado de ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' para ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Preço de quarto não descontado ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Chave API Google maps' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Pode obter uma chave API do Google Maps em <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Depois de a ter obtido e inserido aqui, o Jomres mostrará o mapa na página de pormenores da sua propriedade.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Usar SSL no formulário de reserva?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Precisa de se assegurar de que tem um certificado SSl válido para ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', '<i>Last minute</i>' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Activo?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Defina Sim se quiser realizar negócios <i>last minute</i>.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Limiar' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Se uma reserva for feita e a data de chegada for apenas de N dias contados desde a data de reserva, então pode ser aplicado este desconto' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Desconto' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Em percentagem' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Foi aplicado um desconto a esta reserva!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'O custo da estadia foi reduzido em ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Esta propriedade oferece um desconto <i>last minute</i> de  ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' por cento, se reservar de modo a chegar antes de ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' por cento ou mais se reservar de modo a chegar antes de ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Reserve agora para aproveitar ao máximo esta oferta!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Informação verbosa da tarifa' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Defina Sim para mostrar informação de tarifas mais detalhada no <i>popup</i> detalhes da propriedade/tarifa' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Minimizar opções de configuração' );
jr_define( '_JOMCOMP_AMEND', 'Corrigir reserva - Selecção de propriedade' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleccione nova propriedade' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Contrato original:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Depósito pago' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Depósito não pago' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Sobrepor ao total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Sobrepor ao depósito' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Cancelar' );
jr_define( '_JRPORTAL_CPANEL', 'Painel de controlo do JRPortal' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Comissão por defeito' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Escolha a comissão por defeito que serrá aplicada a uma propriedade, na eventualidade de não ser definida de outro modo qualquer comissão.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Listar comissões' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Comissões' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Título' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Tipo' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Comissão' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Cód. moeda' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Listar propriedades' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nome da propriedade' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Endereço da propriedade' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Para as propriedades cujo fundo for vermelho, ainda não foi definida qualquer comissão.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Estatísticas' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Estatísticas para: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Propriedades - Cliques' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Propriedades vistas' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Nr de reservas' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Valor das reservas' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Estimativa de comissões' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Comissões' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Listar reservas' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Id da propriedade' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Id do hóspede' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Id do filiado' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Id da Factura' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Total reserva' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Id do contracto' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Contracto nr' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Cód. moeda' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Criado' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Arquivado' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Data de arquivo' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Adicionar item à conta' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Gerente a facturar' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Propriedade associada (se aplicável)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Valor' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descrição' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Item a cobrar inserido com êxito em " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Ver encomendas" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Erro ao inserir item a cobrar em " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Erro, não especificou um valor para a conta" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Pode ter ficheiro de idioma específicos para tipo de propriedade, definindo a descrição como o nome de uma sub-pasta, por ex. "alugueriates" e copiando um ficheiro de idioma para essa sub-pasta. Poderá então modificar esse ficheiro de idioma para este tipo de propriedade de modo a que quartos se tornem, ainda por exemplo, DVDs, etc.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Não pode eliminar esta propriedade, porque é a única à qual tem acesso. Se quiser desactivá-la, utilize a opção despublicar na barra de ferramentas. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Se esta instalação for uma demonstração e tenciona actualizar para Jomres Solo (limite de apenas uma propriedade) então deve primeiro criar uma nova propriedade, depois apagar esta antes de alterar a sua chave de licença para a de Solo, que lhe será atribuída no momento da compra do software. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Mensagens de registo de erros de email?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Defina Sim se quiser copiar o jomres.net automaticamente quando for criada uma mensagem de registo de erro. Isto permite-nos ser proactivos na nossa tentativa de lidar com problemas potenciais, na esperança de resolvê-los antes ainda que você se aperceba deles. Note que esta definição não está activa em 'localhost'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Esta propriedade é um hotel/<i>bed and breakfst</i>/pousada/pensão? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "As opções de configuração diferem conforme esteja a alugar quartos numa propriedade, ou toda a própria propriedade. Seleccione MRP (<i>multi room property</i>, ou propriedade de quartos múltiplos) se está a oferecer quartos, SRP (<i>single room property</i>, ou propriedade única) se está a oferecer a propriedade como um todo. " );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Usar o verificador de email Jomres? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Reforça uma verificação mais restritiva dos email enviados. Alguns servidores web seguros devolvem um erro interno 500 se tentar enviar um email para um endereço não existente. Activar esta opção permite-nos verificar características checkdnsrr no php antes de tentar enviar um email, evitando assim estes erros 500. " );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Total de hospedagem" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "noite(s) a" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "por quarto " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Total de Melhore a Sua Estadia " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Resumo de preços " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Por favor leia e concorde com " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Abaixo verá um resumo da sua reserva.<br />Para fazer alterações, p.f. clique no botão de Alterar reserva." );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Se precisar de alterar qualquer informação acima, clique aqui" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Alterar Reserva" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "P.f. introduza qualquer pedido(s) especial(ais) na caixa abaixo." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Confirmo que a informação acima está correcta e concordo com as " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "por pessoa por noite " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Ficheiro de idioma por defeito" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Escolha o ficheiro de idioma que o Jomres deva usar por defeito, se o idioma não tiver sido definido pelo Joomfish." );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'de' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Início' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Anterior' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Seguinte' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Fim' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Resultados' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Note que isto não é um formulário de reserva, está apenas a enviar um email. Digite a mensagem que pretende enviar a ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contactar hotel' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Formulário de perguntas à propriedade ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Obrigado pela sua mensagem, enviada para o endereço de contacto respectivo e copiada para o seu próprio, para seu conhecimento. Terá uma resposta logo que possível.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' acerca de ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Digite os caracteres que vê na imagem' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Não posso ler os caracteres. Gerar uma ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Enviar' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'nova imagem' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Pergunta' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'P.f. seleccione o alojamento desejado na lista á direita' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Mín. de quartos já seleccionado' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Já foi seleccionado o número mínimo de quartos antes de ser disponibilizada a combinação tarifa/tipo de quarto. Permite-lhe ter tarifas descontadas quando mais de N quartos já estiverem seleccionados. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Máx. de quartos já seleccionado' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Número máximo de quartos já seleccionado na reserva antes da combinação tarifa/quarto ser disponibilizada. Permite-lhe deixar de oferecer esta combinação tipo de quarto/tarifa após N quartos terem sido seleccionados no formulário de reserva. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Note que os suplementos de pessoa só aqui definidos não serão usados se a opção Suplementos por Pessoa Só estiver definida como Sim na Configuração Geral. As definições aqui feitas são uma alternativa a ter Suplementos por Pessoa só com taxas fixas, e não como uma adição a SPS com taxa fixa.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Disponível" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Algumas reservas" );
jr_define( '_JOMRES_AVLCAL_HALF', "Semi-completo" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Quase tudo marcado" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Totalmente cheio" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Prefixo URL' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Este é o primeiro item mostrado após o domínio - Mude para o que quiser - Se não pretender fazê-lo deixe-o em branco' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Ver o <i>alias</i> ds tarefa de propriedade' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', '<i>alias</i> fazer reserva' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', '<i>alias</i> de tarefa de pesquisa' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Adicionar País ao URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Adicionar região ao URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Adicionar cidade ao URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Adicionar propriedade ao URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Adicionar nome de propriedade ao URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Anexar id da propriedade ao nome da propriedade' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'se o nome da propriedade for definido Não, o id não será usado. Se definido Sim, então o URL parecer-se-á com fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Pesquisar estrutura URL - Adicionar País ao URL' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Pesquisar estrutura URL - País por defeito' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Se todas as propriedades estiverem num único País, não terá opção para pesquisar por País - introduza aqui um País poor defeito se quiser mostrá-lo' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Pesquisar estrutura URL - Adicionar região ao URL' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Pesquisar estrutura URL - Região por defeito' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Se todas as suas propriedades estiverem numa só região, não tem região na pesquisa - introduz aqui uma região por defeito se quiser mostrá-la' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Pesquisar estrutura URL - Adicionar cidade ao URL' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Pesquisar estrutura URL - Cidade por defeito' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Pesquisar estrutura URL - Tipo de propriedade' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Search URL Structure - Tipo de propriedade por defeito' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Usado no URL se a pesquisa for para todos os tipos de propriedade' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Auto-detectar o idioma da calendário Javascript' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Permitit a auto-detecção do idioma dos calendários Javascript? Se não for possível fazer isto, regressar-se-á ao idioma configurado abaixo' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Por semana' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Por dia' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Por reserva' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Por pessoa por reserva' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Por pessoa por dia' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Por pessoa por semana' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Por dias (mín. dias)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Por dias X quartos seleccionados' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Reconstruir o registo de minicomponente' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Normalmente o registo de plugins Jomres é reconstruído automaticamente sempre que vir o gestor de plugins e adicionar ou remover um. No entanto, é possível que por alguma razão não possa usar esta característica. Portanto, pode usar esta função para reconstruir manualmente o registo. Se tem acesso ao gestor de plugins e aos <i>upgrades</i> não será provável que precisa da função. Precisará de reconstruir o registo sempre que adicionar um novo mini-componente e não o fizer utilizando o gestor de plugins." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registo reconstruído com êxito' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'Houve um erro ao reconstruir o registo de mini-componentes. Deve verificar a listagem de erros Jomres para ver se existe alguma referência ao que originou este erro.' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editar tipo de propriedade' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Pesquisa por gama de preços.' );
jr_define( 'JOMRES_WORD_SAVING', 'A guardar...' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Usar moeda global?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Defina Sim para forçar todas as propriedades a utilizar a mesma moeda (por ex., & 8 3 6 4;)' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Código de moeda' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Tipo de propriedade' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descrição do tipo de propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicada' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Usar pormenores da Propriedade Composta?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'O Jomres 3.3 introduziu os pormenores da propriedade composta, onde a saída de todos os detalhes da propriedade é enviada para um ficheiro de tema (composite_property_details.html). Se não quiser usar esta função defina Não (espera-se que somente os utilizadores existentes definam Não, os novos provavelmente defini-la-ão como Sim)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Esta é uma lista de todos os utilizadores do sistema. Os não-gestores de propriedade serão assinalados por um ícone de convidado, os restantes terão um ícone Recepção/Gestor de Propriedade/Super-gestor de propriedade.<br/>Na primeira vez que o Jomres é instalado é automaticamente adicionado um "admin" como gestor de propriedade e é considerado um utilizador autorizado.<br/>Devem ser designados não-super gestores de propriedade a, pelo menos, uma propriedade; de outro modo verão um erro quando tentarem fazer login e usar o Jomres.<br/>A partir do momento em que um utilizador é autorizado, poe editar o seu perfil, atribuir-lhe propriedades ou conceder-lhe privilégios de super-gestor de propriedade.<br/>Para autorizar um utilizador, clique na cruz vermelha a seguir ao nome. Para lhe retirar autorização, clique na marca de verificação verde.<br/>Para atribuir utilizadores apenas a propriedades específicas, ou dar-lhes privilégios de super-gestor de propriedades, autorize-os, depois clique no ícone editar (que é visível apenas depois de terem sido autorizados). Utilizadores que tenham registado as suas propriedades por si próprios serão automaticamente associados com essa propriedade. Os super-gestores de propriedades tem automaticamente privilégios sobre todas as propriedades, e verão todas as opções de configuração mesmo que a opção de minimizar configuração tenha sido definida na Configuração do Site.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Pode aqui designar um gerente para uma determinada propriedade. Assegure-se de que não sejam um super-gestor de propriedades, de que tenha privilégios sobre pelo menos uma propriedade, pois de outro modo verão um erro quando fizerem login. Para atribuir privilégios a um gestor de propriedades/recepcionista apenas sobre determinadas propriedades, assegure-se de que o <i>dropdown</i> super-gestor de propriedades não esteja definido como Sim.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Data de reinício do serviço' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Ainda não fez nenhuma reserva!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Tipo de propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Edite o tipo da sua propriedade' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleccione o tipo da sua propriedade' );
jr_define( '_JOMRES_COM_LOGGING', '<i>Logging</i>Jomres' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'Estas opções permitem-lhe activar/desactivar o <i>logging</i> Jomres. A relação de erros está sempre activada, mas outras, como sejam as de reservas, <i>gateways</i>, do sistema e dos pedidos podem ser ligadas ou desligadas. Fica avisado de que a <b>capacidade de activar estas listagens é concedida puramente como uma forma de facilitar a detecção de erros, mas comporta um grande risco de segurança</b> porque é fácil a utilizadores externos ver as suas listagens sem estar autorizados; portanto, fica alertado para que deve manter as listagens desactivadas a maior parte do tempo. Se as tiver activado, então quando as desactivar deve assegurar-se de que a pasta <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> não contém nenhuma das antigas listagens. Note que activar as listagens reduzirá significativamente o desempenho do seu sistema, porque recolhe uma grande quantidade de informação.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Listagem de formulários de reserva (motor de Reservas) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Listagens de Gateway (por ex., paypal, etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Listagens de pedidos (todos os que chegam ao servidor)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Sistema (listagens diversas) ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'Portal JR (principalmente para registar comissões, etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'A sua pergunta...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Mostrar imagem de tipo de quarto na lista de quartos do formulário de reserva' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Limite da lista de propriedades' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'Número de propriedades a mostrar na página após uma pesquisa' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Característica de pesquisa integrada' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'A característica de pesquisa integrada Jomres permite aos seus utilizadores pesquisar nas propriedades de acordo com um conjunto de funções. Se já utilizou a função de pesquisa Jomres em Joomla, estará familiarizado com estas definições.<br/>Esta característica permite-nos oferecer manuseamento de pesquisas no Jomres para os utilizadores que não querem usar os módulos de pesquisa Joomla, para utilizadores de outros CMS em que esses sistemas não disponham de módulos análogos.<br/>Lembre-se apenas de que se escolher pesquisar algo através de um <i>link</i> (i.e., não um <i>dropdown</i>) não serão implementadas outras opções de pesquisa, mas somente o elemento que corresponde ao <i>link</i> no qual clicou.<br/>Note que por defeito o <i>layout</i> desta pesquisa integrada não é muito atractivo. Isto deve-se a que o ficheiro de tema que executa o layout tem de incluir todas as opções possíveis, algumas das quais são incompatíveis. Para melhorar o layout e conseguir o aspecto que possa desejar, precisará de editar <b>srch.html</b> na pasta <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activar esta função?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Se for activada, qualquer chamada ao Jomres que mostre a lista de propriedades significará que as opções de pesquisa são também mostradas.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Usar colunas' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Qualquer opção de pesquisa que tenha definido como <i>link</i> (se pertinente) será mostrada em colunas (IE br colocado no fim do link)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Colunas de características" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "O número de ícone de características que pode ser mostrado antes de ser inserido um br para iniciar uma nova linha." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Pesquisar região por <i>dropdown</i> combinado de selecção" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Proporcionar um <i>dropdwon</i> de pesquisa para filtrar por Países/regiões/cidades. Se for utilizar esta característica é melhor não usar as pesquisas por região/cidade a definir abaixo." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Pesquisar por nome de propriedade" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Mostrar a pesquisa por introdução de nome de propriedade." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Mostrar como <i>dropdown</i>?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Defina Não para mostrar a lista como <i>links</i>" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Pesquisar por cidade/região" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Mostrar a pesquisa por introdução de região" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Mostrar como <i>dropdown</i>?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Defina Não para mostrar a lista como <i>links</i>" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Pesquisar por tipo de propriedade" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Mostrar a pesquisa por introdução de tipo de propriedade" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Mostrar como <i>dropdown</i>?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Defina Não para mostrar a lista como <i>links</i>" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Pesquisa por tipo de quarto" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Mostrar a pesquisa por introdução de tipo de quarto" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Mostrar como <i>dropdown</i>?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Defina Não para mostrar a lista como <i>links</i>" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Pesquisar por características" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Mostrar a pesquisa por introdução de características" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Mostrar como <i>dropdown</i>?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Defina Não para mostrar a lista como imagens alusivas e caixas de verificação" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Pesquisar por descrição" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Mostrar a pesquisa por introdução de descrição" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Pesquisar por disponibilidade" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Mostrar a pesquisa por introdução de disponibilidade" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Pesquisar por intervalo de preços" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Mostrar a pesquisa por introdução de intervalo de preços" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Incrementos de intervalo de preços" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "O Jomres pesquisará em todos os valores das tarifas, após o que organiza uma série de incrementos de preços com base nos valores que definir aqui." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Por defeito, se uma propriedade não estiver seleccionada no Jomres este executará uma pesquisa. Se esta não tiver sido desencadeada por um módulo de pesquisa, essa pesquisa produzirá resultados aleatórios (deliberadamente). Esta opção permite-lhe limitar o número de regressos dessa pesquisa aleatória.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Definições e listagens de <i>cron jobs</i>' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Informação de <i>Pseudocron job</i>. A funcionalidade <i>pseudocron</i> é necessária para manuseamento de facturação e comissões.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Minicomponentes <i>cron</i> instalados. para correr um <i>cron job</i> use as ligações especificadas abaixo. Note que os <i>cron jobs</i> não produzem nenhuma saída, portanto não verá nenhuma informação na página. Em seu lugar, refira-se à listagem <i>cron job</i> abaixo.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Método' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "Se não triver acesso a <i>cron jobs</i>, defina este como minicomponente; caso contrário, crie um <i>cron job</i> e instrua-o para executar<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Mostrar o <i>logging</i> no browser' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Só funciona se o método estiver definido como minicomponente.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', '<i>Logging</i> activado' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Defina Sim para permitir <i>logging</i>. Os resultados dos registos serão mostrados abaixo.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', '<i>Logging</i> verboso' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Muitas listagens de <i>logging</i>' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Edição de temas (templates)' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Esta funcionalidade permite-nos editar os temas Jomres do <i>frontend</i> no servidor, guardando os resultados na base de dados. Característica avançada, tenha muito cuidado com ela.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Nome do tema' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'O tema foi adaptado?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Campos à medida' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Pode definir aqui campos adaptados a casos específicos, que serão mostrados no formulário de reserva.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nome do campo (sem espaços)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valor por defeito' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descrição' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Requerido' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Quantidade máxima' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Se a quantidade máxima for definida para maior do que 1, os visitantes terão um <i>dropdown</i> para escolher a quantidade de extras que podem pedir.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Emitir facturas" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Taxas" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Código de taxa" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Descrição de taxa" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "Não pode eliminar esta taxa." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Val. taxa" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Facturas" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Não pagas" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Pagas" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Canceladas" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Pendentes" );
jr_define( '_JRPORTAL_INVOICES_USER', "Utilizador" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Estado" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Levantadas" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Devidas" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Subscrição" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Total geral" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Total renovação" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Frequência de renovação" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Dia do mês de renovação" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Código de moeda" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Itens de linha" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Nome" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Descrição" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Preço inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Quant inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Desc inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Total inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Preço renovação" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Quant renovação" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Desconto renovação" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Total de renovação" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Cód.taxa" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Descr. taxa" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Taxa" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Definições Paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Código de moeda (por ex. EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Usar sandbox?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "O seu endereço email Paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Nota: Para usar o Paypal deve aceder à sua conta e desactivar o Autoreturn (Profile/Website Payment Preferences), e definir o IPN (Profile/Instant Payment Notification Preferences)para o URL:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
// jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Esta factura está em pagamento. P.f. clique no botão para ser encaminhado para a Paypal.");
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', " " );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Sobrepor-se às definições normais do gateway Jomres?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "Se esta opção for definida Sim, diversas coisas sucederão: A Configuração Geral já não mostra quaisquer definições de gateway, e quando for feita uma reserva as definições aqui contidas são as utilizadas, de forma que o pagamento é feito para o endereço aqui introduzido, e não para o que possa ter sido anteriormente definido na Configuração Geral." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Mostrar as minhas facturas" );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Límite de pesquisa aleatória' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Mostrar ligação a Google Currency Conversion na lista de tarifas?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Converter preço para :' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Permitir aos utilizadores editar usando editores HTML?' );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Cupões de desconto" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Podem ser gerados códigos de desconto e transmitidos aos clientes como incentivo a fazer reservas. As datas de validade, dsde e até, referem-se às datas em que pode ser feita uma reserva, e nãos à duração da própria reserva." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Código de cupão" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Válido desde" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Válido até" );
jr_define( '_JOMRES_FRONT_TARIFFS', 'As nossas tarifas' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Nome da tarifa' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Descrição da tarifa' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tipo de quarto/propriedade' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Válida desde' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Válida até' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'Por pessoa por noite' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'Por noite' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Não inclui fins de semana' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Mínimo de dias' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Máximo e dias' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Mín. pessoas' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Máx. pessoas' );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Valor do desconto" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "O desconto é percentagem?" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Quarto apenas" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "O desconto aplica-se apenas ao custo do quarto. Se definir Não, o desconto aplica-se ao custo total da reserva." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Erro SQL ao tentar eliminar/inserir um cupão" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Se tiver um código de cupão, introduza-o neste campo e clique em "Guardar cupão" para guardar os detalhes deste em relação à sua reserva.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Guardar cupão' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Cupão guardado com a reserva' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Número de cupão não encontrado' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valor do desconto do cupão' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Reserva descontada. Definições do código de cupão/valor do desconto/cupão : ' );
jr_define( '_JOMRES_COM_CACHING', 'Usar a função <i>caching</i> do Jomres?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Defina Não para desactivar a <i>chaching</i> Jomres.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Escolha idiomas' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Escolha as opções de idioma a mostrar no <i>dropdown</i> de selecção de idiomas.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Mostrar o <i>dropdown</i> de selecção de idiomas?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Reservas desmarcadas e canceladas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Não há indisponibilidades a listar' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Caro(a)" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Obrigado por se registar " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "O seu nome de utilizador é : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "A sua palavra-chave é : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Por favor faça <i>login</i> para ver as suas reservas " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Cupão guardado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Cupão eliminado' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Usar sist. mensagens Jomres' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Muitas actualizações para gestão proporcionam <i>feedback</i> sob a forma de uma mensagem Javascript quando a página é recarregada. Use esta opção para activar ou desactivar esta característica.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Nome de utilizador" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Palavra-chave" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "Id API" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Telemóvel a notificar" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "P.f. use o formato 'Código de País, nr de telemóvel'. Por exemplo, a um telemóvel com base em Portugal a introdução deve corresponder a algo como '351123456789'. Deixe este campo em branco se não quiser que lhe sejam enviados emails de notificação para o telemóvel." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviamente não pode usar/experimentar a partir do <i>localhost</i>, precisa de fazer isso a partir de um servidor <i>live</i>.</b>
<br/>
<br/>
Para usar o <i>gateway</i> Clickatell gateway precisa de abrir uma conta Clickatell e definir pelo menos uma ligação (gama de sub-produtos API) entre a sua aplicação e o nosso <i>gateway</i> Cada método de ligação é denominado um sub-produto. Eis o que fazer:<br/>
<br/>
<b>Passo 1 - Registe-se e obtenha uma conta Clickatell</b><br/>
Se ainda não tiver uma conta Clickatell, precisa de fazer isso antes de mais. Se já tem uma, prossiga para o passo 2.<br/>
* Vá a http://www.clickatell.com/products/sms_gateway.php, e escolha o sub-produto API apropriado (método de ligação) que quer usar ( Clickatell Central (API) )<br/>
* Clique na hiperligação de registo.<br/>
* Preencha o formulário de registo.<br/>
Depois de ter enviado com êxito o formulário, será automaticamente ligado à sua nova conta e levado para uma página onde pode adicionar a sua ligação API escolhida.<br/>
<b>Passo 2 - Adicione uma ligação API registada (sub-produto)</b><br/>
Se ainda não estiver ligado á sua conta, deve fazê-lo em http://www.clickatell.com/login.php<br/>
* Seleccione \"Gerir os meus produtos\" no menu de topo.<br/>
* Seleccione o tipo de ligação API a usar (API HTTP) no menu <i>dropdown</i> ('Add Connection').<br/>
* Complete o formulário. Assegure-se que introduziu o <i>locked IP</i>(o IP do seu servidor), defina <i>Callback</i> para HTTP POST. Precisa de definir o <i>IP callback</i> para " .get_showtime("live_site") . "/index.php?option=com_jomres&task=sms_clickatell_callback e id de utilizador e password.<br/>
Se tiver mais do que uma ligação API registada, o nome descritivo que introduazir para cada uma deve ser único - não pode ter várias APIs com o mesmo nome.<br/>
Depois de enviar com sucesso o formulário, serão mostrados os pormenores da sua autenticação, incluindo o ID API (api_id) de cada ligação. Estes pormenores são necessários quando se ligar ao gateway Clickatell para enviar uma mensagem.<br/>
<br/>
Utilize o seu id de utilizador, a palavra-chave e o api_id para preencher os campos acima.<br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Mostrar acesso a deficientes na lista de quartos do formulário de reserva' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Mostrar nr. máximo de pessoas na lista de quartos do formulário de reserva' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Nota que os preços de quartos listados são estimativos, e que o preço total da reserva não será calculado até que tenha adicionado um ou mais quartos à sua selecção." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Tema editado pela última vez na base de dados' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Tema editado pela última vez no disco' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Aviso de tema na base de dados' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'O tema pode estar desactualizado na base de dados' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Se for visível um ícone num tema, isso significa que o Jomres detectou que o tema guardado na base de dados <strong><i>pode</i></strong> ser mais antigo que o guardado no disco. Neste caso, é possível que o tema tenha sido actualizado por uma nova versão do Jomres. Caso isto de verifique, é possível que o seu tema possa ter entretanto beneficiado de uma nova característica ou função no Jomres, ou que a funcionalidade existente possa não apresentar os resultados esperados, portanto deve comparar o ficheiro em disco com as suas adaptações para ter a certeza de que não lhe falta nenhuma das novas características.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Pacotes de subscrição" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Nome" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Descrição" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Publicado" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Frequência" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Período de experiência" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Montante da experiência" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Montante total" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Limite de quartos" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Limite de propriedades" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Frequência: M/Q(T)/B/A Mensal/Trimestral/Bianual/Anual" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Período de experiência: Introduza um número inteiro, 0 (zero) para não definir, 1 para 1 mês, 2 para 2 meses, etc" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Subscrever" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Introduza/actualize a sua informação de subscrição. Note que todos os campos são requeridos." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Primeiro nome" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Sobrenome" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Endereço" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "País" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Cód. postal" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Precisa de ter uma subscrição válida para criar novas propriedades. Actualmente, adquiriu subscrições para " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " propriedade(s) publicada(s). " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Pode aumentar o número de propriedades que poderá criar em <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'> adquirindo aí mais pacotes de subscrição.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Já usou " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " entradas de propriedades. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Para ver uma lista das suas propriedades actuais clique <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>aqui</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Para ver uma lista dos pacotes de subscrição actualmente disponíveis, clique <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>aqui</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Infelizmente, não pode publicar esta propriedade por ter atingido o número máximo que lhe está concedido." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Obrigado por ter criado uma subscrição para listar as suas propriedades no nosso servidor. Depois que a sua factura estiver assinalada e paga (pode haver um atraso em função da Paypal), por favor <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>clique aqui para continuar a criar a(s) sua(s) propriedade(s).</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Lamentamos que tenha decidido não subscrever o nosso serviço. Por favor diga-nos se podemos auxiliá-lo de qualquer outra forma" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Usar a funcionalidade de manuseamento de subscrições" );
jr_define( '_JOMRES_COM_NEWUSER', 'Criar novo utilizador ao reservar' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Crirar nova conta de utilizador ao ser feita uma reserva por um utilizador não registado.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Clique aqui para registar a sua propriedade' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Subscrições activas" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Id do gateway de subscrição" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Obrigado pela sua reserva - seguem-se os novos detalhes de utilizador" );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Painel de Controlo' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Passar cabeçalhos Javascript Jomres para o corpo do html?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Defina Sim se está a ter problemas com mootools e jQuery Jomres em conflito no IE. isto forçará o Jomres a fazer sair as chamadas Javascript dentro do corpo da página em lugar de o fazer na área HEAD. isto não é HTML válido, no entanto parece resolver os problemas com jQuery e Mootools em conflito mútuo.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Mostrar factura' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Ver facturas' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Adicionar a minha propriedade a este site' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Aviso : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Se quiser, pode ter um pacote grátis no sistema, criando um pacote e definindo quer o montante de experiência quer o total para 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Desculpe, mas este pacote não é reconhecido." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Lamento, mas já subscreveu um pacote gratuito, não pode fazê-lo de novo." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Estado <b>0:</b> Pag. pendente <b>1:</b> Criado <b>2:</b> Cancelado <b>3:</b> Fim do período" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "A minha conta" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Os seus detalhes comerciais' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Nome comercial' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'Nr IVA' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Nr porta/edif.' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTA: As taxas seguintes são concebidas para utilização no mercado americano. Se quiser usar uma taxa única (por ex., IVA) para os alojamentos que disponibiliza, por favor escolha uma taxa na opção acima.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Factura Nr. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleccione as datas a que quer aplicar a indisponibilidade. Depois, clique no botão "Aplicar" para reverificar a disponibilidade. <br/> 
<br/> 
Se a propriedade tiver uma ou mais reservas para o período seleccionado, então não pode desmarcar a reserva até que as outras reservas/indisponibilidades tenham sido canceladas/desmarcadas.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Desculpe, não pode marcar indisponibilidade desta propriedade para estas datas.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Pode marcar indisponibilidade desta propriedade para estas datas.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'A sua propriedade está configurada para cobrar por pessoa, por noite, mas não tem nenhum tipo de hóspedes criado ou publicado. Por favor crie e publique um ou mais tipos de hóspede. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Ainda não tem tarifas configuradas, portanto não pode aceitar nenhumas reservas na sua propriedade.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Modo edição activado' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Modo edição desactivado' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Cobrar depósitos variáveis?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Os depósitos variáveis permitem-lhe definir se gostaria de cobrar o montante total se a data de chegada da reserva ocorrer a N dias de "hoje". Defina esta opção para Sim para permitir esta característica, e introduza abaixo esse número de dias; portanto, por exemplo, se o dia de chegada ocorrer dentro de 60 dias, então o montante do depósito cobrado será o total, de outro modo esse montante será baseado nas opções de depósito configuradas acima.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Número de dias, dentro dos quais o valor total será cobrado como depósito.' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Montante cobrado no momento da reserva' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Depósito' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Montante total' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Use esta opção para decidir o que deve ser cobrado no momento da reserva. Escolha depósito se deve ser cobrado o depósito, ou montante total se deve ser o total a ser cobrado.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Enviar emails de contacto com o Gerente para um endereço alternativo?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Defina Sim se quiser que os emails de contacto com o Gerente sejam enviados para o endereço que introduzir abaixo. Deixe ficar definido Não para que eles sejam enviados para o endereço definido na área de configuração da propriedade.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Endereço alternativo para os emails de contacto com o Gerente.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'O email de confirmação foi enviado. Pode fechar esta janela.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Listagem de Propriedade para venda (Quintas, etc)' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Esta listagem de propriedade refere-se a uma propriedade para venda?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Seleccione Sim se está a vender a propriedade, Não se se trata de um hotel/b&b/pousada/villa na qual esteja a alugar por períodos curtos, ou a propriedade inteira ou quartos nesta, e está a utiliar este sistema para receber reservas.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contactar agente' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Marcar factura como paga' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Factura marcada como paga' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Criar nova chave API' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Usar Google para traduções iniciais?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Esta característica é nova e experimental, portanto use-a por sua conta e risco. O objectivo é interpelar a ferramenta de tradução Google para fazer automaticamente traduções de uma dada propriedade. Note que esta característica limpa todo o <i>input</i>, portanto se usar um editor de html para formatar os pormenores da sua propriedade, esta opção destruirá essa formatação.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Esta instalação é para uma única propriedade (SRP)?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Se esta opção for definida Sim, a vista de <i>frontend</i> do Jomres para utilizadores não autorizados é grandemente simplificada. As chamadas por defeito ao Jomres desde uma opção de menu, em lugar de obter uma lista de propriedades limita-se a remeter o utilizador para o formulário de reserva da primeira propriedade do sistema. Os gestores de propriedades também não verão o botão de antevisão ds características da propriedade enquadrado na opção de botão para adicionar nova propriedade. Ideal se quer somente listar uma propriedade e aceitar reservas para ela.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Usar a funcionalidade de depurador HTML?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Active para permitir ao Jomres usar a biblioteca de depuração (http://htmlpurifier.org/). A biblioteca é usada como uma camada de segurança extra ao manusear introdução e saída de dados. Recomenda-se que a deixe activada, embora use mais memória.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Saldo de pagamento' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Saldo' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note que está a utilizar o modo de edição, com a opção de Edição Global activada. Isto está bem se compreender do que se trata o modo de Edição Global, mas pode trazer problemas se não souber. Se não tem a certeza se deve utilizar o Jomres desta forma, veja <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">a página do manual sobre modo de edição</a> para obter informação adicional sobre este assunto.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Chave de apoio' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Número da chave de apoio da sua licença (também conhecido como número de licença). Precisa de uma licença actualizada para poder obter e descarregar actualizações e <i>plugins</i> para o Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Desconto pessoal' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limitar registo de propriedade a um País?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Pode assegurar-se de que os registos de propriedade se limitam a um só País definindo esta opção como Sim, e o País na opção seguinte.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'As propriedades situam-se neste País : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Tema Jquery' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Escolha um tema JQuery a usar nas tabulações dos detalhes da propriedade.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Lamentamos, mas essa propriedade não está actualmente disponível.' );
jr_define( '_JOMRES_REVIEWS', 'Avaliações' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Título da avaliação' );
jr_define( '_JOMRES_REVIEWS_DATE', 'criada em ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Ainda não há avaliações para esta propriedade.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Gostaria de ser o primeiro a avaliar esta propriedade?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Concordo com esta avaliação' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Discordo desta avaliação' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Classificação média: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Total de votos:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Adicione uma nova avaliação.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Precisa de estar em login para enviar uma avaliação.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Diga-nos o que pensa desta propriedade : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Este cliente disse-nos : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Prós: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Contras: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Enviada em: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'Já avaliou esta propriedade. Não pode enviar nova avaliação sobre a mesma.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Desculpe, mas não pode submeter avaliações neste site.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Clique para ver as avaliações' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' hóspedes concordam com esta avaliação. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' hóspedes não concordam com esta avaliação.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' hóspede concorda com esta avaliação. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'hóspede não concorda com esta avaliação.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Obrigado por ter dado opinião sobre esta avaliação.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Obrigado, mas já emitiu opinião sobre esta avaliação.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'P.f. assegure-se de que todos os campos foram preenchidos.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'P.f. resuma a sua avaliação introduzindo ujm título' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'P.f. introduza uma avaliação mais detalhada na caixa de texto respectiva' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'P.f. introduza os aspectos positivos da sua experiência como hóspede desta propriedade' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'P.f. introduza quaisquer aspectos negativos que possa ter da sua experiência' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'P.f. classifique a hospitalidade de que foi alvo pelo pessoal' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'P.f. classifique a sua opinião sobre a localização da propriedade' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'P.f. dê opinião sobre a limpeza de instalações da propriedade' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'P.f. classifique o alojamento. Foi confortável ou razoável' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'P.f. dê a sua opinião sobre se valeu ou não o dinheiro dispendido' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'P.f. classifique os serviços' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Resumo da Apreciação' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'A sua experiência em maior pormenor' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Obrigado por ter colaborado com a sua apreciação.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Obrigado por enviar a sua apreciação. Será publicada em breve por um dos nossos moderadores de serviço.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Usar a funcionalidade de apreciação Jomres?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Publicar automaticamente as apreciações?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Se definir Não, precisará de publicar manualmente as apreciações' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Colocar apreciações em modo experimental?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalmente, os gestores de propriedades não podem emitir apreciações sobre estas. Com esta opção activada, podem. Obviamente este procedimento não é ideal num ambiente de funcionamento normal.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Esta é uma lista de todas as propriedades. Para ver avaliações de uma propriedade, clique sobre ela. A partir daí pode publicar ou apagar uma avaliação.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Avaliações não publicadas' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total de avaliações' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicar/despublicar avaliação' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Apagar avaliação' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Denunciar avaliação' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Denúncias de avaliações' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'P.f. introduza a sua denúncia' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Vê algo nesta avaliação que seja contrário ou inexacto? Denuncie o facto e daremos à sua mensagem a melhor atenção.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Enviar' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Denúncia criada por ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'As denúncias são enviadas por utilizadores que possam discordar do conteúdo de uma avaliação. A única forma de lidar com uma denúncia é eliminar a avaliação.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Avaliações (1 = má ... 10 = excelente) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Hospitalidade  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Localização ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Limpesa ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Alojamento ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Relação preço/qualidade ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Serviços ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Avaliado por : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Esconder avaliações' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Mostrar o formulário de reserva na página de pormenores da propriedade?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Defina Sim para mostrar o formulário de reserva na página de pormenores da propriedade. Se definir Não, aparecerá em seu lugar uma ligação nessa página, direccionando para o formulário.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Os preços estabelecidos incluem a taxa?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Os preços definidos incluem a taxa? Se os seus preços já a incluem seleccione Sim, caso contrário defina Não.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Taxa de extras:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Os campos dia da semana permitem-lhe definir uma taxa para um determinado dia da semana. Ao clicar no botão dias da semana, a tarifa definida será atribuída a todos os dias da semana.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Os selectores de data e a introdução de taxas permitem-lhe estabelecer um preço para um determinado intervalo de datas. Escolha uma data de início e de fim, introduza um preço, e clique no botão Definir taxas.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Valor inicial' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Valor final' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Taxa' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Definir taxas' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Sócios' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Hoje' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Anterior' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Seguinte' );
jr_define( '_JOMRES_CALENDAR_RTL', 'falso' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Quarto ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'hóspede(s). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Esta é a forma como designámos os números de hóspedes aos quartos respectivos. Se gostaria de alterar esta disposição, terá de contactar o hotel após ter feito a reserva. Se modificar esta disposição poderá haver encargos extra aplicáveis.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Note que a sua propriedade ainda não está publicada. Somente você pode vê-la, mas não os visitantes do site" );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordem de resultados de pesquisa por defeito' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Altere esta opção para mudar a ordem pela qual os resultados da pesquisa sâo apresentados, por defeito.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostrar <i>dropdown</i> de resultados da pesquisa' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Estilo de lista de quartos' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'No formulário de reserva, usando o estilo de lista de quartos "clássico" oferece quartos individualmente aos hóspedes. Com este tipo de vista, os hóspedes escolhem em vez disso o número de quartos do tipo X (por ex., 2 x duplo)' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Clássico' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipos de quarto' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Re)verificando disponibilidade' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'A reconstruir a lista de quartos disponíveis' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'A calcular os totais' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Terminada a actualização do formulário' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Em que dia começa a semana de calendário, Domingo ou Segunda-feira' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Somente hóspedes da propriedade podem avaliá-la?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Defina Sim se quer restringir as apreciações aos utilizadores que já foram hóspedes desta propriedade.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Por quarto' );
// v 4.5.7 - adicionado?
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Hóspedes por quarto : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hóspedes por reserva : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Número de quartos' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Valor de tarifa por defeito' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Isto aplica-se apenas a novas tarifas" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Anos a mostrar" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Define o número de anos a mostrar quando se edita uma terifa em método <i>micromanage</i>" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Janeiro' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Fevereiro' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Março' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Abril' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Maio' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Junho' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Julho' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Agosto' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Setembro' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Outubro' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'Novembro' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Dezembro' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Processo de gestão da propriedade" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "Há vários processos, em função do modo como quer listar a sua propriedade/negócio." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Aluguer" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Escolha a opção aluguer se se trata de reservas de quartos numa propriedade (por ex. Hotel/B&B/Villa/Apartamentos)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Venda de propriedade/listagem simples" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Escolha esta opção se não estiver a oferecer qualquer tipo de reserva (por ex., uma propriedade/artigo para venda)" );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Defina Sim para reduzir o número de opções disponíveis aos gestores de propriedades na secção de Configuração Geral. Útil se não quiser que os gestores de propriedades lidem com demasiadas configurações. Em vez desta opção, pode editar o ficheiro jomres_config.php para definir as opções de configuração por defeito.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'P.f. seleccione uma opção para a sua reserva' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Liga os editores HTML na página de edição dos pormenores da propriedade. Além disso, se for definido como Não, todo o código html excepto p e br é descartado de trodo o texto introduzido e mostrado.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Vista de gestão de propriedade" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Vista de pré-visualização do site" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Mostrar o comutador de fuso horário na barra de ferramentas do gestor de propriedade?" );
jr_define( '_JOMRES_PARTNER_DISCOUNT', "Desconto de parceiro " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Pesquisar utilizador" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Introduza alguns caracteres para pesquisar um utilizador.<br/> Quando selecciona um utilizador adiciona-o automaticamente como Parceiro, e será remetido para a página seguinte, onde pode atribuir-lhe propriedades e descontos." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Parceiros actuais" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Seleccione um parceiro para ser encaminhado para a respectiva página de administração." );
jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Parceiro :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Pesquisar uma propriedade" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Introduza alguns caracteres do nome da propriedade e seleccione-a.<br/> Quando fizer a selecção adicioná-la-á ao currículo do parceiro que, no entanto, não beneficiará ainda de qualquer desconto, que terá de ser definido por si." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Propriedades actuais" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Clique numa propriedade para editar as definições de descontos para um parceiro, relativamente a essa propriedade." );
// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Suspenso? <br/>(clique para suspender um gerente, o que despublicará todas as suas propriedades ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Clique no ícone Suspender (o do homem com a seta verde) para suspender um gerente. Isto significa que esse gerente não poderá desempenhar funções de gestão de propriedades, e que estas serão despublicadas. Os super-gestores de propriedades não podem ser suspensos." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Esta conta foi suspensa, pelo que actualmente não é possível gerir a(s) sua(s) propriedade(s) através dela." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Conta de gestor suspensa" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Conta de gestor reactivada" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Por favor, note que a sua conta de gestor de propriedades foi suspensa. Não poderá exercer funções de gestão até que a conta seja reactivada." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Por favor, note que a sua conta de gestor de propriedades foi reactivada. Pode continuar a exercer funções de gestão. Por favor, faça login na sua conta e certifique-se de que a(s) propriedade(s) apropriada(s) foi(foram) publicadas. Obrigado." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Remover favorito' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Arquivo de reservas' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'O arquivo de dados de reservas é ume relação em bruto de informação de reservas, capturada após o botão de confirmação de reserva ter sido premido. Posicione o cursor sobre uma data para ver essa relação. A informação é guardada na tabela XXX__jomres_booking_data_archive.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Editar conta' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Pesquisar utilizadores" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Introduza alguns caracteres do nome de utilisador para pesquisar.<br/> Quando seleccionar um utilisador, adicioná-lo-á automaticamente como Gerente e será encaminhado para a página seguinte, onde pode atribuir-lhe propriedades e direitos de acesso." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Gesrentes actuais" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Seleccione um gerente para ser encaminhado para a página de administração de gerentes." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Pesquisar por número de hóspedes" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Mostrar o <i>dropdown</i> de pesquisa por número de hóspede" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Pesquisa pore estrelas" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Mostrar o <i>dropdown</i> de pesquisa por estrelas" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Número de hóspedes' );
jr_define( '_JOMRES_SEARCH_STARS', 'Número de estrelas' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Facturas de comissões" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Número de propriedades" );
// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "Carregar a biblioteca Jomres jQuery?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "Pode definir NÃO se tiver um tema que utilize jquery. Isto PODE resolver alguns problemas de conflitos jquery nalguns temas, mas não em todos." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Se utiliza o Joomfish, deve definir como NÃO, e utilizar o selector de idioma Joomfish. Este selector está sempre activo na ára de administração porque é necessário quando se utiliza a característica de Tradução de Etiquetas.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'São automaticamente criadas imagens de referência (<i>thumbnails</i>) para as imagens carregadas.' );
// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Larg. máx. imagens de referência (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Imagens de referência pequenas são usadas na lista de propriedades, enquanto que nos respectivos cabeçalhos são usadas imagens de referência de tamanho médio.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Alt. máx. de imagens de referência pequenas (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Larg. máx. de imagens de referência médias (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Alt. máx. de imagens de referência médias (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'Traduções de Etiquetas' );
jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Usar a funcionalidade comissão?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Defina Sim para mostrar as facturas de comissões do gerente, que foram emitidas." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Facturas de criação de comissões por criação de reservas?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Se um gerente faz uma reserva, isso também cria um item na linha na factura de comissões?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "Foi emitida uma nova factura de comissões" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "Foi emitida uma nova factura de comissões, que requer a sua atenção. Por favor, clique na ligação seguinte para a visualizar (pode precisar de fazer primeiramente login)." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Auto-suspender gerentes cujas facturas estejam marcadas como pendentes?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Prazo para auto-suspensão" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "O número de dias até ao limite dos quais o gerente tem de pagar uma factura antes de ser auto-suspenso e as suas propriedades despublicadas." );
//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Contexto de linguagem' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use esta opção para modificar o contexto de linguagem do site. Isto permite que o Jomres utilize etiquetas apropriadas para o que de mais adequado está em foco; portanto, se as suas preferências forem, por exemplo, aluguer de iates, nesse caso mudar o contexto permite ao Jomres, primeiramente procurar antes de mais na língua corrente, depois pesquisar o directório /'.JOMRES_ROOT_DIRECTORY.'/languages/ por um subdirectório designado "yachtbrokerage". Se o ficheiro existir para a língua corrente, será então usado esse ficheiro. Caso contrário, o Jomres pesquisará por um ficheiro em língua inglesa no mesmo directório. Se não o puder encontrar, utilizará o ficheiro de linguagem para a que tiver sido seleccionada, no directório /'.JOMRES_ROOT_DIRECTORY.'/languages.' );
// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Configuração avançada do site' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Defina Sim se quer utilizar as opções avançadas de configuração. Se está a iniciar-se no Jomres, aconselha-se a que defina Não por enquanto, dado que a instalação por defeito é suficiente para começar; em vez de definir Sim neste caso, deve adicionar o Jomres ao menu principal, fazer login como "admin" no <i>frontend</i> e começar a configurar a(s) sua(s) propriedade(s). Note que muitas das opções avançadas somente serão aplicáveis em instalações Jomres Silver, pelo que os utilizadores de Jomres Lite não poderão usufruir totalmente das características que a opção avançada permite.' );
jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Carregar biblioteca Jomres jQuery UI?" );
jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Preço (mais elevado primeiro)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Preço (mais baixo primeiro)' );
// 4.7.6
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Resumo de preços e estimativas devem ser avaliadas por noite/por semana/por mês?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Por noite' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Por semana' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Por mês' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'Por pessoa' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'semana(s) a ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mes(es) a ' );
// 4.7.7
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Como deve funcionar a opção de pesquisa por número de pessoas?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Afecta todos os módulos de pesquisa. Ao usar a opção de pesquisa por número de hóspedes, a opção de pesquisa deve procurar propriedades cujas tarifas comportem número de hóspedes até, e igual ao número escolhido, precisamente igual ao número escolhido, ou igual e suprior a esse número? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Por favor aguarde, a sua reserva está a ser processada e em breve será direccionado para o website Paypal.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Se não for automaticamente redireccionado para o Paypal em 5 segundos...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Clique aqui' );
// 4.7.8
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Reserva válida de" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Reserva válida até" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Nome do hóspede" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Podem ser gerados códigos de desconto e atribuidos aos hóspedes, como incentivo para fazer mais reservas.<br/>
Válido desde e até, refere-se às datas em que pode ser feita uma reserva, enquanto que Reserva válida desde/até se refere a datas dentro das quais o cupão é válido. Se uma reserva ocorrer fora desse período, aplicar-se-ão as taxas normais para os dias fora do período em questão.<br/>
Se quiser que a reserva fique disponível para um hóspede específico, seleccione o nome rspectivo no <i>dropdown</i> para limitar o cupão apenas a esse hóspede." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "Com o seu cupão, esta reserva foi descontada de " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " até " );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Defina Não para desactivar a carga, quer do Jquery UI javascript quer dos ficheiros CSS." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Carregar Jomres a biblioteca CSS jQuery UI?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Defina Não para desactivar somente o ficheiro CSS jquery UI CSS." );
//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Total incl. imposto" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Use conversion functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "List historic and current guests" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Current guests only" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'second' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'minute' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'hour' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'day' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'week' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'month' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'year' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'decade' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'ago' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'from now' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Bookings are for whole days?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January ' . date( "Y", strtotime( "next year" ) ) . ' to the 2nd of January ' . date( "Y", strtotime( "next year" ) ) . ' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "days(s) at" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.' );

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Edit Profile' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'Image' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business types that can show this feature' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Edit Tax rate" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Edit Custom field" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "License server password" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "License server username" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "This Jomres version : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Latest Jomres version" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Change your active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Email Settings" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternate Host" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Change this to your smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternate Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Change this to your smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternate Protocol" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Use authentication" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically." );

jr_define( '_JOMRES_QUICK_INFO', "Quick Info" );

jr_define( '_JOMRES_MENU_SHOW', "Show" );
jr_define( '_JOMRES_MENU_HIDE', "Hide" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Use the alternate menu layout?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Default" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Anybody" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registered" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Nobody" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Menu Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Receptionist" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Full Access Control" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls." );

jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Full Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied." );

jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Users with admin rights to this property" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "List all user's invoices" );


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Subject' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Your full name' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Please describe your issue' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Properties found" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Add your property : Step 1 of 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Add your property : Step 2 of 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'My businesses' );


jr_define( '_JOMRES_CART_TITLE', 'My proposed bookings' );
jr_define( '_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirm booking(s)' );
jr_define( '_JOMRES_CART_OR', ' or ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Save for later' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.' );
jr_define( '_JOMRES_CART_VIEWCART', 'View cart' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?' );

jr_define( '_JOMRES_CLEARDATES', 'I don\'t have any dates yet' );

jr_define( '_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Use css caching?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Search calendars show the clear dates checkbox?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "List view" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Photo view" );

jr_define( '_JOMRES_COMPARE', "Compare" );
jr_define( '_JOMRES_REMOVE', "Remove" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Return to search results" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Add to favourites" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Remove from favourites" );
jr_define( '_JOMRES_VIEWSHORTLIST', "View your shortlist" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Important: Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "We use cookies to help keep our site relevant and easy to use." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Read more..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Yes, I accept the use of cookies in this way." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your favourites." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Mobile device settings" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simulate mobile mode" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulation IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "Enable safe mode?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "POA" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );

jr_define( 'COMMON_NEXT', "Next" );
jr_define( 'COMMON_CANCEL', "Cancel" );
jr_define( 'COMMON_SUBMIT', "Submit" );
jr_define( 'COMMON_SAVE', "Save" );
jr_define( 'COMMON_DELETE', "Delete" );
jr_define( 'COMMON_RETURN', "Return" );
jr_define( 'COMMON_CLOSE', "Close" );
jr_define( 'COMMON_BACK', "Back" );

jr_define( 'COMMON_HOME', "Home" );

jr_define( 'COMMON_NEW', "New" );

jr_define( 'COMMON_SEND', "Send" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile timeout" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );

jr_define( 'COMMON_ACTION', "Action" );
jr_define( 'COMMON_VIEW', "View" );

jr_define( 'BACKTOTOP', "Back to top" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Weak" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Strong" );

jr_define( '_JOMRES_INPUTFILTERING', "Input filtering" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering level" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Allowed input tags" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Allowed inputs" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Property details in tabs?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Set this option to show property details in tabs. Set it to no to show them without tabs." );

jr_define( 'COMMON_PRINT', "Print" );

jr_define( 'COMMON_EDIT', "Edit" );
jr_define( 'COMMON_COPY', "Copy" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Jomres is designed to work within both the Bootstrap 2 or Bootstrap 3 frameworks. Once you have installed a BS2 or BS3 theme or template, set this switch to choose which of the flavours of Bootstrap you want Jomres to work with." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Use Jomres Bootstrap templates in the administrator area?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Here are some alternatives you might want to consider." );

jr_define( '_JOMRES_BEEZ_WARNING', "Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "About Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Getting started" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "system maintenance" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Access Control" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "developer tools" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "languages" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "accounting" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site structure" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "user management" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manual (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "My Account (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "scheduled tasks" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal functionality" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin manager" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integration" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "reports/statistics" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "taxes" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Upgrades" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "payment methods" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tariff default" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "This only applies to new tariffs" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Years to show" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Defines the number of years to show when editing a tariff type" );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "account details" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Login" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logout" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "dashboard" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "settings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Edit country" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "Country id" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Country name" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Edit region" );
jr_define( "_JOMRES_EDIT_REGION_ID", "Region id" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Region name" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "List countries" );
jr_define( "_JOMRES_COM_LISTREGIONS", "List regions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Export definitions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community." );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Translate locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Translate lang file strings" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature." );

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Property list default layout" );

jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Stay for a minimum of" );
jr_define( "_JOMRES_NIGHTSFOR", " nights for " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Property list images, show the property image as a gif if slideshow images are available." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Show as GIFs only if the property is a featured property." );

jr_define( "_JOMRES_AGENT", "Agent" );
jr_define( "_JOMRES_AGENT_DETAILS", "Agent details" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Agent's listings" );

jr_define( "_JOMRES_PROPERTY_LANG", "Property language" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "The default language of this property." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Automatically approve new properties" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Approvals" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Properties awaiting approval" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "No properties are awaiting approval" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Approve property" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Review property" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "This property has not been approved yet. Once it has been approved you will be able to publish it." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "Sorry, you cannot publish this property as it has not been approved yet." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "A new property requires approval" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Your property has been approved" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Congratulations, your property has been approved, please click the following link to view the property's control panel : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Region names are translatable" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down." );

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Guest booked out." );

jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.' );

jr_define( "JOMRES_TAPTOCALL", "Tap to call" );

jr_define( "JOMRES_NEWREVIEW_SUBJECT", "New review for " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "A new review has been left for " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "New Report" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "A review has been reported for " );

jr_define( "JOMRES_NON_REGISTERED_USER", "Non registered user" );

jr_define( "JOMRES_JQUERY18_2", "Use Jquery 2.x?" );
jr_define( "JOMRES_JQUERY18_2_DESC", "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. " );

jr_define( "JOMRES_SUPERIOR", "Superior" );
jr_define( "JOMRES_SUPERIOR_S", "(S)" );

jr_define( "JOMRES_GRANDTOTAL_EX_TAX", "Grand total (ex tax) : " );
jr_define( "JOMRES_GRANDTOTAL_INC_TAX", "Grand total (inc tax) : " );
jr_define( "JOMRES_GRANDTOTAL_TOTAL_TAX", "Total tax : " );

jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL", "Type the two words: " );
jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO", "Enter what you hear: " );
jr_define( "JOMRES_RECAPTCHA_PLAY_AGAIN", "Replay the audio track " );
jr_define( "JOMRES_RECAPTCHA_CANT_HEAR_THIS", "Download the track in MP3 format" );
jr_define( "JOMRES_RECAPTCHA_VISUAL_CHALLENGE", "Visual mode" );
jr_define( "JOMRES_RECAPTCHA_AUDIO_CHALLENGE", "Audio mode" );
jr_define( "JOMRES_RECAPTCHA_REFRESH_BTN", "Refresh" );
jr_define( "JOMRES_RECAPTCHA_HELP_BTN", "Help" );
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Sorry, that was incorrect. Please try again." );


jr_define( "JOMRES_GOOGLE_MAPS", "Google map options" );
jr_define( "JOMRES_GOOGLE_MAPS_INFO", "These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow." );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Use weather layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "Fahrenheit or Celcius? " );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit" );

jr_define( "JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Use Panoramio layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Use transit layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Use traffic layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Use bicycling layer?" );

jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Enable Gmap Points of Interest (including possibly your competitors)?" );


jr_define( "_JOMRES_METAKEYWORDS", "Meta Keywords" );

jr_define( "_JOMRES_PLEASE_PRINT", "Please print this email and present it on your arrival." );
jr_define( "_JOMRES_OFFICE_USE_ONLY", "Office use only" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Scan this code into your phone to get directions to us." );


jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Use the built in VIES VAT validation feature?" );
jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers." );

jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Congratulations. We were able to validate your VAT number." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED", "VAT number wasn't entered." );
jr_define( "_JOMRES_TAX_RULES_LIST", "List tax rules" );
jr_define( "_JOMRES_TAX_RULE", "Tax rule" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the \"edit my account\" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Import tax rates" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Edit tax rule" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "The VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Please enter the VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "VAT number validated." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "VAT number not validated." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Business details entered here will be used on commission and subscriptions invoices." );

jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further." );


jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Production or Development?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to \"production\"." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Production" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Development" );

//v7.3.3
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.' );

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Media Centre");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Property image upload service");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Add images");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Room images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Property main image");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Slideshow images");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Clear list");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Drag & Drop files here");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"The maximum file size for uploads is ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Only JPG and PNG images are allowed.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"If you upload multiple images as the \"Main property image\" these will be used in the Property List . Slideshow images will be shown on the property details page.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"View your image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Delete image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Upload image");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Room types icons");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Property feature icons");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Upload all files");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "This is your property name" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "This is the language selector." );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "This is the Editing Mode selector." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "This is content area." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day." );

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE' , "Active property switch page." );
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT' , "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage." );

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE' , "This is where your property names will show." );
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT' , "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE' , "This is your property header." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT' , "This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address." );

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE' , "Your photo gallery." );
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT' , "This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE' , "Main buttons." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT' , "Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration." );

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE' , "Inline Calendar." );
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT' , "Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE' , "Rooms list tab" );
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT' , "Here you can see all rooms, and the availability of each room if you click on the availability button." );

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE' , "Reviews list." );
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT' , "Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property." );

jr_define('TOUR_ID_MAPTAB_TITLE' , "Map tab." );
jr_define('TOUR_ID_MAPTAB_CONTENT' , "Under this tab your guests can see your property in a zoomable map." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE' , "More Information tab." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT' , "Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Booking Form." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT' , "Your guests can either go to a separate page, or they can use the booking form in this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE' , "Main Property Details." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT' , "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE' , "All current and future tariffs" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT' , "This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE' , "Local Events." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT' , "If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE' , "Local Attractions." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT' , "If there are any attractions near to you, like museums or amusement parks they will be listed here." );

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE' , "Available Auctions." );
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT' , "If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods." );

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT' , "On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style." );

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE' , "Your Business details." );
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT' , "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you." );

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "External links." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "You can add a link to another site here." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , "Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Miscellaneous ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "This tab is for settings that don't fit into any other tab." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Property details page settings." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Required items in the booking form." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "This tab allows you to set which items in the booking form that are required or optional." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Villa/Apartment specific settings." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Tariffs" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "On this page you can configure how tariffs and deposits are calculated." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Tourist Tax." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "If your country or city charges tourist taxes, you can configure them here." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Micromanage settings." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange tariff editing mode specific settings." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Wise Price settings." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE' , "The table." ); 
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT' , "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE' , "Property creation, step 1." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT' , "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE' , "Property country." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT' , "Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE' , "The property type." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT' , "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast." );

if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite resources only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE' , "Property creation step 2." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT' , "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE' , "MRP or SRP." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT' , "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE' , "Property name & address." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT' , "Please enter the property name and address in the following fields." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Number of stars." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Mapping location." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Property features." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Policies and Disclaimers." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "List all bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "List new bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "List old bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "List guests." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Overrides." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Particulars." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Room features filter." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms." );


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Existing guests." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Guest details." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Black bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "On this page you can edit your property type and your tariffs." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Guest types." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Optional extras." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Media Centre." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",'_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Existing images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Finished!" );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "HELP" );

//8.0
jr_define('COMMON_PREV' , "Prev" );
jr_define('COMMON_MORE' , "More" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Today" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Year" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Month" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Week" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Day" );
jr_define('_JOMRES_HLEGEND' , "Legend" );
jr_define('_JOMRES_HFILTER' , "Filter" );
jr_define('_JOMRES_HFROM' , "From" );
jr_define('_JOMRES_HTO' , "To" );
jr_define('_JOMRES_HNEW_BOOKING' , "New booking" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Deposit status" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Guest status" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Booking status" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Publishing status" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Invoice status" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Invoice type" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Approved" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Current business" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Show bookings for" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Show invoices for" );
jr_define('_JOMRES_STATUS_ANY' , "Any" );
jr_define('_JOMRES_STATUS_PAID' , "Paid" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Not paid" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Checked out" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Active" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Cancelled" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Published" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Not published" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Provisional booking" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Confirmed booking" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Guests with active bookings" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Guests with past bookings" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Bookings" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Subscriptions" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Commissions" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "All my businesses" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Set as current" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Check in" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Check out" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "properties" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "guests" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "reports" );
jr_define( "_JOMRES_HLIST_GUESTS", "Guests" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "List guests" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "List invoices" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Businesses" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Quick booking" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Date of booking" );
jr_define( "_JOMRES_HTWO_WEEKS", "Two weeks" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "This booking will be cancelled. Press OK to cancel the booking." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Today checkins" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Today checkouts" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Current residents" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Navigation bar settings" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Navigation bar location" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Default (content area)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Fixed to top" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Fixed to bottom" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Inverted navbar (colour change)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Booking number" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap version" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Fixed periods" );
jr_define('_JOMRES_HDEPOSITS' , "Deposits" );
jr_define('_JOMRES_HBOOKING_FORM' , "Booking form" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Required fields" );

jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "Tom" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Smith" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "110" );
jr_define('COMMON_PLACEHOLDER_STREET' , "My Street" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "My Town" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "My Hotel" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXNN NNXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "example@address.com" );

jr_define('EXTENDED_CONFIGURATION' , "Extended Configuration" );
jr_define('SIMPLE_CONFIGURATION' , "Simple Configuration" );
 
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Resource features" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Resource type" );
 jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Edit guest type" );
jr_define('_JOMRES_HEDIT_COUPON' , "Edit coupon" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Edit extra" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Create multiple resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Generate resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "How many resources?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Resources type" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "Max guests per resource" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Delete all existing resources?" );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.' );

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT' , "On this tab you can configure the look and feel of the booking form." );

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Bookings." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "This tab allows you to modify how bookings are treated, plus various other settings." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Edit Guest." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "VAT." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "If a VAT number is entered here then it will be shown on the guest's invoice." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Discount." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT' , "You can choose to give this guest an automatic discount which will be applied whenever they make a booking." );


jr_define('DATATABLES_SINFO' , "Showing _START_ to _END_ of _TOTAL_ entries" );

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Approval");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Reject booking inquiry");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Approve booking inquiry");
jr_define('_JOMRES_STATUS_APPROVED',"Approved");
jr_define('_JOMRES_STATUS_REJECTED',"Rejected");
jr_define('_JOMRES_STATUS_INQUIRY',"Inquiry");

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Bookings require approval or availability confirmation?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.");

jr_define('_JOMRES_ERROR',"Error");
jr_define('_JOMRES_ERROR_MESSAGE',"Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.");

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Message");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"File");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Line");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Trace");


jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Email templates");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Edit email template");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Email subject");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Email text");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Email type");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Email name");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Email description");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Please see this page for help customizing the emails and a list of the available output: <a href=\"http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates\" target=\"_blank\">Email Templates Help</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Site Admin New Booking Email");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Hotel New Booking Email");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Email sent to property owner when a new booking is made");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Guest New Booking Email");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Email sent to guest when a new booking is made");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Guest Confirmation Letter");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Printable letter or email that can be sent manually by the property owner to confirm a booking");


jr_define('_JOMRES_CAN_BE_APPROVED',"This booking can be approved. All selected resources are available for the selected dates.");
jr_define('_JOMRES_CANT_BE_APPROVED',"This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.");

jr_define('_JOMRES_SHOW_POWEREDBY',"Show the Powered by Jomres link in the Jomres footer.");


jr_define('GUEST_BUDGET',"Budget");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Use Budget feature?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ' );


jr_define( '_JOMRES_FOR', 'For' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHT', 'night' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY', 'Show price overlay' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In the property list it is possible to show a cumulative price over the property image, use this setting to switch that display off. The cumulative price is calculated from the dates entered in the ajax search composite plugin.' );

jr_define( '_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?' );

jr_define( "_JOMRES_ONLINE_PARTNERS", "Partners" );

jr_define( '_JRPORTAL_MONTHS_SHORT_0', 'Jan' );
jr_define( '_JRPORTAL_MONTHS_SHORT_1', 'Feb' );
jr_define( '_JRPORTAL_MONTHS_SHORT_2', 'Mar' );
jr_define( '_JRPORTAL_MONTHS_SHORT_3', 'Apr' );
jr_define( '_JRPORTAL_MONTHS_SHORT_4', 'May' );
jr_define( '_JRPORTAL_MONTHS_SHORT_5', 'Jun' );
jr_define( '_JRPORTAL_MONTHS_SHORT_6', 'Jul' );
jr_define( '_JRPORTAL_MONTHS_SHORT_7', 'Aug' );
jr_define( '_JRPORTAL_MONTHS_SHORT_8', 'Sep' );
jr_define( '_JRPORTAL_MONTHS_SHORT_9', 'Oct' );
jr_define( '_JRPORTAL_MONTHS_SHORT_10', 'Nov' );
jr_define( '_JRPORTAL_MONTHS_SHORT_11', 'Dec' );

jr_define('DATATABLES_SEMPTYTABLE'		, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SINFO'			, "Mostrando de _START_ até _END_ de _TOTAL_ registos" );
jr_define('DATATABLES_SINFOEMPTY'		, "Mostrando de 0 até 0 de 0 registos" );
jr_define('DATATABLES_SINFOFILTERED'	, "(filtrado de _MAX_ registos no total)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "Mostrar _MENU_ registos" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SPROCESSING'		, "A processar..." );
jr_define('DATATABLES_SSEARCH'			, "Procurar:" );
jr_define('DATATABLES_SZERORECORDS'		, "Não foram encontrados resultados" );
jr_define('DATATABLES_SFIRST'			, "Primeiro" );
jr_define('DATATABLES_SLAST'			, "Último" );
jr_define('DATATABLES_SNEXT'			, "Seguinte" );
jr_define('DATATABLES_SPREVIOUS'		, "Anterior" );
jr_define('DATATABLES_SSORTASCENDING'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SSORTDESCENDING'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );

jr_define('DATATABLES_SHOWHIDE'	, "Change columns" );

jr_define( '_BOOKING_ONREQUEST', 'Booking on request' );
jr_define( '_BOOKING_INSTANT', 'Instant booking' );

jr_define( '_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?' );
jr_define( '_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.' );

jr_define( '_BOOKING_CALCQUOTE', 'Request booking' );

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');

jr_define('_JOMRES_WORD_CACHING', 'Caching');


jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Use patTemplates Caching?');

jr_define( '_JOMRES_HLASTCHANGED', 'Last changed' );

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME',"Hotel Booking Cancellation Email");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC',"Email sent to the property owner when a new booking is cancelled");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME',"Guest Booking Cancellation Email");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC',"Email sent to guest when a new booking is cancelled");

jr_define('_JOMRES_TEST_EMAIL_SEND',"Send test email");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT',"Test email");
jr_define('_JOMRES_TEST_EMAIL_CONTENT',"This is a test email from your booking system.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS',"Test email sent successfully");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE',"Test email was not sent");


jr_define('_INVOICE_TRANSACTIONS',"Transactions");

jr_define('_OPENEXCHANGE_API',"Open Exchange Rates API key");
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

jr_define('_JOMRES_COMMISSION',"Commission");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"If you upload multiple images for individual optional extras, only the first image will be used.");
jr_define( '_JRPORTAL_INVOICES_PAYNOW', "Pay now" );
jr_define( '_JRPORTAL_INVOICES_PAYNOW_DESC', "This invoice in now due. Please click the button to select the payment method." );
jr_define('_JOMRES_EXTRAS_TEMPLATE',"Here's a list of some of the great things you can purchase while making a booking at this property. ");

jr_define( '_ASSIGN_COMMISSION_RATES', 'Assign commission rates' );


jr_define( 'GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.' );
jr_define( 'EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?' );

jr_define( 'PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings' );

jr_define( '_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.' );


jr_define( 'PROPERTY_STATS_SALES', 'Sales' );
jr_define( 'PROPERTY_STATS_SALES_DESC', 'This is when bookings were taken' );

jr_define( 'PROPERTY_STATS_BOOKINGS_DAYS', 'Bookings (days)' );
jr_define( 'PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Booking dates start and number of days.' );

jr_define( 'PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Bookings (rooms x days)' );
jr_define( 'PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Number of rooms booked out in a certain month.' );

jr_define( '_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons' );


jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category' );
jr_define( '_JOMRES_HCATEGORY', 'Category' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.' );

jr_define( '_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin' );
jr_define( '_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout' );

jr_define( '_JOMRES_STATUS_UNISSUED', 'Unissued' );

jr_define( 'DEFAULT_TERMS_AND_CONDITIONS', 'These Terms and Conditions clarify The Owner\'s obligations to The Renter, The Renter\'s obligations to The Owner, and in the very unlikely event of any disputes, will be used as the basis for any resolution. Please read them carefully before confirming your booking.

Check-In: From [Time] / Check-Out: By [Time] (High Season Weekly Rentals)

For Low Season Weekend and Mid-Week Rentals an earlier Check-In and later Check-out may be possible (usually In from [Time] and out by [Time])

Acceptance of these Terms & Conditions binds a contract between the following two parties:

The Rental Applicant (The Renter) and The Property Owner (The Owner)

 

 1. Party Members

All persons listed on the Rental Agreement or added subsequently by The Renter will be bound by the terms of this agreement. Occupancy of the property is restricted to those names listed on the Agreement or added subsequently by The Renter.   The Rental Applicant is considered to be the Lead Renter and will assume full responsibility for all members of the Rental Group throughout the rental period.   Information or instructions relating to this rental will be communicated to the Rental Applicant only and not to any third-party member of the Rental Group.

2. Payments

A Reservation will be confirmed by The Owner once the application has been approved and initial or full payment has been processed.   For reservations of one week or more, if the reservation is made 45 days or more before the rental commences, an initial rental deposit payment of [X%] of the rental fee will be due at the time of booking. If a reservation is made less than 45 days before the rental commences, or the reservation is less than a full week’s duration, the full rental fee must be paid at the time of booking. In the event of a reservation not being accepted by The Owner, all fees paid will be refunded immediately. Any booking made within 10 days of the start of the rental period must be paid in full by credit card via PayPal, certified check or money order at the time of booking. No reservation may commence without full payment being cleared.

Once a reservation is received and accepted by The Owner, The Renter is liable for payment of the balance of the rental fee 45 days before occupation of the property. Non-payment by the due date will be treated as a cancellation and the deposit will be forfeited.


3. Cancellation Policy & Changing a Booking

Once a reservation has been accepted and confirmed, a cancellation can only be made in accordance with the terms below:

- If the period of rental can be re-booked, a refund for the period re-rented or the part thereof, less a cancellation fee of [Amount]  will be issued.

- If any part of the rental period cannot be re-booked, the Renter will forfeit all monies paid for that period.

 4. Occupancy of the Property

Regardless of the published maximum number of persons a property can accomodate, the number of guests occupying the Property is strictly limited to those named on the Rental Agreement or any subsequent amendment notified in writing to The Owner. The stated and agreed occupancy figure includes all persons irrespective of age, day and overnight guests.

Exceeding the number of stated and agreed persons will result in immediate eviction without refund, or a $100 per guest per night charge at the discretion of The Owner.

 5. Condition of the Property

The Property will have been inspected prior to occupation and therefore The Renter undertakes to:

- Notify The Owner immediately with regard to any damage and/or maintenance issues that require attention.

- Keep the Property and all furniture, fixtures, fittings, chattels and effects in or about the Property in the same state of repair and condition as found at the commencement of the Rental.

 

- Where a cleaning service is provided; The Renter shall follow the departure instructions provided by The Owner.

- Where a cleaning service is not provided; The Renter shall leave the Property in the same state of cleanliness and general order in which it was found. Failure to do so to the satisfaction of The Owner will result in a damage/cleaning charge being levied.

6. Use of Telephone and Internet Services

Where a telephone is provided as part of the rental, The Renter must charge all long-distance telephone calls to either a credit/phone card or call collect, unless advised otherwise. Where internet services are provided, there may be download restrictions and a charge may be levied if these are exceeded. It is The Renter\'s responsibility to check for restrictions on an internet device before commencing any download.

 7. Pets

One dog is permitted [indicate any restrictions]. All evidence of pet occupation must be removed from the Property and grounds at the end of the rental period. Pets are not permitted on any item of furniture, including beds, and evidence of pet hair on furniture and bedding may incur additional cleaning charges.

OR

Pets are strictly prohibited at this property. Any evidence of pet occupation will result in a forfeit of the damage deposit in its entirety.

The Owner accepts no responsibility for any allergic reaction or other conditions arising from occupancy of the property. The designation of “No Pets” does not indicate there have not been pets at the property at some time.

8. Smoking

Smoking is not permitted in or around the immediate vicinity of the property.

9. Property  Access During Winter Months

The Property is  offered for rental during the winter months and has road access and receives a snow clearance service from [indicate municipal or private contractor]. However, Renters are advised that following any major snowfall, snow plough providers are contracted to clear local roads in a predetermined order. Consequently, plowing at a property may be delayed for several hours or, in severe storm conditions, days. In the unlikely event that a Renter is unable to leave a property on the planned departure date, the Renter will not be liable for any additional accommodation charges. Conversely, should a lack of snow clearance prevent a Renter from reaching a property, the Renter will receive a refund of the rental fee for the day(s) the property was inaccessible. However, The Owner will be held responsible for any losses, additional expenses or penalties incurred as a result of being unable to arrive at or leave a property on time due to a lack of snow clearance. Renters are also reminded to ensure that they and their vehicles are suitably prepared and equipped for driving in the wintry conditions likely to be encountered during their visit to the Property.

10.   Equipment and Facilities Provided

Equipment and facilities are provided at the discretion of The Owner and whilst every attempt is made to ensure that such equipment is in working order for the duration of the rental period, should a breakdown or some other situation occur that renders non-essential element unusable, the Owner does not take responsibility for replacing or refunding The Renter for the lack of use of these equipment or facilities. The equipment and facilities referred to include (but are not exclusive to) such items as watercraft, motors, televisions, VCRs/DVDs, hot tubs, saunas and Jacuzzis.

 

The Renter must report any inoperative or defective equipment to The Owner promptly! The Owner will make every reasonable effort to have repairs made as soon as possible; however, there are limited service contractors in [Your Area]. While every attempt will be made to ensure that all the advertised equipment and appliances are in working order at the commencement of a rental period, no reduction of rent; rebate; or refund will be issued for a mechanical failure of air conditioning, dishwasher, washer, dryer, TV or other appliances.

 11.   Refunds

If a breakdown should occur to fundamental elements such as water systems, plumbing and electrical systems, and major appliances such as stove or refrigerator, every effort will be made to repair or replace, or an appropriate refund will be made for the inconvenience caused. This does not apply to system breakdown caused by misuse, such as plumbing blockages caused by inappropriate use of sanitary facilities.

The Owner is not liable, nor will provide a refund, for any stoppage of electrical services caused by extreme weather or other circumstances beyond his control.   Similarly, there will be no refunds for inclement weather, changes in water levels, conditions at neighboring properties, or any nuisance afforded by the natural elements of the location such as flying insects or the animal population.

12. Other Conditions of Booking

The Renter shall abide by these Terms and Conditions of Rental and any other instructions contained in the individual Cottage Guide and any additional information and instructions as shall be supplied in the Property or by The Owner.

 

LIMITATIONS OF LIABILITY: The Renter represents, warrants, acknowledges and agrees with The Owner that he/she will use the Property and its facilities in accordance with The Terms and Conditions above and the Information provided and that he/she does so at his/her own risk and that he/she indemnifies and saves The Owner harmless from any personal injury, sickness or death, loss or damage, however caused, to person or property of The Renter, his/her family, or guests, before during or after the time of occupancy. Further, he/she accepts full responsibility for the use of the Property and any recreational equipment such as boats and motors, etc. and agree to pay for any damage of said equipment, other than for normal wear and tear. The Renter further acknowledges he/she is responsible for ensuring all Boating Regulations are observed, including having required safety equipment in the watercraft, as well as meeting current Operator Competency Requirements.

' );


jr_define( '_JOMRES_NUMBER_OF_BEDROOMS', 'Bedrooms' );

jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.' );

jr_define( '_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type' );
jr_define( '_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'You must choose a sub-type before you can create tariffs for this property.' );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches." );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK", "Give your property a sub-type" );


jr_define( "_JOMRES_EMAIL_TEMPLATES_TITLE", "Email templates" );


jr_define( "_JOMRES_CONTACT_SETTINGS", "Contact settings" );
jr_define( "_JOMRES_CONTACT_SETTINGS_DESC", "From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners." );
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS", "Override listings contact details?");
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC", "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again." );
jr_define( "_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.");


jr_define( '_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request' );


jr_define( '_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending' );
jr_define( '_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending' );

jr_define( '_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?' );
jr_define( '_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.' );

jr_define( '_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.' );
jr_define( '_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details" );
jr_define( '_JOMRES_CLEAR_GUEST_DETAILS', " -- New Guest -- " );

jr_define( '_JOMRES_CHARTS', 'Charts' );
jr_define( '_JOMRES_CHARTS_SELECT', 'Select chart...' );
jr_define( '_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month' );

jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK", "Ok, let's get started. First you need to create some rooms for this property." );
jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK", "Create some rooms now" );

jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings." );
jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK", "Upload an image" );

jr_define( "_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK", "Create some tariffs" );

jr_define( "_JOMRES_PROPERTYTYPE_FLAG", "What will guests book?" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_DESC", "Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? " );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Rooms in the property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_VILLA", "The entire property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_NEITHER", "Other (Tours/Realestate)" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Both" ); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable 
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "What will guests book?" );

jr_define( "_JOMRES_ADDRESS_SANITY_CHECK", "You'll need to complete your address details so that your guests can find you when they come to stay." );
jr_define( "_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Update your address" );


jr_define( "_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED", "Oops, it looks like you might have forgotten to complete all the fields." );

jr_define( "_JOMRES_MANAGER_HAS_NO_PROPERTIES", "Error, this user is configured as a manager but has not been assigned to any properties" );

jr_define( "_JOMRES_CONTANT_US", "Contact us" );


jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_TITLE", "Welcome to your new online listing for " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_1", "Hi, and welcome to your new property on " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_2", "You recently added a new property to our website, and we'd like to welcome you to the family." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3", "You can see your new dashboard " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT", " here " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4", "Once you've setup your property you can see how it looks to site visitors by visiting " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT", " your front page." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_5", "(it's not published, so site visitors can't see it yet)." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_6", "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7", "If you have any questions at all, please " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "contact us" );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_8", "and we'll be delighted to answer all your questions." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE", "All the best, our team at " );


jr_define( "_JOMRES_JINTOUR_SANITY_CHECK", "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours." );
jr_define( "_JOMRES_JINTOUR_SANITY_CHECK_LINK", "Let's create some tours!" );

jr_define( '_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location' );
jr_define( '_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.' );

jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebooking.com or anything else.' );

jr_define( 'COMMON_DOWNLOAD', 'Download' );

jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Property sub-type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Property sub-type' );

jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!' );

jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.' );

jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Your license does not support plugin downloads.' );


jr_define( '_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them' );
jr_define( '_JOMRES_LAT', 'Lat (nn.nnnn)' );
jr_define( '_JOMRES_LONG', 'Long (nn.nnnn)' );

jr_define( '_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.' );
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button above to create new Room Types." );


jr_define( "_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Tours" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "No bookings/Real estate ( simple listing )" );


jr_define( "_JOMRES_CONFIG_LOG_LOCATION", "Log file location" );
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the ".JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the ".JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );

jr_define( "JOMRES_GOOGLE_MAP_STYLE", "Google map colour scheme" );

jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE", "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images." );
jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1", "The property type helps you to define how the property will be booked, for example with hotels you \"sell\" just one or two rooms at a time, whereas with villas you offer the entire property." );
jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2", "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties." );

jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT", "Minimum Deposit" );
jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC", "You can configure the minimum deposit amount to be charged. If you do, then the \"Deposit required is cost of the first night?\" & \"Deposit required is percentage?\" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here." );

jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING", "This figure cannot be less than " );

jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_HOST", "Syslog host" );
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_PORT", "Syslog Port" );
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC", "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED", "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");

jr_define( "_JOMRES_SEND_ERROR_EMAIL", "Send an email to site admin when an error occurs?" );
jr_define( "_JOMRES_SEND_ERROR_EMAIL_DESC", "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. " );


jr_define( "_JOMRES_FAQ", "Frequently asked questions" );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION", "Introduction" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES", "What is Jomres?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES", "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD", "Can users register on my Jomres site and add their own properties?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD", "Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES", "Properties" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES", "How do I add a new property?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES", "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES", "Can I import properties from another system?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES", "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS", "Can I import bookings from another system?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS", "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. " );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES", "Can I edit email templates?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES", "Property managers can edit email templates through their toolbar under Settings > Email Templates." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS", "Payments" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS", "How do I allow properties to take payments?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS", "You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY", "Which gateway should I use?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY", "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS", "When a guest makes a payment for a booking, who gets the money?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS", "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING", "Troubleshooting" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL", "Booking emails aren't being sent." );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL", "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY", "You can't see the payment gateway after making a booking." );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY", "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES", "Jomres License" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE", "After buying X license, am I forced to purchase renewals once the license has expired?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE", "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED", "My license has expired, can I upgrade Jomres anyway?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED", "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE", "What software license is Jomres released under?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE", "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets." );
 

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY", "Properties" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY", "How do I create a property?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY", "Click on Properties > New Property to add a new property." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW", "How can I see what my property looks like to guests?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW", "Click on Properties > Preview to see how your property looks to guests." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP", "How do I add rooms?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP", "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES", "How do I set room prices?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES", "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS", "How do I create optional extras?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS", "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS", "How can I take payments online?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS", "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS", "Can I give discounts?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS", "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. " );

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS", "Bookings" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE", "When I click New booking, I am taken to the Contact form, why?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE", "Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK", "What are Black Bookings?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK", "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished." );

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES", "Images" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO", "How do I upload images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO", "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN", "What is the 'Main' image?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN", "The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES", "What are room feature icons?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES", "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS", "How do I upload room images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES", "Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW", "How do I upload slideshow images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW", "Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS", "How do I upload Extras Images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS", "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP", "How do I setup currency symbols?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP", "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES", "How do I enable multiple currencies?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES", "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. " );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES", "How do I save descriptions in multiple languages?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES", "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER", "How many properties can I list?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER", "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES", "Can I modify other properties on this site?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES", "No, you cannot. You can only administer properties you have created or been assigned to as a property manager." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER", "Can I modify other properties on this site?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER", "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES", "What are Guest Types/How do I change per person per night?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES", "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES", "What are Room Features?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES", "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form." );



jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES", "Can I make a user a property manager?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES", "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS", "Plugins" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS", "What is the Plugin Manager for?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS", "The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE", "Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE", "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION", "How do I install a plugin?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION", "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one." );


jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE", "Site Structure" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO", "What does Site Structure mean?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO", "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES", "What are Property Types?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES", "In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES", "What are Property Features?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES", "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES", "What are Property Feature Categories?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES", "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES", "What are Room features?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES", "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES", "Why is there a page to edit countries/regions?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES", "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world." );


jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION", "Localisation/Translation" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO", "How do I translate things?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO", "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_TOURS", "Tours" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO", "What are tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO", "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL", "How do I use Jomres to sell tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL", "To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR", "What is the Jintour plugin?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR", "Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING", "How do I sell tours and vacation rentals in the same booking?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING", "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS", "What about if I only want to sell tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS", "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS", "How can I create a Tour/bookable resource that can be seen in all properties booking forms?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS", "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST", "Ok, I've installed Jomres, what next?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST", "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now." );

jr_define( "_JOMRES_MANAGE_PROPERTIES", "Manage Properties" );

jr_define( "_JOMRES_CONFIG_IPINFODB_KEY_WARNING", "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes." );

jr_define( "_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING", "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes." );

jr_define( "_JOMRES_PERMIT_NUMBER_TITLE", "Permit number" );
jr_define( "_JOMRES_PERMIT_NUMBER_DESCRIPTION", "Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section." );

jr_define( '_JOMRES_SHORTCODES', "Shortcodes" );

jr_define( '_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed." );
jr_define( '_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed." );

jr_define( 'SHORTCODE_TASK', "Task" );
jr_define( 'SHORTCODE_DESCRIPTION', "Description" );
jr_define( 'SHORTCODE_ARGUMENTS', "Arguments" );
jr_define( 'SHORTCODE_EXAMPLE', "Example" );

jr_define( 'INTEGRITY_CHECK', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_DESC', "This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here." );
jr_define( 'INTEGRITY_CHECK_FILENAME', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_LOCALHASH', "Local hash" );
jr_define( 'INTEGRITY_CHECK_BUILDHASH', "Version hash" );
jr_define( 'INTEGRITY_CHECK_NOPROBLEMS', "Awesome! No problems were found." );


jr_define('_JOMRES_PROPERTYTYPE_MARKER',"Google maps marker");

jr_define( '_JOMRES_JAVASCRIPT_READMORE', 'Read more' );
jr_define( '_JOMRES_JAVASCRIPT_READLESS', 'Read less' );
jr_define('_JOMRES_TOURIST_TAX_TITLE',"Tourist tax");

jr_define('_JOMRES_TOURIST_TAX_TAXRATE',"Tourist tax rate");
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC',"Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO',"Is percentage?");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC',"Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO',"Affects the entire booking value?");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC',"Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE',"Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.");
jr_define('NO_LICENSE_MESSAGE',"You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE',"You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE',"Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");

