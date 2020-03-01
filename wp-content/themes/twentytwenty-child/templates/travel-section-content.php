<!-- ko if: name() == 'Flights' -->
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
    <div class="flights-list" data-bind="template: { name: $parent.getTemplateDomId(name()), foreach: $parent.getItems(name(), sortActive()), as: 'travelItem' }">
    </div>
</div>
<!-- /ko -->

<!-- ko if: name() == 'Hotels' -->
<div class="col-12 section-content">
    <div class="hotels-list">
        <div class="row" data-bind="template: { name: $parent.getTemplateDomId(name()), foreach: $parent.getItems(name(), sortActive()), as: 'travelItem' }">
        </div>
    </div>
</div>
<!-- /ko -->

<!-- ko if: name() == 'Attractions' -->
<div class="col-12 section-content">
    <div class="attraction-list" data-bind="template: { name: $parent.getTemplateDomId(name()), data: $parent.getItems(name(), sortActive()), as: 'travelItems' }">
    </div>
</div>
<!-- /ko -->

<!-- ko if: name() == 'Trips' -->
<div class="col-12 section-content">
    <div class="trips-list" data-bind="template: { name: $parent.getTemplateDomId(name()), foreach: $parent.getItems(name(), sortActive()), as: 'travelItem' }">
    </div>
</div>
<!-- /ko -->
