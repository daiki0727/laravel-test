@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('button')
    <div class="header__login">
        <a href="/logout" class="header__button">logout</a>
    </div>
@endsection
 
@section('content')

<div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Admin</h2>
      </div>
      <form class="search-form" action="/admin" method="post">
        @csrf
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" name="content" placeholder="名前やメールアドレスを入力してください" value="{{ old('content') }}"/>
        </div>
        <div class="search__select">
              <select name="gender" id="">
                <option value="">性別</option>
                <option value="">男性</option>
                <option value="">女性</option>
                <option value="">その他</option>
              </select>
        </div>
       <div class="search__select">
              <select name="content" id="">
                <option value="">選択してください</option>
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="商品トラブル">商品トラブル</option>
                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                <option value="その他">その他</option>
              </select>
        </div>
         <div class="search__select">
            <input class="search-form__item-input" type="date"name="">
        </div>
         <div class="search__button">
          <button class="form__button-submit" type="submit">送信</button>
          </div>
          <div class="reset__button">
          <button class="form__button-reset" type="submit">リセット</button>
          </div>
       </form>
       <div class="search-form__middle">
        <a href="./csv.php">
            <button>エクスポート</button>
        </a>
        </div>
        <div class="contact-table">
         <table class="contact-table__inner">
              <tr class="contact-table__row">
                <th class="contact-table__header">お名前</th>
                <th class="contact-table__header">性別</th>
                <th class="contact-table__header">メールアドレス</th>
                <th class="contact-table__header">お問い合わせの種類</th>
                <th class="contact-table__header"></th>
            </tr>
              <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
             <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
             <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
             <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
             <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
             <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
             <tr class="contact-table__row">
                <td class="contact-table__description"> 
                    <form class="contact-name">
                        <div class="contact-name__item">
                            <input class="contact-name__item-input" type="text" name="last_name/first_name" value="山田 太郎">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-gender">
                        <div class="contact-gender__item">
                            <input class="contact-gender__item-input" type="text" name="gender" value="男性">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-mail">
                        <div class="contact-mail__item">
                            <input class="contact-gender__item-input" type="text" name="email" value="test@example.com">
                        </div>
                    </form>
                </td>
                <td class="contact-table__description">
                    <form class="contact-content">
                        <div class="contact-content__item">
                            <input class="contact-content__item-input" type="text" name="name" value="商品の交換について">
                        </div>
                    </form>
                </td>
                <td>
                    <div class="contact-detail__button">
                        <button class="contact-detail__button-submit" type="submit">詳細</button>
                    </div>
                </td>
            </tr>
            
        </div>


</div>
    

@endsection