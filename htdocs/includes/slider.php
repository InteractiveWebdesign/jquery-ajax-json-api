 <!--- Slider with info about jQuery -->
 <div class="flex justify-center items-center space-x-4 mt-4">
        <button id="prev" class="bg-blue-500 text-white px-4 py-2 rounded-md">Previous</button>
        <button id="next" class="bg-blue-500 text-white px-4 py-2 rounded-md">Next</button>
    </div>

    <div class="code-slider mt-4 w-full max-w-4xl mx-auto overflow-hidden">
        <div class="code-slider-container flex transition-transform transform">
            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        //  AJAX Basics Making a Simple AJAX Request:

                        $.ajax({
                            url: 'https://api.example.com/data',
                            method: 'GET',
                            success: function(data) {
                                console.log('Data received:', data);
                            },
                            error: function(error) {
                                console.error('Error:', error);
                            }
                        });
                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        // jQuery Event Handling

                        $('#myButton').click(function() {
                            alert('Button Clicked!');
                        });
                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        // jQuery DOM Manipulation

                        $('p').addClass('highlight');
                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        // Handling API Key or Authentication:

                        var apiKey = 'your_api_key';
                        $.get('https://api.example.com/data?apiKey=' + apiKey, function(data) {
                            console.log('Data received:', data);
                        });
                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        // Handling JSON:

                        $.get('https://api.example.com/data', function(data) {
                            // Assuming the response is JSON, parse it
                            var jsonData = JSON.parse(data);
                            console.log('Parsed JSON:', jsonData);
                        });
                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">

                        // jQuery AJAX GET request

                        $.get('https://api.example.com/data')
                        .then(function(data) {
                            console.log('Data received:', data);
                        })
                        .catch(function(error) {
                            console.error('Error:', error);
                        });
                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        // Handling Asynchronous Requests:

                        $.get('https://api.example.com/data')
                        .then(function(data) {
                            console.log('Data received:', data);
                        })
                        .catch(function(error) {
                            console.error('Error:', error);
                        });

                    </code>
                </pre>
            </div>

            <div class="code-snippet w-full max-w-4xl box-content flex-none">
                <pre>
                    <code class="language-javascript">
                        // AJAX Events, Handling Before Send and Complete:
                        $.ajax({
                            url: 'https://api.example.com/data',
                            method: 'GET',
                            beforeSend: function() {
                                console.log('Request is about to be sent...');
                            },
                            complete: function() {
                                console.log('Request completed!');
                            },
                            success: function(data) {
                                console.log('Data received:', data);
                            },
                            error: function(error) {
                                console.error('Error:', error);
                            }
                        });
                    </code>
                </pre>
            </div>

            <!-- Add more code snippets here -->
        </div>
    </div>
    <!--- End Slider with info about jQuery -->