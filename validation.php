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

	"accepted"         => ":attribute harus disetujui.",
	"active_url"       => ":attribute bukan URL yang valid.",
	"after"            => ":attribute harus tanggal setelah tanggal :date.",
	"alpha"            => ":attribute hanya dapat berisi huruf.",
	"alpha_dash"       => ":attribute hanya dapat mengandung huruf, angka, dan tanda hubung.",
	"alpha_num"        => ":attribute hanya dapat mengandung huruf dan angka.",
	"array"            => ":attribute harus berupa array.",
	"before"           => ":attribute harus tanggal sebelum tanggal :date.",
	"between"          => array(
		"numeric" => ":attribute harus diantara :min dan :max.",
		"file"    => ":attribute harus diantara :min dan :max kilobytes.",
		"string"  => ":attribute harus diantara :min dan :max karakter.",
		"array"   => ":attribute harus diantara :min dan :max items.",
	),
	"confirmed"        => ":attribute confirmation does not match.",
	"date"             => ":attribute is not a valid date.",
	"date_format"      => ":attribute tidak cocok dengan format :format.",
	"different"        => ":attribute dan :other harus berbeda.",
	"digits"           => ":attribute harus :digits digit.",
	"digits_between"   => ":attribute harus diantara :min dan :max digit.",
	"email"            => ":attribute format salah.",
	"exists"           => ":attribute yang terpilih salah.",
	"image"            => ":attribute harus berupa file gambar.",
	"in"               => ":attribute yang terpilih salah.",
	"integer"          => ":attribute harus berupa bilangan bulat.",
	"ip"               => ":attribute hrus merupakan IP yang valid.",
	"max"              => array(
		"numeric" => ":attribute tidak boleh lebih dari :max.",
		"file"    => ":attribute tidak boleh lebih dari :max kilobytes.",
		"string"  => ":attribute tidak boleh lebih dari :max karakter.",
		"array"   => ":attribute tidak boleh lebih dari :max items.",
	),
	"mimes"            => ":attribute harus berupa file dengan tipe: :values.",
	"min"              => array(
		"numeric" => ":attribute tidak boleh kurang dari :min.",
		"file"    => ":attribute tidak boleh kurang dari :min kilobytes.",
		"string"  => ":attribute tidak boleh kurang dari :min karakter.",
		"array"   => ":attribute tidak boleh kurang dari :min items.",
	),
	"not_in"           => ":attribute terpilih tidak valid.",
	"numeric"          => ":attribute harus berupa angka.",
	"regex"            => "Format :attribute tidak valid.",
	"required"         => "Kolom :attribute tidak boleh kosong.",
	"required_if"      => "Kolom :attribute tidak boleh kosong jika :other adalah :value.",
	"required_with"    => "Kolom :attribute tidak boleh kosong jika :values terisi.",
	"required_without" => "Kolom :attribute tidak boleh kosong jika :values kosong.",
	"same"             => ":attribute dan :other harus sama.",
	"size"             => array(
		"numeric" => ":attribute harus :size.",
		"file"    => ":attribute harus :size kilobytes.",
		"string"  => ":attribute harus :size karakter.",
		"array"   => ":attribute harus :size items.",
	),
	"unique"           => ":attribute sudah terpakai, coba yang lain.",
	"url"              => ":attribute format salah.",

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

	'custom' => array(),

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
