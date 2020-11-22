<?php
    $conn = new mysqli('localhost', 'juanj', '123456', 'api-jegsnet');
    $archivo = fopen("AL.txt", "r") 
    or die("proeblemas al abrir");

    while(!feof($archivo)){
        $content = fgets($archivo);
        $carray = explode(",", $content);
        list($CEDULA, $CODELEC, $FECHACADUC,
             $JUNTA, $NOMBRE, $PAPELLIDO, $SAPELLIDO
            )= $carray;

            $sql = "INSERT INTO `cedulas` (`CEDULA`, `CODELEC`, `FECHACADUC`, `JUNTA`, `NOMBRE`, `PAPELLIDO`, `SAPELLIDO`) 
            VALUES ('$CEDULA', '$CODELEC',
             '$FECHACADUC', '$JUNTA', '$NOMBRE', '$PAPELLIDO', '$SAPELLIDO');";
            $conn->query($sql);
            
    }
    fclose($archivo);
?>

