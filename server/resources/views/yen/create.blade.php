@extends('layouts.appCreate')

@section('title', '家計登録')

@section('content')

{{-- エラーを表示するためのコード --}}
{{-- @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach --}}

<div class="contents">
<form action="/yen/1" method="post">
        @csrf
        {{-- {{ old('XXX') }}を書くことで、エラーが起きたときに、書いた値が表示される。 --}}
        <p>日 付<br></p>
            
            <input class="input" type="date" name = "date" value="<?php echo date('Y-m-d'); ?>" min="2019-11-01" max="2025-12-31" value="{{ old('date') }}">

        <p>購入者<br></p>
            <select class="input" name="person" size="1" value="{{ old('person') }}">
                <option value=""></option>
                <option value="1">{{ $couple->person1_name }}</option>
                <option value="0">{{ $couple->person2_name }}</option>
            </select>
        </p>

        <p>金 額<br></p>
            <input class="input" type="number" name="price" value="{{ old('price') }}" min="0">

        <p>カテゴリー<br></p>
            {{-- <input type="text" name="category" value="食費, 日用品費, 娯楽費, 固定費, その他"> --}}
            <select class="input" name="category_id" size="1" value="{{ old('category_id') }}">
                <option value=""></option>
                <option value="1">食費</option>
                <option value="2">日用品費</option>
                <option value="3">娯楽費</option>
                <option value="4">固定費</option>
                <option value="5">その他</option>
            </select>

        <button class="create" type="submit">登　録</button>
    </form>
</div>

@endsection