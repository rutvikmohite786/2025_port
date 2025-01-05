$(document).ready(function() {
    $("#detailform").validate({
        rules: {
            title: "required",
            desc:"required",
            link1:"required",
            link2:"required",
            duration:"required",
            port:"required"




        , }
    });
});