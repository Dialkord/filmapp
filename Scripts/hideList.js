$(document).ready(function () {
    $("#expList").find("ul").hide();

    $("#expList > li").click(function () {
        $(this).find("ul").slideToggle();
    });
});