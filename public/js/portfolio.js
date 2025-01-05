$(document).ready(function() {
    $("#portfolioform").validate({
        rules: {
            title: "required",
            tech:"required",
            image:"required"
        , }
    });
});
