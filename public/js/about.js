$(document).ready(function() {
    $("#aboutform").validate({
        rules: {
            title: "required",
            desc:"required"
        , }
    });
});