@extends('layouts.setup')

@section('scripts')
    @vite('resources/ts/auth/validation.ts')
@endsection

@section('header-title')
    <h1>サインアップ</h1>     
@endsection

@section('content')

    {{-- サインアップ時の完了・エラーメッセージ --}}
    @include('layouts.message')

    {{-- 登録フォーム --}}
    <form action="{{ route('post_signup') }}" method="post" id="signup-form">
        <input type="text" placeholder="username" name="username" value="{{ old('username') }}" id="username">
        <br>
        <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}" id="email">
        <br>
        <input type="password" placeholder="Password" autocomplete="new-password" name="password" id="password">
        <br>
        <input type="password" placeholder="Confirm Password" autocomplete="new-password" name="confirm-password" id="confirm-password">
        <br>
        <input type="submit" value="サインアップ" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

    サインアップ済みの方はこちら
    <a href="{{ route('get_login') }}">ログイン</a>
@endsection