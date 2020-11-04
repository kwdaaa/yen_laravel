@extends('layouts.app')

@section('title', '食費')

@section('content')
    {{-- コンテンツ --}}
    <div class="contents">
        <div class="person1">
        <p>{{ $couple->person1_name }}の{{ $category->category_name}}</p>

            <hr class="line1">

            <table class="person1_add">
                <tr>
                    <td class="date">10月1日</td>
                    <td class="price">¥1,000</td>
                </tr>
                <tr>
                    <td class="date">10月3日</td>
                    <td class="price">¥2,000</td>
                </tr>
                <tr>
                    <td class="date">10月5日</td>
                    <td class="price">¥3,000</td>
                </tr>
                <tr>
                    <td class="date">10月7日</td>
                    <td class="price">¥4,000</td>
                </tr>                
                <tr>
                    <td class="date">10月9日</td>
                    <td class="price">¥5,000</td>
                </tr>
            </table>

            <hr class="line2">

            <table class="person1_total">                
                <tr>
                    <td class="date">合計</td>
                    <td class="price">¥15,000</td>
                </tr>                
            </table>
        </div>


        <div class="person2">
            <p>{{ $couple->person2_name }}の{{ $category->category_name}}</p>

            <hr class="line1">

            <table class="person2_add">
                <tr>
                    <td class="date">10月1日</td>
                    <td class="price">¥1,000</td>
                </tr>
                <tr>
                    <td class="date">10月3日</td>
                    <td class="price">¥2,000</td>
                </tr>
                <tr>
                    <td class="date">10月5日</td>
                    <td class="price">¥3,000</td>
                </tr>
                <tr>
                    <td class="date">10月7日</td>
                    <td class="price">¥4,000</td>
                </tr>                
                <tr>
                    <td class="date">10月9日</td>
                    <td class="price">¥5,000</td>
                </tr>
            </table>

            <hr class="line2">

            <table class="person2_total">                
                <tr>
                    <td class="date">合計</td>
                    <td class="price">¥15,000</td>
                </tr>                
            </table>
        </div>
    </div>
@endsection