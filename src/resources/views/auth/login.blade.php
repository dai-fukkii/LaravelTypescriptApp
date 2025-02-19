@extends('layouts.setup')

@section('scripts')
    @vite('resources/ts/auth/validation.ts')
@endsection

@section('header-title')
    <h1>ログイン</h1>
@endsection

@section('content')

    {{-- サインアップ時の完了・エラーメッセージ --}}
    @include('layouts.message')
    
    <form action="{{ route('post_login') }}" method="post" id="login-form">
        <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}" id="email">
        <br>
        <input type="password" placeholder="Password" autocomplete="new-password" name="password" id="password">
        <br>
        <input type="checkbox" name="remember">ログイン情報を記憶しますか？
        <br>
        <input type="submit" value="ログイン">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    サインアップがまだの方はこちら
    <a href="{{ route('get_signup') }}">サインアップ</a>
@endsection