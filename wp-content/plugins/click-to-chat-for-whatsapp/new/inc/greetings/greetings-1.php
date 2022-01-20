<?php
/**
 * Greetings - template - 1
 * 
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$g1_options = get_option( 'ht_ctc_g1' );
$g1_options = apply_filters( 'ht_ctc_fh_g1_options', $g1_options );

$g1_heading = (isset( $g1_options['g1_heading'])) ? esc_attr( $g1_options['g1_heading'] ) : '';

?>
<div class="ctc_g_heading"><b>Hello World</b></div>
<div class="ctc_g_content">
    <p>Hello, Are you interested in buying this product. For any queries, Chat with us.</p>
</div>
<div class="ctc_g_sentbutton">
    <input class="ht_ctc_chat_greetings_box_link" type="submit" value="WhatsApp">
</div>