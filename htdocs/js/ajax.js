// Made a simple ajax call to the sampledata.json file and displayed the data in the console.
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

// Made the same functionality as above, but now show the product name and price and description in a table.
$(function () {
    $.ajax({
        type: "GET",
        url: "https://jquery-ajax-json-api.dvl.to/api/sampledata.json",
        success: function (data) {
            // Access the "products" array in the JSON data
            var products = data.products; // Corrected the variable name

            // Iterate through each product and append its name, price, and description to the "#productsfullinfo" table
            $.each(products, function (i, product) {
                $("#productsfullinfo tbody").append('<tr><td>' + product.name + '</td><td>' + product.price + '</td><td>' + product.description + '</td></tr>');
            });
        }
    });
});
