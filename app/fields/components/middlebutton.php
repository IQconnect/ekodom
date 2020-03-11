<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$middlebutton = new FieldsBuilder('middlebutton', ['label' => 'Środkowy przycisk']);

$middlebutton
->addText('button_title', ['label' => 'Napis na buttonie'])
->addLink('middle_url', ['label' => 'Odnośnik','post_type' => 'page', 'allow_null' => 1]);
return $middlebutton;
