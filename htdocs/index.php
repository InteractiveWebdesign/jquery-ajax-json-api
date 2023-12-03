<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn jQuery</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/search-names.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/advancedproductsfullinfo.js"></script>
    <script src="js/change-title.js"></script>
    <script src="js/slider.js"></script>
    

    <script>
        $(document).ready(function () {

            $("#go").click(function () {
                $("#block").animate({
                    opacity: '0.5',
                    marginLeft: '+=50px',
                    width: '400px'
                }, 3000, "linear", function () {
                    // callback function is executed when the animation is complete
                    $(this).after("<div id='animationMessage'>Animation complete. <button id='removeMessage'>Remove</button></div>");
                });
            });

            // Add event delegation for dynamically added button
            $(document).on("click", "#removeMessage", function () {
                $("#animationMessage").remove();
            });

            $("#btn").click(function () {
                // Show the loader
                $(".loader-container").show();

                // Simulate loading with a fake percentage
                var fakePercentage = 0;
                var fakeLoader = setInterval(function () {
                    fakePercentage += 10;
                    if (fakePercentage <= 100) {
                        // Update the loader width based on the fake percentage
                        $(".loader-bar").css("width", fakePercentage + "%");
                    } else {
                        // Stop the loader when it reaches 100%
                        clearInterval(fakeLoader);
                        // Hide the loader
                        $(".loader-container").hide();
                        // Load the content
                        $("#test").load("data.txt", {
                            Name: "Ruud",
                            Lastname: "Weijters"
                        }, function () {
                            alert("The data is loaded!");
                        });
                    }
                }, 500); // Adjust the interval and total time as needed
            });
        });



    </script>
</head>
<body class="px-3 py-3">
    <h1 class="font-bold mt-3 text-5xl text-center mb-3">Learn jQuery</h1>


   <?php include_once "includes/slider.php"; ?>
    

    <div class="text-2xl font-bold text-center mt-3" id="test">
        <p class="">This is the first content!</p>
        <button class="pl-3 pr-3 btn bg-blue-500 text-white rounded-xl" id="btn">Click me to load new content</button>
    </div>
    <div class="loader-container" style="display: none;">
        <div class="loader-bar"></div>
    </div>
    
    <div class="text-2xl font-bold text-center mt-3">
        <p class="">This is an animation example</p>
        <button class="btn bg-blue-500 text-white rounded-xl" id="go">Run</button>
        <div id="block">Hello</div>
    </div>

    <!--- This is to load data and search through it-->
    <div class="text-2xl font-bold text-center mt-3">  
        <p>Search through a php file with name information (js/search-names.js)</p>
        <input class="mt-3 rounded-xl" type="text" name="name">
        <p id="names"></p>
    </div>  

    <!---  This is a sample API result -->
    <div class="text-2xl font-bold text-center mt-3">  
        <p>Get API information and show only the title of the product</p>
    </div>
    <ul class="text-center" id="products"></ul>

    <!---  This is a sample API result but then in a table with more product information -->
    <div class="text-2xl font-bold text-center mt-3">  
        <p>Get API information and show the title, price and image of the product</p>
    </div>
    <div class="max-w-4xl mx-auto mt-10">
        <table id="productsfullinfo" class="mx-3 table-auto w-full bg-white border shadow-md rounded-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                <!-- Data will be inserted here dynamically -->
            </tbody>
        </table>
    </div>

    <!---  This is a sample API result but then in a table with more product information with a search funtion -->
    <div class="text-2xl font-bold text-center mt-3">  
        <p>Search Advanced Product</p>
    </div>
    <div class="max-w-4xl mx-auto mt-3">
        
        <input type="text" id="search" class="mt-1 p-2 border rounded-md w-full">
        <table id="advancedproductsfullinfo" class="mx-3 mt-4 table-auto w-full bg-white border shadow-md rounded-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                <!-- Data will be inserted here dynamically -->
            </tbody>
        </table>
    </div>
      



</body>
</html>
