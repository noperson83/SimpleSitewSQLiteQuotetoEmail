/* Record Type Variables */
var CDRecordPrice = '5.00';
var DVDRecordPrice = '6.00';

/* Shipping Variables */
var ThirtyOrLess = '8.00';
var EightyOrLess = '12.00';
var OneHundredFiftyOrLess = '20.00';
var OverOneHundredFifty = '0.00';

/* Do not edit below this line unless you know what you're doing */

$("#frame-record-types, #frame-record-packaging, #frame-record-sideone, #frame-record-sidetwo, #frame-record-labels").hide("fast");

$('#order_rushjob, #record-types-global, #record_types, #quantity, #record_packaging, #record_sideone, #record_sidetwo, #record_labels, #order_shippingcost').on('click keyup change', function () {

    var quantity = $('#quantity').val();
    var types = $('#record_types').val();
    var sideone = $('#record_sideone').val();
    var sidetwo = $('#record_sidetwo').val();
    var labels = $('#record_labels').val();
    var packaging = $('#record_packaging').val();
    var shipping = $('#order_shippingcost').val();

    $('#record-types-global, #record_types, #record_packaging, #record_sideone, #record_sidetwo, #record_labels, #order_shippingcost').on('click keyup change', function () {

        if ($(this).find("option:selected").attr('name') == "Choose Record Type") {
            $("#frame-record-types, #frame-record-packaging, #frame-record-sideone, #frame-record-sidetwo, #frame-record-labels").hide("fast");
            $('#record_types').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == "CD-Record") {
            $("#frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").hide("fast");
            $(".record-options.dvd-records, .record-options.round-records, .record-options.square-records, .record-options.postcard-records, .record-options.semiflexi-records, .record-options.picturedisc-records").hide("fast").prop('disabled', true);
            $(".record-options.cd-records").show('fast').prop('disabled', false);
            $("#frame-record-types select").val(CDRecordPrice);
            $("#frame-record-sideone select, #frame-record-sidetwo select, #frame-record-labels select, #frame-record-packaging select").val("0.00");
            $("#frame-record-types").show('fast');
            $('#record_types').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == "DVD-Record") {
            $("#frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").hide("fast");
            $(".record-options.cd-records, .record-options.round-records, .record-options.square-records, .record-options.postcard-records, .record-options.semiflexi-records, .record-options.picturedisc-records").hide("fast").prop('disabled', true);
            $(".record-options.dvd-records").show('fast').prop('disabled', false);
            $("#frame-record-types select").val(DVDRecordPrice);
            $("#frame-record-sideone select, #frame-record-sidetwo select, #frame-record-labels select, #frame-record-packaging select").val("0.00");
            $("#frame-record-types").show('fast');
            $('#record_types').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == 'Postcard Record') {
            $("#frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").hide("fast");
            $(".record-options.dvd-records, .record-options.round-records, .record-options.square-records, .record-options.cd-records, .record-options.semiflexi-records, .record-options.picturedisc-records").hide("fast").prop('disabled', true);
            $(".record-options.postcard-records").show('fast').prop('disabled', false);
            $("#frame-record-sideone select, #frame-record-sidetwo select, #frame-record-labels select, #frame-record-packaging select").val("0.00");
            $("#frame-record-types").show('fast');
            $('#record_types').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == 'Round') {
            $(".record-options.dvd-records, .record-options.cd-records, .record-options.square-records, .record-options.postcard-records, .record-options.semiflexi-records, .record-options.picturedisc-records").hide("fast").prop('disabled', true);
            $(".record-options.round-records").show('fast').prop('disabled', false);
            $("#frame-record-types, #frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").show('fast');
        }
        else if ($(this).find("option:selected").attr('name') == 'Square') {
            $(".record-options.dvd-records, .record-options.cd-records, .record-options.round-records, .record-options.postcard-records, .record-options.semiflexi-records, .record-options.picturedisc-records").hide("fast").prop('disabled', true);
            $(".record-options.square-records").show('fast').prop('disabled', false);
            $("#frame-record-types, #frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").show('fast');
        }
        else if ($(this).find("option:selected").attr('name') == 'Semi Flexi') {
            $(".record-options.dvd-records, .record-options.cd-records, .record-options.square-records, .record-options.postcard-records, .record-options.round-records, .record-options.picturedisc-records").hide("fast").prop('disabled', true);
            $(".record-options.semiflexi-records").show('fast').prop('disabled', false);
            $("#frame-record-types, #frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").show('fast');
        }
        else if ($(this).find("option:selected").attr('name') == 'Picture Disc') {
            $(".record-options.dvd-records, .record-options.cd-records, .record-options.square-records, .record-options.postcard-records, .record-options.semiflexi-records, .record-options.round-records").hide("fast").prop('disabled', true);
            $(".record-options.picturedisc-records").show('fast').prop('disabled', false);
            $("#frame-record-types, #frame-record-sideone, #frame-record-sidetwo, #frame-record-labels, #frame-record-packaging").show('fast');
        }
    });

    if ($('#order_rushjob').is(':checked')) {
        var rushjob = 1;
        $('#order_rushjob').val('Yes');
    } else {
        var rushjob = 0;
        $('#order_rushjob').val('No');
    }

    ////////// PREVENT IMPOSSIBLE RUNTIME COMBINATIONS
    $('#record_types').on('click keyup change', function () {
        // 4inch square
        if ($(this).find("option:selected").attr('name') == '4" Square - Clear') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, .time-5").hide('fast').prop('disabled', true);
            $(".time-4, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '4" Square - White') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, .time-5").hide('fast').prop('disabled', true);
            $(".time-4, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '4" Square - Black') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, .time-5").hide('fast').prop('disabled', true);
            $(".time-4, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '4" Square - Picture Disc - 1 Side') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, .time-5, #frame-record-sidetwo").hide('fast').prop('disabled', true);
            $(".time-4").show('fast').prop('disabled', false);
            $('#record_sideone').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '4" Square - Picture Disc - 2 Sides') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, .time-5").hide('fast').prop('disabled', true);
            $(".time-4, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 5inch
        else if ($(this).find("option:selected").attr('name') == '5" Square - Clear') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '5" Square - White') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '5" Square - Black') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '5" Square - Picture Disc - 1 Side') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, #frame-record-sidetwo").hide('fast').prop('disabled', true);
            $(".time-4, .time-5").show('fast').prop('disabled', false);
            $('#record_sideone').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '5" Square - Picture Disc - 2 Sides') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '5" Square - Clear Semi Flexi') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 6inch
        else if ($(this).find("option:selected").attr('name') == '6" Square - Clear') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '6" Square - White') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '6" Square - Black') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '6" Square - Picture Disc - 1 Side') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, #frame-record-sidetwo").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6").show('fast').prop('disabled', false);
            $('#record_sideone').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '6" Square - Picture Disc - 2 Sides') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 7inch
        else if ($(this).find("option:selected").attr('name') == '7" Square - Clear') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Square - White') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Square - Black') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Square - Picture Disc - 1 Side') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, #frame-record-sidetwo").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7").show('fast').prop('disabled', false);
            $('#record_sideone').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Square - Picture Disc - 2 Sides') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Round - Clear') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Round - White') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Round - Black') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '7" Square - Clear Semi Flexi') {
            $(".time-12, .time-11, .time-10, .time-9, .time-8").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 8inch
        else if ($(this).find("option:selected").attr('name') == '8" Square - Clear') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Square - White') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Square - Black') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Square - Picture Disc - 1 Side') {
            $(".time-12, .time-11, .time-10, .time-9, #frame-record-sidetwo").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8").show('fast').prop('disabled', false);
            $('#record_sideone').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Square - Picture Disc - 2 Sides') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Round - Clear') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Round - White') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Round - Black') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '8" Square - Clear Semi Flexi') {
            $(".time-12, .time-11, .time-10, .time-9").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 9inch
        else if ($(this).find("option:selected").attr('name') == '9" Round - Clear') {
            $(".time-12, .time-11, .time-10").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '9" Round - White') {
            $(".time-12, .time-11, .time-10").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '9" Round - Black') {
            $(".time-12, .time-11, .time-10").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 10inch
        else if ($(this).find("option:selected").attr('name') == '10" Round - Clear') {
            $(".time-12, .time-11").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '10" Round - White') {
            $(".time-12, .time-11").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '10" Round - Black') {
            $(".time-12, .time-11").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 11inch
        else if ($(this).find("option:selected").attr('name') == '11" Round - Clear') {
            $(".time-12").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, .time-11, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '11" Round - White') {
            $(".time-12").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, .time-11, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '11" Round - Black') {
            $(".time-12").hide('fast').prop('disabled', true);
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, .time-11, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

        // 12inch
        else if ($(this).find("option:selected").attr('name') == '12" Round - Clear') {
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, .time-11, .time-12, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '12" Round - White') {
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, .time-11, .time-12, #frame-record-sidetwo").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else if ($(this).find("option:selected").attr('name') == '12" Round - Black') {
            $(".time-4, .time-5, .time-6, .time-7, .time-8, .time-9, .time-10, .time-11, .time-1, #frame-record-sidetwo2").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }
        else {
            $(".time-12, .time-11, .time-10, .time-9, .time-8, .time-7, .time-6, .time-5, .time-4").show('fast').prop('disabled', false);
            $('#record_sideone, #record_sidetwo').prop('selectedIndex', 0);
        }

    });

    $('#quantity').on('keyup change', function () {
        if ($('#quantity').val() > 19 && $('#quantity').val() <= 30) {
            $('#order_shippingcost').val(ThirtyOrLess);
            $('.shipping_note').text('Note the added $8 shipping fee.')
        }
        if ($('#quantity').val() > 30 && $('#quantity').val() <= 80) {
            $('#order_shippingcost').val(EightyOrLess);
            $('.shipping_note').text('Note the added $12 shipping fee.')
        }
        if ($('#quantity').val() > 80 && $('#quantity').val() <= 150) {
            $('#order_shippingcost').val(OneHundredFiftyOrLess);
            $('.shipping_note').text('Note the added $20 shipping fee.')
        }
        if ($('#quantity').val() > 150) {
            $('#order_shippingcost').val(OverOneHundredFifty);
            $('.shipping_note').text('Note the shipping fee will be negotiated with you as soon as possible due to the large quantity.')
        }
    });

    var unittotal = parseFloat(types * 1 + sideone * 1 + sidetwo * 1 + labels * 1 + packaging * 1 + rushjob * 1).toFixed(2);
    var ordertotal = parseFloat(( unittotal * 1 ) * quantity * 1 + shipping * 1).toFixed(2);

    $('#result_unittotal').val(unittotal || 0);
    $('#result_ordertotal').val(ordertotal || 0);

});

// append choices into order form inputs
$('#record_types').on('click keyup change', function () {
    var $resultTypes = $('#formorder #order_recordtypes');
    $resultTypes.val($("#record_types option:selected").attr('name'));
});

$('#quantity').on('click keyup change', function () {
    var $resultQuantity = $('#formorder #order_quantity');
    $resultQuantity.val($('#quantity').val());
});

$('#record_sideone').on('click keyup change', function () {
    var $resultSideone = $('#formorder #order_sideone');
    $resultSideone.val($("#record_sideone option:selected").attr('name'));
});

$('#record_sidetwo').on('click keyup change', function () {
    var $resultSidetwo = $('#formorder #order_sidetwo');
    $resultSidetwo.val($("#record_sidetwo option:selected").attr('name'));
});

$('#record_labels').on('click keydown change', function () {
    var $resultLabels = $('#formorder #order_labels');
    $resultLabels.val($("#record_labels option:selected").attr('name'));
});

$('#record_packaging').on('click keydown change', function () {
    var $resultPackaging = $('#formorder #order_packaging');
    $resultPackaging.val($("#record_packaging option:selected").attr('name'));
});

// ERROR MESSAGES FOR ORDER FORM VALIDATION
$(document).ready(function () {
    var $form = $('#order_form');
    var $acceptterms = $('#order_acceptterms');
    var $name = $('#order_name');

    $form.on('submit', function (e) {
        if (!$acceptterms.is(':checked')) {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Accept our Terms & Conditions! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }


        if ($("#result_ordertotal").val() < 100) {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Order at least $100 worth of records! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#record_types").find("option:selected").attr('name') == 'CD-Records') {
            if ($("#quantity").val() < 40) {
                div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Order at least 40 copies of CD-Records! <i class='fa fa-close'></i></p>");
                $("#errors").append(div);
                this.value = 0;
                e.preventDefault();
            }
        }

        if ($("#record_types").find("option:selected").attr('name') == 'DVD-Records') {
            if ($("#quantity").val() < 50) {
                div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Order at least 50 copies of DVD-Records! <i class='fa fa-close'></i></p>");
                $("#errors").append(div);
                this.value = 0;
                e.preventDefault();
            }
        }

        if ($("#quantity").val() < 20) {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Order at least 20 Units! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_name").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A Name! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_email").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide An Email! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_phone").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A Phone Number! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_address1").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide An Address! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_city").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A City! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_state").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A State! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_zipcode").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A Zipcode! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }
        
         if ($("#order_country").val() == '') {
             div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A Country! <i class='fa fa-close'></i></p>");
             $("#errors").append(div);
             this.value = 0;
             e.preventDefault();
         }

        if ($("#order_artist").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide An Artist Name! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_title").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A Title! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_artandaudiourl").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A URL to Download Your Art and Audio Files! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#order_quantity").val() == '') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Provide A Quantity! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        if ($("#record_types").val() == '0.00') {
            div = $("<p class='error' onclick='$(this).hide();'>ERROR: You Must Specify A Record Type! <i class='fa fa-close'></i></p>");
            $("#errors").append(div);
            this.value = 0;
            e.preventDefault();
        }

        $("p.error").delay(7000).hide(300);
    });
});