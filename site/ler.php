
<?php 

    include_once "../template/cabecalho.php";
    include_once "../template/menu.php";
    include_once "../animal/consultar_por_id.php";
?>

<div class="container">
    <h1><?php echo $animal->nomedoanimal; ?></h1>
    <hr>
    <img width=300px height=200px src="../uploads/<?php echo $animal->foto; ?>" class="" /></br></br>
    <p><b>Nome do dono: </b><?php echo $animal->nomedodono; ?></p>
    <p><b>Peso: </b><?php echo $animal->peso; ?></p>
    <p><b>Raça: </b><?php echo $animal->raca; ?></p>
    <p><b>Idade: </b><?php echo $animal->idade; ?></p>
</div>
<?php include_once "../template/rodape.php" ?>
