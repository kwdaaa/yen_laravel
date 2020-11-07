@extends('layouts.appCreate')

@section('title', '家計登録')

@section('content')

{{-- エラーを表示するためのコード --}}
{{-- @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach --}}

<div class="contents">
<form action="/yen/1/{{ $add->id }}/add" method="post">
        @csrf
        <!-- idはそのまま -->
        <input type="hidden" name="id" value="{{ $add->id }}">

        {{-- {{ old('XXX') }}を書くことで、エラーが起きたときに、書いた値が表示される。 --}}
        <p>日 付<br></p>
            
            <input class="input" type="date" name = "date" value="<?php echo date('Y-m-d'); ?>" min="2020-11-01" max="2025-12-31" value="{{ $add->date }}">

        <p>購入者<br></p>
            <select class="input" name="person" size="1" value="{{ $add->person }}">
                <option value=""></option>
                <option value="1">{{ $couple->person1_name }}</option>
                <option value="0">{{ $couple->person2_name }}</option>
            </select>
        </p>

        <p>金 額<br></p>
            <input class="input" type="number" name="price" value="{{ $add->price }}" min="0">

        <p>カテゴリー<br></p>
            {{-- <input type="text" name="category" value="食費, 日用品費, 娯楽費, 固定費, その他"> --}}
            <select class="input" name="category_id" size="1" value="{{ $add->category_id }}">
                <option value=""></option>
                <option value="1">食   費</option>
                <option value="2">日 用 品 費</option>
                <option value="3">娯 楽 費</option>
                <option value="4">固 定 費</option>
                <option value="5">そ の 他</option>
            </select>
            
            <button class="edit" type="submit">編　集</button>
</form>

        <form action="/yen/1/{{ $add->id }}/add" method="post">
            @csrf
            @method('DELETE')
            <button class="delete" type="submit" onclick="if(!confirm('削除しますか？')){return false};">削　除</button>
        </form>
</div>

@endsection