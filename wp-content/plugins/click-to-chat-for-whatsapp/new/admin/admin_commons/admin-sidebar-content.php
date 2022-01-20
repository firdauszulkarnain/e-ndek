<?php
/**
 * sidebar content
 */


if ( ! defined( 'ABSPATH' ) ) exit;

$othersettings = get_option('ht_ctc_othersettings');

?>

<div class="sidebar-content">

    <div class="col s12 m8 l12 xl12">
        <div class="row">
            <ul class="collapsible popout ht_ctc_sidebar_contat">
                <li class="active">
                    <div class="collapsible-header"><?php _e( 'Contact Us', 'click-to-chat-for-whatsapp' ); ?></div>	
                    <div class="collapsible-body">
                        <p class="description"><?php _e( 'For any queries, suggestions', 'click-to-chat-for-whatsapp' ); ?>. <a target="_blank" href="https://holithemes.com/plugins/click-to-chat/support/">Contact Us</a></p>	
                    </div>	
                </li>
            </ul>
        </div>
    </div>

    <?php
    do_action('ht_ctc_ah_admin_sidebar_contact' );

    if ( ! defined( 'HT_CTC_PRO_VERSION' ) ) {
        ?>
        <div class="col s12 m8 l12 xl12">
            <div class="row">
                <ul class="collapsible popout ht_ctc_sidebar_contat">
                    <li class="active">
                        <div class="collapsible-header"><?php _e( 'PRO', 'click-to-chat-for-whatsapp' ); ?></div>	
                        <div class="collapsible-body">	
                            <p class="description">Random Numbers</p>
                            <p class="description">Hide based on selected days in a week</p>
                            <p class="description">Hide based on selected time range in a day</p>
                            <p class="description">Change WhatsApp number when offline</p>
                            <p class="description">Change Call to Action when offline</p>
                            <p class="description">Fixed/Absolute Position types</p>
                            <p class="description">Display after Time delay</p>
                            <p class="description">Display after User page Scroll percentage</p>
                            <p class="description">Display only to logged-in users</p>
                            <p class="description">Webhooks - dynamic variables</p>
                            <p class="description">Google Ads Conversion</p>
                            <p class="description">Add WhatsApp in WooCommerce Product pages</p>
                            <p class="description">More features coming soon ..</p>

                            <p class="description" style="text-align: center; margin-top: 20px;"><a target="_blank" href="https://holithemes.com/plugins/click-to-chat/pricing/" class="waves-effect waves-light btn" style="width: 100%;">PRO Version</a></p>

                        </div>	
                    </li>
                </ul>
            </div>
        </div>
        <?php
    }

    ?>


</div>