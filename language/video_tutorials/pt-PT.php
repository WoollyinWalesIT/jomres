<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Translated to pt-PT by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 17Set2010 - www.marioliveira.net - Updated 21Jun2011 for ver 5.1
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Tutoriais em vídeo');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Painel de controle');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Este tutorial mostra como usar o painel de controle de Gerenciamento de Propriedades.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Linha do tempo');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Como usar o calendário da linha do tempo. Neste vídeo, criamos um novo convidado inserindo seus detalhes no pop-up, os convidados existentes podem ser reutilizados selecionando seu nome no menu suspenso no pop-up.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Listar propriedades');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Como usar a página Listar Propriedades para visualizar informações extras, alterar colunas e pesquisar propriedades específicas.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Editar os detalhes de sua propriedade');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Editando os detalhes de sua propriedade, incluindo arrastar no mapa para definir sua localização.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Alterar modo de edição tarifária');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Seu modo de edição de tarifas determina o método que você pode usar para definir preços para sua propriedade. Você faz isso através da página Configuração de propriedade.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Modo de edição de tarifa normal para hotéis, pensões, B & Bs');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'O modo de edição de tarifa normal é um recurso de edição de tarifa simples que permite selecionar o número de quartos em uma propriedade, o preço do quarto, o número de hóspedes que cada quarto pode acomodar e o número máximo de hóspedes em uma festa. Quando salvos, esses preços são válidos pelos próximos 10 anos. ');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Edição de tarifa normal para vilas e apartamentos');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'O modo de edição de tarifa normal é um recurso de edição de tarifa simples que permite selecionar o subtipo de propriedade, o preço da propriedade por noite e o número máximo de convidados em uma festa. Quando salvos, esses preços são em seguida, válido pelos próximos 10 anos. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Modo de edição tarifária de microgerenciamento (recomendado)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'O modo de edição de tarifas de microgerenciamento permite configurar o preço e o número mínimo de dias durante os quais uma estadia pode ser válida, para todos os dias do ano. É uma ferramenta poderosa que lhe dá controle total sobre o preço. Neste exemplo, mostraremos como criar vários conjuntos de preços para o mesmo tipo de quarto, definir preços diferentes para períodos diferentes e preços diferentes para dias específicos da semana dentro de um período. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Modo de edição tarifária microgerenciada para vilas / apartamentos (recomendado)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'O modo de edição de tarifas de microgerenciamento permite configurar o preço e o número mínimo de dias que uma estadia pode ser válida, para todos os dias do ano. É uma ferramenta poderosa que lhe dá controle total sobre o preço. Neste exemplo, mostraremos como criar vários conjuntos de preços. Definiremos preços diferentes para períodos diferentes e preços diferentes para dias específicos da semana dentro de um período. Feito isso, criaremos várias tarifas para o mesmo propriedade, mas com diferentes números de hóspedes que nos permitem controlar com precisão os preços para cada cenário. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Tarifas diferentes para diferentes números de hóspedes');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Você pode criar várias tarifas para o mesmo tipo de quarto, então se desejar preços diferentes para diferentes números de hóspedes, você pode fazer isso.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Por pessoa por noite - Tipos de hóspedes');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Para cobrar por pessoa por noite, você precisará criar tipos de hóspedes. Diferentes tipos de hóspedes podem ter variações do preço base de um quarto, então crianças de diferentes idades podem ter descontos variados com base em suas idades. Você não é necessário cobrar por pessoa, por noite, para usar os Tipos de hóspedes, você também pode usá-los se cobrar uma tarifa fixa, mas ainda assim desejar capturar o número de hóspedes ou porque deseja limitar o número de hóspedes em uma reserva. ');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Centro de mídia - Envio de imagens');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Todas as imagens são enviadas por meio da central de mídia. Neste vídeo, faremos upload da imagem da propriedade principal, algumas imagens de apresentação de slides, uma pequena seleção de imagens a serem mostradas na página de resultados da pesquisa e imagens para uma de os quartos.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Centro de mídia - Envio de imagens');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Todas as imagens são enviadas através da central de mídia. Neste vídeo, faremos upload da imagem da propriedade principal, uma pequena seleção de imagens a serem mostradas na página de resultados da pesquisa e algumas imagens de apresentação de slides.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Painel de controle do administrador');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Esta é sua página de destino padrão na área do administrador. Você pode ver um resumo de várias estatísticas do site e ver quais propriedades existem no sistema, que estão completas e que foram concluídas e estão aguardando revisão antes de aprovação .Uma propriedade aprovada, pode ser publicada pelo administrador da propriedade. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Gerenciador de plugins, instalação e uso');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Este vídeo mostra como usar o gerenciador de plug-ins, incluindo a instalação do gerenciador de plug-ins e a instalação e desinstalação de um plug-in. Se você não tiver uma chave de licença, será solicitado a salvar no site Configuração antes de poder instalar o gerenciador. Se você não usou o gerenciador de plug-ins antes, esta lista inicialmente estará vazia, neste exemplo eu já tenho uma variedade de plug-ins instalados. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Gestores de propriedade');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Os gerentes de propriedade são adicionados de uma das duas maneiras. Eles criam propriedades eles próprios (podem ser desativados na Configuração do site) ou o administrador do site pode atribuir um gerente existente a certas propriedades. Os gerentes só podem acessar as propriedades que possuem criado ou atribuído a. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Controle de acesso');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Você pode usar o recurso de controle de acesso para desabilitar opções de menu, tornando-as visíveis apenas para certas classes de usuários, ou mesmo fazendo-as desaparecer completamente. Se a barra de menus não tiver nenhuma opção de menu para mostrá-la irá desaparecer completamente, então se você não quiser que os visitantes do site vejam nenhuma opção, você pode apenas definir todas as opções para serem visíveis para usuários logados, por exemplo. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Propriedade e tipos de quarto');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Neste vídeo, você verá dois conceitos importantes. O primeiro é a criação de tipos de propriedade e tipos de quartos associados. Você também verá um usuário registrado que ainda não é gerente criar sua própria propriedade e se tornar um gerente (mas apenas capaz de configurar a propriedade que eles criaram). Propriedade e tipos de quarto estão vinculados, uma vez que você criou um tipo de propriedade, você deve adicionar um tipo de quarto, caso contrário os gerentes de propriedade verão mensagens de erro em vermelho ao tentar configurar suas propriedades. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Fazendo upload de marcadores de mapa');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Você usa o Media Center para fazer upload de marcadores de mapa. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Uma grande fonte de marcadores pode ser encontrada aqui. < / a> O procedimento para enviar recursos de propriedade, recursos de quarto, tipos de quarto e outros é o mesmo. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Recursos de propriedade');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Neste vídeo, mostraremos como criar recursos de propriedade e fazer upload de imagens para eles.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes são um recurso excepcionalmente poderoso do Jomres. O princípio é o mesmo para Joomla e Wordpress. Neste vídeo, mostraremos onde visualizar os códigos curtos (esta lista mudará dependendo de quais plugins são instalado) e como usá-los. Você pode usar os códigos em artigos ou módulos. ');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Arquivos de log');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Este vídeo mostrará como visualizar arquivos de registro. Registro extensivo ocorre quando o sistema é executado. No modo de produção (Configuração do site> Depuração), menos registros são gerados, então se você estiver testando um novo recurso, você deve definir seu site para Desenvolvimento. Se você gostaria de adicionar seu próprio registro aos seus scripts Jomres, dê uma olhada em <a href="https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> nossa página de manual sobre como fazer. </a> Aqui vamos lançar um erro falso e, em seguida, ver o arquivo de log. Porque o site está definido como Desenvolvimento lá é uma grande quantidade de informação, normalmente você veria apenas uma mensagem dizendo que houve um erro e ele foi relatado. ');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Traduzindo rótulos e outras strings');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Existem várias maneiras de traduzir strings de idioma em Jomres, você pode editar arquivos de idioma, mas eles podem ser substituídos durante a atualização. Em vez disso, recomendamos que você use as ferramentas de tradução integradas que são exclusivas de nosso Se a sequência for algo que foi inserido em um formulário, como o nome de um tipo de quarto, você pode usar a página Edição de etiqueta. Se a sequência for do arquivo de idioma, você pode usar a ferramenta de edição de arquivos de idioma. Basta usar a ferramenta de pesquisa do navegador para encontrar a string que deseja alterar e, em seguida, clicar no link para alterá-la. Essas alterações são salvas no banco de dados e, portanto, são seguras para atualização. Você pode ter diferentes rótulos para diferentes tipos de propriedade, para que possa altere Nova propriedade para Novo acampamento, por exemplo, alterando a lista suspensa Contexto de idioma na parte superior da página antes de alterar o rótulo. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Adicionando propriedades');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> Neste estágio Jomres foi instalado no CMS e foi adicionado ao menu frontend (ou no Wordpress você criou uma página e adicionou o código básico Jomres a ela). </ p>
<p> Aqui você verá como um usuário registrado que ainda não é gerente de propriedade em Jomres pode criar uma nova propriedade, definir algumas configurações básicas e publicá-la. </p>
<p> No final, você verá que o gerente foi automaticamente definido como gerente de propriedade, no entanto, eles só podem configurar suas próprias propriedades. </p>
<p> Embora a interface no Wordpress pareça diferente, o processo é exatamente o mesmo para Joomla ou Wordpress. </p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Categorias de propriedade');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Categorias de propriedade é um recurso simples que permite aos gerentes de propriedade atribuir suas propriedades a uma determinada categoria. Os administradores do site podem criar códigos de acesso que listarão todas as propriedades em uma categoria, como mostrado neste vídeo.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Propriedades de visualização do administrador do site');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Você não gerencia propriedades a partir daqui, você só pode gerenciar propriedades a partir do frontend, no entanto, nesta lista você pode ver as propriedades que estão com aprovação pendente (se o recurso estiver habilitado) e qualquer uma que esteja incompleto (por exemplo, ainda é necessário fazer upload de imagens, definir preços etc.). Clique no nome da propriedade para ser levado ao painel dessa propriedade. Você poderá então usar as seções do guia no topo da página para ver as etapas que você precisa tirar para completar e publicar uma propriedade. </p> ');
