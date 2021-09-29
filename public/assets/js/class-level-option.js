$("#level").change(function () {

    if ($(this).val() == "school") {
        $('#school').show();
        $('#position').show();
        $('#marks_cgpa').show();
        $('#college').hide();
        $('#university').hide();

    } else if ($(this).val() == "college") {
        $('#college').show();
        $('#position').show();
        $('#marks_cgpa').show();
        $('#school').hide();    
        $('#university').hide();

    } else {
        $('#university').show();
        $('#marks_cgpa').show();
        $('#college').hide();
        $('#school').hide();
        $('#position').hide();
    }
});
$("#level").trigger("change");


