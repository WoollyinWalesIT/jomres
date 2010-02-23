<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Check-in de Hoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Check-out de Hoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Pedidos de reserva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Pedidos Diversos');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Reserva rápida');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Reservas Válidas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Mostar detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Linguagens');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICK______DESC','Deixado em Branco');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Configuraçăo Geral');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Configurar Descontos');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Configuraçőes de UH/MH');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Configuraçăo de MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Configuraçăo de Tarifário');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Voltar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Voltar para a lista de reservas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Configuraçăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Mostrar um exemplo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Sim');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Năo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Novo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nova UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Novo item na UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Novo TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Novo MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Novo item no MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Novo Hóspede');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Salvar');


// Ver reservas
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Check-In');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Check-Out');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Branco');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Configurar Utilizadores do Sistema');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Usuário');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Autorizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','MH (Meio de Hospadegem) Default');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Altere o valor');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Nível de Acesso');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Usuário Alterado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Alterar o MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Alterar nível de acesso');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepçăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Gerente do MH');

// Edite reservas
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Todas as reservas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Novas reservas (năo pagos)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editar reserva: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','In/Out');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Hóspede');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Pagamento');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Sobrenome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','O Hóspede chega Hoje. Se já chegou, clique aqui');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Anotaçőes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Solicitaçőes Especiais');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Atençăo! Algumas solicitaçőes especiais podem ser cobradas.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Adultos');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Crianças');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Cancelar a reserva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Website userid');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Número');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Endereço');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Cidade');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','CEP');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','DDD+Telefone');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','DDD+Celular');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','DDD+Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Preferęncias');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Número do Cartăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Usuário Cancelado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','MH Cancelado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Selcione o motivo do cancelamento');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dias até o Ckeck-In');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Taxas de cancelamento</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Năo é possível cancelar esta reserva pois o Hóspede já pagou');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Depósito EFETUADO, nada mais é devido');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Depósito NĂO efetuado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Depósito efetuado, 50% do contrato total devido');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Depósito NĂO efetuado, 50% do contrato total devido');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Depósito efetuado, 100% do contrato total pago');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Depósito NĂO efetuado, 100% do contrato total devido');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Lembrar pagamento devido');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Depósito NĂO efetuado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirmar o Cancelamento');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Reserva CANCELADA');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dias até a chegada');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Reserva do TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Retirar do sistema');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Reserva de Balcăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Nome do Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Número do Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Andar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Deficientes?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max de pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','TIPO de Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Descriçăo do TIPO de Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Listas de detalhes do Quarto');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','Real;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','R$');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Regras das Tarifas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Depósito Efetuado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Entre com o depósito');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Depósito ref do Depósito');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','ref do Pagamento');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Número do reserva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Depósito');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Depósito Salvo');

// *********************EDITAR LINGUAGEM*****************
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Atençăo...</FONT></h1><BR><B>É necessário alterar o "chmod" para 766 para que a alteraçăo deste arquivo delinguagem seja atualizada no servidor</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Reserva Rápida. Escolha o TIPO de Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Checkbox');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Adultos');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Crianças');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Cama preferida?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Entre AINDA com o número de noites da reserva, ou a data do Check-out');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Número de Noites');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Selecione o TIPO de Quarto, a data do Check-in e ainda o número de noites da reserva ou a data do Check-out. Finalmente, entre com o número de Adultos e Criançass no grupo.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Quartos Disponíveis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;'); //######check it on site########
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Número');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Andar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Deficientes?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max Pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','TIPO de Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Desculpe, mas năo dispomos de quartos para o número total de Hóspedes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Desculpe, năo temos vagas para este período. Por favor escolha outro período.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Selecione na lista');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Selecione este Hóspede');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Lista de Usuários');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ERRO: Erro na escolha das datas.<br>Por favor clique em VOLTAR e altere as datas.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ERRO: É necessário ao menos 1 Hóspede para a reserva.<br>Por favor clique em VOLTAR e altere os dados.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ERRO: O poríodo selecionado está incorreto.<br>Por favor clique em VOLTAR e altere as datas.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">ERRO: Por favor selecione um quarto.<br>Por favor clique em VOLTAR e altere os dados.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">ERRO: A data escolhida é ANTERIOR a data de hoje.<br>Por favor clique em VOLTAR e altere as datas.</font>');

// ****************************FORMULÁRIO DOS HÓSPEDES*******************************

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Confirme');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edite Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Sobrenome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Endereço');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Rua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Cidade');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','CEP');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','DDD+Tel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','DDD+Celular');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','DDD+Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Número do Registro');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Cartăo de Crédito.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Data da expediçăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Expira');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Expedido em:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Nome no Cartăo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Selecione um Quarto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Selecione');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Desconto');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min dias');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Max dias');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Pernoites');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Diária');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Número de Hóspedes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Depósito');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Ao menos 1 dos dias cai em um feriado.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Desculpe, năo foram encontradas as tarifas solicitadas. Por favor tente novamente alterando o número de dias.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Lista de configuraçăo de UH & MH');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','UH ítens');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','UH TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','MH detalhes');


/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Número');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Andar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Deficientes?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max Pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','UH adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','UH atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Clique no link para editar a UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edite o Item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','UH detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Clique no link para editar os detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','UH detalhe adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','UH detalhe atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Editar o detalhe');


/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','UH TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','UH TIPO-abreviado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','UH TIPO-detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Clique na UH para editar seu detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','UH TIPO adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','UH TIPO atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edite o detalhe');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Endereço');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Cidade');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Estado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','País');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','CEP');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','DDD+Tel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','DDD+Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Clique no link do ID do MH para editar os detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','MH adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','MH atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Edite o item');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','MH detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','MH detalhes - abreviado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','MH descriçăo completa dos detalhes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Clique no detalhe do MH para editar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','MH detalhe adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','MH detalhe atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Edite o item');


/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarifas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Nome da tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Descriçăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','início');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','fim');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Tarifa por noite');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min dias');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max dias');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max pessoas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','UH TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorar PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Vale Feriados?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Vale finais de semana?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Clique para editar a tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa adicionada');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa atualizada');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edite o item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Clonar o item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Apagar a Tarifa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa apagada');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edite a tarifa');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Feriados');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','A data final do Feriado deverá ser a última noite para a cobrança das tarifas do Feriado.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Edite Feriado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Descriçăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Início');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Fim');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Novo Feriado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Clique no link do texto para editar os Feriados');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Feriado adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Feriado atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Edite item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Clonar o item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Apagar feriado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Feriado apagado');



/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Reserva salva');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Por favor assegure-se de que o formulário foi preenchido corretamente.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Somente usuários registrados poderăo fazer reservas.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Por favor registre-se');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Reservas Offline');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Reserve UH|');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Meus detalhes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Minhas reservas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Administrar');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Reserve');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Check-in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Check-out');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Reservas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Reservas pagas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Hóspede admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','MH admin|');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Tarifas|');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Descontos');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Feriados');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Por favor selecione o TIPO de quarto, a data da chegada e o número de noites. Finalmente, entre com o número total de adultos e crianças do grupo.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Por favor entre com suas informaçőes. Isto será feito somente esta vez, nas próximas visitas o sistema lembrará de vocę.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Por favor acomode-se.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Por favor entre seus detalhes. Note que TODOS OS CAMPOS săo necessários, menos o do seu celular.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Checar diponibilidade');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Quero este quarto');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Selecione o Hóspede');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirme seus detalhes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Escolha sua tarifa');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Selecione o TIPO de quarto');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Nome');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Sobrenome');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Número.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','End');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Cidade');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','CEP');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','DDD+Telefone');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','DDD+Celular');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','DDD+Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','ATENÇĂO: Nem todos os quartos atendem a sua solicitaçăo. Por Favor verifique novamente');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Entre com suas informaçőes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Confirme suas informaçőes');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Obrigado por utilizar o nosso sistema. Esperamos que aproveite sua estadia.<br><br> <b>Por favor note esta é APENAS uma SOLICITAÇĂO DE RESERVA, e que SOMENTE ESTARÁ CONFIMADA quando vocę receber nosso email de confirmaçăo.<BR>Após receber o email, efetue o pagamento para que sua RESERVA se transforme em BLOQUEIO.<BR>Obrigado.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Reserva feita para: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Reserva feita para o quarto: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Adultos: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Crianças: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Check-in: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Check-out: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Número de noites: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Hóspede ID: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nome: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','DDD+Telefone: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','DDD+Celular: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarifa: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','O valor Total é de: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Valor do Depósito é de: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Desculpe, precisamos vocę atualize suas informaçőes antes que possamos processar a sua reserva. Por favor clique no link "Meus Detalhes" e complete as informaçőes do seu endereço. Obrigado.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Obrigado, seus detalhes foram atualizados.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Olá. Antes de reservar um quarto, vocę precisa atualizar suas informaçőes. Clique no link: "Meus Detalhes".');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Olá ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Check-in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Selecione o Hóspede ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Hóspede com reserva em ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Năo há Hóspedes para Check-in hoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Check-out');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Check-out do Hóspede ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Confirme Hóspede reservar out');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Năo há Hóspedes para Check-out hoje');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Hóspedes em débito hoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Hóspedes saíndo hoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Quartos ocupados');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Novas reservas');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Ver ocupaçăo a partir da data:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Informaçőes extras');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarifas & Moedas');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Descontos');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Política de Cancelamento. NĂO IMPLEMENTADA');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Enviar Arquivos');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Configuraçăo Atual');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Explicaçőes');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Reservas Off Line?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Tornar reservas offline se vocę năo quiser aceitar reservas online.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Desconto disponível?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','O sistema de GRUPOS é para todos que desejarem oferecer descontos em funçăo do número de Hóspedes. Năo é recomendável sua utilizaçăo se vocę năo for cobrar com base em (PPPN)por-pessoa-por-noite.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Faixa 1 apartir de');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Faixa 2 apartir de');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Faixa 3 apartir de');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Faixa 4 apartir de');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Faixa 1, % do desconto');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Faixa 2, % do desconto');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Faixa 3, % do desconto');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Faixa 4, % do desconto');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Tarifa para Single (Desacompanhados)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Certifique-se de marcar SIM se vocę quiser cobrar a Tarifa de Single para Hóspedes desacompanhados');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Cobrar Tarifa de Single para Hóspedes desacompanhados');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Cama extra.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Marque SIM se vocę quiser cobrar por cama extra');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','preço');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Depósito inicíal é percentual?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','O depósito inicial é uma PORCENTAGEM  do total da reserva? SE NĂO FOR, O DEPÓSITO SERÁ O VALOR INTEGRAL');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Valor ŕ ser depositado');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Selecione SIM se vocę prefere cobrar por-pessoa-por-noite (PPPN). Se NĂO, os custos serăo calculados por-quarto-por-noite');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Desistęncias podem ser reembolsadas?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Marque SIM se vocę quiser transformar o reembolso da reserva cancelada como CRÉDITO para uma FUTURA reserva do seu Hóspede. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Arquivo existente');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','TIPOs de Arquivos');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Especifique aqui, que TIPO de arquivos săo permitidos para uploads. Use virgula para separar os nomes que devem ser em letra minúsculas e SEM ESPAÇOS. Exemplo: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Tamanho do Arquivo');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Tamanho Máx. do arquivo de imagem em kilobyte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Clique para que a semana de utilizaçăo da UH comece sempre na data de hoje');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Clique na UH já reservado para ver todos os detalhes da reserva');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','ou, selecione uma data específica');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Reservado');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Livre');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>As UH com o FUNDO AZUL săo os que estăo reservados, entretanto<br> se uma UH está com o TEXTO EM VERMELHO, significa que o depósito AINDA NĂO FOI EFETUADO.<br> Onde uma UH possui UMA ESTRELA em frente a "Reservado", significa que o Hóspede chegará naquele dia.<br> Se uma UH está com o TEXTO AMARELO, significa que o Hóspede já está ocupando a unidade.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Mensagem de COFIRMAÇĂO');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Olá ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Custo por-noite-por quarto ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detalhes da reserva');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Obrigado por utilizar o site ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Abaixo segue um resumo dos detalhes da sua reserva. Por favor verifique se estăo corretos, e caso contrário entre em contato conosco.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','O quarto estará diponível até a sua chegada, e o Check-in é a partir das 14:00h.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Estamos aguardando a sua chegada aqui ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Desejamos uma boa estadia.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Gostaríamos de sua atençăo ŕ um pequeno detalhe.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Estamos lembrando que sua reserva é um contrato com obrigaçőes legais, entăo se por qualquer razăo vocę precisar CANCELAR ou DIMINUIR o período da sua reserva, ainda assim vocę é responsável pelo pagamento do total.'); //###########Check the laws
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','No allowance can be made for meals not taken or for quartos not occupied for o full poriod do o boking. With thé in mind nós strongly recommfim that vocę use a holiday insurance facility.'); //#############Check the laws
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Custos do Cancelamentos</i> TODO CANCELAMENTO deverá ser confirmado POR ESCRITO. Os custos para cancelamento săo:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dias ou mais');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Somente Depósito.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','de 15 ŕ 30 dias');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% do total contrato.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Data do Check-in prox 14 dias');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% do total do contrato.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','VAT@ 17.5% é incluido em todas as tarifas. Qualquer aumento ou alteraçăo será cobrada.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Imprimir a confirmaçăo');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Impressăo da Solicitaçăo');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Olá ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Custo por-noite-por-quarto ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Número do noites: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contrato acordado inicialmente: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Custo por noite: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total Geral');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Detalhes da Solicitaçăo');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Obrigado por utilizar');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Esperamos ver vocę novamente.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','VAT@ 17.5% é incluido em todas as tarifas. Qualquer acréscimo ou alteraçăo será cobrada.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Imprimir Solicitaçăo');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Adicione um serviço para cobrança');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Descriçăo do Serviço');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Valor do Serviço');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Adicione para cobrança');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Outros itens cobrados');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Outros itens cobrados, valor total: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item adicionado para cobrança');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Hotel năo localizado</h1><br>. Contacte o administrador do site.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Selecione o arquivo de imagem para anexar');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Salve as modificaçőes ANTES de Enviar imagem');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Enviada');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Enviar arquivo');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Seu arquivo pode ser do TIPO - tamanho max.');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Enviar um novo arquivo');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Vocę só tem permisăo para eenviar arquivos do TIPO:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Por favor selecione um arquivo para enviar');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Por favor, o nome do arquivo deve conter apenas caracteres alfanuméricos e também năo deve conter espaços.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','O tamanho arquivo excedeu o maximo permitido.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Um arquivo com o mesmo nome já existe. Por favor renomeie antes de enviar novamente.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Seu arquivo foi enviado.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Seu arquivo NĂO foi enviado.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Seu arquivo foi atualizado.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Optou em participar da Jomres network?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Se vocę optou em  participar da Jomres network, entăo seu estabelecimento constará da lista da jomres.net. Por favor note, que presume-se que seu estabelecimento exista. A Jomres.net năo pode se responsabilizar pela veracidade das informaçőes prestadas. Vocę deve assegurar da que as informaçőes prestadas săo corretas.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendar Arquivo de linguagem');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Escolha o arquivo de linguagem ŕ ser utilizado pelo Javascript Calendar. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Calendar Arquivo CSS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Escolha o arquivo CSS a ser utilizado pelo Javascript Calendar');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Checar os Feriados?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Se marcar SIM, vocę deverá configurar Tarifas/Taxas diferenciadas para Feriadoss e dias normais. Marcando NĂO, feeriados e normal usarăo a mesma tabela.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');

/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Marque como ON para ver os erros na verificaçăo dos dados.');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Apagar a imagem');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Arquivo Apagado');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Mostrar a data da saída');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Marque como SIM  se vocę quiser mostrar a data da saída. É IMPORTANTE  lembrar que alguns browsers năo se adaptam ao javascript Calendar. Sugerimos manter esta caixa DESMARCADA');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Escolha o Hotel');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Qualquer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Quarto');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Hotel');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Mostra sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','deixe marcado se quiser ver o SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Mostrar resultados em sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Deixe marcado se quiser ver o resultado da veriável var_dumped do SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Escolha o seu template');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','CSS top buttons id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Table headers css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Templates');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Delete');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Operaçăo negada, existem reservas para esta UH. Cancele as reservas e tente novamente.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Removida a UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Remover as especificaçőes da UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Operaçăo negada, năo é possível remover as especificaçőes do UH, existem outras UH compartilhando as mesmas especificaçőes. Remova as especificaçőes primeiro, e tente novamente.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Especificaçőes da UH foram apagadas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Apagar especificaçőes do MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Operaçăo negada, năo é possível remover as especificaçőes do MH, Remova as especificaçőes primeiro, e tente novamente.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Especificaçőes do MH foram apagadas');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Apagar o TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Operaçăo negada, existem outras UH compartilhando as informaçőes sobre o TIPO de UH. Mude o TIPO de UH desta unidade e tente novamente.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Operaçăo negada, năo é possível remover o TIPO de UH, pois está relacionada ŕ uma TARIFA envolvendo outras UH do mesmo TIPO. Mude o TIPO de TARIFA desta unidade e tente novamente.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','O TIPO de UH foi apagado');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Apagar MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Operaçăo negada, năo é possível remover o MH, ainda existem informaçőes sobre ele no banco de dados : ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','O MH foi apagado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Vocę năo tem acesso a esta operaçăo.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Escolha o MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','A que MH suas UH pertencem?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Selecione o MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Vocę deve selecionar o MH primeiro');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Comprimento em pixels das imagens pequenas no álbum de imagens');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Comprimento em pixels das imagens Médias no álbum de imagens');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Comprimento em pixels das imagens GRANDES no álbum de imagens');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Clique para enviar o mapa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Especificaçőes do MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Horários de Check-in');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Atividades');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Como Chegar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aeroportos');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Translados');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Políticas e Normas');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Sua senha na Jomres.net');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Quando vocę estiver pronto para publicar seu website, visite <a href="http://www.jomres.net" target="_blank">Jomres.net</a> para obter sua senha. Com ela será possível registra seu MH na Jomres Network, com isso vocę estará AUMENTANDO sua visibilidade ao seu negócio.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Estabelecimentos Cadastrados');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Endereços');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Reservas online para visitantes');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Marque como SIM, para permitir reservas online de visitantes.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Reservas somente para períodos fixos');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Marque como SIM, as reservas serăo feitas para períodos fixos como por exemplo: PACOTES. Se marcar como NĂO, entăo confira se a  "Data de chegada" năo está marcada como SIM (a menos que vocę queira forçar a chegada em certos dias) do contrário vocę năo terá muitas possibilidades de escolha no Calendário.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Período para reservas: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Reservas de Quartos');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Borda da tabela de reservas');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Mudar a cor da borda');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Cor do fundo/background da tabela de reservas');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Mudar a cor de fundo da tabela de reservas');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Comprimento da tabela de reservas');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Período Maximo, ex: 3x7 = 21 dias');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Número do Hóspede?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Marque como SIM para mostrar o campo número do Hóspede no formulário de reserva.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Seu MH possui APENAS um ÚNICO quarto ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Exemplo: Se vocę está arrendando todo o seu estabelecimento, ao  invés de SOMENTE os quartos, neste caso entăo, vocę deve certificar-se de ter disponibilizado APENAS UM QUARTO para este estabelecimento.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Máximo de Adultos');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Indique o número máximo de adultos no formulário de reservas');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Máximo de Crianças');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Indique o número máximo de adultos no formulário de reservas. Ex: Se seu estabelecimento NĂO ACEITA CRIANÇAS MARQUE COM O NÚMERO ZERO ESTE CAMPO.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Prosseguir');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Revisar a Reserva');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirmar a Reserva');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Descontos');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>ATENÇĂO!!...</FONT></h1><BR><B>Vocę precisa alterar o chmod no arquivo site_config.php para 777 para poder gravar suas configuraçőes</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Segunda');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Terça');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Quarta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Quinta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Sexta');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sábado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Domingo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Seg');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Qua');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Qui');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Sex');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sab');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Dom');
//==============================================================Configuraçăodo Calendário
/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Para checar disponibilidade ligue.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Nome da Fonte para todo texto');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Tamanho da Fonte para todo texto');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Altura da célula');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Comprimento da célula');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Cor da fonte para a data de hoje');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Cor da fonte para os demais dias do męs ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Cor da fonte para os dias dos outros meses');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cor da célula para os demais dias onde haja disponibilidade');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cor da célula para os dias dos outros meses');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cor da célula para os dias já ocupados');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cor da célula para reservas aguardando o depósito');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cor da célula para dias no passado');
//=========================================================================Status da Reserva
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Colour key:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Ocupado/Indisponível');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Disponível');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Reservado');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Check-in agendado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Somente para sites que ofereçam períodos FIXOS para reservas. Escolha o dia em que as chegadas devem acontecer.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Dia FIXO para a chegada');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Peródo da Estadia (em dias)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Mostrar a disponibilidade no calendário?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Marque como SIM para mostrar a disponibilidade no calendário');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Confirme sua seleçăo?');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Disponível?');
//====================================================================Lista de tarefas para o Hóspede
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Coisas que vocę precisa precisa fazer: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Revisar as datas escolhidas ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Revisar o número da reserva ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Fornecer seus detalhes pessoais');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Escolher um quarto');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Revisar a escolha dos quartos');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Por fovor revise sua solicitaçăo, e confirme a sua reserva');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Para acessar o formulário de reserva escolha um período.');
//=================================================================================Reservas BLACK
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Reservas admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','SEM reservas admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nova reserva admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Reserva admin da UH:');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Delete Hóspede');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Hóspede deleted');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Impossível deletar o Hóspede pois existe uma ou mais reservas para ele. Cancele as reservas e tente novamente.');
//===============================================================================Apresentaçăo do Calendário
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Painel de contrôle mostra apenas as semanas de maneira LINEAR');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Marque como SIM  se vocę optar por visualizar as SEMANAS no formato LINEAR, ao invés do calendário completo.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','tarifa atual da UH: ');
//=================================================================================CRM = email para os usuários
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email inválido ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Este é um email de');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Olá');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Obrigado por fazer sua reserva conosco');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','A seguir o resumo de sua Reserva:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Qualquer dúvida quanto a reserva ou serviço, por favor entre em contato conosco.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nosso telefone é');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Ou mande um email para');
//=============================================================================Fumantes + Datas no Calendário
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fumante');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Indiferente');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Formato do calendário');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Alteraçăo do formato das datas no calendário');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Formato das datas');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Permite ao usuário alterar o formato de entrada das datas no Calendário.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Pacotes permitem pequenos intervalos');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Tamanho do intervalo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publicado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Configuraçőes');
//====================================================================Formas de Pagamento PAYPAL
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Usar paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Usar o Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Requer uma conta no Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Seu  email no Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Note: Para usar sua conta Paypal vocę deve configura-la e habilitar o Autoreturn. (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=reservaraquarto&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','ERRO, o Paypal email năo foi configurado');

//============================================================================Acompanhamento
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Rastrear|');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Năo rastrear');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Dia');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Hora');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Usuário (username)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operaçăo');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Direitos do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Ver detalhes');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Qualquer</b>');
//===================================================================Acompanhamento das Reservas
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrar por data');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtrar por Usuário');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtrar por operaçăo');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Chegada pendente');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Chega hoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Instalado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Partidas hoje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Check-out com dívida');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Ainda năo chegou');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filtrar');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Usuário desconhecido');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','UH Criado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','UH Atualizado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','UH Apagado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Inserir um novo detalhe a uma UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Atualizar um novo detalhe a uma UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Apagar um novo detalhe da UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Inserido um novo TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Atualizado um novo TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Apagado o novo TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','MH criado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','MH atualizado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','MH apagado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Criado o novo detalhe do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Atualizado o novo detalhe do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Apagado o novo detalhe do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Editado o novo detalhe do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','MH Publicado.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarifa criada');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarifa atualizada');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarifa apagada');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Feriado criado.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Feriado  atualizado.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Feriado apagado.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Taxa de Serv. Adicionada.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Canceladas');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Check-in');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Check-out');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Detalhes Atualizados');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Depósito Confirmado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Hóspede Criado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Hóspede Atualizado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Hóspede Apagada');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Inserida Nova imagem do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Atualizada uma imagem diferente do MH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Imagem apagada');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Inserida Nova imagem da UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Atualizada uma imagem diferente da UH');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Inserida um novo recurso de imagem');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Atualizada um recurso diferente de imagem');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Uma UH foi reservada');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Extra Criado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Extra Atualizado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Extra Apagado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Extra Publicado.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Reserva admin.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Apagada a Reserva admin.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Edite extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Descriçăo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Nome');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Preço');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Novo extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Clique em editar o texto para editar o extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Extra adicionado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra atualizado');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edite o item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Clonar o item');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Apagar extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Extra apagado');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Admin Extras|');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Mostrar extras na hora da reserva?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Marque como SIM qualquer dos extras que vocę deseje oferecer ao Hóspede');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Extras opcionais.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Selecione o MH');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Inverter a seleçăo/marcar todos');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Reserva admin começa em');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Serviço resumes date'); //#########
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Res para Manutençăo|');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Alguns quartos marcados já estăo reservados. Se vocę fez a Reserva admin dos UH vocę precisa cancelar as reservas primeiro.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','ERRO, uma ou mais UH selecionadas năo está livre.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','UH incluidos na Reserva admin');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Apagar Reserva admin');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Visualizar a Reserva admin');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nenhuma Reserva admin encontrada');
//=========================================================================Classificaçăo
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Número de Estrelas');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Mostrar a opçăo Fumante?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Marque SIM para mostrar a opçăo Fumante.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Confirmar');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Seu pagamento no PayPal consta como Pendente. uma vez confirmado o pagamento a reserva estará Confirmada.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Reserva Cancelada');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Buscar por:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Busca ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Mostrar Paypal debugging?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Mostrar  nomes das UH?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Marque como SIM para mostrar os nomes das UH');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Mostrar TIPOS de UH?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Marque como SIM para mostrar o TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Opçăo Fumante marcada');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','CUIDADO!: Se a opçăo marcada for SIM e todas as suas UH forem NĂO FUMANTES, entăo NENHUM quarto será mostrado ao usuário na página da reserva.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Simbolo da Moeda');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Por favor note que vocę deverá usar o código HTML para o simbolo adotado. Se houver dúvida visite: <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Código da Moeda');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Ex: BRL para o Real. Vocę precisará dessa informaçăo se utilizar o PayPal para o pagamento. Para uma lista completa de códigos de moedas visite: <a href="http://www.xe.com/éo4217.htm">XE.com</a>');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Clique para obter mais informaçőes');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>CUIDADO...VOCĘ ESTÁ LOGADO COMO ADMINISTRADOR com TODOS OS PRIVILÉGIOS SOBRE TODOS os MH inscritos. Isto pode, e vai causar PROBLEMAS quando vocę usar certas funçőes do sistema.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limitar prolongamento de reservas?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Marque como SIM para limitar o prolongamento de reservas (use o próximo campo para delimitar o número em dias). Se vocę marcar como SIM o usuário tentar prolongar por mais X dias além do reservado, entăo a chegada dele será remarcada com a data atual no ato do solicitaçăo de prolongamento');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Número de dias para prolongamento de reservas limitado em:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>IMPORTANTE: NĂO É RECOMENDADO que vocę configure AMBAS as opçőes ŕ seguir como SIM, vocę usar apenas uma das duas opçőes de cálculo disponíveis. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Taxa');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Taxa da UH');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Desenhado para o mercado americano. Este é o total de taxas que serăo cobradas do Hóspede. Vocę pode cobrar numa combinaçăo e/ou fixar o valor em porcentagem. Note que essas taxas serăo aplicadas somente no custo da UH.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Total das taxas fixas');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Taxas em porcentagem');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Taxa');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Para todos os que năo săo cobradas taxas. ex: taxa de serviço. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Taxa porcentagem');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Arquivar todos os dados');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Dados arquivados');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Dados arquivados pelo auditor');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Nossas Tarifas');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Nome da Tarifa');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Descriçăo de Tarifa');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','TIPO de UH');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Válido a partir de');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Válido até');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','por-pessoa-por-noite');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','por-noite');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Năo inclui Fim de Semana');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Min de dias');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Max de dias');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min pessoas');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max pessoas');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Visualizar');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Editável?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Texto atual');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Novo texto');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Atualizar o novo texto.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Edite Linguagem');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Mostrar últimos 200 registros');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Existem mais de 200 registros para serem auditados, entretanto năo é possível mostrar todos. Se vocę desejar vęr o SQL, vocę vai precisar fazer uma análise direta na tabela. Se vocę quiser checar o SQL regularmente, é recomendável arquivá-lo regularmente');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','MH type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Listar os TIPOS de MH');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Editar os TIPOS de MH');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','MH TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','MH descriçăo do TIPO');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','TIPO de MH salvo');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Năo é possível apagar o TIPO de um MH. O TIPO de MH está atribuido ŕ mais de um MH , Por favor altere antes de tentar apagar');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','TIPO de MH Apagado');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>ERRO, este MH năo possui UH.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>ERRO, este MH năo possui tarifário.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>ERRO, este MH năo possui TIPO de UH.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Alterar MH');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Lembra pagamento');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>A transaçăo PayPal foi aceita, e um recibo foi enviado para o seu email. Visite: www.paypal.com faça o login e veja os detalhes. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Nenhum serviço extra foi adicionado ŕ cobrança');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Depósito');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Total Geral');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Total cobrado no ato da reserva');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Use esta opçăo para decidir o que deverá ser cobrado no ato de reserva. Escolha entre deposito e/ou total.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Calendário mostra meses');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Havendo vagas, quantos meses o Calendário deve mostrar?');

/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Assinado por ');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Cancelar');

// V1.4

/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Cancelar');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Por favor escolha as UH que vocę deseja retirar do serviço, e as datas referentes. <br>If a room does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> When you have selected the appropriate dates, click the blue "apply" button to re-check room availability. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Parece que o sistema desconectou por inatividade</b> Por favor faça o login novamente.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Razăo');

/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Utilizar as formas de pagamento?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Marque como SIM se vocę quiser utilizar metodos de pagamento online. <b>Nota:</b>This does not switch off the deposit calculation showed during the booking process. Para DESABILIATAR vocę pode editar os gabaritos que mostram as UH e remover os elementos referentes que aos depositos.'); //#####################

/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Escolha a forma de pagamento.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','pagamento abilitado?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modificadas as configuraçőes do plugin');
/**
* @ignore
*/
define('_JOMRES_COM_A_USESSL','Usar SSL nos formulários?');
/**
* @ignore
*/
define('_JOMRES_COM_A_USESSL_DESC','');

/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','External link');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Encryptografado');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Usar mCrypt para encryptografia?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','marque como SIM SOMENTE VOCĘ TIVER mCrypt complilado no PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Chave Encryptografada');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Modo de encryptografia');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Algoritimo de encryptografia');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Cartăo de crédito visualizado');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Cartăo de crédito atualizado');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Editar Cartăo de crédito');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Editar tamanho do icone');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','formato quadrado em pixels.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch property image upload');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Imagens atualmente no diretório');

/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Mostrar link para o slideshow?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Mostrar slideshow em linha?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Marque como SIM se vocę quiser mostrar o slideshow em linha com os detalhes do MH.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Slideshow largura total'); //#####################
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Slideshow thumbnail target width'); //##################
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Fotos do estabelecimento');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','Desculpe, năo existem fotos para este estabelecimento');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Tamanho para a janela Popup');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Altura para a janela Popup');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','posiçăo da imagem');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Altere somente se houver necessidade das imagens do JomRes ficarem em outra pasta. O diretório default é \'/images/stories/jomres/\' em relaçăo a raiz do Joomla.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Mostrar o link para o tarafário?');

/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Permitir janelas Popups?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Se marcado como NĂO, os links do Popup, aparecerăo normalmente na página. EXPERIMENTAL! '); //###############

/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload de imagens|');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Use este formulário para fazer o upload de várias imagens ao mesmo tempo.<br/><b>NOTE QUE</b> imagens como mesmo nome serăo sobrescritas. NOTE TAMBÉM que o formulário năo faz o upload de imagens especificas, para isso, vocę precisará fazer o upload a partir do formulário que se encontra na seçăo adimnistrativa do MH.<br/><b>Note</b> Images uploaded here will be written to the /images/stories/jomres/*property_uid* folder. If this folder does not exist, it will be created, unless of course an alternative directory has been specified in the configuration.');

/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Misc');
/**
* @ignore
*/
define('_JOMRES_A','Configuraçőes do site');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Usar especificaçőes globais do MH');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Marque como SIM se vocę quiser forçar que TODOS os MH usem apenas as especificaçőes definidas pelo webmaster.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','para atribuir uma imagem para este item, vocę deve fazer primeiro o upload da imagem para a pasta /images/stories/jomres/pfeatures/ . ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icone');

/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Selecione o plugin de busca que deseja utilizar.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Desculpe, nenhum resultado encontrado. Por favor tente novamente .</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Confirma?');



// Translate from here



/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Book a room');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Book this property');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Security number');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Show tariffs inline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Address');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailed information');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Click for Rooms and availability');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Show tariffs information');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Show Address information below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Show detailed property info below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Show rooms and availability below this link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Show tariff information below this link');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Flat rate tariffs');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Averages');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Select the tariffs model you want to use');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"You have two choices of tariff calculation methods. The first, the 'flat rate' method allows you to offer a number of different tariffs to the guest and the rate for the stay is the same for the entire time. This is useful if you want to offer several different tariffs for the same date, eg Bed and Breakfast tariff and B&B and Evening meal tariff. Choose the 'averages' tariff if you want to adjust your prices dependant on the date in question. Jomres will find all of the tariffs for each day in the booking, add them together then return the average rate across the period");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Use Jomres portal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Set this to Yes if Jomres is going to be used in conjunction with the Jomres portal software');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Show departure date input?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the depareture date in bookings will always be set to the day after the arrival date.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Description limit');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"This limits the number of characters shown in the property listing when drawing from the property description.");

// v1.4g
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Daily rate multiplier');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"This allows the user to append a multiplier to the daily rate that is returned to booking form during the booking process (useful if you want to show a properties rate by the week for example)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Slideshow popup width');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Slideshow popup height');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Update');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Click the update button to check availability');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Used date() format style?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Click to publish');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Click to unpublish');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Please complete the following fields: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Thank you.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Input error border colour');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input error background colour');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Default country in booking form');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Use site help?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Set this to Yes if you want Jomres to show the site help text above the search bar.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Edit your sitehelp booking text here.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Items marked with a red star are required.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Users can register their properties?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Set this to Yes if you want users to be able to register their own properties without admin intervention.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Please provide the country and region of your property.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Please complete your property details.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Items marked with a red star are required.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Created property');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, you can't create a property on this system. You must be a logged in, registered user, and you must not have already created a property.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Created property: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','For user: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Chargeable daily?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Per day');

// v1.4i

/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Show calendar from beginning of year?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','The availability calendar shows from the beginning of the current year.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Show detailed room information?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','If you set this to No, then Jomres will not attempt to show all the during bookings, instead it will simply advise that availability exists.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Number of rooms available');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Please select the number of rooms you require, of the type you require.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Number required');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Back to property details');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Room types');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Use Jomres metadata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','If you set this to Yes, then Jomres will use text that is repeated from property description & Property Listings pages to generate Metadata. Seperate words with a space.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stop words');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"These are stop words, IE words that you <i>don't</i> want to appear in the meta data.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Other elements to remove');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','The are elements that should be stripped from the meta data. An example could be less than symbols, quotatin marks etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Frequency');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','The number of times a word must be repeated before it can be included in the meta data.');


// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Use this form to place your booking. Hover the mouse cursor over the "i" images for more information about the column. Modify your booking particulars like arrival and departure dates & guest numbers, then select the room(s) you require from the list of those available. Click any available rooms to add them to your booking. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Use this form to place your booking. Hover the mouse cursor over the "i" images for more information about the column. Modify your booking particulars like arrival and departure dates & guest numbers. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Booking particulars');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Select the details of your booking requirements');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Availability ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Select the rooms that you require');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Look here to see if the property is available at this time.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Optional extras');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Select any optional extras you want to include in the booking');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Per night');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Your address');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Please enter your details. Note that all fields are required except your mobile number');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Available rooms');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Selected rooms');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>The earliest possible arrival date is: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Per night:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extras:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Tax:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Discount:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Grand Total:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Guests');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Click now to add this room to your selection');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Click now to remove this room from your selection');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Guest types');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','The type of customer, eg Children age 5-10, or Student ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Notes');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Notes that you may want to make regarding this customer type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','The maximum number of this customer type that can be selected in the booking form');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Is percentage');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','The figure calculated is a percentage of the Base figure calculated for the room. If this is set to no then the figure you specify is simply added or subtracted from the base room value.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Add variance?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','The figure calculated is added to or removed from the Base figure calculated for the room. Set this to No if you want this to be a discount from the base figure. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Variance');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','The amount of the variance');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modified customer type order');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Published customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Deleted customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Created customer type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Updated customer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Updated customer type');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Show link to rooms list in property details page?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Show <b>only</b> Availability calendar/Rooms list?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Switch this to Yes to disable display of the property header and details, so that only the rooms list/availability calendar is viewable in the property details section. Only really intended for users renting out single room properties (eg apartments, cottages etc).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style to use on site');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimum interval');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','The mimimum interval in the booking form between the arrival date and the departure date.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Booking form room list show room number');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Booking form room list show room name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Booking form room list show tariff title');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Booking form overlib show title');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Booking form overlib show description');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Booking form overlib show rate/tariff');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Booking form overlib show starts');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Booking form overlib show ends');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Booking form overlib show minimum days');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Booking form overlib show maximum days');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Booking form overlib show minimum people');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Booking form overlib show maximum people');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Booking form overlib show room number');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Booking form overlib show room name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Booking form overlib show room type');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Booking form overlib show room smoking');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Booking form overlib show room disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Booking form overlib show room floor');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Booking form overlib show room maximum people');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Booking form overlib show room features');

/**
* @ignore
*/
define('_JOMRES_ORDER','Order');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','You have configured Jomres as a single room property (eg an apartment, cottage, villa) however you have more than one room created. This may result in errors when using Jomres, so if you are going to continue using Jomres to manage a single room property you need to remove all but one of the rooms. Please modify your configuration so that Single Room Property = No, then go to Property Admin and remove all rooms except one, so that you only have one room against this property.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Required');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Days before arrival');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','The minimum number of days that must elapse, from "today", before the arrival date.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Per night:');

/**
* @ignore
*/
define('_JOMRES_DTV','Date type variations');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Day of week');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Date ranges');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Stay days');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Day of week');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','The day of the week');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Tariff class component selection');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','This dropdown allows you to choose a custom tariff class object that you may have created/downloaded and installed as a seperate component in Joomla. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Guest type default');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Default number of first the first Guest type. If you use guest types, then this is the default number that the first guest type in the booking form will be set to.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registered users only can book online?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, you must be a registered user to book online. Click here to register on this site. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font colour for links to current bookings');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend borders');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Which dashboard plugin to use');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','If you have installed any Jomres dashboard plugins you can choose an alternative to the default dashboard here.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Room is booked');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Black booking');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Round deposit up to nearest integer?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Charge deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariff charges stored as weekly figures?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','You have the option of storing tariff charges in either daily or weekly values. If storing them as weekly, you MUST set this option to Yes.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Rate per week');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fixed arrival dates recurr: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Smoking option invalid');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Arrival date incorrect');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Departure date incorrect');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','The booking is too short. There needs to be at least this many days between arrival and departure dates:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Your interval is');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Guesttype variant incorrect');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Select your guest numbers/type');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','You have too many in the party for the available tariffs');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','You have chosen more rooms than you have guests');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Too many guests for the available beds');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','You need to choose more rooms');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Select a room');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','First name is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Surname is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','House no/name is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Street is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Town is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postcode is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Country is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Landline number is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Cellphone number is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email address is required');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email address is not valid');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Unable to validate email domain');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','We have vacancies!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','No rooms selected yet');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Booking no.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok to book, message box background');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figure is percentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Set this to Yes if the single person calculation figure is a percentage. If no then it will be applied as a flat sum.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Available rooms/tariff limit');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use this input to limit the number of available rooms & tariffs that are listed in the booking form. Set it to zero if you do not want limiting enabled. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','No vacancies at this time!');
// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margin');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Profit margin, in percent.');
// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Show Jomres admin options as icons?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Set this to no if you want all the admin links shown as text.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Book it now: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tariff only valid if stay period includes a weekend day (friday or saturday) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any property information');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your property changes before uploading a property image');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prices from - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','All');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Features');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Description');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Availability');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Search');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','List all properties by property type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Default');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stars');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Property details - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>(Room selection will be reset)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Currency format');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript langauge format for a given property please edit that javascript calendar options within that property');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datetime');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','You are not logged in. If you log in/register with this site then you will be able to view your bookings information.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','List Bookings, no deposit paid');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Room type ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' to ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max people that property can accommodate');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Cancel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Title');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Comission rate');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','License number');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Your license number for the portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistics');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Period: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','January');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','February');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','March');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','May');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','June');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','July');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','August');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','September');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','October');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','November');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','December');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Room usage');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Property id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Add property');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is this a multiroom property?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is this a property like a hotel/bed and breakfast/penzion? If so, select Yes. If it is a single room property like a villa/cottage then choose No.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per room ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Hover over a thumbnail for a larger image");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Show slideshow above property details or below.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Top");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Bottom");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Both");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"The absolute path to the available logs. Remember, you will still need to enable logging by editing jomres.php manually. although error logging is automatic all other logs must be switched on by yourself.");
// Jomres 3.1.13
/**
* @ignore
*/
if (!defined('_PN_LT'))
	define('_PN_LT','&lt;');
/**
* @ignore
*/
if (!defined('_PN_RT'))
	define('_PN_RT','&gt;');
/**
* @ignore
*/
if (!defined('_PN_PAGE'))
	define('_PN_PAGE','Page');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','End');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Display #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
	
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Half booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Saving...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Please wait, your order is being processed...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logging');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Method');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"User");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Raised");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Due");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");

/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Other elements to remove');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','The are elements that should be stripped from the meta data. An example could be less than symbols, quotatin marks etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Frequency');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','The number of times a word must be repeated before it can be included in the meta data.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Límite de búsqueda aleatoria');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Mostrar enlace a Google Currency Conversion en el listado de tarifas?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Convertir precio a :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Permitir a los usuarios editar usando editores HTML?');

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','This is your dashboard, here you can see a general overview of your property\'s availability. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Use Jomres messaging');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<br/>
<br/>
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>

<br/>
");
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Set this to Yes to tell Jomres that it must use subscription package handling.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Create new user on booking');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres will pass your address to Google to generate the map position in the property details. If for whatever reason Google cannot find your address based on the information found above, you can ienter latitude and longitude in the lat/long fields instead. If you choose to enter the latitude and longitude, please note that I have found the Google earth lat and long information to be inaccurate so you are advised instead to visit <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">the itouchmap site</a> and use their information to determine your latitude and longitude. When entering your lat and long, the format should be something like '51.754564622' and '-4.997314810'.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Control Panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Your business details');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_TITLE','Real estate listing');

/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
/**
* @ignore
*/
define('_JOMRES_APIKEY_REMAKE','Make new API key');

/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');

/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
/**
* @ignore
*/
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
/**
* @ignore
*/
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/Editing_mode" target="_blank">the editing mode manual page</a> for more information on this subject.');

/**
* @ignore
*/
define('_JOMRES_SUPPORTKEY','Support key');
/**
* @ignore
*/
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download updates and plugins for Jomres.');
/**
* @ignore
*/
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');

