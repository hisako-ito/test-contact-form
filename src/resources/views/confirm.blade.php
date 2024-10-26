@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/thanks" method="post">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                                <input type="text" value="{{ $full_name }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" value="{{ $contact['gender'] }}" readonly>
                                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="test" name="tell" value="{{ $tell }}" readonly>
                                <input type="hidden" name="tell" value="{{ $contact['tell'] }}">
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="category_id" value="{{$contact->getContactType(category_id)}}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <textarea type="text" name="detail" readonly>{{ $contact['detail'] }}</textarea>
                                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                    <a  href="/" class="form__button-correct">修正</a>
                </div>
            </form>
        </div>
@endsection
