
<!-- En paralelo y dentro de la misma app, se desea implementar un sistema generador de
dígitos verificadores. Dados los primeros 7 números de una CI el software debe
informar cual es el digito correspondiente correcto.
 -->
 
<body class="bodyC">
<?php
    include("header.php");
?>
<div class="centrado">
    <div class="calculator">
        <h2 class="titulo" >Sistema generador de dígitos verificadores</h2>
        <form action="parte2function.php" method="post">
            <div class="opciones">
                <label for="ci">Ingrese los primeros 7 numeros de una CI </label>
                <input type="number" id="ci" name="ci" >
            </div>
            <input type="submit" name="calcular" value="Calcular dígito">
        </form>
    </div>    
</div>
<?php
include("footer.php");
?>
</body>
</html>