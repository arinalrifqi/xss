<html>
<head>

</head>
    
    <body>
        <?php
        include("koneksi.php");

        // Check If form submitted, insert form data into users table.
        if(isset($_GET['c'])) {

            // include database connection file
            $comment = $_GET['c'];
            //include("koneksi.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO victim (comment) VALUES('$comment')");

            // Show message when user added
            echo "Sent";
        }
        ?>
    </body>
</html>