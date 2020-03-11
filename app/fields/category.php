<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('category');

$page
    ->setLocation('taxonomy', '==', 'category');

$page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('image', ['label' => 'Zdjęcie kategorii']);
return $page;
