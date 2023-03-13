<div class="modale" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h2>Редактировать отзыв</h2>
            <a href="#" class="btn-close closemodale" aria-hidden="true">&times;</a>
        </div>
        <div class="modal-body">
            <form id="form_edit_review" method="post" action="">
                <input type="hidden" name="comment_ID">
                <!-- <label>
                    Имя
                    <input type="text" name="comment_author" value="">
                </label>
                <label>
                    Почта
                    <input type="text" name="comment_author_email" value="">
                </label>
                <label>
                    Дата
                    <input type="text" name="comment_date" value="">
                </label> -->
                <label>
                    Контент<br>
                    <textarea name="comment_content" id="comment_content" cols="30" rows="10"></textarea>
                </label>
                <!-- <label>
                    Рейтинг
                    <input type="text" name="comment_rating" value="">
                </label> -->

                <div class="modal-footer">  
                    <button type="submit"
                            class="button button-primary save-edit-review-js">
                        Сохранить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>