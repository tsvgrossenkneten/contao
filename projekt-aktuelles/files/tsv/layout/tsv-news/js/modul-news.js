$(document).ready(function() {
    var $grid = $('.isotope-grid').isotope({
        // options
        itemSelector: '.layout_full',
        layoutMode: 'fitRows',
        getSortData: {
            name: '.name',
            date: '[data-timestamp]',
            archive: '[data-archive]',
        }
    });

    $('.isotope-filter button').click(function(e) {
        var filterN = $(this).data('filter-by');
        $grid.isotope({
            filter: function() {
                if(filterN === '*'){
                    return true;
                }
                if ($(this).data('archive') === filterN) {
                    return true;
                }
                return false;
            }
        });

        enableButton($(this));
    });

    $('.isotope-sorting button').click(function(e) {
        var sortN = $(this).data('sort-by');
        $grid.isotope({
            sortBy: sortN
        });

        enableButton($(this));
    });

    function enableButton(btn) {
        btn.parent().find('.active').removeClass('active');
        btn.addClass('active');
    }
});
