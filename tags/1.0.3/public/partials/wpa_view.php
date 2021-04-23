<?php
//check wp-alert status
if( get_option('wpa_alert_status') == 1 ):

$location = get_option('wpa_alert_location');
if( $location == 1 || ( is_home() && $location == 2 ) || ( is_singular() && $location == 3 ) || ( is_archive() && $location == 4 ) ):
?>

<style>
    .wpa_container
    {
        background-color: <?php echo get_option( 'wpa_alert_bgColor' ); ?>;
    }
    
    .wpa_link_view
    {
        background-color: <?php echo get_option( 'wpa_alert_link_bgColor' ); ?>;
    }
</style>

<section class="wpa_container">
    
    <div class="wpa_in_container">
        
        <span>&#215;</span>
        
        <div class="wpa_container_box">
            <strong><?php echo get_option('wpa_alert_txt'); ?></strong>
            <a href="<?php echo get_option('wpa_alert_link'); ?>" class="wpa_link_view"><?php echo get_option('wpa_alert_link_txt'); ?></a>
        </div>
        
    </div>
    
</section>
<?php
endif;

endif;
//end check wp-top-alert status