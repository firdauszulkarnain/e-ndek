<?php
/**
 * Style - 1
 * 
 * theme button
 * 
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$s1_options = get_option( 'ht_ctc_s1' );
$s1_options = apply_filters( 'ht_ctc_fh_s1_options', $s1_options );

$s1_css = "";
$s1_css .= "cursor:pointer;";
$s1_text_color = (isset( $s1_options['s1_text_color'])) ? esc_attr( $s1_options['s1_text_color'] ) : '';
$s1_css .= ('' !== $s1_text_color) ? "color:$s1_text_color;": "";
$s1_bg_color = (isset( $s1_options['s1_bg_color'])) ? esc_attr( $s1_options['s1_bg_color'] ) : '';
$s1_css .= ('' !== $s1_bg_color) ? "background-color:$s1_bg_color;": "";

$s1_style = ('' !== $s1_css) ? "style='$s1_css'": "";

$s1_fullwidth_css = "";

if ( '' == $call_to_action ) {
    $call_to_action = "WhatsApp us";
}

if ( isset( $s1_options['s1_m_fullwidth'] ) ) {
  $s1_fullwidth_css = "@media(max-width:1201px){.ht-ctc.style-1{left:unset !important;right:0px !important;}.ht-ctc.style-1,.ht-ctc .s1_btn{width:100%;}}";

?>
<style id="ht-ctc-s1"><?= $s1_fullwidth_css ?></style>
<?php
}

?>
<button <?= $s1_style; ?> class="ctc-analytics s1_btn ctc_cta"><?= $call_to_action ?></button>