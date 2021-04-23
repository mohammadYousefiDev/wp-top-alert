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
    'wpa_alert_align',
    'Alert Align',
    'wpa_alert_align_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_align'
);

//alert text field
add_settings_field(
    'wpa_alert_txt',
    'Alert Text',
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
    'Alert link Text',
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
    'Alert Link',
    'wpa_alert_link_function',
    'wpa_alert_settings',
    'wpa-alert-settings'
);
register_setting(
    'wpa_alert_settings_group',
    'wpa_alert_link'
);

function pp_plugin_question_section()
{}

function wpa_alert_align_function()
{
    $get = get_option( 'wpa_alert_align' );
    ?>
    <div style="width: 120px; direction: ltr">
    <input id="ltr" name="wpa_alert_align" type="radio" value="ltr" style="border: 1px solid #ddd;" <?php checked( 'ltr', $get ); ?>/> 
    <label for="ltr">LTR</label>
    
    &nbsp;&nbsp;&nbsp;
    <input id="rtl" name="wpa_alert_align" type="radio" value="rtl" style="border: 1px solid #ddd;" <?php checked( 'rtl', $get ); ?>/>
    <label for="rtl">RTL</label>
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
    
    <input name="wpa_alert_link" value="<?php echo $get; ?>" class="wpa_alert_link_txt" style="border: 1px solid #ddd; width: 70%" placeholder="https://novintech.info ..." />
    
    <?php
}