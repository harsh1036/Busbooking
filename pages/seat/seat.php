    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bus Seat Booking</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="seats" id="seat_id">
            <table>
                <tbody>
                    <th>
                    <td>
                        <div class="seat" id="seat1" data-row="1" data-column="1"></div>
                        <div class="seat" id="seat2" data-row="1" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat3" data-row="1" data-column="4"></div>
                        <div class="seat" id="seat4" data-row="1" data-column="5"></div>

                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat5" data-row="2" data-column="1"></div>
                        <div class="seat" id="seat6" data-row="2" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat7" data-row="2" data-column="3"></div>
                        <div class="seat" id="seat8" data-row="2" data-column="4"></div>
                        <!-- ... -->
                    </td>
                    </th>

                    <th>
                    <td>
                        <div class="seat" id="seat9" data-row="3" data-column="1"></div>
                        <div class="seat" id="seat10" data-row="3" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat11" data-row="3" data-column="3"></div>
                        <div class="seat" id="seat12" data-row="3" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat13" data-row="4" data-column="1"></div>
                        <div class="seat" id="seat14" data-row="4" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat15" data-row="4" data-column="3"></div>
                        <div class="seat" id="seat16" data-row="4" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat17" data-row="5" data-column="1"></div>
                        <div class="seat" id="seat18" data-row="5" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat19" data-row="5" data-column="3"></div>
                        <div class="seat" id="seat20" data-row="5" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat21" data-row="6" data-column="1"></div>
                        <div class="seat" id="seat22" data-row="6" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat23" data-row="6" data-column="3"></div>
                        <div class="seat" id="seat24" data-row="6" data-column="4"></div>
                    </td>
                    </th>

                    <th>
                    <td>
                        <div class="seat" id="seat25" data-row="7" data-column="1"></div>
                        <div class="seat" id="seat26" data-row="7" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat27" data-row="7" data-column="3"></div>
                        <div class="seat" id="seat28" data-row="7" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat29" data-row="8" data-column="1"></div>
                        <div class="seat" id="seat30" data-row="8" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat31" data-row="8" data-column="3"></div>
                        <div class="seat" id="seat32" data-row="8" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat33" data-row="9" data-column="1"></div>
                        <div class="seat" id="seat34" data-row="9" data-column="2"></div>
                        <br><br><br>
                        <div class="seat" id="seat35" data-row="9" data-column="3"></div>
                        <div class="seat" id="seat36" data-row="9" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat37" data-row="10" data-column="1"></div>
                        <div class="seat" id="seat38" data-row="10" data-column="2"></div>
                        <br>
                        <br><br>
                        <div class="seat" id="seat39" data-row="10" data-column="3"></div>
                        <div class="seat" id="seat40" data-row="10" data-column="4"></div>
                    </td>
                    </th>
                    <th>
                    <td>
                        <div class="seat" id="seat41" data-row="11" data-column="1"></div>
                        <div class="seat" id="seat42" data-row="11" data-column="2"></div>
                        <div class="seat" id="seat43" data-row="11" data-column="3"></div>
                        <div class="seat" id="seat44" data-row="11" data-column="4"></div>
                        <div class="seat" id="seat45" data-row="11" data-column="5"></div>
                    </td>
                    </th>

                </tbody>
            </table>
        </div>

        </div>

        <div class="booking-summary">
            <h3>Your Selected Seats</h3>
            <div id="selected-seats"></div>
            <button id="bookBtn">Book Now</button>
        </div>

        <script src="script.js"></script>
    </body>

    </html>