function dropdown() {
    document.querySelector('body').addEventListener('click', function(e) {
        if(e.target.classList.contains('dropdown')) {
            document.querySelector('.dropdown-list').classList.add('active');
        } else {
            document.querySelector('.dropdown-list').classList.remove('active');
        }
    })


    const $dropdownItems = document.querySelectorAll('.dropdown-item');

    $dropdownItems.forEach($dropdownItem => {
        $dropdownItem.addEventListener('click', function(e) {
            const parameter = this.innerText;

            document.querySelector('.dropdown .current-item').innerText = parameter;
        })
    })


}

dropdown();