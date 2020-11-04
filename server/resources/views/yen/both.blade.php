@extends('layouts.app')

@section('title', 'ふたりの家計')

@section('content')
{{-- both --}}
<p>ふたりの家計</p>
<p>食費：{{ $couple->total->both_food_total }}</p>
<p>日用品費：{{ $couple->total->both_daily_total }}</p>
<p>娯楽費：{{ $couple->total->both_leisure_total }}</p>
<p>固定費：{{ $couple->total->both_housing_total }}</p>
<p>その他：{{ $couple->total->both_others_total }}</p>
<p>合計：{{ $couple->total->both_total }}</p>

{{-- person1 --}}
<p>{{ $couple->person1_name }}の家計</p>
<p>食費：{{ $couple->total->person1_food_total }}</p>
<p>日用品費：{{ $couple->total->person1_daily_total }}</p>
<p>娯楽費：{{ $couple->total->person1_leisure_total }}</p>
<p>固定費：{{ $couple->total->person1_housing_total }}</p>
<p>その他：{{ $couple->total->person1_others_total }}</p>
<p>合計：{{ $couple->total->person1_total }}</p>

{{-- person2 --}}
<p>{{ $couple->person2_name }}の家計</p>
<p>食費：{{ $couple->total->person2_food_total }}</p>
<p>日用品費：{{ $couple->total->person2_daily_total }}</p>
<p>娯楽費：{{ $couple->total->person2_leisure_total }}</p>
<p>固定費：{{ $couple->total->person2_housing_total }}</p>
<p>その他：{{ $couple->total->person2_others_total }}</p>
<p>合計：{{ $couple->total->person2_total }}</p>
@endsection