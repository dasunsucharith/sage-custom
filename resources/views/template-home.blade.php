<?php
/**
 * Template Name: Custom Home Page
 */
?>

@extends('layouts.app')

@section('content')
  @include('partials._hero')
  @include('partials._impact')
  @include('partials._video')
  @include('partials._features')
  @include('partials._curriculum')
  @include('partials._journey')
  @include('partials._testimonials')
  @include('partials._alumni')
  @include('partials._blogs')
  @include('partials._faq')
  @include('partials._cta_bottom')
@endsection
