document.addEventListener('DOMContentLoaded', () => {
    const seats = document.querySelectorAll('.seat');
    const selectedSeatsContainer = document.getElementById('selected-seats');
    let selectedSeats = [];

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            const seatId = seat.id;

            // Toggle selection
            if (selectedSeats.includes(seatId)) {
                selectedSeats = selectedSeats.filter(id => id !== seatId);
                seat.classList.remove('selected'); // Assuming you have a 'selected' class for styling
            } else {
                selectedSeats.push(seatId);
                seat.classList.add('selected');
            }

            // Update the selected seats display
            selectedSeatsContainer.innerHTML = selectedSeats.join(', ');
        });
    });

    document.getElementById('bookBtn').addEventListener('click', () => {
        const userId = 1; 
        const formData = new FormData();
        formData.append('book', true);
        formData.append('seatIds', JSON.stringify(selectedSeats));
        formData.append('userId', userId);

        fetch('seat.php', { 
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            
            alert(data); 
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error booking your seats. Please try again.');
        });
    });
    });