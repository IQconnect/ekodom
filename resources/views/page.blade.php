{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @php $sections = get_field('components') @endphp


  @foreach ($sections as $section)
    @php ($sectionName = $section['acf_fc_layout']) @endphp

    {{-- SLIDER --}}
    @includeWhen($sectionName == 'slider', 'partials.slider', ['data' => $section])

    {{-- HERO --}}
    @includeWhen($sectionName == 'Hero', 'partials.hero', ['data' => $section])

    {{-- TEXT IMG --}}
    @includeWhen($sectionName == 'textImg', 'partials.text-img', ['data' => $section])

    {{-- ASORTYMENT --}}
    @includeWhen($sectionName == 'products', 'partials.products', ['data' => $section])

    {{--Content --}}
    @includeWhen($sectionName == 'content-page', 'partials.content-page', ['data' => $section])

    {{-- Kontakt --}}
    @includeWhen($sectionName == 'contact', 'partials.contact')

    {{-- Realizacje --}}
    @includeWhen($sectionName == 'realisation', 'partials.realisation', ['data' => $section])

    {{-- MenuBar --}}
    @includeWhen($sectionName == 'menubar', 'partials.menubar', ['data' => $section])

    {{-- Textblock --}}
    @includeWhen($sectionName == 'textblock', 'partials.textblock', ['data' => $section])

     {{-- Middlebutton --}}
     @includeWhen($sectionName == 'middlebutton', 'partials.middlebutton', ['data' => $section])
  @endforeach

@endsection
