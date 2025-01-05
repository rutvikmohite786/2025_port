$(document).ready(function() {
    $("#experienceform").validate({
        rules: {
            title: "required",
            desc:"required",
            year:"required",
            location:"required",
            cname:"required"
        , }
    });
});