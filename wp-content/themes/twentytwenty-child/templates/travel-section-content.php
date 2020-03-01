<div class="col-12 section-content" data-bind="if: name() == 'Flights'">
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
