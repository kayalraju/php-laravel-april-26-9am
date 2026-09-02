<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>contact page</h1>

      <a href="{{ URL('/') }}">Home</a> | 
    <a href="{{ URL('/about') }}">About</a>
    
    @if(true)
        <h1>if condition is true</h1>
    @endif


    @php
        $status="pending"
       
    @endphp

@switch($status)
    @case('pending')
        <span>Your order is pending.</span>
        @break

    @case('shipped')
        <span>Your order has shipped!</span>
        @break

    @default
        <span>Status unknown.</span>
@endswitch

@php
    $age=30
@endphp
@if($age>18)
<h2>you are eligible for voting</h2>
@else
<h2>you are not eligible for voting</h2>
@endif


@auth
    <h1>welcome , {{ auth()->user()->name }}</h1>
@endauth

@guest
    <a href="login.php">Login</a>
@endguest

{{-- @if(auth()->user()->role=='admin')
    <h1>you are admin</h1>
@else
    <h1>you are not admin</h1>
@endif --}}

{{-- {{ $user->status == 'active'?'Active':'Inactive' }} --}}
</body>
</html>