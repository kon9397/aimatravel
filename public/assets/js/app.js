const $advancedSearchBlock = document.querySelector('.advanced-search-toggled');
const $advancedSearchSwitcher = document.querySelector('.advanced-search-switcher');
const $searchInputBlock = document.querySelector('.search-input-group');

$advancedSearchSwitcher.addEventListener('click', function(e) {
    $advancedSearchBlock.classList.toggle('active');
    $searchInputBlock.classList.toggle('active');
})