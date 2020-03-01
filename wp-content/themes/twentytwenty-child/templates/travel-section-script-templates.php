<script type="text/html" id="templateFlights" data-bind="if: name() == 'Flights'">
    <div class="row flight-content">
        <div class="col-6 col-md-3">
            <div class="airline-logo">
                <img data-bind="attr:{src: travelItem.airlineIcon}" alt="">
            </div>
            <div class="flight-row-content text-left">
                <div class="flight-row-first" data-bind="text: travelItem.airlineName"></div>
                <div class="flight-row-second" data-bind="text: travelItem.airlineFlightNum"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: travelItem.departureDate"></div>
                <div class="flight-row-second" data-bind="text: travelItem.departureDateDays"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: travelItem.departureAirport"></div>
                <div class="flight-row-second" data-bind="text: travelItem.departureTime"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: travelItem.arrivalCity"></div>
                <div class="flight-row-second" data-bind="text: travelItem.arrivalTime"></div>
            </div>
        </div>
        <div class="col-6 col-md">
            <div class="flight-row-content">
                <div class="flight-row-first" data-bind="text: travelItem.flightTime"></div>
                <div class="flight-row-second" data-bind="text: travelItem.flightChain"></div>
            </div>
        </div>
        <div class="col-6 col-md order-flight-col"><div class="btn home-btn cta" data-bind="text: travelItem.flightPrice"></div></div>
    </div>
</script>
