<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
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
                <div class="header__nav-form">
                    <button class="header__nav-button" onclick="location.href='./register'">register</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="login__content">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>
            <div class="login-content__inner">
                <form class="form" action="/login" method="post">
                    @csrf
                        <div class="form__group">
                            <div class="form__group-title">
                                <label class="form__label--item" for="email">メールアドレス</label>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
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
                        <button class="form__button-submit" type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>