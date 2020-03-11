<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.slider'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.text-img'))
            ->addLayout(get_field_partial('components.products'))
            ->addLayout('contact', ['label' => 'Kontakt'])
            ->addLayout('content-page', ['label' => 'Treść'])
            ->addLayout(get_field_partial('components.realisation'))
            ->addLayout(get_field_partial('components.menubar'))
            ->addLayout(get_field_partial('components.textblock'))
            ->addLayout(get_field_partial('components.middlebutton'));
return $builder;
