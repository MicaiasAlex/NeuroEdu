@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-nav />

    {{-- HERO --}}
    <x-hero />

    {{-- SEÇÃO SOBRE --}}
    <x-sobre />

    {{-- CARDS DE TIPOS --}}
    <section class="cards-container">
        <x-card />
        <x-card />
        <x-card />
        <x-card />
    </section>

    {{-- COMO IDENTIFICAR --}}
    <x-identificar />

    {{-- GUIA PARA EDUCADORES --}}
    <x-educadores />

    {{-- FOOTER --}}
    <x-footer />

@endsection
