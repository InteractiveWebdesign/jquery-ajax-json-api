// Search names in the seach-names.php file
$(document).ready(function () {
    $("input").keyup(function () {
        var name = $("input").val();
        $.post("search-names.php", {
            names: name
        }, function (data, status) {
            $("#names").html(data);
        });
    });
});