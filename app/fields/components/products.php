<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$products = new FieldsBuilder('products');

$products
    ->addRadio('pozycja', ['label' => 'Z której strony zdjęcie?',  'wrapper' => ['width' => '20%']])
        ->addChoices('lewo', 'prawo')
    ->addText('title', ['label' => 'Tytuł'])
    ->addText('suptitle', ['label' => 'Suptytuł'])
    ->addText('button', ['label' => 'Treść przycisku'])
    ->addPageLink('button_link', ['label' => 'Odnośnik'])
    ->addRelationship('cat', ['label'=> 'Produkty','post_type'=>'execution']);
return $products;
