$(function () {
    $.ajax({
        type: "GET",
        url: "https://jquery-ajax-json-api.dvl.to/api/sampledata.json",
        success: function (data) {
            // Access the "products" array in the JSON data
            var products = data.products;

            // Iterate through each product and append its name to the "#products" element
            $.each(products, function (i, product) {
                $("#products").append('<li>' + product.name + '</li>');
            });
        }
    });
});



