<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A ilha dos Açores</title>
    <link rel="icon" href="Imagens/favicon.ico" type="image/ico"> <!--Favicon-->

</head>
<body>
    <?php include 'base de dados/conexao.php'; ?>
<div class="container-fluid">
    <div class="col-md-12 column" id="header">
        <?php include 'header.php';?>
    </div>
</div>

<div class="row">
    <?php 
    $sql = "SELECT nome, localização, imagem FROM restaurantes";  
        // Execute the SQL query
        $result = $conn->query($sql);
     

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {?>
  <a href="#" class="card" style="width: 30rem;">
            <img class="card-img-top" src="imagens/imgRestaurantes/<?php echo $row['imagem'];?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-text"><?php echo $row['nome'];?> </p>
            </div>
    </a>
<?php
}

}
else
    {
        echo "Sem resultados";
    }


$conn->close();

    ?>

    <?php include 'footer.php';?>
</div>
</body>
</html>