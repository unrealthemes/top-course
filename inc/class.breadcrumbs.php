<?php

class UT_Breadcrumbs {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        add_filter( 'kama_breadcrumbs_args', [$this, 'breadcrumbs_args'] );
        add_filter( 'kama_breadcrumbs_filter_elements', [$this, 'breadcrumbs_add_elements'], 10, 4 );

    }

    public function breadcrumbs_args( $args ) {

        $my_args = [
            'markup' => [
                'wrappatt'  => '<div id="page-breadcrumb" class="page-breadcrumb"><ul>%s</ul></div>',
                'linkpatt'  => '<li><a href="%s">%s</a></li>',
                'titlepatt' => '<li>%s</li>',
                'seppatt'   => '',
            ],
            'priority_tax' => [ 'product_cat' ],
        ];
    
        return $my_args + $args;
    }

    public function breadcrumbs_add_elements( $elms, $class, $ptype ) {

        if ( is_shop() || is_product() ) {
            $tax_name = 'product_cat';
            unset($elms['home']);
            $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
            $elms['home_after'] = $class->makelink( $shop_page_url, 'Все курсы' );

            if ( isset($elms['single']['product_cat__tax_crumbs']) ) {
                foreach ( (array)$elms['single']['product_cat__tax_crumbs'] as $key => $item ) {

                    $sub_list = '<span class="sub-sep"></span><div class="sub-crumbs">';
                    $term = get_term_by( 'name', $item->name, $tax_name );

                    if ( $term->parent != 0 ) {
                        $term_childs = get_terms( ['taxonomy' => $tax_name, 'parent' => $term->parent] );
                        if ( $term_childs ) {
                            foreach ( $term_childs as $term_child ) {
                                if ( $term_child->term_id != $term->term_id ) {
                                    $term_child_link = get_term_link($term_child->term_id, $tax_name);
                                    $sub_list .= '<div class="sub-crumbs-item"><a href="' . $term_child_link . '">' . $term_child->name . '</a></div>';
                                }
                            }
                        }
                    } else {
                        $term_parents = get_terms( ['taxonomy' => $tax_name, 'parent' => 0] );
                        if ( $term_parents ) {
                            foreach ( $term_parents as $term_parent ) {
                                if ( $term_parent->term_id != $term->term_id ) {
                                    $term_parent_link = get_term_link($term_parent->term_id, $tax_name);
                                    $sub_list .= '<div class="sub-crumbs-item"><a href="' . $term_parent_link . '">' . $term_parent->name . '</a></div>';
                                }
                            }
                        }
                    }
                    $sub_list .= '</div>';

                    $html = '<li><a href="' . $item->url . '">' . $item->name . '</a>' . $sub_list . '</li>';
                    $elms['single']['product_cat__tax_crumbs'][ $key ] = $html;

                }
            }
        }

        return $elms;
    }
} 