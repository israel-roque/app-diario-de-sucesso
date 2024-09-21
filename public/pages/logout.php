<?php

require_once '../bootstrap.php';

unset($_SESSION['user_id'], $_SESSION['logged']);

redirectToHome();