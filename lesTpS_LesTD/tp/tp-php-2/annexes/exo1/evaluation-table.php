<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<title>TP PHP 2.1 - Egalité et conversion</title>
<style>
    tbody{
        text-align: center;
        background-color: azure;
    }
        th {
            background-color: cyan;
           
        }

        th,
        td {
            border: 1px solid;
            width: 1%;
        
        }

        table {
            text-align: left;
            border: 2px solid;
            border-collapse: collapse;
            table-layout: unset;
        }
</style>
</head>
<body>
<?php
// On cree d'abord le tableau

$table =
    [
        "TRUE" => TRUE,
        "FALSE" => FALSE,
        "1" => 1,
        "0" => 0,
        "-1" => -1,
        "\"1\"" => "1",
        "\"0\"" => "0",
        "\"-1\"" => "-1",
        "NULL" => NULL,
        "[]" => [],
        "\"\"" => ""
    ];



?>


<table>



<?php
echo "<tr>";
    echo "<th> ==</th>";
    foreach($table as $key=>$val)
        {   
            echo "<th> $key</th>";
        
        }

echo "</tr>";


foreach($table as $key=>$val)
{
    echo "<tr>";
    echo "<th> $key</t>";
    foreach($table as $k=>$v)
        {
        
            $result =$val==$v;
            if($result)
                echo "<td> TRUE </td>";
            else
            echo "<td> </td>";

            
        
        }

echo "<tr>";
}



?>
</table>
</body>
</html>
