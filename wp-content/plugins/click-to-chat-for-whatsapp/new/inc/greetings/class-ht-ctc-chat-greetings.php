<?php
/**
 * WhatsApp Chat  - main page .. 
 * 
 * @subpackage chat
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Chat_Greetings' ) ) :

class HT_CTC_Chat_Greetings {

    public function __construct() {
        $this->start();
	}

    public function start() {
        add_action( 'ht_ctc_ah_in_fixed_position', [$this, 'greetings_dialog'] );
    }

    

    function greetings_dialog() {

        $ht_ctc_greetings = array();

        $greetings = get_option('ht_ctc_greetings');
        $chat = get_option('ht_ctc_chat_options');

        $ht_ctc_greetings['template'] = ( isset( $chat['template']) ) ? esc_attr( $chat['template'] ) : '';
        // todo:
        $ht_ctc_greetings['template'] = 1;

        // return if template not set..
        if ( '' == $ht_ctc_greetings['template'] ) {
            return;
        }

        $ht_ctc_greetings['path'] = plugin_dir_path( HT_CTC_PLUGIN_FILE ) . 'new/inc/greetings/greetings-' . $ht_ctc_greetings['template']. '.php';

        // filter hook to update values... 
        $ht_ctc_greetings = apply_filters( 'ht_ctc_fh_greetings', $ht_ctc_greetings );

        if ( is_file( $ht_ctc_greetings['path'] ) ) {
            ?>
            <style>
                .ctc_greetings_close_btn {
                    display: none;
                }
                .ht_ctc_chat_greetings_box:hover .ctc_greetings_close_btn {
                    display: block;
                }
            </style>
            <div style="position: relative; bottom: 18px; cursor: auto;">
                
                <div class="ht_ctc_chat_greetings_box" style="position: absolute; bottom: 0px; right: 0px; min-width: 300px; max-width: 400px; background-color: #ffffff; padding: 25px; box-shadow: 1px 4px 2px 1px rgba(0,0,0,.14); border-radius:4px; ">
                    <span style="color:#ffffff; background-color: lightgray; cursor:pointer; float:right; border-radius: 50%;" class="ctc_greetings_close_btn dashicons dashicons-no-alt"></span>
                    <div class="ctc_greetings_template">
                        <?php include $ht_ctc_greetings['path']; ?>
                    </div>
                </div>
            </div>
            <?php
        }

    }


}

// new HT_CTC_Chat();

new HT_CTC_Chat_Greetings();

endif; // END class_exists check