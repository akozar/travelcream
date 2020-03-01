<!-- ko if: name() == 'Flights' -->
<script type="text/html" id="templateFlights">
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
    <hr>
</script>
<!-- /ko -->

<!-- ko if: name() == 'Hotels' -->
<script type="text/html" id="templateHotels">
    <div class="col-6 col-md-4 hotel-card-wrapper">
        <div class="hotel-card">
            <img data-bind="attr: { src: travelItem.thumb }" />
            <div class="hotel-card-bottom">
                <p class="hotel-name" data-bind="text: travelItem.name"></p>
                <div class="distance-benefit-block">
                    <div class="distance" data-bind="text: travelItem.distance"></div>
                    <div class="benefit" data-bind="text: travelItem.benefit"></div>
                </div>
                <div class="btn home-btn cta" data-bind="text: travelItem.price"></div>
            </div>
        </div>
    </div>
</script>
<!-- /ko -->

<!-- ko if: name() == 'Attractions' -->
<script type="text/html" id="templateAttractions">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12">
                    <img data-bind="attr: { src: travelItems[0].thumb }" />
                </div>
                <div class="col-12">
                    <img data-bind="attr: { src: travelItems[1].thumb }" />
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12">
                    <img data-bind="attr: { src: travelItems[2].thumb }" />
                </div>
                <div class="col-12">
                    <img data-bind="attr: { src: travelItems[3].thumb }" />
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <img data-bind="attr: { src: travelItems[4].thumb }" />
                </div>
                <div class="col-6">
                    <img data-bind="attr: { src: travelItems[5].thumb }" />
                </div>
            </div>
        </div>
    </div>
</script>
<!-- /ko -->

<!-- ko if: name() == 'Trips' -->
<script type="text/html" id="templateTrips">
    <div class="row">
        <div class="col-12">
            <div class="trip-card-wrapper">
                <div class="row">
                    <div class="col-4 trip-card-img-wrapper">
                        <img data-bind="attr: { src: travelItem.thumb }" />
                    </div>
                    <div class="col-8 trip-desc-wrapper">
                        <p class="trip-name" data-bind="text: travelItem.name"></p>
                        <p class="trip-desc" data-bind="text: travelItem.desc"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
<!-- /ko -->
