document.addEventListener('DOMContentLoaded', () => {
    const bookingDetails = JSON.parse(localStorage.getItem('bookingDetails'));

    if (bookingDetails) {
        const bookingDetailsDiv = document.getElementById('bookingDetails');
        bookingDetailsDiv.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bus Number: ${bookingDetails.busNumber}</h5>
                    <p class="card-text">From: ${bookingDetails.from}</p>
                    <p class="card-text">To: ${bookingDetails.to}</p>
                    <p class="card-text">Date: ${bookingDetails.date}</p>
                    <p class="card-text">Seats Available: ${bookingDetails.seats}</p>
                    <p class="card-text">Price: $${bookingDetails.price}</p>
                </div>
            </div>
        `;
    }
});

function confirmBooking() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    if (name && email) {
        localStorage.setItem('passengerDetails', JSON.stringify({ name, email }));
        window.location.href = 'payment.html';
    } else {
        alert('Please enter your name and email.');
    }
}
