<?php

class UT_Parser {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        // add_action( 'after_setup_theme', [$this, 'insert_scholls_attribute'] );


        //prevents html from being stripped from term descriptions 
        // foreach ( array( 'pre_term_description' ) as $filter ) {
        //     remove_filter( $filter, 'wp_filter_kses' );
        // }

        //prevents html being stripped out when using the term description function (http://codex.wordpress.org/Function_Reference/term_description).
        // foreach ( array( 'term_description' ) as $filter ) {
        //     remove_filter( $filter, 'wp_kses_data' );
        // }

    }

    public function insert_courses() {

        require_once THEME_DIR . '/lib/phpQuery/phpQuery.php';
        $courses_url = 'https://adminagregator.obrazoval.ru/api/courses?with[0]=image&with[1]=owners&with[2]=compilations&perPage=1&sort=sort-asc';
        $courses = $this->get_data_by_url($courses_url);
        $tax_school_name = 'pa_onlajn-platforma';
        $tax_category_name = 'product_cat';

        if (isset($courses['data'])) {
            foreach ($courses['data'] as $course) {

                $course_url = 'https://obrazoval.ru/courses/' . $course['slug'];
                $doc = phpQuery::newDocument(file_get_contents($course_url));

                // $product = new WC_Product_Simple();
                // $product->set_name( $course['title'] ); 
                // $product->set_slug( $course['slug'] );
                // $product->set_regular_price( $course['price'] ); 
                // $product->set_short_description( $course['summary'] );
                // $product->set_stock_status( 'instock' );
            
                // save category
                // if ($course['section']) {
                //     $category = get_term_by( 'name', $course['section'], $tax_category_name );
                //     $cat_ids = ( $category->parent != 0 ) ? [ $category->term_id, $category->parent ] : [ $category->term_id ];
                //     $product->set_category_ids( $cat_ids );
                // }

                // save media
                // $img_id = $this->upload_file_by_url( $course['image'] );
                // $product->set_image_id( $img_id );

                // save schools
                // if ($course['owners']) {
                //     foreach ($course['owners'] as $owner) {
                //         if ( term_exists( $owner['slug'], $tax_school_name ) ) { // Проверяем, существует ли такоe значение в указанном атрибуте
                //             $term_id = get_term_by( 'slug', $owner['slug'], $tax_school_name )->term_id;
                //             $this->set_attr_product( $product, $tax_school_name, $term_id );
                //         }
                //     }
                // }

                // save attributes
                // $attr_name = null;
                // $attrs = $doc->find('.l-features.b-bordered--no-hover')->children();
                // foreach ($attrs as $attr) {
                //     $pq_attr = pq($attr);
                //     $label_attr = $pq_attr->find('.l-features__title');
                //     $value_attr = $pq_attr->find('.l-features__value');
                //     $label = trim($label_attr->text());
                //     $value = trim($value_attr->text());

                //     if ( $label == 'Сложность' ) {
                //         $attr_name = 'pa_slozhnost'; 
                //     } elseif ( $label == 'Тип обучения' ) {
                //         $attr_name = 'pa_tip-obucheniya'; 
                //     } elseif ( $label == 'Формат обучения' ) {
                //         $attr_name = 'pa_format-obucheniya'; 
                //     } elseif ( $label == 'Трудоустройство' ) {
                //         $attr_name = 'pa_trudoustrojstvo'; 
                //     } elseif ( $label == 'Сертификат' ) {
                //         $attr_name = 'pa_sertifikat'; 
                //     } else {
                //         continue;
                //     }

                //     $term = get_term_by( 'name', $value, $attr_name );
                //     if ( ! $term ) {
                //         $term = wp_insert_term( $value, $attr_name, [] );
                //         $term_id = $term['term_id'];
                //     } else {
                //         $term_id = $term->term_id;
                //     }
                //     $this->set_attr_product( $product, $attr_name, $term_id );
                // }

                // save descriptions
                $desc_1 = $doc->find('.b-title__large .show-hide__content')->html();


                echo '<pre>';
                print_r( $desc_1 );
                echo '</pre>';
                
                echo '<pre>';
                print_r( $course['title'] );
                echo '</pre>';

                // $product->save();

                // update_post_meta($product->get_id(), '_product_id', $course['id']);
                // update_field( 'duration_course', $course['duration']. ',', $product->get_id() );
                // update_field( 'start_course', $course['startedAt'], $product->get_id() );
                // update_field( 'link_course', $course['externalUrl'], $product->get_id() );

            }
        }
    }

    public function set_attr_product( $product, $taxonomy, $term_id ) {

        $attributes = (array)$product->get_attributes();

        if ( array_key_exists( $taxonomy, $attributes ) ) {  // Если наш атрибут имеется у этого товара
            foreach ( $attributes as $key => $attribute ) {
                // $key - таксономия атрибута (с приставкой pa_)
                // $attribute - объект WC_Product_Attribute
                if ( $key == $taxonomy ) { //Если это наш атрибут
                    $options = (array)$attribute->get_options();  // Получаем массив из ID значений этого атрибута
                    $options[] = $term_id;   // Добавляем туда ещё и наше значение
                    $attribute->set_options($options); //Применяем новый набор значений к этому атрибуту
                    $attributes[$key] = $attribute; // Теперь заменяем наш атрибут новым в массиве атрибутов
                    break;
                }
            }
            $product->set_attributes( $attributes ); //Применяем к товару подкорректированный массив атрибутов
        } else {
            // Если наш атрибут у этого товара отсутствует
            // создаем новы атрибут
            $attribute = new WC_Product_Attribute();
            $attribute->set_id( sizeof( $attributes) + 1 );
            $attribute->set_name( $taxonomy );
            $attribute->set_options( [ $term_id ] );
            $attribute->set_position( sizeof( $attributes) + 1 );
            $attribute->set_visible( true );
            $attribute->set_variation( false );
            $attributes[] = $attribute;  // Добавляем к массиву атрибутов - наш
            $product->set_attributes( $attributes ); //Применяем к товару подкорректированный массив атрибутов
        }
    }

    public function insert_scholls_attribute() {

        require_once THEME_DIR . '/lib/phpQuery/phpQuery.php';
        $schools_url = 'https://adminagregator.obrazoval.ru/api/owners?with[0]=image&with[1]=counters&with[2]=fields&with[3]=rating&perPage=500&sort=overallRate-desc';
        $schools = $this->get_data_by_url($schools_url);
        $tax_name = 'pa_onlajn-platforma';

        if (isset($schools['data'])) {
            foreach ($schools['data'] as $school) {

                $school_url = 'https://obrazoval.ru/owners/' . $school['slug'];
                $doc = phpQuery::newDocument(file_get_contents($school_url));

                $elem = $doc->find('.show-hide__content');
	            $full_desc = $elem->html();

                $term_ids = wp_insert_term( 
                    $school['name'], 
                    $tax_name, 
                    [
                        'description' => $full_desc,
                        'parent'      => 0,
                        'slug'        => $school['slug'],
                    ]
                );

                if ( is_wp_error( $term_ids ) ){
                    echo $term_ids->get_error_message();
                }

                $school_obj = get_term_by('id', $term_ids['term_id'], $tax_name);

                // $school['id']
                // $school['icon']
                // $school['image']
                // $school['externalUrl']
                update_term_meta( $term_ids['term_id'], 'school_id', $school_obj->term_id );
                update_field( 'link_school', $school['externalUrl'], $tax_name . '_' . $school_obj->term_id );
                // save media
                $img_id = $this->upload_file_by_url( $school['image'] );
                update_field( 'img_school', $img_id, $tax_name . '_' . $school_obj->term_id );

                // echo '<pre>';
                // print_r( $full_desc );
                // echo '</pre>';
            
            }
        }

    }

    public function upload_file_by_url( $image_url ) {

        // it allows us to use download_url() and wp_handle_sideload() functions
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    
        // download to temp dir
        $temp_file = download_url( $image_url );
    
        if( is_wp_error( $temp_file ) ) {
            return false;
        }
    
        // move the temp file into the uploads directory
        $file = array(
            'name'     => basename( $image_url ),
            'type'     => mime_content_type( $temp_file ),
            'tmp_name' => $temp_file,
            'size'     => filesize( $temp_file ),
        );
        $sideload = wp_handle_sideload(
            $file,
            array(
                'test_form'   => false // no needs to check 'action' parameter
            )
        );
    
        if( ! empty( $sideload[ 'error' ] ) ) {
            // you may return error message if you want
            return false;
        }
    
        // it is time to add our uploaded image into WordPress media library
        $attachment_id = wp_insert_attachment(
            array(
                'guid'           => $sideload[ 'url' ],
                'post_mime_type' => $sideload[ 'type' ],
                'post_title'     => basename( $sideload[ 'file' ] ),
                'post_content'   => '',
                'post_status'    => 'inherit',
            ),
            $sideload[ 'file' ]
        );
    
        if( is_wp_error( $attachment_id ) || ! $attachment_id ) {
            return false;
        }
    
        // update medatata, regenerate image sizes
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
    
        wp_update_attachment_metadata(
            $attachment_id,
            wp_generate_attachment_metadata( $attachment_id, $sideload[ 'file' ] )
        );
    
        return $attachment_id;
    
    }

    public function get_data_by_url( $url ) {
		
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
	}
} 