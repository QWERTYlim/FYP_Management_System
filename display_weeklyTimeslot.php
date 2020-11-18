<?php
    include 'includes/db.connect.php'
?>

<?php
    

    $sql = "SELECT id, student_id, student_name, teacher_name , sem_name , from_time , to_time FROM timeslot";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo   $row["id"]. ") " . " - Student ID) " . $row["student_id"]. " - Student Name)" . $row["student_name"]. " - Teacher Name) " 
        . $row["teacher_name"]. " - Sem) " . $row["sem_name"] . " - from) " . $row["from_time"] . " - to) " . $row["to_time"]  . "<br><br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>
