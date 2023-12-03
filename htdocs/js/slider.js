$(document).ready(function () {
    var currentIndex = 0;
    var snippetCount = $('.code-snippet').length;
    var snippetWidth = $('.code-snippet').outerWidth();

    function showSnippet(index) {
        var translateValue = -index * snippetWidth;
        $('.code-slider-container').css('transform', 'translateX(' + translateValue + 'px)');
    }

    // Handle next button click
    $('#next').click(function () {
        if (currentIndex < snippetCount - 1) {
            currentIndex++;
            showSnippet(currentIndex);
        }
    });

    // Handle prev button click
    $('#prev').click(function () {
        if (currentIndex > 0) {
            currentIndex--;
            showSnippet(currentIndex);
        }
    });
});