<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>TP PHP 4.1 - Calculatrice</title>
</head>

<body>

    <?php
    function Addition()
    {
        return ($_POST['nb1'] + $_POST['nb2']);
    }
    function Soustraction()
    {
        return ($_POST['nb1'] - $_POST['nb2']);
    }

    function Division()
    {
        return ($_POST['nb1'] / $_POST['nb2']);
    }


    function Puissance()
    {
        return ($_POST['nb1'] ** $_POST['nb2']);
    }

    ?>
    <!-- A INSERER : CODE PHP POUR TRAITER LE FORMULAIRE -->


    <?php

    $resulat = "";

    if (!empty($_POST["nb1"]) && !empty($_POST["nb2"])) {
        if ($_POST['calcul'] == "Addition x+y")
            $resulat = Addition();
        elseif ($_POST['calcul'] == "Soustraction x-y")
            $resulat = Soustraction();
        elseif ($_POST['calcul'] == "Division x/y")
            $resulat = Division();
        elseif ($_POST['calcul'] == "Puissance x^y")
            $resulat = Puissance();

    } else {
        echo " valeur non retenue";
    }

    ?>

    <h3>Entrez deux nombres : </h3>
    <!-- A MODIFIER : CODE PHP POUR AFFICHER ARGUMENTS ET RESULTAT EVENTUELS  -->
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <fieldset>
            <legend>Calculatrice en ligne</legend>
            <table>
                <tbody>
                    <tr>
                        <td><label><b> Nombre 1 </b></label> <input type="number" step="1" name="nb1" size="30"
                                value=<?php echo $_POST['nb1'] ?> />
                        </td>
                    </tr>
                    <tr>
                        <td><label><b> Nombre 2 </b></label> <input type="number" step="1" name="nb2" size="30"
                                value=<?php echo $_POST['nb2'] ?> />
                        </td>
                    </tr>
                    <tr>
                        <td><label><b> Résultat </b></label> <input type="number" step="1" name="result" size="30"
                                value=<?php echo $resulat ?> />
                        </td>
                    </tr>
                    <!-- #region -->
                    <tr>
                        <td>
                            <label>
                                <b> Choisissez ! </b>
                            </label>

                            <input type="submit" name="calcul" value="Addition x+y" />&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="calcul" value="Soustraction x-y" />&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="calcul" value="Division x/y" />&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="calcul" value="Puissance x^y" />&nbsp;&nbsp;&nbsp;
                            <input type="reset"  value="Recommencer" name="calcul" />&nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </form>

</html>