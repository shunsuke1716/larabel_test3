<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        body {
            font-size: 16px;
            margin: 5px;
        }

        h1 {
            font-size: 60px;
            color: white;
            text-shadow: 1px 0 5px #289ADC;
            letter-spacing: -4px;
            margin-left: 10px
        }

        .content {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="admin__content">
        <div class="admin__heading">
            <h1>管理システム</h1>
        </div>
    </div>
    <form class="form" method="post">
    @csrf
        <div class="form__group">
            <span class="form__label--item">お名前</span>
            <input type="text" name="name">
        </div>
        <div class="form__group">
            <span class="form__label--item">性別</span>
            <input type="radio" name="gender" value="0" checked />全て
            <input type="radio" name="gender" value="1">男性
            <input type="radio" name="gender" value="2">女性
        </div>
        <div class="form__group">
            <span class="form__label--item">登録日</span>
            <input type="text" name="resister_before">〜
            <input type="text" name="resister_after">
        </div>
        <div class="form__group">
            <span class="form__label--item">メールアドレス</span>
            <input type="email" name="email">
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">検索
            </button>
    </div>

    </form>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>