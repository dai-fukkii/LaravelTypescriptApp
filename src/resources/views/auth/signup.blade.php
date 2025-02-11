@extends('layouts.setup')

@section('header-title')
    <h1>サインアップ</h1>     
@endsection

@section('content')
    
    <form action="{{ route('signup') }}" method="post">
        <input type="email" placeholder="E-mail" name="email">
        <br>
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
        <br>
        <input type="password" placeholder="Confirm Password" autocomplete="new-password" name="confirm-password">
        <br>
        <input type="submit" value="サインアップ">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

    <a href="{{ route('login') }}">サインアップ済みの方はこちら</a>
@endsection