<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$projection = new FieldsBuilder('projection');

$projection
    ->setLocation('post_type', '==', 'projection');

$projection
->addFields(get_field_partial('partials.builder'))
->addImage('cat_image', ['label' => 'Zdjęcie kategorii']);
return $projection;
