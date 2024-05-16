<link rel="stylesheet" href="style.css">
<div class="centrado">
    <div class="calculator">
        <h2 class="titulo">Comprobador de CI</h2>  
        <?php
               if (isset($_POST['calcular'])) 
                $ci = $_POST['ci'];
        
                if (strlen($ci) != 8) {
                    echo "<p class='resultado'>Error: La cédula debe tener exactamente 8 dígitos.</p>";
                } else {
                function calcularCi($ci){
                    // Obtiene los primeros 7 dígitos
                    $ci_base = substr($ci, 0, 7);
                    // Obtiene el último dígito
                    $digito_verificador = intval(substr($ci, 7, 1));
                    // Convierte los dígitos base en un array de enteros
                    $ciArray = array_map('intval', str_split($ci_base));
                    // Realiza la multiplicación y suma según la posición
                    $ciArrayRes = ($ciArray[0] * 2) + 
                                ($ciArray[1] * 9) +
                                ($ciArray[2] * 8) +
                                ($ciArray[3] * 7) + 
                                ($ciArray[4] * 6) +
                                ($ciArray[5] * 3) +
                                ($ciArray[6] * 4);

                    // Calcula el módulo 10 de la suma
                    $resultado = $ciArrayRes % 10;
                    // Si el resultado es 0, el dígito verificador debe ser 0, de lo contrario se resta de 10
                    $digito_calculado = ($resultado== 0) ? 0 : 10 - $resultado;
                    
                    // Compara el dígito calculado con el dígito verificador
                    return $digito_calculado === $digito_verificador;
                }

                // Verifica la CI y muestra el resultado
                if (calcularCi($ci)) {
                    echo "<p class='resultado'>La CI es válida.</p>";
                } else {
                    echo "<p class='resultado'>La CI no es válida.</p>";
                }
            }
            ?>
        <a class="volver" href="parte1form.php"> <br> Volver a calcular</a>
    </div>
</div>