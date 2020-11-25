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
            'view' => $this->getPostViewCount(),
            'pdf' => $this->getPdf(),
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

            return __('Latest Posts', 'cam');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'cam'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'cam');
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
                $value = number_format_i18n( $number/1000, 1 ) . __( 'K', 'cam' );
                break;
            case 3:
                $value = number_format_i18n( $number/1000000, 1 ) . __( 'M', 'cam' );
                break;
            case 4:
                $value = number_format_i18n( $number/1000000000, 1 ) . __( 'G', 'cam' );
                break;
            default:
                $value = $number;
        }
        return $value;
    }

    public function getPdf() {
		$items = get_post_meta( get_the_ID(), 'cam_group_pdf_items', true );
		if( is_array( $items ) )
		foreach( $items as $item ){
			echo '<iframe src="https://docs.google.com/gview?url='.$item['pdf_url'].'&embedded=true" style="width:100%; height:1000px;" frameborder="0"></iframe>';
		}
	}
}
