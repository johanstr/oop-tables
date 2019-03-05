<?php

@include_once('vendor/autoload.php');


$data_from_db = [
	[ 'id' => 1, 'voornaam' => 'Joop', 'achternaam' => 'Kopstoot' ],
	[ 'id' => 2, 'voornaam' => 'Koos', 'achternaam' => 'Klaproos' ],
	[ 'id' => 3, 'voornaam' => 'Wilhelm', 'achternaam' => 'van Hot naar Her' ],
	[ 'id' => 4, 'voornaam' => 'Truus', 'achternaam' => 'Molensteen' ],
	[ 'id' => 5, 'voornaam' => 'Flip', 'achternaam' => 'Kopkaas' ],
	[ 'id' => 6, 'voornaam' => 'Miep', 'achternaam' => 'Blokletter' ],
	[ 'id' => 7, 'voornaam' => 'Vivian', 'achternaam' => 'Sleurhut' ]
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
			'style' => 'padding: 10px; text-align: left; background-color: darkblue; color: white; text-transform: uppercase;'
		]
	]);

echo '<h1>De table</h1>';

$table->render();