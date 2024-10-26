<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
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
            @if (Auth::check())
            <div class="header__nav">
                <form class="header__nav-form" action="/logout" method="post">
                @csrf
                    <button class="header__nav-button">logout</button>
                </form>
            </div>
            @endif
        </div>
    </header>

    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
            <div class="admin__form">
                <form class="search-form">
                    <div class="search-form__item-keyword">
                        <input type="text" placeholder="名前やメールアドレスを入力してください">
                    </div>
                    <div>
                        <select class="search-form__item-gender" required>
                            <option value="">性別</option>
                            <option value="1">男性</option>
                            <option value="2">女性</option>
                            <option value="3">その他</option>
                            </select>
                        </div>
                        <div>
                            <select class="search-form__item-category" required>
                                <option value="">お問い合わせの種類</option>
                            </select>
                        </div>
                        <div>
                            <input class="search-form__item-date" type="date">
                        </div>
                        <div>
                            <button class="search-form__button--search" type="submit">検索</button>
                        </div>
                        <div>
                            <input class="search-form__button--reset" type="reset">
                        </div>
                    </form>
                </form>

                <form>
                    <div class="search__form-nav">
                        <div class="search__form-nav--export-button">
                            <button>エクスポート</button>
                        </div class="search__form-nav--pagination">
                            <div>{{ $contacts->links('vendor.pagination.bootstrap-4') }}</div>
                        </div>
                    </div>
                </form>

                <div class="search-table">
                    <table class="search-table__inner">
                        <tr class="search-table__row">
                            <th class="search-table__header">お名前</th>
                            <th class="search-table__header">性別</th>
                            <th class="search-table__header">メールアドレス</th>
                            <th class="search-table__header">お問い合わせの種類</th>
                            <th class="search-table__header" colspan="2"></th>
                        </tr>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td class="search-table__result">{{$contact->getDetail()}}</td>
                            <td class="search-table__result">{{$contact->processEachGender()}}</td>
                            <td class="search-table__result">{{$contact->email}}</td>
                            <td class="search-table__result">{{$contact->getContactType()}}</td>
                            <td class="search-table__result">{{$contact->detail}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>