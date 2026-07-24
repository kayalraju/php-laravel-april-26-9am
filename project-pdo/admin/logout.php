<?php
session_start();
require "configs/db.php";


session_destroy();

header("Location: index.php");

exit;