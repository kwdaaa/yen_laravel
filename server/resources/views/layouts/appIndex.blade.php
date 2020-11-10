<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>同棲用家計簿アプリ | Yen - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- 日本語 --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- 数字 --}}
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleIndex.css') }}">
</head>
<body>
    @include('layouts.header')
    @yield('content')
</body>
</html>