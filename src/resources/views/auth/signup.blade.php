@extends('layouts.setup')
<?php
    $error_message = Session::get('error-message');
    $success_message = Session::get('success-message');
?>

@section('header-title')
    <h1>サインアップ</h1>     
@endsection



@section('content')

    {{-- サインアップ時の完了・エラーメッセージ --}}
    @section('error-message')
        @if(isset($error_message))
            <p>{{ $error_message }}</p>
        @endif
    @endsection
    @section('success-message')
        @if(isset($success_message))
            <p>{{ $success_message }}</p>
        @endif
    @endsection
    

    {{-- 登録フォーム --}}
    <form action="{{ route('signup') }}" method="post">
        <input type="text" placeholder="username" name="username">
        <br>
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