jQuery(function($) {

    $(document).on('click', '.confirm-user-data-js', function(e){

        var $this = $(this);
        var loader = $this.parent().find('.ut-loader');
        loader.addClass('loading');
        let data = {
            action : 'confirm_user_data',
            ajax_nonce : ut_admin.ajax_nonce,
            id : $this.data('comment-id'),
        };
        $.ajax({
            data : data,
            url  : ut_admin.ajax_url,
            type : 'POST',
            success: function( response ) {

                if ( response.success ) {
                    $this.parents('tr').find('td:eq( 4 )').text('1');
                    $this.remove();
                }
                loader.removeClass('loading');
            }
        });

    });

    $('body').on('click', '#sf_all', function (event) {
        var checked = $(this).prop('checked');

        if (checked) {
            $('input[name="reviews[]"]').prop('checked', true);
            $('.delete-emails-js').prop('disabled', false);
        } else {
            $('input[name="reviews[]"]').prop('checked', false);
            $('.delete-emails-js').prop('disabled', true);
        }
    });

    $('body').on('click', '.email-items', function (event) {
        var result = true;
        $('.email-items').each( function() {
            var checked = $(this).prop('checked');  
            if (checked) {
                result = false;
                return false;
            } 
        });
        $('.delete-emails-js').prop('disabled', result);
    });

    $('#submitted_form').submit( function (event) {
        event.preventDefault();
        $('.delete-emails-js').prop('disabled', true);
        var data = {
            action : 'delete_submitted_emails',
            ajax_nonce : ut_admin.ajax_nonce,
            form : $(this).serialize(),
        };
        $.ajax({
            type : 'POST',
            url  : ut_admin.ajax_url,
            data : data,
            success: function(response) {
                if ( response.success ) {
                    location.reload();
                }
            }
        });
    });

    /* Submitted form data */
    const wpContent = document.getElementById('wpcontent');
    const showContent = document.querySelectorAll('#submitted_form_data .table-item');

    showContent && showContent.forEach(function(show) {
        let cH = show.clientHeight;
        let sH = show.scrollHeight;
        if (sH > cH) show.classList.add('modal');
    });

    document.addEventListener('click', function(e) {
       if (e.target.className === 'table-item modal') {
           const modal = document.createElement('div');
           const modalClose = document.createElement('span');
           const modalOverlay = document.createElement('div');

           modal.className = 'sfd-popup';
           modalClose.className = 'sfd-close';
           modalOverlay.className = 'sfd-overlay';
           modal.append(modalClose);
           modal.append(e.target.textContent);

           wpContent.append(modalOverlay);
           modalOverlay.append(modal);
       }

       if (e.target.className === 'sfd-overlay') {
           e.target.remove();
       }

       if (e.target.className === 'sfd-close') {
           e.target.parentElement.parentElement.remove();
       }
    });


    $('body').on('click', '.edit-review-js', function (e) {
        e.preventDefault();
        $('.modale').addClass('opened');
        var review_id = $(this).data('comment-id');
        var review_content = $(this).parents('tr').find('td .content').html();
        $('#form_edit_review input[name="comment_ID"]').val(review_id);
        $('#form_edit_review textarea[name="comment_content"]').val(review_content.trim());
    });

    $('.closemodale').click(function (e) {
        e.preventDefault();
        $('.modale').removeClass('opened');
    });

    $('#form_edit_review').submit( function (event) {
        event.preventDefault();
        $('#message').hide();
        $('.save-edit-review-js').prop('disabled', true);
        var review_id = $('#form_edit_review input[name="comment_ID"]').val();
        var review_content = $('#form_edit_review textarea[name="comment_content"]').val();
        var data = {
            action : 'edit_review',
            ajax_nonce : ut_admin.ajax_nonce,
            form : $(this).serialize(),
        };
        $.ajax({
            type : 'POST',
            url  : ut_admin.ajax_url,
            data : data,
            success: function(response) {
                $('#message').html(response.data.message).show();
                $('.save-edit-review-js').prop('disabled', false);
                $('#form_edit_review')[0].reset();
                setTimeout(function () {
                    $('#submitted_form_data tr[data-comment-id="' + review_id + '"] td .content').html(review_content);
                    $('.modale').removeClass('opened');
                }, 2000);
            }
        });
    });

});