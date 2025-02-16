@extends('layouts.setup')

@section('header-title')
    <h1>ログイン</h1>
@endsection

@section('content')

    {{-- サインアップ時の完了・エラーメッセージ --}}
    @include('layouts.message')
    
    <form action="{{ route('login') }}" method="post">
        <input type="email" placeholder="E-mail or Username" name="email">
        <br>
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
        <br>
        <input type="checkbox" name="remember">ログイン情報を記憶しますか？
        <br>
        <input type="submit" value="ログイン">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    サインアップがまだの方はこちら
    <a href="{{ route('signup') }}">サインアップ</a>
@endsection