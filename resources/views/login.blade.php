<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>
<body>
    <header class="header">
        <h1>Atte</h1>
    </header>

    <main>
        <div class="login_main">
            <div class="login_heeder">
                <h2>ログイン</h2>
            </div>

            <form action="{{ route('form.login') }}" method="POST">
                <div class="login_group">
                   <div class="form__input--text">
                      <input type="text" name="email" placeholder="メールアドレス" />
                   </div>
                   <div class="form__input--text">
                      <input type="text" name="passwold" placeholder="パスワード" />
                   </div>
                   <div class="form__button">
                      <button class="form__button-submit" type="submit">ログイン</button>
                   </div>
                </div>
            </form>
            <div>
                <p class="text">アカウントをお持ちでない方はこちらから</p>
                <a class="blue" href="register.blade.php">会員登録</a>
            </div>
        </div>
        <footer class="fooder">
            <p class="footer_text">Atte,inc</p>
        </footer>
    </main>
</body>
</html>