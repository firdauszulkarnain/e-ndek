// Click to Chat v3.2.9
document.addEventListener('DOMContentLoaded', function () {

    // M.AutoInit();

    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems, {});

    var elems = document.querySelectorAll('.collapsible');
    M.Collapsible.init(elems, {});

    var elems = document.querySelectorAll('.modal');
    M.Modal.init(elems, {});

    var elems = document.querySelectorAll('.tooltipped');
    M.Tooltip.init(elems, {});

});

(function ($) {

    // ready
    $(function () {

        $('select').formSelect();
        $('.collapsible').collapsible();
        $('.modal').modal();
        $('.tooltipped').tooltip();
        $('.ht-ctc-color').wpColorPicker();

        // show/hide settings
        function ht_ctc_show_hide_options() {

            // default display
            var val = $('.select_show_or_hide').find(":selected").val();
            if (val == 'show') {
                $(".showbased").show();
            } else if (val == 'hide') {
                $(".hidebased").show();
            }

            // on change
            $(".select_show_or_hide").on("change", function (e) {

                var change_val = e.target.value;
                $(".showbased").hide();
                $(".hidebased").hide();

                if (change_val == 'show') {
                    $(".showbased").show(500);
                } else if (change_val == 'hide') {
                    $(".hidebased").show(500);
                }
            });

        }
        ht_ctc_show_hide_options();

        // call to action
        var cta_styles = ['.ht_ctc_s2', '.ht_ctc_s3', '.ht_ctc_s3_1', '.ht_ctc_s7'];
        cta_styles.forEach(ht_ctc_admin_cta);

        function ht_ctc_admin_cta(style) {
            // default display
            var val = $(style + ' .select_cta_type').find(":selected").val();
            if (val == 'hide') {
                $(style + " .cta_stick").hide();
            }

            // on change
            $(style + " .select_cta_type").on("change", function (e) {
                var change_val = e.target.value;
                if (change_val == 'hide') {
                    $(style + " .cta_stick").hide(100);
                } else {
                    $(style + " .cta_stick").show(200);
                }
            });
        }

        function ht_ctc_admin_animations() {
            // default display
            var val = $('.select_an_type').find(":selected").val();
            if (val == 'no-animation') {
                $(".an_delay").hide();
                $(".an_itr").hide();
            }

            // on change
            $(".select_an_type").on("change", function (e) {

                var change_val = e.target.value;

                if (change_val == 'no-animation') {
                    $(".an_delay").hide();
                    $(".an_itr").hide();
                } else {
                    $(".an_delay").show(500);
                    $(".an_itr").show(500);
                }
            });
        }
        ht_ctc_admin_animations();

        // on change - styles
        $(".chat_select_style").on("change", function (e) {
            $(".customize_styles_link").animate({ fontSize: '1.2em' }, "slow");
        });

        // Deskop, Mobile
        if ($('#hideon_desktop').is(':checked')) {
            $(".ht_ctc_admin_desktop").hide();
        }

        if ($('#hideon_mobile').is(':checked')) {
            $(".ht_ctc_admin_mobile").hide();
        }

        $(".hidebasedondevice").on("change", function (e) {
            if ($('#hideon_desktop').is(':checked')) {
                $(".ht_ctc_admin_desktop").hide();
            } else {
                $(".ht_ctc_admin_desktop").show();
            }

            if ($('#hideon_mobile').is(':checked')) {
                $(".ht_ctc_admin_mobile").hide();
            } else {
                $(".ht_ctc_admin_mobile").show();
            }
        });

        // hide nothing or hide only on one device.
        $(document).on('click', '.hidebasedondevice', function () {
            $('.hidebasedondevice').not(this).prop('checked', false);
        });

        // WhatsApp number  
        function wn() {

            var cc = $("#whatsapp_cc").val();
            var num = $("#whatsapp_number").val();

            $("#whatsapp_cc").on("change paste keyup", function (e) {
                cc = $("#whatsapp_cc").val();
                call();
            });

            $("#whatsapp_number").on("change paste keyup", function (e) {
                num = $("#whatsapp_number").val();
                call();
            });

            function call() {
                $(".ht_ctc_wn").html(cc + '' + num);
                $("#ctc_whatsapp_number").val(cc + '' + num);
            }

        }
        wn();

        // webhook
        function hook() {

            // webhook value - html 
            var hook_value_html = $('.add_hook_value').attr('data-html');

            // add value
            $(document).on('click', '.add_hook_value', function () {

                $('.ctc_hook_value').append(hook_value_html);
            });

            // Remove value
            $('.ctc_hook_value').on('click', '.hook_remove_value', function (e) {
                e.preventDefault();
                $(this).closest('.additional-value').remove();
            });

        }
        hook();

        // things based on screen size
        function ss() {

            var is_mobile = (typeof screen.width !== "undefined" && screen.width > 1024) ? "no" : "yes";

            if ('yes' == is_mobile) {

                // WhatsApp number tooltip position for mobile
                // $("#whatsapp_cc").data('position', 'bottom');
                $("#whatsapp_cc").attr('data-position', 'bottom');
                $("#whatsapp_number").attr('data-position', 'bottom');
            }
        }
        ss();

        function other() {

            // hover text on save_changes button
            var text = $('#ctc_save_changes_hover_text').text();
            $("#submit").attr('title', text);

            // analytics - ga4 display only if ga is enabled.
            $("#google_analytics").on("change", function (e) {
                console.log('change worked');
                if ($('#google_analytics').is(':checked')) {
                    $(".ctc_ga4").show();
                } else {
                    $(".ctc_ga4").hide();
                }
            });

            if ($('#google_analytics').is(':checked')) {
                $(".ctc_ga4").show();
            } else {
                $(".ctc_ga4").hide();
            }

        }
        other();

    });


})(jQuery);
