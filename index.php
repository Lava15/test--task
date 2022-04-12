<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            height: 100vh;
            display: grid;
            place-content: center;
            background-color: #cbcbcb;
        }
        #input{
            width: 300px
        }
    </style>
</head>
<body>


            <form action="#" method="POST">
                <input type="text" name="qnumber" placeholder="Введите сколько человек перед вами?" id="input">
                <br>
                <input type="submit" name="submit" value="Проверить">
            </form>

    <?php

    $max_people = 145;
    $input = 'input.txt';
    $output = 'output.txt';




    if(isset($_POST['submit'])){
        $people_in_queue = trim($_POST['qnumber'] );
        $vasyas_queue = $people_in_queue + 1;

        $total_minutes = $people_in_queue * 5;
        $hours = floor($people_in_queue * 5 / 60);
        $minutes = $total_minutes - ($hours * 60);



        if($people_in_queue < $max_people  == 'on') {
            $input_write = fopen ($input, 'a+');
            fwrite($input_write, "\n". "K-$vasyas_queue");

            echo "Номер талона: K-$vasyas_queue<br>";
            echo "Время ожидания в очереди: $hours час(ов)  $minutes минут";

        } else {
            echo "Вы сегодня не успеете!! <br>";
            echo "Время ожидания в очереди: $hours час(ов)  $minutes минут";

            $output_write = fopen ($output, 'a+');
            fwrite($output_write, "\n". "NO $hours : $minutes");

        }
    }




            /*
             Если в файлы input.txt и output.txt ничего не записывается.
            Запустите код ниже для проверки доступа, для работы с файлами.
             */

            if(is_readable($input)){
               echo "readable <br>";
            }
            if(is_writable($input)){
               echo "writeable <br>";
            }
            if(is_executable($input)){
               echo "executable <br>";
            }
            ?>
























</body>
</html>






