<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$slider = new FieldsBuilder('slider');

$slider
    ->addRepeater('slider', ['min' => 0, 'layout' => 'table'])
        ->addImage('image')
        ->addTextarea('title', ['label'=>'Tytuł','new_lines' => 'br'])
        ->addTextarea('suptitle', ['label'=>'Suptytuł','new_lines' => 'br'])
        ->addTextarea('content', ['label'=>'Treść']);

return $slider;
