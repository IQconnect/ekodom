<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$execution = new FieldsBuilder('execution');

$execution
    ->setLocation('post_type', '==', 'execution');

$execution
->addFields(get_field_partial('partials.builder'))
->addImage('cat_image', ['label' => 'Zdjęcie kategorii'])
->addWysiwyg('cat_content', ['label' => 'Treść do Artykułu', 'media_upload' => 0]);
return $execution;
