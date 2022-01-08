<?php            
    $first = $second = -1;
    $operand = '';
    $errMsg_1 = $errMsg_2 = "";
    $error_1 = $error_2 = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["first"])) {
            $error_1 = true;
            $errMsg_1 = "1st Number cannot be NULL!";
        } 
        if (empty($_POST["second"])) {
            $error_2 = true;
            $errMsg_2 = "2nd Number cannot be NULL!";
        } else {
            $first = $_POST["first"];
            $second = $_POST["second"];
        }
        if (isset($_POST["operand"]))
            $operand = $_POST["operand"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($error_1 == true)
            echo $errMsg_1 . '<br>';
        if ($errMsg_2 == true)
            echo $errMsg_2 . '<br>';
        if ($error_1 == false && $error_2 == false) {
            switch ($operand) {
                case 'add':
                    $result = $first + $second;
                    break;
                case 'sub':
                    $result = $first - $second;
                    break;
                case 'div':
                    $result = $first / $second;
                    break;
                case 'mult':
                    $result = $first * $second;
                    break;
                default:
                    $result = NAN;
                    echo $first . "<br/>";
                    echo $second;
                    break;
            }
            echo 'The result is ' . $result;
        }
    }
?>
