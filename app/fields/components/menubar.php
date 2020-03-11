<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$menubar = new FieldsBuilder('menubar', ['label' => 'Menu do Artykułów']);

$menubar
    ->addRelationship('menubutton', ['label'=> 'Menu do buttonw','post_type'=>'execution']);
return $menubar;
