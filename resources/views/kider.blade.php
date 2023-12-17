@extends('layouts.main')
@section('title')
Kider-Home Page
@endsection
@section('content')

@include('includes.carousel')

@include('includes.facilities')

@include('includes.about')

@include('includes.action')

@include('includes.classes')

@include('includes.appointment')

@include('includes.team')

@include('includes.testimonial') 

@endsection
