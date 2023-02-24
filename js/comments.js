'use strict';

let COMMENTS = {

    init: function init() {

        COMMENTS.loadmore_handler();
        COMMENTS.like_handler();
        COMMENTS.dislike_handler();
        COMMENTS.show_reviews();
        COMMENTS.school_reviews();

    }, 

    loadmore_handler: function loadmore_handler() {

         // load more button click event
         $('.comments-more button').click( function() {
            var button = $(this);
            button.prop('disabled', true);
            // decrease the current comment page value
            cpage--;

            $.ajax({
                url : ajaxurl, 
                data : {
                    'action': 'cloadmore', 
                    'post_id': parent_post_id, 
                    'cpage' : cpage, 
                },
                type : 'POST',
                beforeSend : function ( xhr ) {
                    button.text('Загрузка...'); 
                },
                success : function( data ){
                    if ( data ) {
                        $('.row_di.coments_list').append( data );
                        button.text('Показать еще комментарии'); 
                        button.prop('disabled', false);
                        if ( cpage == 1 ) 
                            button.remove();
                    } else {
                        button.remove();
                    }
                }
            });
            return false;
        });

    },

    like_handler: function like_handler() {

        $(document).on('click', '.bt_plus', function() {

            $(this).parent().find('button').prop('disabled', true);
            var id = $(this).data('id');
            var data = {
                action: 'clike',
                ajax_nonce: ut_params.ajax_nonce,
                comment_id: id,
            };
            $.ajax({
                type: 'POST',
                url: ut_params.ajax_url,
                data: data,
                success: function (response) {
    
                    if ( response.success ) {
                        $.cookie('vote-comment-' + id, true, {expires: 7, path: '/' });
                    }
                }
            });
        });
    },
    
    dislike_handler: function dislike_handler() {

        $(document).on('click', '.bt_minus', function() {

            $(this).parent().find('button').prop('disabled', true);
            var id = $(this).data('id');
            var data = {
                action: 'cdislike',
                ajax_nonce: ut_params.ajax_nonce,
                comment_id: id,
            };
            $.ajax({
                type: 'POST',
                url: ut_params.ajax_url,
                data: data,
                success: function (response) {
    
                    if ( response.success ) {
                        $.cookie('vote-comment-' + id, true, {expires: 7, path: '/' });
                    }
                }
            });
        });
    },

    show_reviews: function show_reviews() { 

        $('#show_reviews').on('click', function(event) { 
            event.preventDefault();
            $(this).hide();
            $('.otziv .item.comment-hide').show();
        });
    },

    school_reviews: function school_reviews() {

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
        
            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
            });
            
        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
                $(this).removeClass('hover');
            });
        });
        
        
        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            
            for (var i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }
            
            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            $("#school_rating").val(ratingValue);
            
        });
        
        $('#course_stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            
            for (var i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }
            
            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#course_stars li.selected').last().data('value'), 10);
            $("#rating").val(ratingValue);
            
        });
    }

};

$(document).ready( COMMENTS.init() );
