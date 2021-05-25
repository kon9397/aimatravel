const $tabs = document.querySelectorAll('.tab');

function renderTabs(data) {
    const $tourCards = document.querySelector('.tours-section .tours-cards .flex-row');
    if(data.length === 0) {

        document.querySelector('.empty-message').style.display = 'block';
        $tourCards.style.display = 'none';
    } else {
        document.querySelector('.empty-message').style.display = 'none';
        $tourCards.style.display = 'flex';
        $tourCards.innerHTML = '';
        data.forEach(tour => {
            $tourCards.innerHTML += `
            <div data-modal="open" data-id="${tour.tour_id}" class="tour-card ${tour.burning_tour === 1 ? 'burning' : ''}" style="background-image: url(${URI + tour.photo_url});">
                <div class="price">
                    <div class="flex-row">
                        <div class="burning-icon">
                            <img src="${URI + '/assets/img/fire.svg'}" alt="Burning tour icon">
                        </div>

                        <div class="tour-pricelist">
                            <p class="tour-price">${tour.price} $</p>
                            <p class="tour-days">${tour.days_amount} ночей</p>
                        </div>
                    </div>
                </div>

                <h4 class="tour-city">${tour.tour_focus}</h4>
                <div class="tour-info">
                    <p class="date-from">
                        Виїзд: ${tour.tour_date}
                    </p>
                    <div class="flex-row">
                        <p class="hotel">
                            ${tour.hotel.hotel_name}
                        </p>
                        <p class="place-from">
                            Виліт: Київ
                        </p>
                    </div>
                </div>
            </div>
        `;
        })
    }

}

$tabs.forEach($tab => {
    $tab.addEventListener('click', function(e) {
        $tabs.forEach($tab => {
            $tab.classList.remove('active');
        })

        const currentTab = e.target;

        currentTab.classList.add('active');

        const category = currentTab.getAttribute('data-category');

        fetch(URI + '/api/tabs?tourType=' + category)
            .then(response => response.json())
            .then(data => renderTabs(data))
    })
})