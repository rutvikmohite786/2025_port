$(document).ready(function() {
    
    $("#teamform").validate({
        rules: {
            name: "required",
            desc:"required",
            image:"required"
        , }
    });
});