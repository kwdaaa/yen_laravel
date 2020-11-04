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




</body>
</html>