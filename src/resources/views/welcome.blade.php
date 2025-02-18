@extends('layouts.setup')


@section('header-title')
    <h1>MyApp</h1>
@endsection

@section('content')
    <form action="{{ route('get_signup') }}" method="get">
        <input type="submit" value="サインアップ">
    </form>
    <form action="{{ route('get_login') }}" method="get">
        <input type="submit" value="ログイン">
    </form>
@endsection
