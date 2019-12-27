$( document ).ready(function() {
    $('#myForm').submit(function () {
        $.ajax({
            type: "POST",
            url: "test.php",
            data: "title=" + $("#articleTitle").val(),
            success: function (html) {
                $("#myClass").html(html);
                console.log('Все ногрм');
            }
        });
        return false;
    });
})