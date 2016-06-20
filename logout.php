<?php
session_start();
session_destroy();
header("Location: http://smith-cargo.com/proto/index.php");
exit;
?>