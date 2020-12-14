@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
  @include('includes/header')
  <div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-report">
                <h1>Seja bem-vindo, {{ auth()->user()->name }}!</h1>
            </div>
            <div class="list-reports">
                
            </div>
        </div>
    </div>
</body>  
</html>
