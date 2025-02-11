@extends('layouts.setup')

@section('header-title')
    <h1>ログイン</h1>
@endsection

@section('content')
    
    <form action="{{ route('login') }}" method="post">
        <input type="email" placeholder="E-mail" name="email">
        <br>
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
        <br>
        <input type="submit" value="ログイン">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    <a href="{{ route('signup') }}">サインアップがまだの方はこちら</a>
@endsection