@extends('layouts.appConfig')

@section('title', 'ふたりの家計')

@section('content')

<img src="{{ asset('/img/logo.png') }}" alt="リセット">

<img src="{{ asset('/img/logo.png') }}" alt="破局">

        <form action="/yen/1" method="post">
            @csrf
            @method('DELETE')
                <button class="delete" type="submit" onclick="if(!confirm('削除しますか？')){return false};"><img src="{{ asset('/img/logo.png') }}" alt="リセット"></button>
        </form>


@endsection