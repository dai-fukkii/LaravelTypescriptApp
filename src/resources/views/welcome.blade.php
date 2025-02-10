@extends('layouts.setup')

@section('content')
    <h1>My Trip App</h1>
    <form action="{{ route('signup') }}" method="get">
        <input type="submit" value="サインアップ">
    </form>
    <form action="{{ route('login') }}" method="get">
        <input type="submit" value="ログイン">
    </form>
@endsection
