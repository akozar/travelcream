<div class="container" data-bind="foreach: { data: $root.travels, as: 'travelType' } ">
    <div class="row service-block-wrapper">
        <?php get_template_part( 'templates/travel-section-script-templates' ); ?>
        <div class="col-12 col-sm-4 col-md-3 section-heading" data-bind="text: name"></div>
        <div class="col-12 col-sm-8 col-md-9 text-right section-links" data-bind="foreach: sortOptions">
            <a href="#" data-bind="text: $data, css: { active: $data == $parent.sortActive() } , click: $root.updateSortOption.bind($data, $parent.name)"></a>
        </div>
        <?php get_template_part( 'templates/travel-section-content' ); ?>
        <div class="col-12 text-right section-links show-more-link">
            <a data-bind="text: 'See all '.concat(travelType.name()), attr: { href: travelType.href }"></a>
        </div>
    </div>
</div>
