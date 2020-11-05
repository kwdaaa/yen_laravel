@extends('layouts.app')

@section('title', '日用品費')

@section('content')
    {{-- コンテンツ --}}
    <div class="contents">

        {{-- person1 --}}
        <div class="person1">
            <p class="title">{{ $couple->person1_name }}の日用品費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            <table class="person1_record">
                <tr>
                    @foreach ($dailies_person1 as $daily_person1)
                        <a href="/">
                            <td class="date">{{ $daily_person1->date }}
                                <td class="price">{{ $daily_person1->price }}</td>
                            </td>
                        </a>
                    @endforeach
                </tr>
            </table>

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <table class="person1_total">                
                <tr>
                    <td class="date">合  計</td>
                    <td class="price">{{ $couple->total->person1_daily_total }}</td>
                </tr>                
            </table>
        </div>

        {{-- person2 --}}
        <div class="person2">
            <p class="title">{{ $couple->person2_name }}の日用品費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            <table class="person1_record">
                <tr>
                    @foreach ($dailies_person2 as $daily_person2)
                        <td class="date">{{ $daily_person2->date }}</td>
                    @endforeach
                    @foreach ($dailies_person2 as $daily_person2)
                        <td class="price">{{ $daily_person2->price }}</td>
                    @endforeach
                </tr>
            </table>

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <table class="person2_total">                
                <tr>
                    <td class="date">合  計</td>
                    <td class="price">{{ $couple->total->person2_daily_total }}</td>
                </tr>                
            </table>
        </div>
    </div>
@endsection
