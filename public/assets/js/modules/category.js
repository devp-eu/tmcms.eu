



$(document).ready(function() {
    var wiki_link = $('.js-get-wiki-content'),
        wiki_content = $('.js-put-wiki-content'),
        error_message = $('.js-error-message'),
        category_link = $('.js-expand-child');

    // Get content of wiki
    wiki_link.click(function(e) {
        e.preventDefault();

        var href = $(this).attr('href'),
            data = {
                id : href
        	};

        $.ajax({
        	dataType: 'json',
            url: '/-/api/wiki/',
        	data: data,
        	method: 'post',
        	success: function(response) {
                error_message.fadeOut();
                wiki_content.html(response.html);
        	},
            error: function() {
                error_message.fadeIn();
            }
        });

        wiki_link.removeClass('active');
        $(this).addClass('active');

   });

    // Category click
    category_link.click(function(e) {
        e.preventDefault();
        category_link.removeClass('expanded');
        $(this).addClass('expanded');
    });
});