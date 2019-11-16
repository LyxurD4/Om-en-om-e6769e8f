<!DOCTYPE html>
<html lang="en">
<head>
    <title>Schaakbord.</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        h1 {
            padding-left: 50px;
        }
        table {
            padding-left: 50px; 
        }
        body {
            font-family: Arial;
        }
        .black {
            border: 1px solid black;
            padding: 50px;
            background-color: black;
        }
        .white {
            border: 1px solid black;
            padding: 50px;
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Schaakbord</h1>
    <br>
    <table>
        <tbody>
            <?php for($i = 0; $i <= 8 ; $i++) { ?>
                    <tr>

                    <?php 
                    for($j = 0; $j <= 3  ; $j++) {  
                        if($i % 2 == 0) {
                            echo "<td class = white></td>";
                        } 
                    ?>

                    <td class = black></td>
                    
                    <?php 
                        if($i % 2 == 1) {
                            echo "<td class = white></td>";
                    }
                    
                    } ?>

                    </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>