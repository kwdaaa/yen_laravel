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
            <div class="record">
                {{-- 日付 --}}
                <div class="date">
                    @foreach ($foods_person1 as $food_person1)
                        <p>{{ $food_person1->date }}</p>
                    @endforeach
                </div>
                {{-- 値段 --}}
                <div class="price">
                    @foreach ($foods_person1 as $food_person1)
                        <p>{{ $food_person1->price }}</p>
                    @endforeach
                </div>
            </div>

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
                    @foreach ($foods_person2 as $food_person2)
                        <p>{{ $food_person2->date }}</p>
                    @endforeach
                </div>
                {{-- 値段 --}}
                <div class="price">
                    @foreach ($foods_person2 as $food_person2)
                        <p>{{ $food_person2->price }}</p>
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