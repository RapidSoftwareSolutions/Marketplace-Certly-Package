<?php
$routes = [
    'metadata',
    'lookupUrl',
    'lookupUrlByRaw'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

