<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Translated to pt-PT by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 17Set2010 - www.marioliveira.net - Updated 21Jun2011 for ver 5.1
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
//#################################################################

jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Esta é a propriedade do cpanel frontpage.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Este é o gráfico de fita de propriedades que fornece uma visão geral das reservas em tempo real, disponibilidade e ocupação à primeira vista.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Este script permite ao usuário comparar várias propriedades entre si, até um máximo de 3 propriedades.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Uma lista separada por vírgulas de uids de propriedade, por exemplo. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Constrói o formulário do proprietário do contato.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Passe o uid da propriedade a ser contatada. Passe 0 (zero) para entrar em contato com o administrador do site.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Mostra a página de informações da empresa extraindo detalhes do campo Detalhes da empresa do gerente da propriedade em Configuração da propriedade. Os detalhes nesta guia normalmente são usados ​​para correspondência, permitindo que os gerentes tenham o endereço do hotel / apartamento e um endereço separado para fins comerciais. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Mostra o calendário da propriedade");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Passe a propriedade uid da propriedade a ser mostrada.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Meses para mostrar, o padrão é 24 se não for definido de outra forma. Não compatível com a variável Mostrar apenas o mês.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Defina como 1 se quiser apenas mostrar o mês atual sozinho. A configuração de months_to_show será ignorada se show_just_month for usado no mesmo código de acesso, então você não deve usar um ou outro código ao mesmo tempo.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Mostra apenas o texto de descrição da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Mostra apenas o texto de descrição da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Mostra apenas as características da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Mostra apenas o template do cabeçalho da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Mostra apenas os tipos de quartos da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Mostra apenas a imagem principal da Propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Mostra apenas o mapa da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Mostra o texto de mais informações da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Código QR com links para gmaps. Isso pode ser lido em um telefone usando um aplicativo de leitura de código QR que fornece instruções para a propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Mostra os comentários de uma propriedade.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Mostra o resumo da revisão de uma propriedade.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Mostra uma sala individual.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID da sala.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Mostra os quartos de uma propriedade.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Mostra as imagens do quarto de uma propriedade como uma apresentação de slides.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Mostra a apresentação de slides da propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Mostra as tarifas de propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Mostra o endereço comercial do site conforme inserido em Configuração do site> Detalhes da sua empresa.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Mostra os termos e condições do imóvel.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID da propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Mostra o calendário da IU da propriedade, que é um calendário diferente do calendário principal grande e é baseado na funcionalidade de calendário da IU do Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Passe a propriedade uid da propriedade a ser mostrada.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Defina como 1 para não mostrar a legenda.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Mostra os resultados da pesquisa, que podem ser aprimorados adicionando parâmetros de pesquisa. Não recomendamos que você use todos os parâmetros ao mesmo tempo, porque você acabará com critérios de pesquisa muito limitados. Em vez disso, você deve restringir-se a apenas um ou dois parâmetros, por exemplo, pesquisar por país e número de estrelas. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Pesquisa por país, usando o código ISO Alpha-2, por exemplo, GB ou DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Pesquisar por região. Como as regiões são salvas no banco de dados, você deve usar o ID da região. Visite Administrador> Jomres> Estrutura do Site> Listar regiões e passe o mouse no link Editar, lá você verá o número de ID da região . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'O nome completo da cidade que você deseja pesquisar.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Pesquise propriedades com recursos específicos. IDs de recursos podem ser encontrados em Administrador> Jomres> Estrutura do site> Recursos de propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Pesquise propriedades com certos tipos de quarto. Os ids de tipo de quarto podem ser encontrados em Administrador> Jomres> Estrutura do site> Tipos de quarto.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Pesquise propriedades de um tipo de propriedade específico. Os IDs de tipo de propriedade podem ser encontrados em Administrador> Jomres> Estrutura do site> Tipos de propriedade.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Pesquisar propriedades dentro de uma faixa de preço específica.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Pesquisar propriedades cujas tarifas permitem números de hóspedes de determinados valores, por exemplo festas de 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Pesquisar propriedades de estrelas N.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Pesquisa por data de chegada. Deve ser combinado com o parâmetro de data de partida.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Pesquisa por data de partida. Deve ser combinado com o parâmetro de data de chegada.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Pesquisar por categoria de propriedade.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Ver a página de um agente. Você pode passar OU um uid de propriedade ou o próprio id do agente, se souber.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Um uid de propriedade, irá mostrar o agente da propriedade.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "O id do banco de dados do gerenciador, se conhecido.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Exibe as propriedades populares, normalmente usadas em posições de módulo ou widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'O número máximo de propriedades que podem ser mostradas.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Mostrar apenas propriedades deste tipo de propriedade específico.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Definir como 1 para mostrar os módulos otimizados para um widget / posição vertical do módulo.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Exibe uma seleção aleatória de propriedades, normalmente usada em posições de módulo ou widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'O número máximo de propriedades que podem ser mostradas.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Mostrar apenas propriedades deste tipo de propriedade específico.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Definir como 1 para mostrar os módulos otimizados para um widget / posição vertical do módulo.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Exibe as propriedades visualizadas mais recentemente pelo convidado, normalmente usadas em posições de módulo ou widget.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'O número máximo de propriedades que podem ser mostradas.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Definir como 1 para mostrar os módulos otimizados para uma posição vertical de widget / módulo.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Exibe uma série de propriedades, normalmente usadas em posições de módulo ou widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Os ids de propriedade das propriedades que você deseja mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Definir como 1 para mostrar os módulos otimizados para uma posição vertical de widget / módulo.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Exibe a lista suspensa de seleção de moeda.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Ativar / desativar a saída do modelo alternativo. Esta saída deve ser usada nas barras de ferramentas do Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Exibe a página do carrinho de compras.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Exibe o módulo / widget do carrinho de compras.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Exibe o menu principal. Nota, se você estiver executando uma versão personalizada de mainmenu_wrapper_alternate.html em, por exemplo / templates / jr_leohtian / html / com_jomres_position, então você pode precisar <i> modificá-lo_menu_para substituir <i> / i> com MENU_LOCATION entre colchetes. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Esta página permite que você faça upload de imagens para sua propriedade e as coisas que você oferece. Tem um botão principal e um segundo botão que permite selecionar recursos específicos para fazer upload de imagens. Portanto, a propriedade Principal a imagem e a apresentação de slides mostrarão apenas um botão, mas se você tiver criado algum, por exemplo, Extras ou Salas Opcionais, então você verá um segundo botão onde você pode fazer upload de imagens para esses recursos específicos. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Esta página permite que você faça upload de imagens para sua propriedade e as coisas que você oferece. Tem um botão principal e um segundo botão que permite selecionar recursos específicos para fazer upload de imagens. Portanto, a propriedade Principal a imagem e a apresentação de slides mostrarão apenas um botão, mas se você tiver criado quaisquer Extras opcionais, verá um segundo botão onde poderá fazer upload de imagens para esses recursos específicos. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Primeiro escolha a (s) imagem (ns) que deseja enviar clicando em Adicionar imagem ou usando Arrastar e soltar. Eles aparecerão na coluna do lado direito. </li>
  <li> Acima desta área, use o botão \"Escolher o recurso \" para escolher para qual recurso deseja enviar as imagens. Você pode ter a opção de escolher um recurso específico abaixo. </li>
  <li> Depois de escolher um recurso, você pode clicar no botão Carregar imagem sob uma imagem para associá-la a esse recurso. Assim que a imagem for carregada, ela desaparecerá da coluna do site à direita e aparecerá à esquerda. </li>
  <li> Use o botão Lixeira ao lado das imagens existentes para remover imagens que você não deseja mais exibir. </li>
  <li> Você pode alterar a ordem em que os arquivos são mostrados na apresentação de slides, renomeando-os antes de enviá-los, já que são exibidos nas páginas em ordem alfabética. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ao lado do botão Recurso, você pode ver um botão Visualizar. Se você clicar nele, verá um pop-up que mostra como as imagens carregadas no momento ficarão em uma página. Isso ajuda a lhe dar um ideia de como as imagens serão exibidas para seus clientes. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Não há limite para o número de imagens que você pode enviar. As imagens são redimensionadas automaticamente quando são carregadas. Você só pode enviar arquivos JPG e PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealmente, qualquer imagem que você enviar seria pelo menos");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixels de largura, caso contrário, eles podem parecer confusos após terem sido carregados.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Qualquer imagem que você enviar não pode ser maior que");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "em tamanho.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Escolha o recurso para o qual deseja enviar imagens");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Recurso específico");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imagens já enviadas para este recurso");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'Formatação de texto');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Você pode inserir texto aqui usando a formatação Markdown simples. Você não precisa saber nenhum HTML, apenas use os botões para fazer com que as informações tenham a aparência desejada ou formate o texto de acordo com esses exemplos.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Ênfase');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'negrito');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'itálico');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'tachado');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Cabeçalhos");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Cabeçalho grande');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Cabeçalho médio");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Cabeçalho pequeno');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Cabeçalho minúsculo');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Listas");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Item de lista genérico');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Item da lista numerada');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Texto para exibir');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Cotações');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Esta é uma citação.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Pode abranger várias linhas!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Imagens');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabelas');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Coluna');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Mostrar imagens de propriedades como apresentação de slides na lista de propriedades?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Se definido como sim, uma apresentação de slides das imagens principais da propriedade será exibida. Se definido como não, então a primeira imagem principal da propriedade será exibida.');

jr_define ('EDIT_CMS_USER', 'Editar usuário CMS');

jr_define ('BOOKING_MADE_BY', 'Reserva feita por');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Amenidades');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Tipos de quartos');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL do formulário de reserva externo');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Aqui você pode definir um URL externo se quiser usar um site de terceiros para fazer reservas. Todos os botões de reserva do Jomres apontarão para este URL. Deixe este campo em branco se quiser usar o formulário de reserva do Jomres . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (descrição curta da sala / legenda)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Descrição da Sala');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Convidado na lista negra');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Se este hóspede estiver na lista negra, ele não poderá mais fazer reservas nesta propriedade.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Manipulador de sessão');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Salvar arquivos de sessão jomres em disco ou banco de dados. Recomendado: banco de dados');
jr_define ('_JOMRES_MAP_HEIGHT', "Altura do mapa (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Nível de zoom do mapa");
jr_define ('_JOMRES_MAP_MAPTYPE', "Tipo de mapa");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Gerenciador de substituição de modelo");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Pacotes de modelo são plug-ins que podem fornecer modelos de substituição para vários arquivos de modelo do núcleo Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Esta página lista todos os arquivos de modelo que podem ser substituídos por arquivos de modelo de um pacote de modelo. Se você deseja substituir um determinado arquivo de modelo, clique no botão de edição para esse arquivo, na próxima página você será capaz de escolher com qual versão você deseja substituir. Observe, essas substituições têm prioridade sobre o Jomres Core e qualquer Wordpress ou Joomla tema / modelo de substituição. Você pode desativar uma substituição excluindo-o na página Listar Substituições de Modelos. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nome do modelo");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Caminho atual");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Não sobrescrito");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Você pode escolher qual arquivo de modelo sobrescrever os arquivos de modelo do Core alterando o menu suspenso");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Porcentagem de quartos reservados");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Exibe o formulário de criação de nova propriedade.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Zoom do mapa, 1: Mundo 5: Landmass / continente 10: Cidade 15: Ruas 20: Edifícios');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Número de avaliações para mostrar');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Exibe as propriedades dos usuários na lista restrita. Se o usuário estiver registrado, estes são seus favoritos, se não estiver logado, apenas os itens adicionados através do ícone de favoritos durante a visita.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valor mínimo de depósito');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Se o depósito calculado for inferior a este valor, defina o depósito para este valor. Este valor pode ser anulado se não atender à configuração de depósito mínimo do site. Deixe-o definido como 0 a não use a configuração. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Mostra o formulário de consentimento compatível com GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Lista de tipos de quartos de propriedade');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Mostrar um tipo de quarto de propriedade');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Mostrar o formulário de login');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Mostrar uma lista de quartos de um determinado tipo de quarto');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Id do tipo de quarto');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Painel');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Mostra uma lista de propriedades sindicadas');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'O número de propriedades sindicadas para mostrar');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Mostrar MRPs (hotéis / pousadas) ou SRPs (chalés / apartamentos / vilas). O padrão é determinado a partir da propriedade atual da propriedade, se não estiverem disponíveis, os MRPs mostrado. Para escolher um tipo específico, defina este valor como 0 para srps ou 1 para mrps. ');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Mostra as estrelas de uma propriedade. Estas são definidas na Configuração da Propriedade, se a propriedade for um MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID da propriedade.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Opcional. Se o id da propriedade não estiver definido, você pode passar um número.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Opcional. Caminho de template alternativo. Não pode ser passado via url. Deve ser absoluto.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Opcional. Nome do modelo alternativo.');
