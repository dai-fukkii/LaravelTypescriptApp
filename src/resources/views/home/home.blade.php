@extends('layouts.setup')

@section('scripts')
    @vite('resources/ts/logout/confirm.ts')
@endsection

@section('header-title')
@endsection

@section('content')
    <a href="{{ route('get_logout') }}" id="logout">ログアウト</a>
@endsection


