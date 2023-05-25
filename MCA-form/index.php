<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    require './Conn.php';
    require './User.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['SendAddUser'])) {
        // var_dump($formData);
        // die();
        $createUser = new User();
        $createUser->formData = $formData;
        $value = $createUser->index();

        if ($value) {
            header("Location: emptypage.php");
            echo "<script>alert('Cadastro realizado com sucesso!')</script>";

            
        } else {
            echo "<p style='color: #f00;'>Error!</p>";
        }
    }

    ?>



    <form id="#product_form" name="CreateUser" method="POST" action="">


            <p id="jesus"> "Eu sou o caminho, a verdade e a vida"</p>

            
            <p>João 14.6</p>




        <div class="main">
            <P>MCA</P>
            

        <img src="./logomemaform.gif" alt="">

            <label>Nome:🙍‍♂️ </label>
            <input id="#nome" type="text" name="nome" placeholder="" />

            <label>Data de hoje:</label>
            <input id="#datahoje" type="date" name="datahoje"  placeholder="" />

            <label>Data de nasc: </label>
            <input id="#datanasc" type="date" name="datanasc"  placeholder="" />

            <label>telefone: <img id="whats" src="./whatsapp.png" <img id="whats" src="./whatsapp.png" alt=""> </label>
            <input id="#telefone" type="text" name="telefone"  placeholder="" />

            



            <!--<div class="jaca">-->


                <div class="buttons">
                    <input href="emptypage.php" type="submit" value="ENVIAR" name="SendAddUser" />
                    <input type="reset" value="LIMPAR">
                </div>

            </div>


    

        </div>


        <br><br>

    </form>

    <script>
        const optionElements = {
            DVD: ['size-container'],
            Book: ['book-dimensions'],
            Furniture: ['dimensions']
        };

        const dimensionsElements = {
            'book-dimensions': ['book'],
            'dimensions': ['dimension'],
            'size-container': ['weigh']
        };

        document.getElementById('typeswitcher').addEventListener('change', function() {
            const selectedValue = this.value;
            const elementsToShow = optionElements[selectedValue];
            const elementsToHide = Object.values(optionElements).flat().filter(element => !elementsToShow.includes(element));

            elementsToShow.forEach(element => document.getElementById(element).style.display = 'block');
            elementsToHide.forEach(element => document.getElementById(element).style.display = 'none');

            const dimensionsToShow = dimensionsElements[elementsToShow[0]] || [];
            const dimensionsToHide = Object.values(dimensionsElements).flat().filter(element => !dimensionsToShow.includes(element));

            dimensionsToShow.forEach(element => document.getElementById(element).style.display = 'block');
            dimensionsToHide.forEach(element => document.getElementById(element).style.display = 'none');
        });



 
    </script>





</body>

</html>