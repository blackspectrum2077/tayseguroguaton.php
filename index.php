<?php

$url = "https://api.boostr.cl/holidays.json";
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feriados Chile</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div>
        <header class="header">
            <h1>bienvenidos a Información de Chile</h1>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAllBMVEXaKBv///8AM6DaJhjdQTfZFwDrmpYAKZ3fKBFvgb8AM6SPLWF0hcEAMJ8AMZ8AG5r19/sAFZkAJZwALJ4AEZjK0ecAIJwAKJ68xOCMmssuTakAIpvs7/cADJjb4O+AkMYmRqdlebxfc7m2v96EksdHX7Gkr9U4VKzCyuPk6PMWPqWrttlSaLXS2OsDN6IAAJabptGrVHL6nhRvAAACxElEQVR4nO3Z23KaUBSAYaEHaysbEJSgiccaD4nWvv/L1Sqa4BI2yYwXLv7vKolZmeGfWZzScG+m2XLuU4MmAk0kmkg0kWgi0USiiUQTiSYSTSSaSDSRaCLRRKKJRBOJJhJNJJpINJFoIn2sSeTR5PIoR2NDkzx/M0pokmOM0/Vpkj/ItuP0qi9PLZr4XcdpN2nyjunsf39ZfXnq0OR4jEnly3EdmvjL/wOtystTgyamdxiovjw1aNKcHCeSqleeGjTxH44Tk6rLo7+J6QTHiYceTTLRNJsI/IrLo79Jb3YamUZ1bRI1c5IwOI3M4vxHzYI7FnVNotaonZOeR4JJ/pPf8+tR1DXxxsOqf+I5un6CUdfE9eLUPr0XzIvOufqa7M+qi0f7/HJQeMbV2MSNTrdpxUZh8YVZZRPXhOWHteoPSqZ1NnHdzrrkVPvil96paG3iek/PRaPTkr1R3cQ1/mtwbXCztb3C19tkf2xRV86lofV9m+Ymrvkjrj+TCg+Cqpu48epybFd2walDk2ghxlYV3kCqbtLZybm+/fW96iZydfbL06l1E298ZW4V1rrJu9Xpvj0V2pdHc5PwfHufPiXL09f25VHc5Lw6j4uea55G2XfDuMZNOtm7pVnv8MQ36Gdn3LFteRQ3yVandXrii/yXww9S2/LobXJcneH6rYAJD//qGdquPHqbHFZnF+cWJTGb/Q+3luXR2yTcOMHr5ROfF6b25VHbxNs6XU/+19z488C2PGqbJGkaX92RaLC03LapbWK2RRtiBuvavnv81Ee6m3weTWhCE5rQhCYCTSSaSDSRaCLRRKKJRBOJJhJNJJpINJFoItFEoolEE4kmEk0kmkiNnzeT3G2TX7fz9/t9avy4oW/3qQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQBVfcKnxFZf+AchbtW4MI2+pAAAAAElFTkSuQmCC" alt="bandera">
            <button>Feriados</button>
            <button>Clima</button>
            <button>Geografia</button>
        </header> 
    </div>
    


    <table>
        <tr>
            <th>Fecha</th>
            <th>Título</th>
            <th>Tipo</th>
            <th>Inalienable</th>
            <th>Extra</th>
        </tr>
        <?php
        foreach ($data['data'] as $feriado) {
            echo "
            <tr>
              <td>{$feriado['date']}</td>
              <td>{$feriado['title']}</td>
              <td>{$feriado['type']}</td>
              <td>" . ($feriado['inalienable'] ? 'Sí' : 'No') . "</td>
              <td>{$feriado['extra']}</td>
            </tr>
            ";
        }
        ?>
    </table>
    <footer>alo despues hago esta shit</footer>
</body>
</html>