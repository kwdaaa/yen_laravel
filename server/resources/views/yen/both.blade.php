{{-- both --}}
<p>ふたりの家計</p>
<p>食費：{{ $total->both_food_total }}</p>
<p>日用品費：{{ $total->both_daily_total }}</p>
<p>娯楽費：{{ $total->both_leisure_total }}</p>
<p>固定費：{{ $total->both_housing_total }}</p>
<p>その他：{{ $total->both_others_total }}</p>
<p>合計：{{ $total->both_total }}</p>

{{-- person1 --}}
<p>かわだの家計</p>
<p>食費：{{ $total->person1_food_total }}</p>
<p>日用品費：{{ $total->person1_daily_total }}</p>
<p>娯楽費：{{ $total->person1_leisure_total }}</p>
<p>固定費：{{ $total->person1_housing_total }}</p>
<p>その他：{{ $total->person1_others_total }}</p>
<p>合計：{{ $total->person1_total }}</p>

{{-- person2 --}}
<p>しぶやの家計</p>
<p>食費：{{ $total->person2_food_total }}</p>
<p>日用品費：{{ $total->person2_daily_total }}</p>
<p>娯楽費：{{ $total->person2_leisure_total }}</p>
<p>固定費：{{ $total->person2_housing_total }}</p>
<p>その他：{{ $total->person2_others_total }}</p>
<p>合計：{{ $total->person2_total }}</p>

