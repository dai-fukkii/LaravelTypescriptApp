@extends('layouts.setup')


@section('header-title')
    <h1>MyApp</h1>
@endsection

@section('content')
a
    <form action="{{ route('signup') }}" method="get">
        <input type="submit" value="サインアップ">
    </form>
    <form action="{{ route('login') }}" method="get">
        <input type="submit" value="ログイン">
    </form>
@endsection
