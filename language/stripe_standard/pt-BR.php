<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Milhões de empresas de todos os tamanhos – de startups a grandes empresas – usam o software e as APIs da Stripe para aceitar pagamentos, enviar pagamentos e gerenciar seus negócios online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Se você ainda não tem chaves de API, primeiro precisará visitar o Stripe e obter um token de API <a href='https://dashboard.stripe.com/developers' target='_blank'> Par de chaves de API</a>. Se você não tiver uma conta do Stripe, poderá criar uma nova gratuitamente. Primeiro, teste sua integração ativando o modo de teste e, em seguida, usando as chaves de teste nos campos fornecidos. Depois de estão felizes que tudo está funcionando, então você pode alternar para usar as teclas Live e definir o Modo de teste aqui como Não.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Modo de teste");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Quando definido como Sim, suas chaves de API de teste serão usadas.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Chave publicável ao vivo");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Chave secreta ativa");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Testar chave publicável");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Testar chave secreta");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL do webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Defina seu <a href='https://dashboard.stripe.com/webhooks' target='_blank'> url do webhook</a> para este url para que o Stripe possa ligar de volta e confirmar o pagamento . Você precisará clicar em Adicionar endpoint e colar este URL no campo \"URL do endpoint\". Defina a versão do endpoint como 2022-08-01. Permita que ele envie todos os eventos. Ao alternar do modo de teste para o modo Ao vivo no Stripe, você pode usar o mesmo endpoint.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Segredo de assinatura de webhook ao vivo");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Testar o segredo de assinatura do Webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Quando o Stripe chama o servidor de volta para confirmar o pagamento bem-sucedido, ele envia um segredo de assinatura. Precisamos conhecer esse segredo de assinatura para que possamos ligar de volta ao Stripe e confirmar a validade da mensagem. Você pode visualizar o segredo de assinatura por criando o webhook e, em seguida, na página Webhooks, clicando na url do webhook. Uma vez lá, você pode revelar o segredo de assinatura, que você precisará colar neste campo.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Pagamento falhou!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Infelizmente não foi possível confirmar o pagamento. Por favor, volte ao formulário de reserva e tente novamente.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Retornar ao formulário de reserva");
