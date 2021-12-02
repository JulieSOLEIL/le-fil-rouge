<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque de L'Inconnu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="membre.css">
    <script src="https://kit.fontawesome.com/c19fce56fe.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include 'header.php';
    ?>
 <section class="info">
     <div>
         <h2>Devenir membre</h2>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quasi voluptatibus eligendi, consectetur, ipsum tempore nihil dignissimos illo veniam quam nulla itaque eaque dolore molestias voluptate? Adipisci, doloribus natus? Accusantium.
         Iure facilis blanditiis sequi, magni voluptatem sed reprehenderit aliquam culpa soluta ducimus suscipit dolores optio cumque cum repellat, unde quo nemo eligendi labore ad voluptatum porro. Quis facilis inventore non?
         Soluta sint unde repudiandae nostrum itaque corporis animi ut, veniam exercitationem suscipit doloribus reiciendis culpa accusamus tempore laborum minus voluptatibus hic dolores, enim nisi id illum adipisci. Eos, voluptatibus qui.
         Aliquid eum laudantium aspernatur dolorem dolor inventore natus odio eius saepe! Quaerat, inventore soluta magni quisquam porro natus in fugiat, quas aspernatur, dignissimos architecto repellendus ducimus at animi explicabo odit!
         Labore cumque, eos eveniet sed aperiam accusantium cum aliquid libero sunt architecto dignissimos ad excepturi autem sint facere vero corrupti modi ipsum dolorem illum nobis voluptates similique? Impedit, facilis optio.</p><br>
    </div>
    <div> 
         <img src="img_library05.jpg" alt="library">
    </div>     
    <div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, minus, asperiores culpa similique, laborum amet vel dignissimos adipisci iste eveniet ullam non temporibus! Praesentium adipisci, fugit officia blanditiis dolorum minima?
         Eaque, perferendis unde molestias et necessitatibus quia. Minima iure magni qui aliquam vel accusantium fugiat facere explicabo eaque voluptate officiis, provident cumque illum? Ducimus maxime nulla in, a vero nostrum.
         Qui odio, repellat reprehenderit distinctio sed inventore nesciunt. Maxime magnam recusandae a optio natus minima, itaque provident quaerat eum dolores quod modi dicta, consequatur aperiam culpa labore illum quia. Saepe?
         Quaerat, ducimus. Corrupti praesentium soluta velit deserunt aperiam. Similique odio illum veniam laboriosam dignissimos beatae tempora in, ab fuga. Quos eius velit dolores ratione aliquid quidem aut fugit cum nam.
         Itaque accusamus, cum dolorem accusantium reprehenderit facilis unde in nobis dolor quisquam. Saepe voluptate commodi blanditiis suscipit ipsa, dignissimos consequuntur perferendis error labore, fuga ea officiis dolor itaque, perspiciatis adipisci.
         Ullam nihil maxime veniam, animi praesentium provident cumque eaque qui ab sapiente quos tenetur eveniet voluptas deserunt nemo sit aliquid. Animi nemo minus, aspernatur quisquam fuga numquam ipsum sed mollitia.
         Veniam laborum doloribus consequuntur culpa totam repudiandae sunt, quo tempora recusandae. Totam minima ullam quasi exercitationem dignissimos necessitatibus. Velit ducimus dignissimos atque provident adipisci laborum exercitationem quasi. Repellat, amet dicta?
         Quidem necessitatibus quam sed nam a consectetur delectus ipsam nesciunt corrupti ipsa, similique vero molestias placeat officiis doloremque impedit excepturi officia! Eveniet quidem sed expedita quas libero sequi. Sed, laboriosam?</p>
     </div>
</section>
<section class="form">
    <div class="formContainer">
        <h2>Inscrivez-vous</h2>
        <form method="POST" action="">
            <ul class="idUser">
                <h3>Vous êtes: </h3>
                <li class="sexe">
                    <label for="sexe" class="sexe">Une femme</label>
                    <input type="radio" name="sexe"><br>
                    <label for="sexe" class="sexe">Un homme</label>
                    <input type="radio" name="sexe">
                </li>
                <li class="categorie">
                    <h3>Catégorie membre: </h3>
                    <label for="categorie">Etudiant</label>
                    <input type="radio"><br>
                    <label for="categorie">Professeur</label>
                    <input type="radio"><br>
                </li>
            </ul>
            <ul class="coordonnees">
                <h3>Vos coordonnées: </h3>
                <li class="nom">
                    <label for="nom" class="nom">Nom: </label>
                    <input type="text" name="nom">
                </li>
                <li class="prenom">
                        <label for="prenom" class="prenom">Prénom: </label>
                        <input type="text" name="prenom">
                </li>
                <li class="tel">
                    <label for="tel">téléphone: </label>
                    <input type="tel" name="tel">
                </li>

                <li class="email">
                    <label for="email">Email: </label>
                    <input type="email" name="email">
                </li>
            </ul>
                <li class="adress">
                    <h3>Votre adresse postale: </h3>
                    <label for="address" class="address">numéro: </label>
                    <input type="number" name="numb"><br>
                    <label for="address" class="address">voie: </label>
                    <input type="text" name="voie"><br>
                    <label for="address" class="address">code postal: </label>
                    <input type="text" pattern="[0-9]{5}" name="codezip"><br>
                    <label for="address" class="address">Ville: </label>
                </li>
                <button type="submit">Valider</button>
                <button type="reset">Réinitialiser</button>
        </form>
    </div>
</section>
<?php
include 'footer.php';
?>
</body>
</html>