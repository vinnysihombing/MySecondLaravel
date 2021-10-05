//upload file
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

//tabs-jquery
$(document).ready(function () {
    $("#tabs").tabs();
});

$(document).ready(function () {
    $("#tabsPengumuman").tabs();
});