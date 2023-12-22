@extends('layout.app')
@section('title')
<title>Dashboard - NiceAdmin Bootstrap Template</title>
@stop
@section('content')
<div class="pagetitle">
    <h1>{{ Auth::user()->email ?? 'jhon Doe' }}</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
@stop