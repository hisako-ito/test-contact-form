<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
                <div class="header__nav">
                    <button class="header__nav-button" onclick="location.href='./login'">login</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="register__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <div class="register-content__inner">
                <form class="form" action="/register" method="post">
                @csrf
                    <div class="form__group">
                        <div class="form__group-title">
                            <label class="form__label--item" for="name">お名前</label>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="例: 山田 太郎">
                            </div>
                            <div class="form__error">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <label class="form__label--item" for="email">メールアドレス</label>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="例: test@example.com">
                            </div>
                            <div class="form__error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <label class="form__label--item" for="password">パスワード</label>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="password" name="password" id="password" placeholder="例: coachtech1106">
                            </div>
                            <div class="form__error">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form__button">
                        <button class="form__button-submit" type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
