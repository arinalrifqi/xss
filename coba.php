<?php
    include("koneksi.php");
?>


<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script>
        
        </script>
    </head>
    <body>
        <div class="col-sm-4">
            <form action="coba.php" method="post" name="add">
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <input type="text" class="form-control" id="comment" name="Comment">
                    </div>
                    <input type="submit" name="Submit" class="btn" value="send">
                
            </form>
        </div>
        
        <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        $comment = $_POST['Comment'];

        // include database connection file
        //include("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO victim (comment) VALUES('$comment')");

        // Show message when user added
        echo "Sent";
    }
    ?>
        
    </body>
</html>