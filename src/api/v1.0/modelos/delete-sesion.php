<?php
session_start();
unset($_SESSION['rol']);
session_destroy();
http_response_code(200);
