<?php
session_save_path(__DIR__."/sessions/");
require_once __DIR__ . "/taskmaster/appload.php";
return Zproject\System\Routing\mainRout::rout();