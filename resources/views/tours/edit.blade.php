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
    <form method="post" action="{{ route("tour.update", ['id' => $tour->tour_id]) }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group mb-3">
            <label for="tourCode">Tour Code</label>
            <input class="form-control" type="text" name="tourCode" placeholder="Tour Code" value="{{ $tour->tour_code }}">
        </div>
        <div class="form-group mb-3">
            <label for="country">Страна</label>
            <input class="form-control" type="text" name="country" placeholder="Страна" value="{{ $tour->country }}">
        </div>
        <div class="form-group mb-3">
            <label for="focus">Направление</label>
            <input class="form-control" type="text" name="focus" placeholder="Направление" value="{{ $tour->tour_focus }}">
        </div>
        <div class="form-group mb-3">
            <label for="price">Цена</label>
            <input class="form-control" type="number" name="price" placeholder="Цена" value="{{ $tour->price }}">
        </div>
        <div class="form-group mb-3">
            <label for="daysAmount">Количество дней</label>
            <input class="form-control" type="number" name="daysAmount" placeholder="Количество дней" value="{{ $tour->days_amount }}">
        </div>
        <div class="form-group mb-3">
            <label for="supply">Питание</label>
            <input class="form-control" type="text" name="supply" id="supply" placeholder="Питание" value="{{ $tour->supply }}">
        </div>
        <div class="form-group mb-3">
            <label for="transport">Транспорт</label>
            <input class="form-control" type="text" name="transport" placeholder="Транспорт" value="{{ $tour->transport }}">
        </div>
        <div class="form-group mb-3">
            <div>
                <img class="img-fluid" src="{{URL::to($tour->photo_url) }}" alt="{{ $tour->photo_title }}">
            </div>
            <label for="newTourImage">Изменить изображение</label>
            <input class="form-control" type="file" name="newTourImage" id="newTourImage">
        </div>

        <div class="form-group mb-3">
            <label for="photoName">Название изображения</label>
            <input class="form-control" type="text" name="photoName" placeholder="Название изображения" value="{{ $tour->photo_title }}">
        </div>
        <div class="form-group mb-3">
            <label for="hotelId">Выбрать отель:</label>
            <select class="form-control" name="hotelId" id="hotelId">
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->hotel_id }}" {{ $tour->hotel->hotel_id === $hotel->hotel_id ? 'selected' : ''}}>{{ $hotel->hotel_name }}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group mb-3">
            <label for="visa">Visa</label>
            <input class="form-control" type="number" name="visa" id="visa" placeholder="Виза" value="{{ $tour->visa }}">
        </div>
        <div class="form-group mb-3">
            <label for="covidTest">Тест на ковид</label>
            <input type="checkbox" {{ $tour->covid_test === 1 ? 'checked' : '' }} name="covidTest" id="covidTest">
        </div>
        <div class="form-group mb-3">
            <label for="touristInsurance">Туристическая страховка</label>
            <input type="checkbox" {{ $tour->tour_insurance === 1 ? 'checked' : '' }} name="touristInsurance" id="touristInsurance">
        </div>
        <div class="form-group mb-3">
            <label for="burningTour">Горящий тур</label>
            <input type="checkbox" name="burningTour" id="burningTour">
        </div>
        <div class="form-group mb-3">
            <label for="tourType">Виды туров</label>
            <select class="form-control" name="tourType" id="tourType">
                <option value="Пакетные туры" {{ $tour->tour_type === "Пакетные туры" ? 'selected' : '' }}>
                    Пакетные туры
                </option>
                <option value="Экскурсионные туры" {{ $tour->tour_type === "Экскурсионные туры" ? 'selected' : '' }}>
                    Экскурсионные туры
                </option>
                <option value="Раннее бронирование" {{ $tour->tour_type === "Раннее бронирование" ? 'selected' : '' }}>
                    Раннее бронирование
                </option>
                <option value="Туры на праздники" {{ $tour->tour_type === "Туры на праздники" ? 'selected' : '' }}>
                    Туры на праздники
                </option>
                <option value="Корпоративные туры" {{ $tour->tour_type === "Корпоративные туры" ? 'selected' : '' }}>
                    Корпоративные туры
                </option>
            </select>
        </div>
        <button class="btn btn-primary form-control" type="submit">Редактировать</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


