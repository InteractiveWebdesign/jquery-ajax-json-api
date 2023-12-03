/* function that changes the h1 color to blue when the user clicks on it.

$(function () {
    $('h1').click(function () {
        // Change the color of the clicked h1 element to blue
        $(this).css('color', 'blue');
    });
});
*/


// ANIMATED function that changes the h1 color to blue when the user clicks on it and back to black when the user clicks on it again.

$(function () {
    $('h1').click(function () {
        // Check the current color
        var currentColor = $(this).css('color');

        // Define the target color based on the current color
        var targetColor = (currentColor === 'rgb(0, 0, 255)') ? 'rgb(0, 0, 0)' : 'blue';

        // Use the animate function to smoothly change the color
        $(this).animate({
            color: targetColor
        }, 500); // 500 milliseconds for the animation duration
    });
});