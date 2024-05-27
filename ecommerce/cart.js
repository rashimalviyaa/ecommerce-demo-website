$(document).ready(function() {
    // Calculate subtotal on quantity change
    $('.quantity-input').on('input', function() {
        var quantity = parseInt($(this).val());
        var price = parseFloat($(this).closest('.product').find('.price').text().replace('$', ''));
        var subtotal = quantity * price;
        $(this).closest('.product').find('.subtotal').text('$' + subtotal.toFixed(2));
        updateTotal();
    });

    // Update total price
    function updateTotal() {
        var total = 0;
        $('.subtotal').each(function() {
            total += parseFloat($(this).text().replace('$', ''));
        });
        $('.total-price').text('$' + total.toFixed(2));
    }

    // Initialize total price on page load
    updateTotal();
});
