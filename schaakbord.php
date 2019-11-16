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
    <?php
        for($i= 1; $i <= 4 ; $i++) {
            echo 
            "<table>
                <tbody>
                    <tr>
                        <td class = black></td>
                        <td class = white></td>
                        <td class = black></td>
                        <td class = white></td>
                        <td class = black></td>
                        <td class = white></td>
                        <td class = black></td>
                        <td class = white></td>
                    </tr>
                </tbody>
            </table>";
            echo 
            "<table>
                <tbody>
                    <tr>
                        <td class = white></td>
                        <td class = black></td>
                        <td class = white></td>
                        <td class = black></td>
                        <td class = white></td>
                        <td class = black></td>
                        <td class = white></td>
                        <td class = black></td>
                    </tr>
                </tbody>
            </table>";  
        }
    ?>
</body>
</html>