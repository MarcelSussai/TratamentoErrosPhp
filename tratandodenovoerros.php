<?php
function trataNome($name) {
    if (!$name) {
        throw new Exception("Nenhum nome foi passado", 1);
    }
    echo ucfirst($name)."<br>";
}

try {
    trataNome("marcel");
    trataNome("");
} catch(Exception $e) {
    echo $e->getMessage();
} finally {
    echo "<br>Executou o try!<br>";
}