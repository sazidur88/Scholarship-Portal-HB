$(document).ready(function(){
$("#level").change(function () {

    if ($(this).val() == "school") {
        $('#school').show();
        $('#position').show();
        $('#college').hide();
        $('#university').hide();

    } else if ($(this).val() == "college") {
        $('#college').show();
        $('#position').show;
        $('#school').hide();
        $('#university').hide();

    } else {
        $('#university').show();
        $('#college').hide();
        $('#school').hide();
        $('#position').hide();
    }
});
});
$("#level").trigger("change");


var level = document.getElementById("level").value;
level.onclick = function () {


}

