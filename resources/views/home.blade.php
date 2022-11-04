<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>첫 화면</title>
</head>

<body>

        @if (Auth::check())
            <p>안녕하세요! {{ \Auth::user()->name}}님</p>
            <p><a href="/logout">로그아웃</a></p>
        @else
            <p>안녕하세요! 게스트님</p>
            <p><a href="/login">로그인</a> <a href="/register">회원등록</a></p>
        @endif
</body>

</html>
