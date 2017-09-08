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
	"active_url"           => "O Campo Atribuido: n�o � um URL v�lido.",
	"after"                => "O Campo Atribuido: deve ser uma data ap�s: data.",
	"alpha"                => "O Campo Atribuido: pode conter apenas letras.",
	"alpha_dash"           => "O Campo Atribuido: pode conter apenas letras, n�meros e tra�os.",
	"alpha_num"            => "O Campo Atribuido: pode conter apenas letras e n�meros.",
	"array"                => "O Campo Atribuido: deve ser um array.",
	"before"               => "O Campo Atribuido: deve ser uma data anterior a: date.",
	"between"              => array(
		"numeric" => "O Campo Atribuido: deve estar entre: min e: max.",
		"file"    => "O Campo Atribuido: deve estar entre: min e: max kilobytes.",
		"string"  => "O Campo Atribuido: deve estar entre: min e: caracteres m�ximos.",
		"array"   => "O Campo Atribuido: deve ter entre: min e: itens max.",
	),
	"boolean"              => "O campo Campo Atribuido: deve ser verdadeiro ou falso.",
	"confirmed"            => "A confirma��o de atributo: n�o corresponde.",
	"date"                 => "O Campo Atribuido: n�o � uma data v�lida.",
	"date_format"          => "O Campo Atribuido: n�o corresponde ao formato: format.",
	"different"            => "O Campo Atribuido: e outros devem ser diferentes.",
	"digits"               => "O Campo Atribuido: deve ser: d�gitos.",
	"digits_between"       => "O Campo Atribuido: deve estar entre: min e: d�gitos m�ximos.",
	"email"                => "O Campo Atribuido: deve ser um endere�o de e-mail v�lido.",
	"exists"               => "O Campo Atribuido selected: � inv�lido.",
	"image"                => "O Campo Atribuido: deve ser uma imagem.",
	"in"                   => "O Campo Atribuido selecionado: � inv�lido.",
	"integer"              => "O Campo Atribuido: deve ser um inteiro.",
	"ip"                   => "O Campo Atribuido: deve ser um endere�o IP v�lido.",
	"max"                  => array(
		"numeric" => "O Campo Atribuido: n�o pode ser maior que: max.",
		"file"    => "O Campo Atribuido: n�o pode ser maior que: max kilobytes.",
		"string"  => "O Campo Atribuido: n�o pode ser maior que: caracteres m�x..",
		"array"   => "O Campo Atribuido: pode n�o ter mais do que: itens max.",
	),
	"mimes"                => "O Campo Atribuido: deve ser um arquivo de tipo:: values.",
	"min"                  => array(
		"numeric" => "O Campo Atribuido: deve ser no m�nimo: min.",
		"file"    => "O Campo Atribuido: deve ser no m�nimo: min kilobytes.",
		"string"  => "O Campo Atribuido: deve ter pelo menos: min caracteres.",
		"array"   => "O Campo Atribuido: deve ter pelo menos: itens min.",
	),
	"not_in"               => "O Campo Atribuido selected: � inv�lido.",
	"numeric"              => "O Campo Atribuido: deve ser um n�mero.",
	"regex"                => "O formato dO Campo Atribuido � inv�lido.",
	"required"             => "O campO Campo Atribuido: � obrigat�rio.",
	"required_if"          => "O campO Campo Atribuido: � necess�rio quando: outro �: valor.",
	"required_with"        => "O campO Campo Atribuido: � necess�rio quando: values estiverem presentes.",
	"required_with_all"    => "O campO Campo Atribuido: � necess�rio quando: values estiverem presentes.",
	"required_without"     => "O campO Campo Atribuido: � necess�rio quando: values n�o est�o presentes.",
	"required_without_all" => "O campO Campo Atribuido: � necess�rio quando nenhum dos valores estiver presente.",
	"same"                 => "O Campo Atribuido: e outro devem corresponder.",
	"size"                 => array(
		"numeric" => "O Campo Atribuido: deve ser: tamanho.",
		"file"    => "O Campo Atribuido: deve ser: tamanho kilobytes.",
		"string"  => "O Campo Atribuido: deve ser: caracteres de tamanho.",
		"array"   => "O Campo Atribuido: deve conter: itens de tamanho.",
	),
	"unique"               => "O Campo Atribuido: j� foi.",
	"url"                  => "O formato dO Campo Atribuido � inv�lido.",
	"timezone"             => "O Campo Atribuido: deve ser uma zona v�lida.",

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
