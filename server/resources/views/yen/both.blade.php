@extends('layouts.appBoth')

@section('title', 'ふたりの家計')

@section('content')

    {{-- コンテンツ --}}
    <div class="contents">

        {{-- アイコン --}}
        <div class="icon">
            <img class="img_food" src="{{ asset('/img/food_l.png') }}" alt="食費" width="65" height="65">
            <img class="img_daily" src="{{ asset('/img/daily_l.png') }}" alt="日用品費" width="65" height="65">
            <img class="img_leisure" src="{{ asset('/img/leisure_l.png') }}" alt="娯楽費" width="65" height="65" >
            <img class="img_housing" src="{{ asset('/img/housing_l.png') }}" alt="固定費" width="65" height="65">
            <img class="img_other" src="{{ asset('/img/other_l.png') }}" alt="その他" width="65" height="65">
            {{-- <img class="img_total" src="{{ asset('/img/total_l.png') }}" alt="合計" width="60" height="60"> --}}
        </div>

        
        {{-- ふたりの家計 --}}
        <div class="person">
            <img class="person_special" src="{{ asset('/img/couple_l.png') }}" alt="couple" height="40">
            <p class="title">ふたりの家計</p>

            <hr class="line1">

            {{-- ふたりの家計記録 --}}
            <table class="person_record">
                <tr>
                    <td class="date" ><a href="/yen/1/1">¥{{ $couple->total->both_food_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/2">¥{{ $couple->total->both_daily_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/3">¥{{ $couple->total->both_leisure_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/4">¥{{ $couple->total->both_housing_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/5">¥{{ $couple->total->both_other_total }}</a></td>
                </tr>
            </table>

            <hr class="line2">            

            {{-- ふたりの家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="date">¥{{ $couple->total->both_total }}</td>
                </tr>                
            </table>
        </div>


        {{-- person1の家計 --}}
        <div class="person">
            <img src="{{ asset('/img/person1_l.png') }}" alt="person1" height="40">
            <p class="title">{{ $couple->person1_name }}の家計</p>

            <hr class="line1">

            {{-- person1の家計記録 --}}
            <table class="person_record">
                <tr>
                    <td class="date" ><a href="/yen/1/1">¥{{ $couple->total->person1_food_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/2">¥{{ $couple->total->person1_daily_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/3">¥{{ $couple->total->person1_leisure_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/4">¥{{ $couple->total->person1_housing_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/5">¥{{ $couple->total->person1_other_total }}</a></td>
                </tr>
            </table>

            <hr class="line2">            

            {{-- person1の家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="date" >¥{{ $couple->total->person1_total }}</td>
                </tr>                
            </table>
        </div>


        {{-- person2の家計 --}}
        <div class="person">
            <img src="{{ asset('/img/person2_l.png') }}" alt="person2" height="40">
            <p class="title">{{ $couple->person2_name }}の家計</p>

            <hr class="line1">

            {{-- person2の家計記録 --}}
            <table class="person_record">
                <tr>
                    <td class="date" ><a href="/yen/1/1">¥{{ $couple->total->person2_food_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/2">¥{{ $couple->total->person2_daily_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/3">¥{{ $couple->total->person2_leisure_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/4">¥{{ $couple->total->person2_housing_total }}</a></td>
                </tr>
                <tr>
                    <td class="date" ><a href="/yen/1/5">¥{{ $couple->total->person2_other_total }}</a></td>
                </tr>
            </table>

            <hr class="line2">            

            {{-- person2の家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="date" >¥{{ $couple->total->person2_total }}</td>
                </tr>                
            </table>
        </div>

@endsection