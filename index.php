<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basic OOP Instructions</title>

	<style>
		.text-red {
			color: red;
		}
	</style>
</head>
<body>
	

<?php

@include_once('vendor/autoload.php');


$data_from_db = [
	[ 'id' => 1, 'firstname' => 'Joop', 'surname' => 'Kopstoot' ],
	[ 'id' => 2, 'firstname' => 'Koos', 'surname' => 'Klaproos' ],
	[ 'id' => 3, 'firstname' => 'Wilhelm', 'surname' => 'van Hot naar Her' ],
	[ 'id' => 4, 'firstname' => 'Truus', 'surname' => 'Molensteen' ],
	[ 'id' => 5, 'firstname' => 'Flip', 'surname' => 'Kopkaas' ],
	[ 'id' => 6, 'firstname' => 'Miep', 'surname' => 'Blokletter' ],
	[ 'id' => 7, 'firstname' => 'Vivian', 'surname' => 'Sleurhut' ]
];

$table = App\Html\Table\TableFactory::create(
	$data_from_db, 						// Data
	['ID', 'Voornaam', 'Achternaam'],	// Kolomkoppen
	[									// Array met tag attributen
		'table' => [
			'style' => 'border-collapse: collapse; border: 1px solid blue;'
		],
		'td' => [
			'style' => 'padding: 10px; border: 1px solid grey; text-align: left;'
		],
		'th' => [
			'style' => 'padding: 10px; text-align: left; text-transform: uppercase;',
			'class' => 'text-red'
		]
	]
);

echo '<h1>De table</h1>';

$table->render();
?>
</body>
</html>