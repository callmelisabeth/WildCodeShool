<?php
include "bddConnexion.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO `user`(`name`) VALUES ('$name')";

    $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     header("location:index.php?msg=Nouveau nom ajouté");
    // } else {
    //     echo "failed:" . mysqli_error($conn);
    // }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Wild Code School</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="px-4 py-5 my-5 text-center">
            <a class="logo" href="#">
                <img class="d-block mx-auto mb-4" src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
            </a>
            <h1>
                Les Argonautes
            </h1>

        </div>

    </header>

    <!-- Main section -->
    <main>


        <!-- New member form -->
        <div class="col-md-10 mx-auto col-lg-5 form ">

            <h2>Ajouter un(e) Argonaute</h2>

            <form p-4 p-md-5 rounded-3 bg-light action="" method="post">
                <div class="row mb-3">
                    <label for="nomDelArgonaute" class="form-label">Nom de l'Argonaute : </label>
                    <input class="form-control" name="name" type="text" placeholder="Charalampos" />
                    

                </div>
                <button type="submit" class="btn btn-outline-light" name="submit">Envoyer</button>

            </form>

        </div>

        <!-- Member list -->

        <table class="table table-borderless">
            <tbody>
                <th class="strong" scope="row">Nom des Argonautes </th>
                <?php
                include "bddConnexion.php";
                $sql = "SELECT * FROM `user` ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <th>
                        <?php echo $row['name']; ?>

                    </th>
                <?php
                }
                ?>

            </tbody>
        </table>

    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
    <!-- footer -->
    <footer>
        <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>

</body>

</html>