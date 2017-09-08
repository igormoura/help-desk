<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "O Campo Atribuido: deve ser aceito.",
	"active_url"           => "O Campo Atribuido: não é um URL válido.",
	"after"                => "O Campo Atribuido: deve ser uma data após: data.",
	"alpha"                => "O Campo Atribuido: pode conter apenas letras.",
	"alpha_dash"           => "O Campo Atribuido: pode conter apenas letras, números e traços.",
	"alpha_num"            => "O Campo Atribuido: pode conter apenas letras e números.",
	"array"                => "O Campo Atribuido: deve ser um array.",
	"before"               => "O Campo Atribuido: deve ser uma data anterior a: date.",
	"between"              => array(
		"numeric" => "O Campo Atribuido: deve estar entre: min e: max.",
		"file"    => "O Campo Atribuido: deve estar entre: min e: max kilobytes.",
		"string"  => "O Campo Atribuido: deve estar entre: min e: caracteres máximos.",
		"array"   => "O Campo Atribuido: deve ter entre: min e: itens max.",
	),
	"boolean"              => "O campo Campo Atribuido: deve ser verdadeiro ou falso.",
	"confirmed"            => "A confirmação de atributo: não corresponde.",
	"date"                 => "O Campo Atribuido: não é uma data válida.",
	"date_format"          => "O Campo Atribuido: não corresponde ao formato: format.",
	"different"            => "O Campo Atribuido: e outros devem ser diferentes.",
	"digits"               => "O Campo Atribuido: deve ser: dígitos.",
	"digits_between"       => "O Campo Atribuido: deve estar entre: min e: dígitos máximos.",
	"email"                => "O Campo Atribuido: deve ser um endereço de e-mail válido.",
	"exists"               => "O Campo Atribuido selected: é inválido.",
	"image"                => "O Campo Atribuido: deve ser uma imagem.",
	"in"                   => "O Campo Atribuido selecionado: é inválido.",
	"integer"              => "O Campo Atribuido: deve ser um inteiro.",
	"ip"                   => "O Campo Atribuido: deve ser um endereço IP válido.",
	"max"                  => array(
		"numeric" => "O Campo Atribuido: não pode ser maior que: max.",
		"file"    => "O Campo Atribuido: não pode ser maior que: max kilobytes.",
		"string"  => "O Campo Atribuido: não pode ser maior que: caracteres máx..",
		"array"   => "O Campo Atribuido: pode não ter mais do que: itens max.",
	),
	"mimes"                => "O Campo Atribuido: deve ser um arquivo de tipo:: values.",
	"min"                  => array(
		"numeric" => "O Campo Atribuido: deve ser no mínimo: min.",
		"file"    => "O Campo Atribuido: deve ser no mínimo: min kilobytes.",
		"string"  => "O Campo Atribuido: deve ter pelo menos: min caracteres.",
		"array"   => "O Campo Atribuido: deve ter pelo menos: itens min.",
	),
	"not_in"               => "O Campo Atribuido selected: é inválido.",
	"numeric"              => "O Campo Atribuido: deve ser um número.",
	"regex"                => "O formato dO Campo Atribuido é inválido.",
	"required"             => "O campO Campo Atribuido: é obrigatório.",
	"required_if"          => "O campO Campo Atribuido: é necessário quando: outro é: valor.",
	"required_with"        => "O campO Campo Atribuido: é necessário quando: values estiverem presentes.",
	"required_with_all"    => "O campO Campo Atribuido: é necessário quando: values estiverem presentes.",
	"required_without"     => "O campO Campo Atribuido: é necessário quando: values não estão presentes.",
	"required_without_all" => "O campO Campo Atribuido: é necessário quando nenhum dos valores estiver presente.",
	"same"                 => "O Campo Atribuido: e outro devem corresponder.",
	"size"                 => array(
		"numeric" => "O Campo Atribuido: deve ser: tamanho.",
		"file"    => "O Campo Atribuido: deve ser: tamanho kilobytes.",
		"string"  => "O Campo Atribuido: deve ser: caracteres de tamanho.",
		"array"   => "O Campo Atribuido: deve conter: itens de tamanho.",
	),
	"unique"               => "O Campo Atribuido: já foi.",
	"url"                  => "O formato dO Campo Atribuido é inválido.",
	"timezone"             => "O Campo Atribuido: deve ser uma zona válida.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
