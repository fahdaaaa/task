
$(document).ready(function() {
var _Countries="";

    $.get("selectCountries", function(data, status) {
        $("#countries").html(data);
    });
    $('body').on('change', '#_Countries', function() {
        $.get("selectStates/"+this.value, function(data, status) {
            $("#cities").html(' <select  class="form-control" id="_Countries"><option selected>Choose</option></select>');

        $("#states").html(data);
       });
        _Countries=this.value;


    });
                $('body').on('change', '#_States', function() {

    $.get("selectCities/"+this.value+"/"+_Countries, function(data, status) {
    $("#cities").html(data)});


    });

});
