<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus ticket booking system</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

</html>

<?php
if(isset($_POST['submit']))
{
    $host = "localhost";
    $dbname = "busticketbooking";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get search parameters from the form
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $departure_date = $_POST['departure_date'];

        // Query to find routes
        $sql = "SELECT buses.bus_name, buses.bus_type, routes.departure_time, routes.arrival_time, routes.fare 
                FROM routes 
                JOIN buses ON routes.bus_id = buses.bus_id 
                WHERE routes.origin = ? AND routes.destination = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $origin, $destination);
        $stmt->execute();
        $result = $stmt->get_result();

        $buses = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $buses[] = $row;
            }
        }

        // Display the results
        if (count($buses) > 0) {
            echo '<h2>Available Buses:</h2>';
            echo '<table border="1">';
            echo '<tr><th>Bus Name</th><th>Type</th><th>Departure Time</th><th>Arrival Time</th><th>Fare</th><th>SEATS</th></tr>';
            foreach ($buses as $bus) {
                echo '<tr>';
                echo '<td>'. $bus['bus_name']. '</td>';
                echo '<td>'. $bus['bus_type']. '</td>';
                echo '<td>'. $bus['departure_time']. '</td>';
                echo '<td>'. $bus['arrival_time']. '</td>';
                echo '<td>'. $bus['fare']. '</td>';
                echo '<td><a href="http://localhost:8181/busTicket/pages/seat/seat.php">View Seats</a></td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        else
        {
            echo 'No BUS found on this route.';
        }
    }
        
    $conn->close();
}
?>