$(document).ready(function() {
    $("#portfolioform").validate({
        rules: {
            title: "required",
            tech:"required",
            image:"required"
        , }
    });

    $("#portfolioformEdit").validate({
        rules: {
            title: "required",
            tech:"required",
        }
    });
});
