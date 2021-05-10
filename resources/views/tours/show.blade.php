@extends('admin.home')

@section('content')

    <div class="container">
        <a href="/admin/tours/add" class="btn btn-success">Добавить тур</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Страна</th>
                <th scope="col">Направление</th>
                <th scope="col">Длительность</th>
                <th scope="col">Вид тура</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($tours as $tour)
                <tr>
                    <th scope="row">{{ $tour->country }}</th>
                    <td>{{ $tour->tour_focus }}</td>
                    <td>{{ $tour->days_amount }}</td>
                    <td>{{ $tour->tour_type }}</td>
                    <td><a class="btn btn-primary" href="/admin/tours/edit/{{$tour->tour_id}}">Редактировать</a><button data-id="{{$tour->tour_id}}" class="btn delete-tour btn-danger offset-1">Удалить</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        const URi = window.location.origin;
        const $deleteBtns = document.querySelectorAll('button.btn-danger');

        $deleteBtns.forEach($deleteBtn => {
            $deleteBtn.addEventListener('click', function(e) {
                const currentId = e.target.getAttribute('data-id');
                if(e.target.classList.contains('delete-tour')) {
                    if(confirm("Вы действительно хотите удалить тур ?")) {
                        window.location.replace(URi + '/admin/tours/delete/' + currentId);
                    }
                }
                e.preventDefault();
            })
        })

    </script>

@endsection