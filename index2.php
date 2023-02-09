<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="clignoter">
<h1 style="text-align:center;margin-top:50px">Jeu de combat : Fighters</h1>

<h2 style="text-align:center;margin-top:30px">Player 1</h2>

<h3 style="text-align:center;margin-top:50px">Nombre de persos déjà existants: </h3>

<div class="miseenforme">
    

<form action="classes/PersonnageManager.php">

    <table class="tabcenter">
   <td colspan="2">
    <h3 style="text-align:center;margin-top:-15px">Créer un nouveau perso</h3><br>
     </td>
     <tr>
        
            <td>
                <label>Nom du nouveau perso :</label>
            </td>

            <td>
                <input type="text" name="nom" placeholder="nom du perso">
            </td>
        </tr>

      
        <tr>
        
            <td>
                <label>Nom du nouveau perso :</label>
            </td>

            <td>
                <input type="text" name="nom" placeholder="nom du perso">
            </td>
        </tr>

        

        <tr>
            <td>

             <label for="options">Choisir le type de votre perso :</label>

            </td>

            <td>
                    <select id="options" name="options">
                        <option value="terrien">terrien</option>
                        <option value="archer">archer</option>
                        <option value="guerrier">guerrier</option>
                        <option value="chevalier">chevalier</option>
                        <option value="mage">mage</option>
                        <option value="archimage">archimage</option>

                    </select>    
        
            </td>
        </tr>

        <tr>
            <td>
                <label for="options">Points de vie du perso :</label>
            </td>

            <td>
             <input type="text" name="pointvie" readonly>
            </td>
        </tr>

        <tr>
            <td>
                <label for="options">Dégâts causés par le perso :</label>
            </td>

            <td>
                <input type="text" name="degats" readonly>
            </td>
        </tr>
<td colspan="2">
        <button style="display: block; margin: 0 auto;margin-top:30px;margin-bottom: -20px;">Valider</button>
</td>
    </table>
</form>
</div>

<div class="miseenforme">
    <form action="classes/PersonnageManager.php">

    <table class="tabcenter">
        
    <td colspan="2">
    <h3 style="text-align:center;margin-top:-15px">Choisir ou modifier un perso existant</h3><br>
</td>

        <tr>
            <td>

             <label for="options">Choisir un perso existant :</label>

            </td>

            <td>
                    <select id="options" name="options">
                       

                    </select>    
        
            </td>
        </tr>
        <tr>
        
        <td>
            <label>Nouveau nom du perso :</label>
        </td>

        <td>
            <input type="text" name="nom" placeholder=" nouveau nom du perso">
        </td>
    </tr>
    <tr>
            <td>

             <label for="options">Nouveau type du perso :</label>

            </td>
            <td>
             <input type="text" name="type" readonly>
            </td>

        <tr>
            <td>

             <label for="options">Choisir le type de votre perso :</label>

            </td>

            <td>
                    <select id="options" name="options">
                        <option value="terrien">terrien</option>
                        <option value="archer">archer</option>
                        <option value="guerrier">guerrier</option>
                        <option value="chevalier">chevalier</option>
                        <option value="mage">mage</option>
                        <option value="archimage">archimage</option>

                    </select>    
        
            </td>
        </tr>

        <tr>
            <td>
                <label for="options">Points de vie du perso :</label>
            </td>

            <td>
             <input type="text" name="pointvie" readonly>
            </td>
        </tr>

        <tr>
            <td>
                <label for="options">Dégâts causés par le perso :</label>
            </td>

            <td>
                <input type="text" name="degats" readonly>
            </td>
        </tr>
        <td colspan="2">
        <button style="display: block; margin: 0 auto;margin-top:30px;margin-bottom: -20px;">Valider</button>
        <button style="display: block; margin: 0 auto;margin-top:30px;margin-bottom: -20px;">Modifier</button> 
</td>
        
    </table>
</form>
</div>
</body>
</html>