@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
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
                            <ul>
                                @error('last_name')
                                <li>{{ $message }}</li>
                                @enderror
                                @error('first_name')
                                <li>{{ $message }}</li>
                                @enderror
                            </ul>
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
                                <input type="radio" name="gender" id="male" value="1" checked>
                                <span>男性</span>
                            </label>
                            <label for="female">
                                <input type="radio" name="gender" id="female" value="2">
                                <span>女性</span>
                            </label>
                            <label for="other">
                                <input type="radio" name="gender" id="other" value="3">
                                <span>その他</span>
                            </label>
                        </div>
                        <div class="form__error">
                                @error('gender')
                                <li>{{ $message }}</li>
                                @enderror
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
                            <ul>
                                @error('email')
                                <li>{{ $message }}</li>
                                @enderror
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="tell">電話番号<span class="form__label--required">※</span></label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text--tel">
                            <input type="tel" name="tell_left" id="tell" placeholder="090" value="{{ old('tell_left') }}">
                            <span>-</span>
                            <input type="tel" name="tell_middle" placeholder="1234" value="{{ old('tell_middle') }}">
                            <span>-</span>
                            <input type="tel" name="tell_right" placeholder="5678" value="{{ old('tell_right') }}">
                        </div>
                        <div class="form__error">
                            <ul>
                                @error('tell')
                                <li>{{ $message }}</li>
                                @enderror
                            </ul>
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
                            <ul>
                                @error('address')
                                <li>{{ $message }}</li>
                                @enderror
                            </ul>
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
                                        @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}" @if(old('category_id') == $category['id']) selected @endif>{{ $category['content'] }}</option>
                                        @endforeach
                                </select>
                        </div>
                        <br />
                        <div class="form__error">
                            <ul>
                                @error('category_id')
                                <li>{{ $message }}</li>
                                @enderror
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item form__label--detail" for="detail">お問い合わせ内容<span class="form__label--required">※</span><label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" id="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                        </div>
                        <div class="form__error">
                            <ul>
                                @error('detail')
                                <li>{{ $message }}</li>
                                @enderror
                            </ul>
                        </div>
                    </div>
                </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>

            </form>
        </div>
@endsection