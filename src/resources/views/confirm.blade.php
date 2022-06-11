<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Form</title>
        <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    </head>

        <body>

        <main>
            <div class="confirm__content">
                <div class="confirm__heading">
                    <h2>内容確認</h2>
                </div>
                <form class="form" action="/contacts" method="post">
                @csrf
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <input type="text" name="fullname" value="{{ $contact['fullname'] }}"readonly/>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">性別</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <input type="text" name="gender" value="{{ $contact['gender'] }}"readonly/>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" value="{{ $contact['email'] }}"readonly/>
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">郵便番号</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="postcode" value="{{ $contact['postcode'] }}"readonly/>
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">住所</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="address" value="{{ $contact['address'] }}"readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">建物名</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="building_name" value="{{ $contact['building_name'] }}"readonly/>
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">ご意見</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="opinion" value="{{ $contact['opinion'] }}"readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">送信</button>
                    </div>

                    <div class="form__group">
                        <a href="/">修正する</a>
                    </div>
                </form>



            </div>
        </main>
    </body>
</html>