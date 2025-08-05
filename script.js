$(document).ready(function () {
    $(".toggle").click(function () {
        const userId = $(this).data("id");

        if (!userId || isNaN(userId)) {
            alert("Invalid ID");
            return;
        }

        $.ajax({
            url: "toggle.php",
            method: "POST",
            data: { id: userId },
            success: function (response) {
                if (response.trim() === "success") {
                    location.reload();
                } else {
                    alert("Invalid ID from server");
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX error:", error);
                alert("AJAX error occurred: " + error);
            }
        });
    });
});
