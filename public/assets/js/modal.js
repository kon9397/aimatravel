function renderModal(tour) {
    document.querySelector('.overlay').classList.add('active');
    document.querySelector('.modal').innerHTML = `
        <h2 class="tour-title">${tour.country}</h2>
        <h3 class="tour-subtitle">${tour.tour_focus}</h3>
        <div class="flex-row">
            <div class="tour-image">
                <img src="${URI + tour.photo_url}" alt="">
            </div>
            <div class="tour-info">
                <p>Тип тура: ${tour.tour_type}</p>
                <p>Дата: ${tour.tour_date}</p>
                <p>Количество дней: ${tour.days_amount}</p>
                <p>Питание: ${tour.supply}</p>
                <p>Транспорт: ${tour.transport}</p>
                <p>Отель: ${tour.hotel.hotel_name}</p>
                <p>Тест на ковид: ${tour.covid_test === 1 ? "Обов'язково" : "Необов'язково"}</p>
                <p>Туристическая страховка: ${tour.tour_insurance === 1 ? "Обов'язково" : "Необов'язково"}</p>
            </div>
        </div>
    `;
    document.querySelector('.modal').classList.add('active');


}

function modal() {
    document.querySelector('body').addEventListener('click', function(e) {
        const currentCard = e.target.parentNode;

        if(currentCard.hasAttribute('data-modal')) {
            if(currentCard.dataset.modal === 'open') {
                const id = currentCard.dataset.id;

                fetch(URI + '/api/tour/' + id)
                    .then(response => response.json())
                    .then(data => renderModal(data));
            }

        }

        if(e.target.dataset.modal === 'close') {
            document.querySelector('.modal').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active')
        }
    })
}

modal();

