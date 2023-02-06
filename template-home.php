<?php
/**
 * Template name: Home
 */

get_header(); 

if (have_posts()) : 

    while (have_posts()) : the_post(); 

        //get_template_part('template-parts/home/slider'); 

        ?>
    
        <!-- main_header container -->
        <div class="container_di home_block">
            <div class="row_di"> 
                <!-- main header -->
                <div class="main_header"> 
                    <div class="block_title">
                        <h1>С нами находить курсы легче!</h1>
                        <div class="h_desc">Интересные подборки, отзывы и рейтинги в одном месте</div>
                    </div> 
                    
                    
                    <!-- main_stata -->
                    <div class="main_stata">
                         <div class="row_di">
                            <div class="col_4_di">
                                <div class="main_stata_num">8 630</div>
                                <div class="main_stata_text">Курсов</div>
                            </div>
                            <div class="col_4_di">
                                <div class="main_stata_num">9 835</div>
                                <div class="main_stata_text">Преподавателей</div>
                            </div>
                            <div class="col_4_di">
                                <div class="main_stata_num">156</div>
                                <div class="main_stata_text">Платформ</div>
                            </div>
                            <div class="col_4_di">
                                <div class="main_stata_num">16 817</div>
                                <div class="main_stata_text">Отзывов</div>
                            </div>
                         </div>
                    </div>
                    
                    <!-- search -->
                    <div class="main_search">  
                        <form method="get" id="main_searchform" action="#">
                            <input type="text" class="main_search_input" name="s" autocomplete="off" placeholder="Найти курс">
                            <input type="submit" class="main_submit" value="Найти">
                        </form>
                    </div>
                    
                    <!-- main tag -->
                    <div class="main_tag">  
                        <a href="#">Веб-разработчик</a>
                        <a href="#">Тестировщик</a>
                        <a href="#">Граф дизайнер</a>
                        <a href="#">Копирайтер</a>
                        <a href="#">Маркетинг</a>
                        <a href="#">Нетология</a>
                        <a href="#">Skillbox</a> 
                    </div> 
                </div> 
            </div>
        </div> 
    
        <!-- top list container -->
        <div class="container_di home_block">
            <div class="row_di">  
                <div class="top_list">
                    <div class="block_title">
                        <h2>Какие курсы вы ищите</h2>
                        <div class="h_desc">Начните с выбора направлений обучения</div>
                    </div> 
                  
                    <div class="row"> 
                        <div class="owl_top_list owl-carousel owl-theme gallery">
                            <!-- item -->
                            <div class="item">
                                <div class="top_list_item">
                                    <div class="item_title">
                                        <div class="item_title_icon">
                                            <img src="<?php echo THEME_URI; ?>/img/1.svg" alt="" >
                                        </div>
                                        <div class="item_title_title">Программирование</div>
                                    </div>
                                    <div class="item_desc">Python, JavaScript, тестирование, DevOps, С++ и др.</div>
                                    <div class="item_a"><a href="#">Еще 33 категории</a></div> 
                                </div> 
                            </div>
                           
                            <!-- item -->
                            <div class="item">
                                <div class="top_list_item">
                                    <div class="item_title">
                                        <div class="item_title_icon">
                                            <img src="<?php echo THEME_URI; ?>/img/2.svg" alt="" > 
                                        </div>
                                        <div class="item_title_title">Управление</div>
                                    </div>
                                    <div class="item_desc">Проектный менеджмент, Agile, финансы компании и др.</div>
                                    <div class="item_a"><a href="#">Еще 33 категории</a></div> 
                                </div> 
                            </div>   
                           
                            <!-- item -->
                            <div class="item">
                                <div class="top_list_item">
                                    <div class="item_title">
                                        <div class="item_title_icon">
                                            <img src="<?php echo THEME_URI; ?>/img/3.svg" alt="" > 
                                        </div>
                                        <div class="item_title_title">Маркетинг</div>
                                    </div>
                                    <div class="item_desc">Performance, контекстная реклама, SMM, таргетинг и др.</div>
                                    <div class="item_a"><a href="#">Еще 13 категории</a></div> 
                                </div> 
                            </div>    
                           
                            <!-- item -->
                            <div class="item">
                                <div class="top_list_item">
                                    <div class="item_title">
                                        <div class="item_title_icon">
                                            <img src="<?php echo THEME_URI; ?>/img/4.svg" alt="" >
                                        </div>
                                        <div class="item_title_title">Дизайн и создание контента</div>
                                    </div>
                                    <div class="item_desc">UX / UI, веб-дизайн, графический дизайн, типографика и др.</div>
                                    <div class="item_a"><a href="#">Еще 26 категории</a></div> 
                                </div> 
                            </div>         
                        </div>
                        <div class="navigation"></div>
                    </div>
                         
                </div> 
            </div>
        </div> 

        <!-- main_rating container -->
        <div class="container_di home_block">
            <div class="row_di"> 
                <!-- main_ratingr -->
                <div class="main_rating"> 
                    <div class="block_title">
                        <h2>Независимый рейтинг образовательных организаций</h2>
                        <div class="h_desc">Составлен на основании анализа открытых рейтингов, отзывов учащихся и других параметров</div>
                    </div> 
                    
                    <div class="row_di">
                        <div class="row_10_di">
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r1.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r2.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r3.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r4.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r5.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r6.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r7.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r8.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r9.svg" alt="" ></a>                       
                            </div>
                            <div class="col_5_di">
                                <a href="#"><img src="<?php echo THEME_URI; ?>/img/r10.svg" alt="" ></a>                       
                            </div>
                        </div>
                    </div>
                    <div class="home_more">
                        <a href="#" class="btn">Посмотреть рейтинг</a>
                    </div>                    
                </div> 
            </div>
        </div> 
        
        <!-- main_reviews container -->
        <div class="container_di home_block">
            <div class="row_di"> 
                <!-- main_reviews -->
                <div class="main_reviews"> 
                    <div class="block_title">
                        <h2>Последние отзывы о курсах</h2>
                        <div class="h_desc">Посмотрите, что пишут о курсах люди</div>
                    </div> 
                  
                    <div class="row"> 
                        <div class="main_reviews_list owl-carousel owl-theme gallery">

                            <!-- item -->
                            <div class="item">
                                <div class="item_block_white">
                                
                                    <div class="row_di review_title">
                                        <div class="review_l">
                                            И
                                        </div>
                                        <div class="review_r">
                                            <div class="review_name">Иван Васильевич</div>
                                            <div class="review_rating">
                                                <!-- rating star -->
                                                <div class="rating">                                
                                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                                                    </symbol>
                                                    </svg>                                             
                                                    <div class="c-rate">
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                    </div>   
                                                </div>
                                                <!-- rating star -->
                                                
                                                <div class="review_date">27.08.2022</div> 
                                            </div> 
                                        </div>
                                        
                                        <a href="#" class="option">
                                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
                                            <circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
                                            <circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
                                            </svg> 
                                        </a> 
                                    </div>
                                    
                                    <div class="review_desk">
                                        <div class="review_desk_title">Профессиональное обучение, в котором чувствуется любовь к делу</div>
                                        <div class="review_desk_text">
                                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
                                        </div>
                                    </div> 
                                    
                                    <div class="review_niz">
                                        <div class="review_niz_kto"><a href="#"><img src="<?php echo THEME_URI; ?>/img/otz.svg" alt="" ></a> </div> 
                                        <div class="review_niz_kto_a"><a href="#">Источник</a></div> 
                                        <!-- + quantity_inner - -->
                                        <div class="quantity_inner">        
                                            <button class="bt_plus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
                                                </svg> 
                                            </button>
                                            <input type="text" class="quantity" value="0">
                                            <button class="bt_minus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
                                                </svg> 
                                            </button>
                                        </div>
                                        <!-- + quantity_inner - -->  
                                    </div>    
                                    
                                </div> 
                            </div>
                           <!-- item -->

                            <!-- item -->
                            <div class="item">
                                <div class="item_block_white">
                                
                                    <div class="row_di review_title">
                                        <div class="review_l">
                                            A
                                        </div>
                                        <div class="review_r">
                                            <div class="review_name">Александра К.</div>
                                            <div class="review_rating">
                                                <!-- rating star -->
                                                <div class="rating">                                
                                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                                                    </symbol>
                                                    </svg>                                             
                                                    <div class="c-rate">
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                    </div>   
                                                </div>
                                                <!-- rating star -->
                                                
                                                <div class="review_date">27.08.2022</div> 
                                            </div> 
                                        </div>
                                        
                                        <a href="#" class="option">
                                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
                                            <circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
                                            <circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
                                            </svg> 
                                        </a> 
                                    </div>
                                    
                                    <div class="review_desk">
                                        <div class="review_desk_title">Оправдались все ожидания!</div>
                                        <div class="review_desk_text">
                                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
                                            В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. 
                                            Но я четко поставил...
                                        </div>
                                    </div> 
                                    
                                    <div class="review_niz">
                                        <div class="review_niz_kto"><a href="#"><img src="<?php echo THEME_URI; ?>/img/otz.svg" alt="" ></a> </div> 
                                        <div class="review_niz_kto_a"><a href="#">Источник</a></div> 
                                        <!-- + quantity_inner - -->
                                        <div class="quantity_inner">        
                                            <button class="bt_plus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
                                                </svg> 
                                            </button>
                                            <input type="text" class="quantity" value="0">
                                            <button class="bt_minus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
                                                </svg> 
                                            </button>
                                        </div>
                                        <!-- + quantity_inner - -->  
                                    </div>    
                                    
                                </div> 
                            </div>
                           <!-- item -->
                            
                            <!-- item -->
                            <div class="item">
                                <div class="item_block_white">
                                
                                    <div class="row_di review_title">
                                        <div class="review_l">М</div>
                                        <div class="review_r">
                                            <div class="review_name">Макаренко М.</div>
                                            <div class="review_rating">
                                                <!-- rating star -->
                                                <div class="rating">                                
                                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                                                    </symbol>
                                                    </svg>                                             
                                                    <div class="c-rate">
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                          <use xlink:href="#star"></use>
                                                        </svg>
                                                    </div>   
                                                </div>
                                                <!-- rating star -->
                                                
                                                <div class="review_date">27.08.2022</div> 
                                            </div> 
                                        </div>
                                        
                                        <a href="#" class="option">
                                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
                                            <circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
                                            <circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
                                            </svg> 
                                        </a> 
                                    </div>
                                    
                                    <div class="review_desk">
                                        <div class="review_desk_title">Оправдались все ожидания!</div>
                                        <div class="review_desk_text">
                                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
                                            В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. 
                                            Но я четко поставил...
                                        </div>
                                    </div> 
                                    
                                    <div class="review_niz">
                                        <div class="review_niz_kto"><a href="#"><img src="<?php echo THEME_URI; ?>/img/otz.svg" alt="" ></a> </div> 
                                        <div class="review_niz_kto_a"><a href="#">Источник</a></div> 
                                        <!-- + quantity_inner - -->
                                        <div class="quantity_inner">        
                                            <button class="bt_plus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
                                                </svg> 
                                            </button>
                                            <input type="text" class="quantity" value="0">
                                            <button class="bt_minus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
                                                </svg> 
                                            </button>
                                        </div>
                                        <!-- + quantity_inner - -->  
                                    </div>    
                                    
                                </div> 
                            </div>
                           <!-- item -->     
                  
                        </div>
                        <div class="navigation"></div>
                    </div>
                    <div class="home_more">
                        <a href="#" class="btn_white">Показать все отзывы</a>
                    </div>     
                </div> 
            </div>
        </div>
        
        <!-- home_potborka container -->
        <div class="container_di home_block">
            <div class="row_di">  
                <div class="home_potborka">
                    <div class="block_title">
                        <h2>Подборки курсов</h2>
                        <div class="h_desc">Подборки курсов, составленные вручную экспертами Топ Курс</div>
                    </div> 
                  
                    <div class="row"> 
                        <div class="owl_home_potborka owl-carousel owl-theme gallery">
                            <!-- item -->
                            <div class="item">
                                <div class="home_potborka_item">
                                    <div class="row_di main_tag">
                                        <a href="#">Программирование</a>
                                        <a href="#">Управление</a>
                                        <a href="#">Маркетинг</a>
                                    </div>
                                    <a class="home_potborka_desk">Освоить Python-разработку</a>
                                </div> 
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="home_potborka_item">
                                    <div class="row_di main_tag">
                                        <a href="#">Программирование</a> 
                                    </div>
                                    <a class="home_potborka_desk">Получить высшее образование онлайн</a>
                                </div> 
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="home_potborka_item">
                                    <div class="row_di main_tag"> 
                                        <a href="#">Управление</a> 
                                    </div>
                                    <a class="home_potborka_desk">Научиться делать сайты и сервисы</a>
                                </div> 
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="home_potborka_item">
                                    <div class="row_di main_tag"> 
                                        <a href="#">Маркетинг</a> 
                                    </div>
                                    <a class="home_potborka_desk"> Стать лучшим интернет-маркетологом (продвинутый) </a>
                                </div> 
                            </div>  
                        </div>
                        <div class="navigation"></div>
                    </div>
                    <div class="home_more">
                        <a href="#" class="btn_white">Показать все отзывы</a>
                    </div>   
                </div> 
            </div>
        </div> 
        
        <!-- top_curs container -->
        <div class="container_di home_block">
            <div class="row_di">  
                <div class="top_curs">
                    <div class="block_title">
                        <h2>Топ Курс — это</h2>
                    </div> 
                    <div class="row_di"> 
                        <div class="row_10_di">
                            <!-- col -->
                             <div class="col_3_di">
                                 <div class="top_curs_item item_block_white">
                                    <div class="div top_curs_item_title">
                                        <a href="#">Учиться самомуи воплощать мечты в реальность</a>
                                    </div> 
                                    <div class="div top_curs_item_btn"> <a class="btn" href="#">Подробнее</a> </div>
                                    <div class="div top_curs_item_img"> <img src="<?php echo THEME_URI; ?>/img/top_1.png" alt=""></div>
                                 </div>
                             </div>
                            <!-- col -->
                             <div class="col_3_di">
                                 <div class="top_curs_item item_block_white">
                                    <div class="div top_curs_item_title">
                                        <a href="#">Обучать сотрудникови развивать человеческий капитал организации</a>
                                    </div>
                                    <div class="div top_curs_item_desk">Для HR и руководителей</div>
                                    <div class="div top_curs_item_btn"> <a class="btn" href="#">Подробнее</a> </div>
                                    <div class="div top_curs_item_img"> <img src="<?php echo THEME_URI; ?>/img/top_2.png" alt=""></div>
                                 </div>
                             </div>
                            <!-- col -->
                             <div class="col_3_di">
                                 <div class="top_curs_item item_block_white">
                                    <div class="div top_curs_item_title">
                                        <a href="#">Сотрудничать и создавать будущее образования совместно</a>
                                    </div>
                                    <div class="div top_curs_item_desk">Для владельцев курсов</div>
                                    <div class="div top_curs_item_btn"> <a class="btn" href="#">Подробнее</a> </div>
                                    <div class="div top_curs_item_img"> <img src="<?php echo THEME_URI; ?>/img/top_3.png" alt=""></div>
                                 </div>
                             </div>
                         </div>
                    </div> 
                </div> 
            </div>
        </div>     
        
        <!-- home_blog container -->
        <div class="container_di">
            <div class="row_di">  
                <div class="home_blog">
                    <div class="block_title">
                        <h2>Блог</h2>
                    </div> 
                    <div class="row_di"> 
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
                         </div>
                    </div> 
                </div> 
            </div>
        </div>   

        <?php
    endwhile; 

endif; 

get_footer();