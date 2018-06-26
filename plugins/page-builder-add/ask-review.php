<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function plugOPB_check_installation_date() {
 
    $nobug = "";
    $nobug = get_option('plugOPB_hide_bugs');
    if (!$nobug) {

        $install_date = get_option( 'plugOps_activation_date' );
        $past_date = strtotime( '-1 days' );
 
        if ( (int)$past_date > (int)$install_date ) {
 
            add_action( 'admin_notices', 'plugOPB_display_admin_notice' );
 
        }

    }

 
}
add_action( 'admin_init', 'plugOPB_check_installation_date' );
 
function plugOPB_display_admin_notice() {
 
    $reviewurl = 'http://bit.ly/2ADqCO4';
 
    $nobugurl = get_admin_url() . '?plugOPB_hide_bugs=1';

    $install_date = get_option( 'plugOPB_activation_date' );
 
    echo '<div class="psprev-adm-notice psprev-adm-notice-wp-rating notice">';

    echo '<h4>' . __( 'Thank you for using Page Builder by PluginOps', 'page-builder-add' ) . '</h4>';

    echo '<p>' .__( 'If you enjoy using', 'page-builder-add' ). ' <strong> '.__( 'Page Builder Plugin', 'page-builder-add' ).'</strong> '. __( 'please leave us a', 'page-builder-add' ).'  <span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>'.__('review. Reviews like yours help us improve the plugin.', 'page-builder-add' ) . '</p>';

    echo '<a class="psprev-adm-notice-link" href="'.$reviewurl.'" target="_blank"><span class="dashicons dashicons-edit"></span>' . __( 'Leave a Review', 'page-builder-add' ) . '</a>';

    echo '<a href="' . $nobugurl . '"  style="float:right;">'. __( 'Dismiss this notice.', 'page-builder-add' ).'</a>';
 
 
    echo "</div>";

    echo "<style>

    .psprev-adm-notice-activation { border-color: #41c4ff; }
    .psprev-adm-notice-activation h4 { font-size: 1.05em; }
    .psprev-adm-notice-activation a { text-decoration: none; }
    .psprev-adm-notice-activation .psprev-adm-notice-link { display: inline-block; padding: 6px 8px; margin-bottom: 10px; color: rgba(52,152,219,1); font-weight: 500; background: #e9e9e9; border-radius: 2px; margin-right: 10px; }
    .psprev-adm-notice-activation .psprev-adm-notice-link span { display: inline-block; text-decoration: none; margin-right: 10px; }
    .psprev-adm-notice-activation .psprev-adm-notice-link:hover { color: #fff; background:#41c4ff; }

    .psprev-adm-notice-wp-rating { border-color: rgba(52,152,219,0.75); }
    .psprev-adm-notice-wp-rating h4 { font-size: 1.05em; }
    .psprev-adm-notice-wp-rating p:last-of-type { margin-bottom: 20px; }
    .psprev-adm-notice-wp-rating a { text-decoration: none; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link { display: inline-block; padding: 6px 8px; margin-bottom: 10px; color: rgba(52,152,219,1); font-weight: 500; background: #e9e9e9; border-radius: 2px; margin-right: 10px; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link span { display: inline-block; text-decoration: none; margin-right: 10px; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link:hover { color: #fff; background: rgba(52,152,219,0.75); }

    </style>";

}

function plugOPB_display_bf_sale_notice() {
 
    $reviewurl = 'http://bit.ly/2AXINOM';
 
    $nobugurl = get_admin_url() . '?plugOPB_hide_saleNotice=1';

    $install_date = get_option( 'plugOPB_activation_date' );
 
    echo '<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <div class="psprev-adm-notice psprev-adm-notice-wp-rating notice">';

    echo '<h3> The Ultimate <span class="specialSpan">Black Friday</span> Discount </h3>';

    echo '<br><p>' . 'With black friday comes the great discounts for our beloved users. For limited time only flat <span class="specialSpan">50%</span> off on premium extension pack, The complete premium extension pack for the price of just one extension so get it now.' . '</p>';

    echo '<a class="psprev-adm-notice-link" href="'.$reviewurl.'" target="_blank">'.'Get The Discount Now'.'</a>';

    echo '<br><br><br><a href="' . $nobugurl . '"  style="float:right;">'. __( 'Dismiss this notice.', 'page-builder-add' ).'</a>';
 
 
    echo "</div>";

    echo "<style>
    .specialSpan {background:#fff; color:#333; padding:2px 6px; border-radius:2px; font-family: Pacifico, cursive; font-style:italic;}
    .psprev-adm-notice-activation { border-color: #41c4ff; }
    .psprev-adm-notice-activation h4 { font-size: 2em; }
    .psprev-adm-notice-activation p { font-size: 16px; }
    .psprev-adm-notice-activation a { text-decoration: none; }
    .psprev-adm-notice-activation .psprev-adm-notice-link { display: inline-block; padding: 6px 8px; margin-bottom: 10px; color: rgba(52,152,219,1); font-weight: 500; background: #e9e9e9; border-radius: 2px; margin-right: 10px; }
    .psprev-adm-notice-activation .psprev-adm-notice-link span { display: inline-block; text-decoration: none; }
    .psprev-adm-notice-activation .psprev-adm-notice-link:hover { color: #fff; background:#41c4ff; }

    .psprev-adm-notice-wp-rating { background:#333; border-radius:10px; text-align:center; padding:25px 5px; color:#fff;padding-bottom:35px; border:10px solid #9e9e9e; }
    .psprev-adm-notice-wp-rating h3 { font-size: 2em; color:#fff;}
    .psprev-adm-notice-wp-rating p:last-of-type { margin-bottom: 50px; font-size:16px; }
    .psprev-adm-notice-wp-rating a { text-decoration: none; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link { padding: 15px 20px; margin-bottom: 10px; color: rgba(52,152,219,1); font-weight: 500; background: #e9e9e9; border-radius: 2px; font-size:19px;  letter-spacing:3px; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link span {  text-decoration: none; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link:hover { color: #fff; background: rgba(52,152,219,0.75); }

    </style>";

}


function plugOPB_set_no_bug() {
 
    $nobug = "";
 
    if ( isset( $_GET['plugOPB_hide_bugs'] ) ) {
        $nobug = esc_attr( $_GET['plugOPB_hide_bugs'] );
    }



    if ( 1 == $nobug ) {
       add_option( 'plugOPB_hide_bugs', TRUE );
    }
 
 
} add_action( 'admin_init', 'plugOPB_set_no_bug', 5 );

?>