@extends('layouts.app')

@section('title', '家計登録')

@section('content')

{{-- エラーを表示するためのコード --}}
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach


<form action="/" method="post">

    @csrf
    
    {{-- {{ old('title') }}を書くことで、エラーが起きたときに、書いた値が表示される。 --}}

    <p>
        日 付<br>
        <select name="year">
            <option value="2020-11-01">2020年11月1日</option>
            <option value="2020-11-02">2020年11月2日</option>
        </select>
    </p>
    <p>
        購入者<br>
        <input type="date" name="body">{{ old('body') }}>
    </p>
    <p>
        金 額<br>
        <input type="number" name="title" value="{{ old('title') }}">
    </p>
    <p>
        カテゴリー<br>
        <input type="number" name="title" value="{{ old('title') }}">
    </p>

    <input type="submit" value="投稿">
</form>
