<?php

$tlg->sendMessage ([
	'chat_id' => $tlg->ChatID (),
	'text' => "😀 <b>Olá ".htmlentities ($tlg->FirstName ())."</b>, \nTudo bem? Bem-Vindo ao chat bot para comprar numeros descartaveis!!\nAki voce podera comprar numeros para varios apps, como o whatsapp, telegram, BanQi, Instagram, e muito mais,\n\nLogo abaixo da aba escrita\"mensagem\" Ha varios botoes , e voce pode escolher qualquer um deles\n\n<b>SUPER DICA</b>\nA cada 50 pessoas adicinadas no nosso grupo, voce ganha R$0,50 de saldo no bot!! caso queira fazer isso, nosso grupo e o https://t.me/smsgrupo\n\nQual quer duvida pode chamar meus adms: @PatoDev\n\nObrigado",
	'parse_mode' => 'html',
	'disable_web_page_preview' => true,
	'reply_markup' => $tlg->buildKeyBoard ([
		[$tlg->buildInlineKeyboardButton ('💴 Recarregar'), $tlg->buildInlineKeyboardButton ('🔥 Servicos')],
		[$tlg->buildInlineKeyboardButton ('👤 Saldo'), $tlg->buildInlineKeyboardButton ('👥 Informações')],
		[$tlg->buildInlineKeyboardButton ('🚩 Paises'), $tlg->buildInlineKeyboardButton ('💡 Criador')],
		[$tlg->buildInlineKeyboardButton ('🤖 totaladd'),$tlg->buildInlineKeyboardButton ('✔️ afiliados')],
		[$tlg->buildInlineKeyboardButton ('🔊 alertas'),$tlg->buildInlineKeyboardButton ('👁‍🗨ID')],
		[$tlg->buildInlineKeyboardButton ('PAGINA➛2')]
	], true, true)
]);

// afiliados
if (isset ($complemento) && is_numeric ($complemento) && STATUS_AFILIADO){

	$ref = $tlg->getUsuarioTlg ($complemento);

	// se usuario existir e não tiver entrado no bot por indicação de alguem e tambem não pode ser ele mesmo
	if (isset ($ref ['id']) && $bd_tlg->checkReferencia ($tlg->UserID ()) == false && $complemento != $tlg->UserID ()){

		// salva usuario atual como referencia do dono do link
		$bd_tlg->setReferencia ($complemento, $tlg->UserID ());

	}

}