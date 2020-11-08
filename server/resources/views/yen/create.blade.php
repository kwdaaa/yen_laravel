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


        <p>日 付</p>
        @error('date')
            <div class="error">*</div>
        @enderror        
            <input class="input" type="date" name = "date" value="<?php echo date('Y-m-d'); ?>" min="2019-11-01" max="2025-12-31" value="{{ old('date') }}">

        <p>購入者</p>
        @error('person')
            <p class="error">*</p>
        @enderror
            <select class="input" name="person" size="1">
                <option value=""></option>
                <option value="1" @if(old('person')=='1') selected  @endif>{{ $couple->person1_name }}</option>
                <option value="0" @if(old('person')=='0') selected  @endif>{{ $couple->person2_name }}</option>
            </select>
        </p>

        <p>金 額</p>
        @error('price')
            <p class="error">*</p>
        @enderror
            <input class="input" type="number" name="price" value="{{ old('price') }}" min="1">

        <p>カテゴリー</p>
        @error('category_id')
            <p class="error">*</p>
        @enderror
            {{-- <input type="text" name="category" value="食費, 日用品費, 娯楽費, 固定費, その他"> --}}
            <select class="input" name="category_id" size="1" value="{{ old('category_id') }}">
                <option value=""></option>
                <option value="1" @if(old('category_id')=='1') selected  @endif>食費</option>
                <option value="2" @if(old('category_id')=='2') selected  @endif>日用品費</option>
                <option value="3" @if(old('category_id')=='3') selected  @endif>娯楽費</option>
                <option value="4" @if(old('category_id')=='4') selected  @endif>固定費</option>
                <option value="5" @if(old('category_id')=='5') selected  @endif>その他</option>
            </select>

        <button class="create" type="submit">登　録</button>
    </form>
</div>

@endsection