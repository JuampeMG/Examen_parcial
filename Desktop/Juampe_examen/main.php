<?php 

if (isset($_GET['quotes'])){
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "examen";
        $refran = $_GET['quotes'];


        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT sentence FROM refranero WHERE sentence LIKE '$refran%'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row['sentence'];
                echo '<br>';
            }
        }
        $conn->close();
    }
?>