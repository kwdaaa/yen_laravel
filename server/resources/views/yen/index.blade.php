<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>同棲用家計簿アプリ | Yen</title>

    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    {{-- ヘッダー --}}
    <div class="header">
        <div class="logo_img">
            <a href="/"><img src="{{ asset('/img/logo.png') }}" alt="ロゴ"></a>
        </div>

        <div class="add_img">
            <a href="/"><img src="{{ asset('/img/add.png') }}" alt="家計登録"></a>
        </div>

        <div class="config_img">
            <a href="/"><img src="{{ asset('/img/config.png') }}" alt="設定"></a>
        </div>
    </div>


    {{-- コンテンツ --}}
    <div class="contents">
        <div class="person1">
            <p>かわだの食費</p>

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
            <p>しぶやの食費</p>

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
    
</body>
</html>