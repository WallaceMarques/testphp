<?php//Todos os dados são fictícios.
$info = array();
$endereco = array();
array_push($info,array(
	"Nome" => "Maria Carla Silva",
	"Idade" => 33,
	array_push($endereco,array(
		"Rua" => "Frederico Meira",
		"Número" => 105,
		"Bairro" => "Andradas",
		"Cidade" => "Belo Horizonte",
		"Estado" => "Minas Gerais",
		"País" => "Brasil"
	)),
	"Telefone" => 31997221313
));
array_push($info,array(
	"Nome" => "Aline Antunes Chagas",
	"Idade" => 18,
	"Cidade" => "Sabará",
	"Telefone" => 31984453231
));
array_push($info,array(
	"Nome" => "Fabrício Silva Santos",
	"Idade" => 25,
	"Cidade" => "Bom Jesus",
	"Telefone" => 31976897621
));
array_push($info,array(
	"Nome" => "Nathaly Mendes Oliveira",
	"Idade" => 34,
	"Cidade" => "Brumadinho",
	"Telefone" => 31971256709
));
array_push($info,array(
	"Nome" => "Gualberto Alves Siqueira de Jesus",
	"Idade" => 43,
	"Cidade" => "Três Corações",
	"Telefone" => 31999325412
));
print_r($endereco);
?>