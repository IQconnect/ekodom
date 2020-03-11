<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textblock = new FieldsBuilder('textblock', ['label' => 'Treści do Artykułów']);

$textblock
    ->addText('prodtitle', ['label' => 'Tytuł'])
    ->addText('prodsuptitle', ['label' => 'Suptytuł']);
return $textblock;
