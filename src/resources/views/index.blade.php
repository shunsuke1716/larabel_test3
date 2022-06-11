<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Form</title>
        <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    </head>

        <body>

        <main>
            <div class="contact-form__content">
                <div class="contact-form__heading">
                    <h2>お問い合わせ</h2>
                </div>
                <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
                <form class="form h-adr" action="/contacts/confirm" method="post">
                    @csrf
                    <div class="form__group1">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <ul>
                                <li>
                                    <input type="text" name="first" value="{{ old('first') }}"><br>
                                    <label class="form__group-note">例)山田</label>
                                </li>
                                <li>
                                    <input type="text" name=last value="{{ old('last') }}"><br>
                                    <label class="form__group-note">例)太郎</label>
                                </li>
                            </ul>

                            <div class="form__error">
                                @error('first')
                                {{$message}}
                                @enderror
                                @error('last')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form__group1">
                        <div class="form__group-title">
                            <span class="form__label--item">性別</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">

                                <input type="radio" name="gender" value="1" checked  />男性
                                <input type="radio" name="gender" value="2">女性

                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" value="{{ old('email') }}"><br>
                                <label class="form__group-note">例)text@example.com</label>
                            </div>
                            <div class="form__error">
                                @error('email')
                                {{$message}}
                                @enderror
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
                                <span class="p-country-name" style="display:none;">Japan</span>
                                〒<input type="text" class="p-postal-code" maxlength="8" name="postcode" value="{{ old('postcode') }}"><br>
                                <label class="form__group-note">例)〒123-4567</label>
                            </div>
                            <div class="form__error">
                                @error('postcode')
                                {{$message}}
                                @enderror
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
                                <input type="text" class="p-region p-locality p-street-address p-extended-address" name="address" value="{{ old('address') }}"><br>
                                <label class="form__group-note">例)東京都渋谷区千駄ヶ谷1-2-3</label>
                            </div>
                            <div class="form__error">
                                @error('address')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">建物名</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="building_name" value="{{ old('building_name') }}"><br>
                                <label class="form__group-note">例）千駄ヶ谷マンション101</label>
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">ご意見</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--textarea">
                                <textarea name="opinion" value="{{ old('opinion') }}"></textarea>
                            </div>
                        </div>
                        <div class="form__error">
                                @error('opinion')
                                {{$message}}
                                @enderror
                            </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">確認</button>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>