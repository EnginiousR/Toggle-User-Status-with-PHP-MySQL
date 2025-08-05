<?php
include 'db.php';

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = intval($_POST['id']);

    // Get current status
    $stmt = $conn->prepare("SELECT status FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $newStatus = $row['status'] == 1 ? 0 : 1;

        // Update the status
        $update = $conn->prepare("UPDATE users SET status = ? WHERE id = ?");
        $update->bind_param("ii", $newStatus, $id);
        if ($update->execute()) {
            echo "success";
        } else {
            echo "db error";
        }
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}
?>
