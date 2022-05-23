const province  = document.getElementById('province');
const city      = document.getElementById('city');
province.addEventListener('change', () => {
    getCity(province.value).then(res => {
        if (res.cities.length > 0) {
            city.removeAttribute('disabled');
            city.textContent    = '';
            let defaultOption   = document.createElement('option');
            let defaultText     = document.createTextNode('--Pilih Kota/Kab');
            defaultOption.appendChild(defaultText)
            defaultOption.value = '';

            city.appendChild(defaultOption)
            res.cities.forEach(el => {
                let optionEl    = document.createElement('option') 
                let optionText  = document.createTextNode(el.name);
                optionEl.appendChild(optionText)
                optionEl.value = el.code;
                city.appendChild(optionEl);
            });
        }
    });   
});

async function getCity(province_id) {
    const host = window.location.host == 'localhost' ? 'http://localhost/wamanra' : window.location.origin;
    const url = host+'/region/get_cities';
    const params = new URLSearchParams({
        province_id: province_id,
    });
    const options = {
        method: 'post',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: params
    }
    const response = await fetch(url, options);
    return response.json();
}