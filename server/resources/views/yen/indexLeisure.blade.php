@extends('layouts.appIndex')

@section('title', '娯楽費')

@section('content')
    {{-- コンテンツ --}}
    <div class="contents">

        {{-- person1 --}}
        <div class="person">
            <img src="{{ asset('/img/person1_l.png') }}" alt="person1" height="40">
            <p class="title">{{ $couple->person1_name }}の娯楽費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            @if(count($leisures_person1)>0)
                @foreach ($leisures_person1 as $leisure_person1)
                <table class="person_record position-relative">
                <tr>
                    <td><a href="{{ $leisure_person1->id }}/add/edit" class="stretched-link"></a></td>
                    <td class="date" >{{ date('Y/m/d', strtotime($leisure_person1->date)) }}</td>
                    <td class="price">¥{{ number_format($leisure_person1->price) }}</td>
                </tr>
                </table>
                @endforeach
            @else
                <table class="person_non_record">
                    <tr>
                        <td class="date"></td>
                        <td class="price">¥0</td>
                    </tr>
                </table>
            @endif

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="total">合  計</td>
                    <td class="total_price">¥{{ number_format($couple->total->person1_leisure_total) }}</td>
                </tr>                
            </table>
        </div>

        {{-- person2 --}}
        <div class="person">
            <img src="{{ asset('/img/person2_l.png') }}" alt="person2" height="40">
            <p class="title">{{ $couple->person2_name }}の娯楽費</p>

            <hr class="line1">

            {{-- 家計記録 --}}
            @if(count($leisures_person2)>0)
                @foreach ($leisures_person2 as $leisure_person2)
                <table class="person_record position-relative">
                <tr>
                    <td><a href="{{ $leisure_person2->id }}/add/edit" class="stretched-link"></a></td>
                    <td class="date" >{{ date('Y/m/d', strtotime($leisure_person2->date)) }}</td>
                    <td class="price">¥{{ number_format($leisure_person2->price) }}</td>
                </tr>
                </table>
                @endforeach
            @else
                <table class="person_non_record">
                    <tr>
                        <td class="date"></td>
                        <td class="price">¥0</td>
                    </tr>
                </table>
            @endif

            <hr class="line2">

            {{-- 家計記録：合計 --}}
            <table class="person_total">                
                <tr>
                    <td class="total">合  計</td>
                    <td class="total_price">¥{{ number_format($couple->total->person2_leisure_total) }}</td>
                </tr>                
            </table>
        </div>
    </div>
@endsection
