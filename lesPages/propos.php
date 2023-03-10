<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos-Robert KULE</title>
    <link rel="stylesheet" href="../leTraitementCSS/accueil.css">
    <link rel="stylesheet" href="../leTraitementCSS/propos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- on importe la police Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once("php/header.php");?>
    
    <main>
        <h1>A Propos</h1>
        <div class="proposmoi">
            <p>    
                Bonjour à vous <br>
                Robert KULE est mon nom. Je suis né au début du 21ème siècle et actuellement je suis agé
                de quelques vingtaines d'années.
            </p>
        <img src="../images/kl2.jpg" alt="la photo de Robert Kule" class="moiimg" title="Robet Kule at ULPGL 2021">
        </div>
        
        <section class="mesetudes">
            <h2>Parcours scolaire</h2>
            <table>
                <caption>Le parcous scolaire de Robert KULE</caption>
                <thead>
                    <th>
                        <td class="thdata">niveau</td>
                        <td class="thdata">Etablissement</td>
                        <td class="thdata">années d'études</td>
                        <td class="thdata">Addresse</td>
                    </th>                    
                </thead>
                <tfoot>
                    <th>
                        <td class="thdata">niveau</td>
                        <td class="thdata">Etablissement</td>
                        <td class="thdata">années d'études</td>
                        <td class="thdata">Addresse</td>
                    </th>                    
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>primaire</td>
                        <td>E.P VULAMBO</td>
                        <td>de 2008-2009 à 2013-2014</td>
                        <td>RDC/Nord-KIVU/Beni/Bashu/Vulambo cité</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>sécondaire</td>
                        <td>Lycée Butembo</td>
                        <td>de 2014-2015 à 2019-2020</td>
                        <td>RDC/Nord-KIVU/Butembo ville</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Université</td>
                        <td>ULPGL-Goma</td>
                        <td>de 2021-2022 à nos jours</td>
                        <td>RDC/Nord-KIVU/Goma ville</td>
                    </tr>
    
                </tbody>
                
            </table>
            <table>
                <caption>mes formations</caption>
                <thead>
                    <th>
                        <td>type de formation</td>
                        <td>nom</td>
                        <td>lieu</td>
                        <td>certificat</td>
                        <td>année</td>
                    </th>
                </thead>
                <tfoot>
                    <th>
                        <td>type de formation</td>
                        <td>nom</td>
                        <td>lieu</td>
                        <td>certificat</td>
                        <td>année</td>
                    </th>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>par un étudiant</td>
                        <td>apprendre JAVA</td>
                        <td>ULPGL-Goma</td>
                        <td>Aucun</td>
                        <td>mars 2021</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PAE et NAFYM</td>
                        <td>Langue anglaise</td>
                        <td>ULPGL-Goma</td>
                        <td>Oui</td>
                        <td>October to december 2021</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>All Solution</td>
                        <td>Programmation Web(HTML et CSS et PHP)</td>
                        <td>ULPGL-Goma</td>
                        <td>Aucun</td>
                        <td>October to November 2021</td>
                    </tr>
                </tbody>
                
            </table>
        </section>
        
        <section>
            <h2>Ma gallerie photo</h2>
            <div class="klgal">
                <div class="klgala">
                    <img src="../images/klgal1.jpg" alt="Robert Kule picture" class="un">
                    <img src="../images/klgal2.jpg" alt="Robert Kule picture" class="deux">
                    <img src="../images/klgal3.jpg" alt="Robert Kule picture" class="trois">           
                </div>
                <div class="klgala">
                    <img src="../images/klgal4.jpg" alt="Robert Kule picture" class="quatre">
                    <img src="../images/klgal5.jpg" alt="Robert Kule picture" class="cinq">
                    <img src="../images/klgal6.jpg" alt="Robert Kule picture" class="six">
                </div>
                
            </div>
        <section>
    </main>
    <?php include_once("php/footer.php");?>
    
</body>
</html>