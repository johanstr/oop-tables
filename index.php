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
			'style' => 'padding: 10px; text-align: left; background-color: darkblue; color: white; text-transform: uppercase;'
		]
	]
);

echo '<h1>De table</h1>';

$table->render();