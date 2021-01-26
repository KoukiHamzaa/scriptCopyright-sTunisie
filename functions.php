/***code a ajoute a lfin de la page functions.php ***/

function load_js_assets() {
    if( is_page(numero de page) ) {
        wp_enqueue_script('my-js', 'http://localhost:100/fribbo/code.js', array('jquery'), '', false);
    } 
}

add_action('wp_enqueue_scripts', 'load_js_assets');

/***code a ajoute a lfin de la page functions.php ***/
//example : 
//if( is_page(1) =>seulement le page 1 
//if( is_page([2,3]) => page 2 et 3 