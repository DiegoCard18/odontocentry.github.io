<?php
session_start();
session_unset();
session_destroy();
header('Location: ../Index.php?c=Login&a=Index');
