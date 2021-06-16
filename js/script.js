
$(function() {

    /**
     * InView Animations
     */
    $('.fade-in')
        .one('inview', function (event, isInView) {
            let $this = $(this);
            if (isInView) {
                $this.addClass('in-view');
            }
        });


    /**
     * Sign Up form submit
     */
    $('form#signup-form').submit(function () {

        let $form = $(this);

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                email: $form.find('#email').val()
            }
        }).always(function (response) {

            $('.error').remove();

            if(!response.error){
                $form.replaceWith('<p class="success"><strong>' + response.message + '</strong></p>');
            } else {
                $form.before('<p class="error"><strong>' + response.message + '</strong></p>');
            }

            console.log(response);

        });

        return false;
    });


    /**
     * PARALLAX
     */
    let parallax = function ($this) {

        let Y = $(window).scrollTop();
        let division = ($this.data('offset') ? $this.data('offset') : 40);
        let offset = Y / division;

        $this.css('--parallax-offset', offset + 'em');

    };

    $('.parallax').each(function () {

        let $this = $(this);

        $(window).scroll(function () {
            parallax($this);
        });
        parallax($this);

    });


});
