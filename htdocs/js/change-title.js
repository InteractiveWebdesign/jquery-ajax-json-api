

/* function that changes the h1 color to blue when the user clicks on it.

$(function () {
    $('h1').click(function () {
        // Change the color of the clicked h1 element to blue
        $(this).css('color', 'blue');
    });
});
*/


// ANIMATED function that changes the h1 color to blue when the user clicks on it.

$(function () {
    $('h1').click(function () {
        // Use the animate function to smoothly change the color to blue
        $(this).animate({
            color: 'blue'
        }, 500); // 1000 milliseconds (1 second) for the animation duration
    });
});