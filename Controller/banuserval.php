<?php
require_once "../model/db.php";
$conn = getConnection();

if (isset($_POST['ban_user'])) {
    $username = $_POST['ban_user'];
    $escapedUsername = mysqli_real_escape_string($conn, $username);
    $updateQuery = "UPDATE signin_info SET banstatus = '1' WHERE username = '$escapedUsername'";
    mysqli_query($conn, $updateQuery);
    header("Location: ../view/search.php?message=successfully banned");
    exit();
}
?>
