<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    session_unset();
    session_destroy();
    echo "All session variables ar now removed, and the session is destroyed";
    ?>
</body>
</html>