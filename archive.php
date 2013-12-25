<?php
if ( is_category(get_option('productId')) ) {
    include(TEMPLATEPATH . '/products.php');
} else if ( is_category(get_option('newsId')) ) {
    include(TEMPLATEPATH . '/news.php');
} else {
    include(TEMPLATEPATH . '/news.php');
}
?>