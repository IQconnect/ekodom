<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$realisation = new FieldsBuilder('realisation', ['label' => 'Realizacja']);

$realisation
	->addRadio('pozycja', ['label' => 'Czy wyswietlic tytul?',  'wrapper' => ['width' => '20%']])
		->addChoices('tak', 'nie')
	->addText('title', ['label' => 'Tytuł'])
	->addText('suptitle', ['label' => 'Suptytuł'])
	->addRelationship('cat', ['label'=> 'Realizacje', 'min' => '4', 'max' => '4', 'post_type'=>'projection']);
return $realisation;
