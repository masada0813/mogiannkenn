<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogianken</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/register.css') }}" />
</head>
<body>
    <header class="header">
        <h1>Atte</h1>
    </header>

    <main>
        <div class="index_group">
           <h2>会員登録</h2>
            <form action="{{ route('form.register') }}" method="post">
               <div class="form__input--text">
                  <input type="text" name="name" placeholder="名前" />
               </div>
               <div class="form__input--text">
                  <input type="email" name="email" placeholder="メールアドレス" />
               </div>
               <div class="form__input--text">
                  <input type="passwold" name="passwold" placeholder="パスワード" />
               </div>
               <div class="form__input--text">
                  <input type="passwold" name="passwold" placeholder="確認用パスワード" />
               </div>
               <a href="login.bleade.php" class="btn">会員登録</a>
               <!-- <div class="form__button">
                  <button class="form__button-submit" type="submit">会員登録</button>
               </div> -->
            </form>
            <div>
               <p class="text">アカウントをお持ちの方はこちらから</p>
               <a class="blue" href="login.blade.php">ログイン</a>
            </div>
        </div>
        <footer class="footer">
            <p class="footer_text">Atte,inc</p>
        </footer>
    </main>
</body>
</html>