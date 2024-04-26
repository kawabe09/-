<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                FashionablyLate
            </h1>
        </div>
        <div class="header__logout">
            <a class="header__logo" href="/login">
                logout
            </a>
        </div>
    </header>

    <main>
        <div class="todo__content">
            <div class="section__title">
                <h1>Admin</h1>
            </div>
            <form class="search-form" action="/" method="get">
                @csrf
                <div class="search-form__item">
                    <input type="text" class="search-form__item-input" name="keyword" value="{{old('keyword')}}">
                    <select class="search-form__item-select" name="search-form__item-select">
                        <option value="">性別</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                    <select class="search-form__item-select" name="category_id">
                        <option value="">お問い合わせ内容</option>
                        @foreach ($contacts as $contact)
                            <option value="{{ $contact['category_id'] }}">{{ $contact['category_id'] }}</option>
                        @endforeach
                    </select>
                    <input type="date"></input>
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type=" submit">検索</button>
                </div>
            </form>
            <div class="todo-table">
                <table class="todo-table__inner">
                    <tr class="todo-table__row">
                        <th class="todo-table__header">
                            <span class="todo-table__header-span">お名前</span>
                            <span class="todo-table__header-span">性別</span>
                            <span class="todo-table__header-span">メールアドレス</span>
                            <span class="todo-table__header-span">お問い合わせ内容</span>
                        </th>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr class="todo-table__row">
                        <td class="todo-table__item">
                            <form class="detail-form" action="/admin/delete" method="post">
                                @method('DELETE')
                                @csrf
                                <div class="detail-form__item">
                                    <input class="detail-form__item-input" type="text" name="first_name" value="{{ $contact['first_name'] }}">
                                    <input class="detail-form__item-input" type="text" name="last_name" value="{{ $contact['last_name'] }}">
                                    <input type="hidden" name="id" value="{{ $contact['id'] }}">
                                </div>
                                <div class="detail-form__item">
                                    <p class="detail-form__item-p">{{ $contact['gender'] }}</p>
                                </div>
                                <div class="detail-form__item">
                                    <p class="detail-form__item-p">{{ $contact['email'] }}</p>
                                </div>
                                <div class="detail-form__item">
                                    <p class="detail-form__item-p">{{ $contact['category_id'] }}</p>
                                </div>
                                <div class="detail-form__button">
                                    <button class="detail-form__button-submit" type="submit">削除</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
@endsection
    </main>
</body>

</html>