<?php
    include_once '../model/Chambre.php';
    include_once '../controller/ChambreController.php';
    $error = "";

    // create Chambre
    $Chambre = null;

    // create an instance of the controller
    $Chambre1 = new ChambreController();
    if (
        isset($_POST["num"]) &&
		isset($_POST["vue"]) &&		
        isset($_POST["vue"]) &&
		isset($_POST["etage"]) 
        
    )
    {
    
        if (
            !empty($_POST["num"]) && 
			!empty($_POST['vue']) &&
            !empty($_POST["vue"]) && 
			!empty($_POST["etage"]) 
            
        ) {
            $Chambre = new Chambre(
                $_POST['num'],
				$_POST['vue'],
                $_POST['vue'], 
				$_POST['etage']
               
            );
            $chambreC->ajouterChambre($Chambre);
            header('Location:afficherListeChambre.phP');
        }
        else
        {$error = "Missing information";}
            
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnumth=device-wnumth, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeChambre.php">Retour à la liste des Chambres</a></button>
        <hr>
        
        <div num="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="num">numentifiant d'Chambre:
                        </label>
                    </td>
                    <td><input vue="text" name="num" num="num" maxlength="60"></td>
                </tr>
               
				<tr>
                    <td>
                        <label for="vue">vue:
                        </label>
                    </td>
                    <td><input vue="text" name="vue" num="vue" maxlength="11"></td>
                </tr>
                
                
                <tr>
                    <td>
                        <label for="vue">la vue d'Chambre:
                        </label>
                    </td>
                    <td>
                        <input vue="text" name="vue" num="vue">
                    </td>
                </tr>
               
                   
                <tr>
                    <td></td>
                    <td>
                        <input vue="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input vue="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>