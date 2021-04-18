<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать тур</title>
</head>
<body>
<form method="post" action="{{ route("tour.store") }}">
    @csrf
    <div>
        <label for="tourCode">Tour Code</label>
        <input type="text" name="tourCode" placeholder="Tour Code">
    </div>
    <div>
        <label for="country">Country</label>
        <input type="text" name="country" placeholder="Страна">
    </div>
    <div>
        <label for="focus">Куда</label>
        <input type="text" name="focus" placeholder="Куда">
    </div>
    <div>
        <label for="price">Куда</label>
        <input type="number" name="price" placeholder="Цена">
    </div>
    <div>
        <label for="daysAmount">Количество дней</label>
        <input type="number" name="daysAmount" placeholder="Количество дней">
    </div>
    <div>
        <label for="supply">Хавка</label>
        <input type="text" name="supply" placeholder="Хавчик">
    </div>
    <div>
        <label for="transport">Транспорт</label>
        <input type="text" name="transport" placeholder="Транспорт">
    </div>
    <input type="text" name="photoUrl" value="./img/kantepenis.jpg">
    <input type="text" name="photoName" value="kante penis">
    <input type="text" name="hotelId" value="1">
    <div>
        <label for="visa">Visa</label>
        <input type="number" name="visa" placeholder="Виза">
    </div>
    <button type="submit">Создать</button>
</form>
</body>
</html>


