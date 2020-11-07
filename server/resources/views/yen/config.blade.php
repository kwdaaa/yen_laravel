@extends('layouts.appConfig')

@section('title', '設定')

@section('content')

<div class="clear">
<form action="/yen" method="post">
        @csrf
        @method('DELETE')
            <button class="delete" type="submit" onclick="if(!confirm('削除しますか？')){return false};"><img class="reset_button" src="{{ asset('/img/reset.png') }}" alt="リセット"></button>
    </form>
    <form action="/yen" method="post">
        @csrf
        @method('DELETE')
            <button class="delete" type="submit" onclick="if(!confirm('本当に破局しますか？')){return false};"><img class="break_button" src="{{ asset('/img/break.png') }}" alt="破局"></button>
    </form>
</div>

@endsection