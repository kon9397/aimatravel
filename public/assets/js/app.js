const $advancedSearchBlock = document.querySelector('.advanced-search-toggled');
const $advancedSearchSwitcher = document.querySelector('.advanced-search-switcher');
const $searchInputBlock = document.querySelector('.search-input-group');

const URI = window.location.origin;

const $searchForm = document.querySelector('.advanced-search-form');

$advancedSearchSwitcher.addEventListener('click', function(e) {
    $advancedSearchBlock.classList.toggle('active');
    $searchInputBlock.classList.toggle('active');
});

$searchForm.addEventListener('submit', function(e) {
    const data = [];

    const formData = new FormData(e.currentTarget);

    formData.forEach((v, k) => {
        if(v !== '') {
            data.push(`${k}=${v}`);
        }
    });

    const queryString = data.join('&');

    fetch(URI + '/api/search-tour?' + queryString)
         .then(response => response.json())
         .then(data => searchRender(data));


    e.preventDefault();
});

function searchRender(data) {
    const $searchResult = document.querySelector('.search-section .tours-cards .flex-row');
    $searchResult.innerHTML = '';
    data.forEach(tour => {
        $searchResult.innerHTML += `
                <div class="tour-card" style="background-image: url(${URI}${tour.photo_url} );">
                    <div class="tour-pricelist">
                        <p class="tour-price">${tour.price} $</p>
                        <p class="tour-days">${tour.days_amount} ноч.</p>
                    </div>
                    <h4 class="tour-city">${tour.tour_focus}</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: ${tour.tour_date}
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: ${tour.hotel.hotel_name}
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
        `
    })

}

