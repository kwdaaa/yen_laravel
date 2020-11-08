@extends('layouts.appCreate')

@section('title', '家計編集')

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
        <p>日 付</p>
        @error('title')
            <p class="error">*</p>
        @enderror            
            <input class="input" type="date" name = "date" min="2019-11-01" max="2025-12-31" value="{{ old('date', $add->date) }}">

        <p>購入者</p>
        @error('person')
            <p class="error">*</p>
        @enderror    
            <select class="input" name="person" size="1">
                <option value="1" @if(old('person', $add->person) == 1) selected @endif>
                    {{ $couple->person1_name }}
                </option>

                <option value="0" @if(old('person', $add->person) == 0) selected @endif>
                    {{ $couple->person2_name }}
                </option>
            </select>

        <p>金 額<br></p>
        @error('price')
            <p class="error">*</p>
        @enderror  
            <input class="input" type="number" name="price" value="{{ old('price', $add->price) }}" min="1">

        <p>カテゴリー<br></p>
        @error('category_id')
            <p class="error">*</p>
        @enderror  
            <select class="input" name="category_id" size="1">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if(old('category_id', $add->category_id) == $category->id ) selected @endif>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
            {{-- <select class="input" name="category_id" size="1" value="{{ old('category_id', $add->category_id) }}">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $add->category_id ) selected @endif>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select> --}}
            
            <button class="edit" type="submit">編　集</button>
</form>

    <div>
        <form action="/yen/1/{{ $add->id }}/add" method="post">
            @csrf
            @method('DELETE')
                <button class="delete" type="submit" onclick="if(!confirm('削除しますか？')){return false};">削　除</button>
        </form>
    </div>
</div>

@endsection