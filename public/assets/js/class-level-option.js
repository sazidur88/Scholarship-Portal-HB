$("#level").change(function() {

    if ($(this).val() == "school") {
        $('#school').show();
        $('#college').hide();
        $('#university').hide();

    } else if ($(this).val() == "college") {
        $('#college').show();
        $('#school').hide();
        $('#university').hide();

    } else {
        $('#university').show();
        $('#college').hide();
        $('#school').hide();
    }
});
$("#level").trigger("change");