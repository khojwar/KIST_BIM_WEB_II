<?php

require 'src/Utils/Logger.php';
require 'src/Database/Logger.php';

use Store\Utils;
use Store\Database;

$loggers = [
    new Utils\Logger(),
    new Database\Logger()
];
