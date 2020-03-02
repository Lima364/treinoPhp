<?php
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

// json decode - transforma o json em um array
$data = json_decode($json, true);
var_dump($data);