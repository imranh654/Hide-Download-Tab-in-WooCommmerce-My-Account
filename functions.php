function remove_downloads_my_account( $items ) {
    unset($items['downloads']);
    return $items;  
}
add_filter( 'woocommerce_account_menu_items', 'remove_downloads_my_account', 999 );
