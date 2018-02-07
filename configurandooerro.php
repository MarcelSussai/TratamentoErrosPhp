<?php
function error_handler($code, $message, $file, $line) {
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "file"=>$file,
        "line"=>$line
    ));
}
// dentro do php.ini tem propriedades que posso configurar que erros será mostrado ou não | error_reporting
set_error_handler("error_handler");

echo 100 / 0;