document.addEventListener('DOMContentLoaded', () => {
    const bookingDetails = JSON.parse(localStorage.getItem('bookingDetails'));
    const passengerDetails = JSON.parse(localStorage.getItem('passengerDetails'));

    if (bookingDetails && passengerDetails) {
        const paymentDetailsDiv = document.getElementById('paymentDetails');
        paymentDetailsDiv.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bus Number: ${bookingDetails.busNumber}</h5>
                    <p class="card-text">From: ${bookingDetails.from}</p>
                    <p class="card-text">To: ${bookingDetails.to}</p>
                    <p class="card-text">Date: ${bookingDetails.date}</p>
                    <p class="card-text">Passenger: ${passengerDetails.name}</p>
                    <p class="card-text">Email: ${passengerDetails.email}</p>
                    <p class="card-text">Seats Available: ${bookingDetails.seats}</p>
                    <p class="card-text">Total Price: $${bookingDetails.price}</p>
                </div>
            </div>
        `;
    }
});

function processPayment() {
    const cardNumber = document.getElementById('cardNumber').value;
    const expiryDate = document.getElementById('expiryDate').value;
    const cvv = document.getElementById('cvv').value;

    if (cardNumber && expiryDate && cvv) {
        alert('Payment successful! Your booking is confirmed.');
        // localStorage.clear();
        window.location.href = '../index.php';
    } else {
        alert('Please enter all payment details.');
    }
}
