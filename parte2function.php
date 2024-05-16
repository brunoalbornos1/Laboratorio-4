<link rel="stylesheet" href="style.css">
<div class="centrado">
    <div class="calculator">
        <h2 class="titulo">El último dígito es:</h2>  
        <?php
            if (isset($_POST['calcular'])) 
                // Obtiene los valores del formulario
                $ci = $_POST['ci'];
                
                // ctype_digit($ci) --> Evalua si solo se ingreso numeros y no letras(caracteres)
                if (strlen($ci) != 7 and ctype_digit($ci)  ) {
                    echo "<p class='resultado'>Error: Debe ingresar exactamente 7 dígitos.</p>";
                } else {
                function calcularCi($ci){
                    // divide los dígitos uno por uno y los guarda en un array
                    $ciArray = str_split($ci);
                    // convierte cada dígito en un valor entero (int)
                    $ciArray = array_map('intval', $ciArray);    
                    // Hace las cuentas correspondientes por cada ubicación del array y las guarda en la variable ciArrayRes 
                    $ciArrayRes = ($ciArray[0] * 2) + 
                                ($ciArray[1] * 9) +
                                ($ciArray[2] * 8) +
                                ($ciArray[3] * 7) + 
                                ($ciArray[4] * 6) +
                                ($ciArray[5] * 3) +
                                ($ciArray[6] * 4) ;
    
                    // busca el número mayor con el múltiplo de 10 en cero 
                    $resultado = ceil($ciArrayRes / 10) * 10;
                    // se restan el número mayor con dígito en 0 y el resultado de ciArrayRes 
                    $resultado = $resultado - $ciArrayRes;
                    return $resultado;
                }
                
                $resultado = calcularCi($ci);
                echo $resultado;
            }
        ?>
        <a class="volver" href="parte2form.php"> <br> Volver a calcular</a>
    </div>
</div>
