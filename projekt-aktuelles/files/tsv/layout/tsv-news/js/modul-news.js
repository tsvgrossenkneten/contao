$(document).ready(function() {

    // ISOTOPE
    var $gridIso = $('.isotope-grid').isotope({
        // options
        itemSelector: '.layout_full',
        layoutMode: 'masonry',
        transitionDuration: '0.8s',
        getSortData: {
            name: '.name',
            date: '[data-timestamp]',
            archive: '[data-archive]',
        },
        masonry: {
            percentPosition: true,
            columnWidth: '.layout_full'
        }
    });

    $('.isotope-filter button').click(function(e) {
        var filterN = $(this).data('filter-by');
        $gridIso.isotope({
            filter: function() {
                if (filterN === '*') {
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
        $gridIso.isotope({
            sortBy: sortN
        });

        enableButton($(this));
    });

    $gridIso.on('arrangeComplete',
        function(event, filteredItems) {
            console.log('Isotope arrange completed on ' +
                filteredItems.length + ' items');

        }
    );

    function enableButton(btn) {
        btn.parent().find('.active').removeClass('active');
        btn.addClass('active');
    }

    $(window).on('load', function(){
        $gridIso.isotope();
    });
});
