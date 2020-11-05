@extends('layouts.appIndex')

@section('title', '食費')

@section('content')
    {{-- コンテンツ --}}
    <div class="contents">


        {{-- person1 --}}
        <div class="person">
            <img src="{{ asset('/img/person1_l.png') }}" alt="person1" height="40">
            <p class="title">{{ $couple->person1_name }}の食費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            <table class="person_record position-relative">
                @foreach ($foods_person1 as $food_person1)
                <tr>
                    <td class="date" ><a href="/" class="stretched-link"></a>{{ $food_person1->date }}</td>
                    <td class="price"><a href="/" class="stretched-link"></a>¥{{ $food_person1->price }}</td>
                </tr>
                @endforeach
            </table>

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="total">合  計</td>
                    <td class="total_price">¥{{ $couple->total->person1_food_total }}</td>
                </tr>                
            </table>
        </div>

        {{-- person2 --}}
        <div class="person">
            <img src="{{ asset('/img/person2_l.png') }}" alt="person2" height="40">
            <p class="title">{{ $couple->person2_name }}の食費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            <table class="person_record position-relative">
                @foreach ($foods_person2 as $food_person2)
                <tr>
                    <td class="date" ><a href="/" class="stretched-link"></a>{{ $food_person2->date }}</td>
                    <td class="price"><a href="/" class="stretched-link"></a>¥{{ $food_person2->price }}</td>
                </tr>
                @endforeach
            </table>

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="total">合  計</td>
                    <td class="total_price">¥{{ $couple->total->person2_food_total }}</td>
                </tr>                
            </table>
        </div>
    </div>
@endsection
