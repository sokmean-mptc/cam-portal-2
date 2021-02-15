<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'view' => $this->getPostViewCount()
        ];
    }


    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            // return get_the_archive_title( '', false );
            // return post_type_archive_title();
            return get_queried_object()->name;
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public function getPostViewCount() {
        $post_view_count = get_post_meta( get_the_ID(), 'post_view_count', true );
        
        if( ! $post_view_count ) {
            return 0;
        }

        $value = $this->formatKMG( $post_view_count );
        return $value;
    }

    public function formatKMG( int $number ) {
        $number_format = number_format_i18n( $number );
        $exploded = explode( ',', $number_format );
        $count = count( $exploded );

        switch ( $count ) {
            case 2:
                $value = number_format_i18n( $number/1000, 1 ) . __( 'K', 'sage' );
                break;
            case 3:
                $value = number_format_i18n( $number/1000000, 1 ) . __( 'M', 'sage' );
                break;
            case 4:
                $value = number_format_i18n( $number/1000000000, 1 ) . __( 'G', 'sage' );
                break;
            default:
                $value = $number;
        }
        return $value;
    }

}
