<?php
//settings sections
add_settings_section(
    'wpa-alert-settings',
    '',
    'pp_plugin_question_section',
    'wpa_alert_settings'
);

//alert align field
add_settings_field(
    'wpa_alert_status',
    __('Plugin Status', 'wp_top_alert'),
    'wpa_alert_status_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_status'
);

//alert align field
add_settings_field(
    'wpa_alert_align',
    __('Alert Align', 'wp_top_alert'),
    'wpa_alert_align_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_align'
);

//alert location field
add_settings_field(
    'wpa_alert_location',
    __('Alert Location', 'wp_top_alert'),
    'wpa_alert_location_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_location'
);

//alert bg color field
add_settings_field(
    'wpa_alert_bgColor',
    __('Alert Background Color', 'wp_top_alert'),
    'wpa_alert_bgColor_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_bgColor'
);

//alert text field
add_settings_field(
    'wpa_alert_txt',
    __('Alert Text', 'wp_top_alert'),
    'wpa_alert_txt_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_txt'
);

//alert link text field
add_settings_field(
    'wpa_alert_link_txt',
    __('Alert link Text', 'wp_top_alert'),
    'wpa_alert_link_txt_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_link_txt'
);

//alert link field
add_settings_field(
    'wpa_alert_link',
    __('Alert Link', 'wp_top_alert'),
    'wpa_alert_link_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_link'
);

//alert bg color field
add_settings_field(
    'wpa_alert_link_bgColor',
    __('Alert link Background Color', 'wp_top_alert'),
    'wpa_alert_link_bgColor_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_link_bgColor'
);

function wpa_alert_status_function()
{
    $get = get_option( 'wpa_alert_status' );
    ?>
    <div class="radio_loc">
    <input type="radio" name="wpa_alert_status" value="1" <?php checked( 1, $get ) ?> id="enable"/> <label for="enable"><?php echo __( 'Enable' , 'wp_top_alert' ); ?></label> &nbsp;&nbsp;
    <input type="radio" name="wpa_alert_status" value="0" <?php checked( 0, $get ) ?> id="disable"/> <label for="disable"><?php echo __( 'Disable' , 'wp_top_alert' ); ?></label>
    </div>
    <?php
}

function wpa_alert_location_function()
{
    $get = get_option( 'wpa_alert_location' );
    ?>
    <div class="wpa_alert_location_parent">
    <input type="radio" name="wpa_alert_location" value="1" <?php checked( 1, $get ) ?> id="all"/> <label for="all"><?php echo __( 'All Pages' , 'wp_top_alert' ); ?></label><br />
    <input type="radio" name="wpa_alert_location" value="2" <?php checked( 2, $get ) ?> id="home"/> <label for="home"><?php echo __( 'HomePage' , 'wp_top_alert' ); ?></label><br />
    <input type="radio" name="wpa_alert_location" value="3" <?php checked( 3, $get ) ?> id="singular"/> <label for="singular"><?php echo __( 'Singular (posts, pages, ...)' , 'wp_top_alert' ); ?></label><br />
    <input type="radio" name="wpa_alert_location" value="4" <?php checked( 4, $get ) ?> id="archive"/> <label for="archive"><?php echo __( 'Archives' , 'wp_top_alert' ); ?></label><br />
    </div>
    <?php
}

function pp_plugin_question_section()
{}

function wpa_alert_link_bgColor_function()
{
    $get = get_option( 'wpa_alert_link_bgColor' );
    ?>
    
    <input class="wpa-link-bgcolor-field" type="hidden" name="wpa_alert_link_bgColor" value="<?php echo $get; ?>"/>
    
    <?php
}

function wpa_alert_bgColor_function()
{
    $get = get_option( 'wpa_alert_bgColor' );
    ?>
    
    <input class="wpa-bgcolor-field" type="hidden" name="wpa_alert_bgColor" value="<?php echo $get; ?>"/>
    
    <?php
}

function wpa_alert_align_function()
{
    $get = get_option( 'wpa_alert_align' );
    ?>
    <div class="radio_loc">
    <input id="ltr" name="wpa_alert_align" type="radio" value="ltr" style="border: 1px solid #ddd;" <?php checked( 'ltr', $get ); ?>/>
    <label for="ltr"><?php echo __('LTR', 'wp_top_alert') ?></label>

    &nbsp;&nbsp;&nbsp;
    <input id="rtl" name="wpa_alert_align" type="radio" value="rtl" style="border: 1px solid #ddd;" <?php checked( 'rtl', $get ); ?>/>
    <label for="rtl"><?php echo __('RTL', 'wp_top_alert'); ?></label>
    </div>
    <?php
}

function wpa_alert_txt_function()
{
    $get = get_option( 'wpa_alert_txt' );
    ?>

    <input name="wpa_alert_txt" value="<?php echo $get; ?>" style="border: 1px solid #ddd; width: 70%" />

    <?php
}

function wpa_alert_link_txt_function()
{
    $get = get_option( 'wpa_alert_link_txt' );
    ?>

    <input name="wpa_alert_link_txt" value="<?php echo $get; ?>" style="border: 1px solid #ddd; width: 70%" />

    <?php
}

function wpa_alert_link_function()
{
    $get = get_option( 'wpa_alert_link' );
    ?>

    <input name="wpa_alert_link" value="<?php echo $get; ?>" class="wpa_alert_link_txt" style="border: 1px solid #ddd; width: 70%" placeholder="https://novintech.info/ ..." />

    <?php
}
