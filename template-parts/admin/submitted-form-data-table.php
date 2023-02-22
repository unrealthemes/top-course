<?php 
$i = 1;
$reviews = $args['users_data']; 
$redirect_url = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<div class="wrap">
    <form id="submitted_form" action="" method="post">
        <input type="hidden" name="redirect_url" value="<?php echo $redirect_url; ?>">
        <h1>Отзывы школы</h1>

        <p>
            <button type="submit" class="button button-primary delete-emails-js" disabled>
                Удалить
            </button>
        </p>

        <table id="submitted_form_data" class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <th><input id="sf_all" type="checkbox"></th>
                    <th>school_ID</th>
                    <th>author</th>
                    <th>author email</th>
                    <th>date</th>
                    <th>content</th>
                    <th>rating</th>
                    <th>approved</th>
                    <th>button</th>
                </tr>
            </thead>
            <tbody>

                <?php if ( $reviews ) : ?>

                    <?php foreach ( $reviews as $key => $review ) : ?>

                        <tr>
                            <td>
                                <input id="sf_<?php echo $review['comment_ID'] ?>" 
                                    type="checkbox" 
                                    name="reviews[]" 
                                    class="email-items"
                                    value="<?php echo $review['comment_ID'] ?>">
                            </td>

                            <?php 
                            foreach ( $review as $key => $value ) : 
                                
                                if ( $key == 'comment_ID' || $key == 'comment_date_gmt' || $key == 'user_id' ) :
                                    continue;
                                endif;
                            ?>

                                <?php if ( $key == 'comment_content' ) : ?>

	                                <td class="table-item">
                                        <?php echo stripcslashes($value); ?>
                                        <span class="modal-open"></span>
                                    </td>

                                <?php else : ?>

                                    <td class="table-item">
                                        <?php echo esc_html($value); ?>
                                    </td>

                                <?php endif; ?>

                            <?php endforeach; ?>

                            <td>
                                <?php if ( $review['comment_approved'] == 0 ) : ?>
                                    <div class="ut-loader"></div>
                                    <button class="button button-primary confirm-user-data-js"
                                            data-comment-id="<?php echo esc_attr($review['comment_ID']); ?>">
                                        Одобрить
                                    </button>
                                <?php endif; ?>
                            </td>

                        </tr>

                    <?php $i++; endforeach; ?>

                <?php endif; ?>

            </tbody>
        </table>

        <?php echo $args['pagination']; ?>

    </form>
</div>