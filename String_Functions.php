<?php
$changing = "Holy Angel University";
$counting = "Camilla Mhay Villena";
$rep = "Best University in Pampanga";
$best_program = ['Engineer','Accountancy', 'Nursing'];
$best_text = implode(', ',$best_program);
$count = count($best_program);
array_unshift($best_program,'IT' );
$best_update = implode(', ',$best_program);
array_push($best_program,'Architect' );
$another = implode(', ',$best_program);
sort($best_program);
$programs = implode(', ',$best_program);
rsort($best_program);
$program = implode(', ',$best_program);
$random = array_rand($best_program );
$random_program = $best_program[$random];
define ('SITE_NAME', 'Holy Angel University Page');
const EMAIL = 'hau@student.ph';


?>
<!DOCTYPE html>  
<html lang="en">
    <style>
        * {
            font-family: Arial, sans-serif;
            padding: 10px 45px;
        }

        body {
            background-color: #fff4f6;
            text-align:center;
        }

        h1 {
            margin: 25px 0 0 0;
            font-size: 22px;
            color: #a55166;
        }

        table {
            
            width: 100%;
        }


        td {
            padding: 15px;
            border: 1px solid #a55166;
            font-size: 14px;
            
            font-weight: 600;
        }
        td:first-child {
            background-color: #a55166;
            color: #f7dae7;
            
        }
        td:last-child {
            background-color: #ffffff;
            width: 65%;
            color: #582727ff;
            
        }


    </style>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Functions</title>
    </head>
    <body>
        <h1>Changing the Case of Characters</h1>
        <table>
        
        <tr>
        <td>Lowercase
        <td><?= strtolower($changing) ?></td>
        </tr>
        <tr>
        <td>Uppercase</td>
        <td><?= strtoupper($changing) ?></td>
        </tr>
        <tr>
        <td>Capitalize</td>
        <td><?= ucwords($changing) ?></td>
        </tr>
     </table>   
        <h1>Counting Characters and Words</h1>
        <table>
        <tr>
        <td>Number of Characters</td>
        <td><?= strlen($counting) ?></td>
        </tr>
        <tr>
        <td>Number of Words</td>
        <td><?= str_word_count($counting) ?></td>
        </tr>
        </table>
<h1>Removing and Replacing Characters</h1>
        <table>
        <tr>
        <td>Remove whitespaces from left</td>
        <td><?= ltrim($changing, ' ')?></td>
        </tr>
        <tr>
        <td>Remove whitespaces from right</td>
        <td><?= rtrim($changing, ' ')?></td>
        </tr>
        <tr>
        <td>Remove whitespace from left and right.</td>
        <td><?= trim($changing, ' ')?></td>
        </tr>
        <tr>
        <td>String replace</td>
        <td><?= str_replace('Best', 'Good', $rep)?></td>
        </tr>
        <tr>
        <td>String ireplace</td>
        <td><?= str_ireplace('BEST', 'Good', $rep)?></td>
        </tr>
        <td>String Repeat</td>
        <td><?= str_repeat($rep, 2)?></td>
        </tr>
        </table>
<h1>Other Built-in Functions</h1>
        <table>
        <tr>
        <td>Square root</td>
        <td><?= sqrt(81)?></td>
        </tr>

        <tr>
        <td> number of items in the array</td>
        <td>How many best program in HAU? <?= $count?></td>
        </tr>

        <tr>
        <td>Array</td>
        <td>These are the best program in HAU: <?= $best_text?></td>
        </tr>

        <tr>
        <td>Sort Ascending</td>
        <td>Programs: <?= $programs?></td>
        </tr>  

        <tr>      
        <td>Sort Descending</td>
        <td>Programs: <?= $program?></td>
        </tr>

        <tr>
        <td> Array Unshift</td>
        <td>Update on the best program in HAU: <?= $best_update?></td>
        </tr>

        <tr>
        <td> Array Push</td>
        <td>Another update or source for best program in HAU: <?= $another?></td>
    </tr>
        <tr>
        <td> Select random item from the array</td>
        <td> <?= $random_program?></td>
    </tr>
    
        <tr>
        <td>Define</td>
        <td>Website: <?= SITE_NAME ?></td>
        </tr>

        <tr>
        <td>Constant</td>
        <td>Email: <?= EMAIL ?></td>
    </tr>

        </table>


    </body>
</html>