$('.add_to_cart').click(function () {
    console.log($(this).attr('id'));
    console.log(BASE_URL);

    $.ajax({
        url: BASE_URL + "/shop/AddToCart",
        type: "GET",
        data: {
            product_id: $(this).attr('id')
        },
        success: function (result) {
            if (result) {
                location.reload();
            }
        }
    });
});

$('.delete_product').click(function () {

    $.ajax({
        url: BASE_URL + "/shop/DeleteProduct",
        type: "GET",
        data: {
            product_id: $(this).attr('id')
        },
        success: function (result) {
            if (result) {
                location.reload();
            }
        }
    });
});

$('.update_cart').click(function () {

    $.ajax({
        url: BASE_URL + "/shop/UpdateCart",
        type: "GET",
        data: {
            product_id: $(this).attr('id')
        },
        success: function (result) {
            if (result) {
                location.reload();
            }
        }
    });
});

$('.sm').delay('2000').slideUp();
