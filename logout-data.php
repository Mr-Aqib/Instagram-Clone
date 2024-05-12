<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/instagram2/signin-form.php");
?>;