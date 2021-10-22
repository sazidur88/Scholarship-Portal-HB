$("#level").change(function () {

    if ($(this).val() == "School") {
        $('#school').show(); $('#marks_cgpa').show(); $('#college').hide();
        $('#university').hide(); $('#ssc_year').hide(); $('#ssc_institution').hide(); $('#ssc_gpa').hide();
        $('#hsc_year').hide(); $('#hsc_institution').hide(); $('#hsc_gpa').hide(); $('#hsc_next').hide();
        $('#ssc_next').hide(); $('#sig_ach').hide();

    } else if ($(this).val() == "College") {
        $('#college').show(); $('#marks_cgpa').show(); $('#school').hide();
        $('#university').hide(); $('#ssc_year').show(); $('#ssc_institution').show(); $('#ssc_gpa').show();
        $('#hsc_year').hide(); $('#hsc_institution').hide(); $('#hsc_gpa').hide(); $('#ssc_next').show();
        $('#hsc_next').hide(); $('#sig_ach').show();
    } else {
        $('#university').show(); $('#marks_cgpa').show(); $('#college').hide(); $('#school').hide();
        $('#ssc_year').show(); $('#ssc_institution').show(); $('#ssc_gpa').show();
        $('#hsc_year').show(); $('#hsc_institution').show(); $('#hsc_gpa').show(); $('#hsc_next').show();
        $('#ssc_next').show(); $('#sig_ach').show();
    }
});
$("#level").trigger("change");