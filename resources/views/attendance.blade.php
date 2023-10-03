<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/date.css'}}" />
</head>
<body>
    <header class="header">
        <div>
            <h1>Atte</h1>
        </div>
        <nav>
              <ul class="header_nav">
                <li class="header_item"><a href="index.blade.php">ホーム</a></li>
                <li class="header_item"><a href="#">日付一覧</a></li>
                <li class="header_item"><a href="login.blade.php">ログアウト</a></li>
              </ul>
        </nav>
    </header>

    <main>
        <div class="dating">
           <button class="main_button" onclick="location.href='./index.html'"><</button>
           <h2>{{$dt}}</h2>
           <button class="main_button" onclick="location.href='./index.html'">></button>
        
           <!-- <div class="update-form">
           <input class="update-form__item-input" type="text" value="{{ $category['name'] }}">
           </div> -->
        </div>
        <table>
            <tr>
                <th colspan="1">名前</th>
                <th colspan="1">勤務開始</th>
                <th colspan="1">勤務終了</th>
                <th colspan="1">休憩開始</th>
                <th colspan="1">勤務時間</th>
            </tr>
            <!-- @foreach($members as $member) -->
            <tr>
                <td>{{$name}}</td>
                <td>{{$start-work}}</td>
                <td>{{$end-work}}</td>
                <td>{{$Break-start}}</td>
                <td>{{$Break-end}}</td>
            </tr>
            <tr>
                <td>テスト太郎</td>
                <td>10:00:10</td>
                <td>20:00:00</td>
                <td>00:30:00</td>
                <td>09:29:50</td>
            </tr>
            <tr>
                <td>テスト太郎</td>
                <td>10:00:10</td>
                <td>20:00:00</td>
                <td>00:30:00</td>
                <td>09:29:50</td>
            </tr>
            <tr>
                <td>テスト太郎</td>
                <td>10:00:20</td>
                <td>20:00:00</td>
                <td>00:30:00</td>
                <td>09:29:40</td>
            </tr>
            <tr>
                <td>テスト太郎</td>
                <td>10:00:20</td>
                <td>20:00:00</td>
                <td>00:30:00</td>
                <td>09:29:40</td>
            </tr>
        </table>
        {{ $forms->appends(request()->input())->links('pagination::bootstrap-4') }}
        <footer class="footer">
            <p class="footer_text">Atte,inc</p>
        </footer>
    </main>
</body>
</html>