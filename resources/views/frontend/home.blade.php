@extends('layouts.site')
@section('title', 'Trang chủ')
@section('maincontent')
   {{-- slider --}}
   <x-slider/>

    {{-- intro --}}
    <x-intro-brand/>

    {{-- type Product --}}
    <x-type-product/>

    <!-- newProduct----------------------------------------------------------------------- -->
    <x-new-product/>

    <!-- trendProduct----------------------------------------------------------------------- -->
    <x-trend-product/>

    {{-- sendLetter --}}
    <x-send-letter/>
    
@endsection
