<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('/assets/css/admin.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <div class="flex-row">
                <h2 class="logo">
                    AimaTravel
                </h2>
                <nav>
                    <a href="/admin/tours">
                        Туры
                    </a>
                    <a href="/admin/hotels">
                        Отели
                    </a>
                    <a href="/auth/logout">
                        Выйти
                    </a>
                </nav>
            </div>

        </div>
    </header>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>