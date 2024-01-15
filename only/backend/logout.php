<?php
session_start();
session_destroy();

header("Location: http://only.loc/index.php");
exit;
