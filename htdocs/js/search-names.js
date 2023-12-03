// Search names in the seach-names.php file
$(function () {
    $("input").keyup(function () {
        var name = $("input").val();
        $.post("search-names.php", {
            names: name
        }, function (data, status) {
            $("#names").html(data);
        });
    });
});