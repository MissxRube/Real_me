
    $(document).ready(function () {
        $('.shipping select[name=shipping]').change(function () {
            var cost = parseInt($(this).find('option:selected').data('price'));
            var subtotal = parseInt($('.order_subtotal').data('price'));
            $('#order_total_price span').text('$' + (cost+subtotal));
        });
    });




