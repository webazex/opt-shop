<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Административная панель</title>
</head>
<body>
<header>
    <div class="site-size">
        <div class="site-size__header">
            <button type="button" class="header__menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="/admin/profile" class="header__user-info">
                <span class="user-info__job">Администратор: </span>
                <span class="user-info__fname">Одмэне</span>
                <span class="user-info__lname">Админ</span>
                <span class="user-info__sname">Админский</span>
            </a>
            <div class="header__end-panels">
                <a href="/out" class="end-panels__out"><span>Выйти</span></a>
            </div>
        </div>
    </div>
</header>
