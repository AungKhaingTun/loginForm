
    <?php
    /*
        $sql = "SELECT * FROM user";
        $res = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($res);

        if($rowCount>0){
            while($row = mysqli_fetch_assoc($res)){
                echo $row['username']. $row['password']."<br>";
            }
        } else {
            echo "No result found.";
        }*/

    ?>

    <?php
        require_once 'includes/header.php';
        require_once 'includes/footer.php';
    ?>

    <?
        if(isset($_SESSION['sessionId'])){
            echo "You are loggin in!";
        } else{
            echo "Home";
        }
    ?>