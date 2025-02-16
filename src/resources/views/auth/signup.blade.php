@extends('layouts.setup')


@section('header-title')
    <h1>サインアップ</h1>     
@endsection

@section('content')
    @vite('resources/ts/auth/signup.ts')

    {{-- サインアップ時の完了・エラーメッセージ --}}
    @include('layouts.message')

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

    サインアップ済みの方はこちら
    <a href="{{ route('login') }}">ログイン</a>
@endsection