
<?php



include 'db_connection.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['appointmentId'];

    $status = $_POST['newStatus'];



    // Update the status in the database

    $query = "UPDATE appointments SET status = ? WHERE id = ?";

    $stmt = $conn->prepare($query);

    $stmt->bind_param('si', $status, $id);



    if ($stmt->execute()) {

        echo json_encode(['success' => true]);

    } else {

        echo json_encode(['success' => false, 'error' => $stmt->error]);

    }



    $stmt->close();

    $conn->close();

}

?>