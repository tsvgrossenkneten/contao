$(document).ready(function() {

    var settings = {
        filter: '*',
        sortBy: 'original-order'
    };

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

        settings.filter = filterN;
        enableButton($(this));
    });

    $('.isotope-sorting button').click(function(e) {
        var sortN = $(this).data('sort-by');

        if(sortN === 'date' && sortN === settings.sortBy){
            sortN = 'original-order';
        }

        $gridIso.isotope({
            sortBy: sortN
        });

        settings.sortBy = sortN;
        enableButton($(this));
    });

    function enableButton(btn) {
        btn.parent().find('.active').removeClass('active');
        btn.addClass('active');
    }

    $(window).on('load', function(){
        $gridIso.isotope();
    });
});
