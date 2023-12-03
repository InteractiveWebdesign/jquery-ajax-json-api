$(function () {
    $.ajax({
        type: "GET",
        url: "https://jquery-ajax-json-api.dvl.to/api/advancedproductdata.json",
        success: function (data) {
            console.log("Data loaded:", data);

            // Check if 'products' array exists in the data
            if (data && Array.isArray(data.products)) {
                var advancedProducts = data.products;
                console.log("Advanced Products:", advancedProducts);

                var tbody = $("#advancedproductsfullinfo tbody");
                populateTable(advancedProducts, tbody);

                // Search functionality
                $("#search").keyup(function () {
                    var searchTerm = $(this).val().toLowerCase();

                    // Ensure 'advancedProducts' is an array before filtering
                    if (Array.isArray(advancedProducts)) {
                        var filteredAdvancedProducts = advancedProducts.filter(function (product) {
                            return product.name.toLowerCase().includes(searchTerm);
                        });

                        // Clear the table before populating with search results
                        tbody.empty();
                        populateTable(filteredAdvancedProducts, tbody);
                    }
                });
            } else {
                console.error("Data format is not as expected. Unable to proceed.");
            }
        },
        error: function (xhr, status, error) {
            console.error("Error fetching data:", error);
        }
    });
});

function populateTable(advancedProducts, tbody) {
    // Ensure 'advancedProducts' is an array before populating the table
    if (Array.isArray(advancedProducts)) {
        // Populate the table with advanced product information
        $.each(advancedProducts, function (i, product) {
            tbody.append('<tr><td class="px-4 py-2">' + product.name + '</td><td class="px-4 py-2">' + product.price + '</td><td class="px-4 py-2">' + product.description + '</td></tr>');
        });
    } else {
        console.error("Invalid data format for populating the table.");
    }
}