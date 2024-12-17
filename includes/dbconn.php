<?php

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/busTicket");
define("BASE_URL", "/busTicket");

date_default_timezone_set('Asia/Kolkata');

// $connection = mysqli_connect("localhost", "root", "", "ticketbooking");

class db{
    public $conn;

    function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=busticketbooking";
        $uname = "root";
        $pwd = "";
        $this->conn = new PDO($dsn, $uname, $pwd);

    }

    function viewBusSearchResult($origin, $destination){
        $query = "SELECT buses.bus_name, buses.bus_type, routes.departure_time, routes.arrival_time, routes.fare 
        FROM routes 
        JOIN buses ON routes.bus_id = buses.bus_id 
        WHERE routes.origin = ? AND routes.destination = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam("ss", $origin, $destination);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

function pathOf($path)
{
    return BASE_DIR . "/" . $path;
}

function urlOf($path)
{
    return BASE_URL . '/' . $path;
}

// session_start();