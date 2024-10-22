<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                FashionablyLate
            </h1>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>

            <form class="form" action="/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="name">お名前<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text--name">
                            <input type="text" name="last_name" id="name" placeholder="例: 山田" value="{{ old('last_name') }}">
                            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">性別<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <label for="male">
                                <input type="radio" name="gender" id="male" value="男性" checked>
                                <span>男性</span>
                            </label>
                            <label for="female">
                                <input type="radio" name="gender" id="female"value="女性">
                                <span>女性</span>
                            </label>
                            <label for="other">
                                <input type="radio" name="gender" id="other" value="その他">
                                <span>その他</span>
                            </label>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="email">メールアドレス<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="tell">電話番号<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text--tel">
                            <input type="tel" name="tell_left" id="tell" placeholder="090" value="">
                            <span>-</span>
                            <input type="tel" name="tell_middle" placeholder="1234" value="">
                            <span>-</span>
                            <input type="tel" name="tell_right" placeholder="5678" value="">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="address">住所<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="building">建物名<span class="form__label--required" style="visibility:hidden">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" id="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">お問い合わせの種類<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                                <select name="category_id" required>
                                    <option value="">選択してください</option>
                                    <option value="">サンプル</option>
                                </select>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item form__label--detail" for="detail">お問い合わせ内容<span class="form__label--required">※</span><label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" id="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('tel') }}"></textarea>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>

            </form>
        </div>
    </main>
</body>

</html>