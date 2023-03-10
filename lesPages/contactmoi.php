<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Contacts-Robert KULE</title>
    <link rel="stylesheet" href="../leTraitementCSS/accueil.css">
    <link rel="stylesheet" href="../leTraitementCSS/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- on importe la police Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once("php/header.php");?>
    <main>
        <section>
            <form action="" method="post">
                <fieldset>
                   <legend>Vos informations</legend> 
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" maxlength="20">
                    </div>
                    <div>
                        <label for="postnom">Post-nom</label>
                        <input type="text" id="postnom" name="postnom" placeholder="Votre post-nom" maxlength="20">
                    </div>
                    <div>
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" maxlength="20">
                    </div>
                    <div>
                        <label for="prenom">Age</label>
                        <input type="text" id="age" name="age" placeholder="Votre age" maxlength="3">
                    </div>
                    <!-- le genre du client -->
                    <div>
                        <label for="sexe">votre sexe</label>
                        <div class="sexe">
                            <input type="radio" name="sexe" > Masculin <br>
                            <input type="radio" name="sexe" > Féminin <br>
                            <input type="radio" name="sexe" > Autre <br>
                        </div>
                    </div>
                    <!-- son pays -->
                    <div>
                        <label for="pays">Votre pays</label>
                        <select name="pays" id="pays" >
                            <optgroup label="Afrique">
                                <option value="RDC">Rép. Démoc. du Congo</option>
                                <option value="Congo">Rép. Pop. du Congo</option>
                                <option value="uganga">Ouganda</option>
                                <option value="Rwanda">Rwanda</option>
                            </optgroup>
                            <optgroup label="Amérique">
                                <option value="usa">United state of american</option>
                                <option value="canada">Canada</option>
                                <option value="bresil">Brésil</option>
                                <option value="argentine">Argentine</option>
                            </optgroup>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Vos contacts</legend>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="ex:rkule880@gmail.com" maxlength="20">
                    </div>
                    <div>
                        <label for="telephone">Numero de télephone</label>
                        <input type="tel" id="telephone" name="telephone" placeholder="+243973822429" maxlength="12">
                    </div>
                </fieldset>
                <div class="envoi">
                    <input type="submit" value="Envoyer">
                </div>
                
            </form>
        </section>
    </main>
    <?php include_once("php/footer.php");?>
    <footer>
        <div>
            <img src="../images/kllogo.png" alt="Robert KULE LOGO" class="kllogo">
        </div>
        <div class="footlien">
            
                <a href="" class="footliena"><img src="../Icons/Twitter.svg" alt="">twiter</a>
                <a href="" class="footliena"><img src="../Icons/Instagram.svg" alt="" >Instagram</a>
                <a href="" class="footliena"><img src="../Icons/Linkedin.svg" alt="">youtube</a>
                <a href="" class="footliena"><img src="../Icons/Linkedin.svg" alt="">facebook</a>
                <a href="" class="footliena"><img src="../Icons/Linkedin.svg" alt="">tiktok</a>
                <a href="" class="footliena"><img src="../Icons/Linkedin.svg" alt="">Linkedin</a>
                <a href="" class="footliena"><img src="../Icons/Github.svg" alt="">Github</a>
                <a href="" class="footliena"><img src="../Icons/email.svg" alt="">Email</a>
                <a href="" class="footliena"><img src="../Icons/contact.svg" alt="">Telephone</a>
        </div>
            
    </footer>
    
</body>
</html>