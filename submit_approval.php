<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = htmlspecialchars($_POST['fullName']);
    $date = htmlspecialchars($_POST['date']);
    $reason = htmlspecialchars($_POST['reason']);

    echo "Approval submitted successfully!<br>";
    echo "Name: $fullName<br>";
    echo "Date: $date<br>";
    echo "Reason: $reason<br>";
}
?>
