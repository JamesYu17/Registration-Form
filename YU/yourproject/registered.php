<?php
    if (isset($_GET['message'])) {
        $message = $_GET['message'];  
    } 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="assetsphp/style.css">
</head>
<body class="sucess">
    <div class="message">
        <h2>
            <?php echo $message = 'Registered Succesfully'; ?>
        </h2> 
        <p><a href="../yourproject/index.php">Go back to the Registration Form</a></p>
    </div>
</body>
</html>