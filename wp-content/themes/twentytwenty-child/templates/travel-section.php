<div class="container" data-bind="foreach: { data: $root.travels, as: 'travelType' } ">
    <div class="row service-block-wrapper">
        <?php get_template_part( 'templates/travel-section-script-templates' ); ?>
        <div class="col-12 col-sm-2 section-heading" data-bind="text: name"></div>
        <div class="col-12 col-sm-10 text-right section-links" data-bind="foreach: sortOptions">
            <a href="#" data-bind="text: $data, css: { active: $data == $parent.sortActive() } , click: $root.updateSortOption.bind($data, $parent.name)"></a>
        </div>
        <?php get_template_part( 'templates/travel-section-content' ); ?>
    </div>
</div>
