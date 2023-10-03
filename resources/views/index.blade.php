<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>打刻ページ</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/stamp.css')}}" />
</head>
<body>
    <header class="header">
        <div>
            <h1>Atte</h1>
        </div>
        <nav>
           <div>
              <ul class="header_nav">
                <li class="header_item"><a href="#">ホーム</a></li>
                <li class="header_item"><a href="attendance.blade.php">日付一覧</a></li>
                <li class="header_item"><a href="login.blade.php">ログアウト</a></li>
              </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="index_main">
            <h2>{{ $name['name'] }}さんお疲れ様です</h2>
            <form class="create-form" action="{{route('form.attendance')}}" method="POST">
                @csrt
                <div class="grit">
                   <button class="create-form__button-submit" type="submit" name="start-work" value="">勤務開始</button>
                   <button class="create-form__button-submit" type="submit" name="end-work" value="">勤務終了</button>
                   <button class="create-form__button-submit" type="submit" name="Break-start" value="">休憩開始</button>
                   <button class="create-form__button-submit" type="submit" name="Break-end" value="">休憩終了</button>
                </div>
            </form>
           
        </div>
        <footer class="footer">
            <p class="footer_text">Atte,inc</p>
        </footer>
    </main>
</body>
</html>