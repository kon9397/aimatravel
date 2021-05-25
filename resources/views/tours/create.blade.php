<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать тур</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post" action="{{ route("tour.store")}}" enctype="multipart/form-data">

        @csrf
        <div class="form-group mb-3">
            <label for="tourCode">Tour Code</label>
            <input class="form-control" type="text" name="tourCode" placeholder="Tour Code">
        </div>
        <div class="form-group mb-3">
            <label for="country">Страна</label>
            <input class="form-control" type="text" name="country" placeholder="Страна">
        </div>
        <div class="form-group mb-3">
            <label for="focus">Направление</label>
            <input class="form-control" type="text" name="focus" placeholder="Направление">
        </div>
        <div class="form-group mb-3">
            <label for="price">Цена</label>
            <input class="form-control" type="number" name="price" placeholder="Цена">
        </div>
        <div class="form-group mb-3">
            <label for="daysAmount">Количество дней</label>
            <input class="form-control" type="number" name="daysAmount" placeholder="Количество дней">
        </div>
        <div class="form-group mb-3">
            <label for="supply">Питание</label>
            <input class="form-control" type="text" name="supply" id="supply" placeholder="Питание">
        </div>
        <div class="form-group mb-3">
            <label for="transport">Транспорт</label>
            <input class="form-control" type="text" name="transport" placeholder="Транспорт">
        </div>
        <div class="form-group mb-3">
            <label for="tourImage">Загрузить изображение</label>
            <input class="form-control" type="file" name="tourImage" id="tourImage">
        </div>

        <div class="form-group mb-3">
            <label for="photoName">Название изображения</label>
            <input class="form-control" type="text" name="photoName" placeholder="Название изображения">
        </div>
        <div class="form-group mb-3">
            <label for="hotelId">Выбрать отель:</label>
            <select class="form-control" name="hotelId" id="hotelId">
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->hotel_id }}">{{ $hotel->hotel_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="visa">Visa</label>
            <input class="form-control" type="number" name="visa" id="visa" placeholder="Виза">
        </div>
        <div class="form-group mb-3">
            <label for="covidTest">Тест на ковид</label>
            <input  type="checkbox" name="covidTest" id="covidTest">
        </div>
        <div class="form-group mb-3">
            <label for="touristInsurance">Туристическая страховка</label>
            <input type="checkbox" name="touristInsurance" id="touristInsurance">
        </div>
        <div class="form-group mb-3">
            <label for="burningTour">Горящий тур</label>
            <input type="checkbox" name="burningTour" id="burningTour">
        </div>
        <div class="form-group mb-3">
            <label for="touristInsurance">Дата</label>
            <input type="date" name="tourDate" id="tourDate">
        </div>
        <div class="form-group mb-3">
            <label for="tourType">Виды туров</label>
            <select class="form-control" name="tourType" id="tourType">
                <option value="Пакетные туры">
                    Пакетные туры
                </option>
                <option value="Экскурсионные туры">
                    Экскурсионные туры
                </option>
                <option value="Раннее бронирование">
                    Раннее бронирование
                </option>
                <option value="Туры на праздники">
                    Туры на праздники
                </option>
                <option value="Корпоративные туры">
                    Корпоративные туры
                </option>
            </select>
        </div>
        <button class="btn btn-primary form-control" type="submit">Создать</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


