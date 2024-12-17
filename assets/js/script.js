document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let origin = document.getElementById('origin').value;
    let destination = document.getElementById('destination').value;
    let departure_date = document.getElementById('departure_date').value;

    let formData = new FormData();
    formData.append('origin', origin);
    formData.append('destination', destination);
    formData.append('departure_date', departure_date);

    fetch('../pages/search_buses.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        let resultDiv = document.getElementById('results');
        resultDiv.innerHTML = ''; // Clear previous results

        if (data.length > 0) {
            data.forEach(bus => {
                let busInfo = `
                    <div class="bus">
                        <h3>${bus.bus_name} (${bus.bus_type})</h3>
                        <p>Departure: ${bus.departure_time}</p>
                        <p>Arrival: ${bus.arrival_time}</p>
                        <p>Fare: $${bus.fare}</p>
                    </div>
                `;
                resultDiv.innerHTML += busInfo;
            });
        } else {
            resultDiv.innerHTML = '<p>No buses found.</p>';
        }
    })
    .catch(error => console.log('Error:', error));
});
