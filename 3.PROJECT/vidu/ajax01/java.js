$(document).ready(function() {
    $("input").click(function() {
        alert("Đã thay đổi màu");
        $("p").css("color", "red");
    });
});