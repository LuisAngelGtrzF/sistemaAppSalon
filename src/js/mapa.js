if(document.querySelector('#mapa')){

    const lat=29.115439
    const lng =-111.001875
    const zoom = 16

    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
        <h3 class="mapa__heading">Salon de Belleza</h3>
        <p class="mapa__texto">Mariana Tapia Salón</p>
    `)
        .openPopup(); 
}