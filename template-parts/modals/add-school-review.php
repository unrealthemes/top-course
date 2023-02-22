<?php 
global $product;

$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;

// $login = ()
?>

<div class="modal-wrapper" id="add_school_review">
    <div id="review_form_wrapper">
        <div id="review_form">
            <div id="respond" class="comment-respond">
                <span id="school-reply-title" class="comment-reply-title">
                    Оставьте свой отзыв 
                </span>
                <form action="" method="post" id="school_commentform" class="comment-form">
                    <input type="text" name="school" value="<?php echo $school->term_id; ?>">

                    <p class="comment-form-author">
                        <label for="school_author">
                            Имя&nbsp;
                            <span class="required">*</span>
                        </label>
                        <input id="school_author" name="school_author" type="text" value="" size="30" required="">
                    </p>

                    <p class="comment-form-email">
                        <label for="school_email">
                            Email&nbsp;
                            <span class="required">*</span>
                        </label>
                        <input id="school_email" name="school_email" type="email" value="" size="30" required="">
                    </p>

                    <div class="comment-form-rating">
                        <label for="school_rating">
                            Ваша оценка&nbsp;
                            <span class="required">*</span>
                        </label>

                        <section class='rating-widget'>
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                    <li class='star' title='Очень плохо' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Неплохо' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Средне' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Хорошо' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Отлично' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <select name="school_rating" id="school_rating">
                            <option value="">Оценка…</option>
                            <option value="5">Отлично</option>
                            <option value="4">Хорошо</option>
                            <option value="3">Средне</option>
                            <option value="2">Неплохо</option>
                            <option value="1">Очень плохо</option>
                        </select>
                    </div>

                    <p class="comment-form-comment">
                        <label for="comment">
                            Ваш отзыв&nbsp;
                            <span class="required">*</span>
                        </label>
                        <textarea id="school_comment" name="school_comment" cols="45" rows="8" required="required"></textarea>
                    </p>

                    <p class="form-submit">
                        <input name="school_submit" type="submit" id="school_submit" class="school_submit" value="Отправить">
                    </p>

                </form>
            </div>
        </div>
    </div>  
</div>