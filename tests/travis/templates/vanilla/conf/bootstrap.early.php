<?php
saveToConfig("SAVECONFIG_DEBUG_GRR", [
    'REQUEST_TIME' => $_SERVER['REQUEST_TIME'],
    'REQUEST_URI' => $_SERVER['REQUEST_URI'],
    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'],
]);
// Common die
