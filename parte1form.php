<body class="bodyC">
<?php
    include("header.php");
?>
<div class="centrado">
    <div class="calculator">
        <h2 class="titulo">Sistema comprobador de Cédula Uruguaya</h2>
        <form action="parte1function.php" method="post">
            <div class="opciones">
                <label for="cedula">Ingrese su cédula:</label>
                <input type="number" id="cedula" name="ci" required>
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