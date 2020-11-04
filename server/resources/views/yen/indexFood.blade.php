@extends('layouts.app')

@section('title', '食費')

@section('content')
    {{-- コンテンツ --}}
    <div class="contents">

        {{-- person1 --}}
        <div class="person1">
            <p class="title">{{ $couple->person1_name }}の食費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            @if ($foods->where('person', 1 ))
            <div class="record">
                {{-- 日付 --}}
                <div class="date">
                    @foreach ($foods as $food)
                        <p>{{ $food->date }}</p>
                    @endforeach
                </div>
                {{-- 値段 --}}
                <div class="price">
                    @foreach ($foods as $food)
                        <p>{{ $food->price }}</p>
                    @endforeach
                </div>
            </div>
            @endif

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <div class="record_total">
                <p class="total">合  計</p>
                <p class="total">{{ $couple->total->person1_food_total }}</p>
            </div>
        </div>

        {{-- person2 --}}
        <div class="person2">
            <p class="title">{{ $couple->person2_name }}の食費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            <div class="record">
                {{-- 日付 --}}
                <div class="date">
                    @foreach ($foods as $food)
                        <p>{{ $food->date }}</p>
                    @endforeach
                </div>
                {{-- 値段 --}}
                <div class="price">
                    @foreach ($foods as $food)
                        <p>{{ $food->price }}</p>
                    @endforeach
                </div>
            </div>

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <div class="record_total">
                <p class="total">合  計</p>
                <p class="total">{{ $couple->total->person2_food_total }}</p>
            </div>
        </div>

    </div>

@endsection