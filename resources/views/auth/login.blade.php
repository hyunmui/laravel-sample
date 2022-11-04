<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인폼</title>
</head>

<body>
    @isset($errors)
        <p style="color: red;">{{ $errors->first('message') }}</p>
    @endisset
    <form name="loginform" action="/login" method="post">
        {{ csrf_field() }}
        <dl>
            <dt>메일주소:</dt>
            <dd><input type="text" name="email" size="30" value="{{ old('email')}}"></dd>
            <dt>비밀번호:</dt>
            <dd><input type="password" name="password" size="30"></dd>
        </dl>
        <button type="submit">로그인</button>
    </form>
</body>

</html>
