<link rel="stylesheet" href="style.css">

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Listar</title>
</head>

<body>



    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require './Conn.php';
    require './User.php';

    $listUsers = new User();
    $result_users = $listUsers->list();
    ?>


    <div class="header">

        <h1>Product List</h1>

        <div class="addmassdel">

            <a href="index.php"><button id="pladdbtn">ADD</button></a>

            <form method="post" action="delete.php">

            <button onclick="stay()">MASSDELETE</button>

        </div>

    </div>
    
    <?php
$dimension1 = isset($_POST['dimension1']) ? $_POST['dimension1'] : '';
$dimension2 = isset($_POST['dimension2']) ? $_POST['dimension2'] : '';
$dimension3 = isset($_POST['dimension3']) ? $_POST['dimension3'] : '';
$book_weight = isset($_POST['book_weight']) ? $_POST['book_weight'] : '';
$dvd_size = isset($_POST['dvd_size']) ? $_POST['dvd_size'] : '';

?>



<div class="father">
    <?php foreach ($result_users as $row_user) {
        extract($row_user);
        if (!empty($dimension1 && $dimension2 && $dimension3) || !empty($book_weight) || !empty($dvd_size)) {
    ?>
        <div class="son">
            <div class="check">
                <input class="delete-checkbox" type="checkbox" name="delete[]" value="<?php echo $id ?>">
                <!-- <a href=""><button class="delete-checkbo" name="delete[]">MASS DELETE</button></a> -->
            </div>
            <p>SKU: <?php echo $sku ?></p>
            <p>Name: <?php echo $name ?></p>
            <p>Price: <?php echo $price ?> $</p>
            <?php if (!empty($dimension1 && $dimension2 && $dimension3)) { ?>
            <p><?php echo 'Dimension: ' . $dimension1 .'x'. $dimension2 .'x'. $dimension3 ?></p>
            <?php } ?>
            <?php if (!empty($book_weight)) { ?>
            <p><?php echo 'Weight(kg): ' . $book_weight ?></p>
            <?php } ?>
            <?php if (!empty($dvd_size)) { ?>
            <p><?php echo 'Size(mb): ' . $dvd_size ?></p>
            <?php } ?>
        </div>
    <?php 
        }
    } ?>
</div>



    </form>



<script>
delete-button.addEventListener('click', stay);

function stay() {
    window.location.href = window.location.href; 'create,php';
}




Feature('Exemplo de teste com waitForElement');

Scenario('Teste com waitForElement', (I) => {
  // Abre a página de exemplo
  I.amOnPage('https://rogermanoelsantos.tech/roger/create.php');

  // Aguarda até que o botão com o ID "botao-exemplo" esteja carregado na página
  I.waitForElement('delete-checkbox', 5);

  // Clica no botão
  I.click('delete-checkbox');

  // Verifica que a página foi redirecionada para a URL esperada
  I.seeInCurrentUrl('https://rogermanoelsantos.tech/roger/create.php');
});








</script>







</body>

</html>



