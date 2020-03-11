<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo')
    ->addTab('Kontakt', ['label' => 'Kontakt', 'placement' => 'left'])
        ->addText('contact_title',['label' => 'Tytuł sekcji'])
        ->addText('contact_suptitle',['label' => 'Suptytuł sekcji'])
        ->addText('adres',['label' => 'Adres'])
        ->addText('phone',['label' => 'Telefon kontaktowy'])
        ->addText('kom',['label' => 'Komórka'])
        ->addText('mail',['label' => 'Mail'])
        ->addText('nip',['label' => 'NIP'])
        ->addText('regon',['label' => 'REGON'])
        ->addImage('contact_image',['label' => 'Zdjęcie w tle'])
    ->addTab('Social media', ['label' => 'Social Media', 'placement' => 'left'])
        ->addRepeater('icons', ['min' => 0, 'layout' => 'table'])
            ->addText('icon', ['title' => 'Font awesome kod ikonki'])
            ->addText('link', ['title' => 'link']);
return $option_page;
