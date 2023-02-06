<?php
/**
 * Template name: Blog
 */

get_header(); 

if (have_posts()) : 

    while (have_posts()) : the_post();
    ?>

        <div class="container_di">
            <div class="row_di">
            
                <!-- blog_cat --> 
                <div class="blog_cat">
                
                    <!-- page_header -->
                    <div class="page_header">    
                        <div class="page_title">
                            <h1>Блог</h1>
                        </div>
                    </div>
                    <!-- end page_header -->
                
                     
                    <div class="row_di more"> 
                        <div class="row_10_di">
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_1.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Агрегатор курсов Топ Курс, как способ жить, мыслить, и еще много других слов, чтобы...</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Программирование</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_2.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Сервисы и программы для начинающих программистов</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Управление</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_3.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Какие языки программирования самые высокооплачиваемые на 2022 год: ТОП 15</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Маркетинг</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_1.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Агрегатор курсов Топ Курс, как способ жить, мыслить, и еще много других слов, чтобы...</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Программирование</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_2.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Сервисы и программы для начинающих программистов</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Управление</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_3.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Какие языки программирования самые высокооплачиваемые на 2022 год: ТОП 15</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Маркетинг</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_1.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Агрегатор курсов Топ Курс, как способ жить, мыслить, и еще много других слов, чтобы...</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Программирование</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_2.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Сервисы и программы для начинающих программистов</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Управление</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_3.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Какие языки программирования самые высокооплачиваемые на 2022 год: ТОП 15</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Маркетинг</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>   
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_1.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Агрегатор курсов Топ Курс, как способ жить, мыслить, и еще много других слов, чтобы...</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Программирование</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_2.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Сервисы и программы для начинающих программистов</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Управление</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_3.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Какие языки программирования самые высокооплачиваемые на 2022 год: ТОП 15</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Маркетинг</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>    
                             
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>   
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_1.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Агрегатор курсов Топ Курс, как способ жить, мыслить, и еще много других слов, чтобы...</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Программирование</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_2.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Сервисы и программы для начинающих программистов</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Управление</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_3.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Какие языки программирования самые высокооплачиваемые на 2022 год: ТОП 15</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Маркетинг</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>               
                             
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div>   
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_1.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Агрегатор курсов Топ Курс, как способ жить, мыслить, и еще много других слов, чтобы...</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Программирование</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_2.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Сервисы и программы для начинающих программистов</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Управление</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_3.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                        <a href="#">Какие языки программирования самые высокооплачиваемые на 2022 год: ТОП 15</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Маркетинг</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div>
                             </div>
                             
                            <!-- col -->
                             <div class="col_4_di">
                                 <div class="home_blog_item item_block_white">
                                    <div class="div home_blog_item_img"> <img src="<?php echo THEME_URI; ?>/img/blog_4.jpg" alt=""></div>
                                    <div class="div home_blog_item_title">
                                       <a href="#">С# разработчик: кто это, и что он делает?</a>
                                    </div> 
                                    <div class="div home_blog_niz"> 
                                        <a href="#">Общие навыки</a> 
                                        <div class="data">14.12.2022</div>
                                    </div> 
                                 </div> 
                             </div> 
                         </div>
                    </div>
                  
                    <div class="blog_btn_more">
                        <a href="#" id="loadMore" class="btn_white">Показать еще статьи</a>
                    </div>
                </div> 
                <!-- end blog_cat -->  
            </div>
        </div>  

    <?php
    endwhile; 

endif; 

get_footer();