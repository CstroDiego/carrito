<?php
session_start();

$total = 0;

//utilizar session para guardar los datos
if (isset($_POST['producto']) && $_POST['producto'] == 'naranja') {
    $_SESSION['naranjas'] += $_POST['cantidad'];
}
if (isset($_POST['producto']) && $_POST['producto'] == 'toronja') {
    $_SESSION['toronjas'] += $_POST['cantidad'];
}
if (isset($_POST['producto']) && $_POST['producto'] == 'mandarina') {
    $_SESSION['mandarinas'] += $_POST['cantidad'];
}
if (isset($_POST['producto']) && $_POST['producto'] == 'limon') {
    $_SESSION['limones'] += $_POST['cantidad'];
}
if (isset($_POST['producto']) && $_POST['producto'] == 'lima') {
    $_SESSION['limas'] += $_POST['cantidad'];
}

$total = $_SESSION['naranjas'] * 3 + $_SESSION['toronjas'] * 2 + $_SESSION['mandarinas'] * 2.5 + $_SESSION['limones'] * 1 + $_SESSION['limas'] * 1.5;

//print_r($_SESSION);
//print_r($_POST);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<section class="container">
    <div class="row">
        <div class="col-6">
            <div style="padding: 40px">
                <h1>Carrito de compras</h1>
            </div>

            <form method="POST">
                <div class="mb-3">
                    <label for="producto" class="form-label">Elija un producto</label>
                    <select class="form-select" name="producto" id="producto">
                        <option value="naranja">Naranja</option>
                        <option value="toronja">Toronja</option>
                        <option value="mandarina">Mandarina</option>
                        <option value="limon">Limón</option>
                        <option value="lima">Lima</option>
                </div>
                asdasdasd
                <div style="padding-top: 10px">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" id="btnAgregar">Agregar</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <div style="padding: 40px">
                <h2>CARRITO</h2>
            </div>
            <div>
                <h3>Naranja: <?= $_SESSION['naranjas']; ?> </h3>
                <h3>Toronja: <?= $_SESSION['toronjas']; ?></h3>
                <h3>Mandarina: <?= $_SESSION['mandarinas']; ?></h3>
                <h3>Limón: <?= $_SESSION['limones']; ?></h3>
                <h3>Lima: <?= $_SESSION['limas']; ?></h3>
            </div>
            <div>
                <h3>Total: <?= $total ?></h3>
            </div>
            <div>
                <a href="cerrar.php">
                    <button type="submit" class="btn btn-primary" id="btnPagar">Pagar</button>
                </a>
            </div>
        </div>
    </div>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>


