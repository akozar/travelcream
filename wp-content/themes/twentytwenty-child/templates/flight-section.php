<div class="container">
    <div class="row service-block-wrapper">
        <div class="col-12 col-sm-2 section-heading">Flights</div>
        <div class="col-12 col-sm-10 text-right section-links">
            <a href="#" data-bind="click: setFlights, css: {active : flightOrder() === $element.text}">Non stop</a>
            <a href="#" data-bind="click: setFlights, css: {active : flightOrder() === $element.text}">Best price</a>
            <a href="#" data-bind="click: setFlights, css: {active : flightOrder() === $element.text}">Airline</a>
            <a href="#" data-bind="click: setFlights, css: {active : flightOrder() === $element.text}">Schedule</a>
        </div>
        <div class="col-12 section-content">
            <div class="d-none d-sm-block">
                <div class="row flights-tbl-heading">
                    <div class="col-3">Airline</div>
                    <div class="col">Date</div>
                    <div class="col">Departure</div>
                    <div class="col">Arrival</div>
                    <div class="col">Time</div>
                    <div class="col">Price</div>
                </div>
            </div>
            <hr>
            <div class="flights-list" data-bind="template: { name: 'flight-content-template', foreach: chosenFlights}"></div>
        </div>
    </div>
</div>

<script type="text/html" id="flight-content-template">
    <div class="row flight-content">
        <div class="col-6 col-md-3">
            <div class="airline-logo">
                <img data-bind="attr:{src: airlineIcon}" alt="">
            </div>
            <div class="flight-row-content text-left">
                <div class="flight-row-first" data-bind="text: airlineName"></div>
                <div class="flight-row-second" data-bind="text: airlineFlightNum"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: departureDate"></div>
                <div class="flight-row-second" data-bind="text: departureDateDays"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: departureAirport"></div>
                <div class="flight-row-second" data-bind="text: departureTime"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: arrivalCity"></div>
                <div class="flight-row-second" data-bind="text: arrivalTime"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: flightTime"></div>
                <div class="flight-row-second" data-bind="text: flightChain"></div>
            </div>
        </div>
        <div class="col-6 col-md order-flight-col"><div class="btn home-btn cta" data-bind="text: flightPrice"></div></div>
    </div>
    <hr>
</script>
