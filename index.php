<?php
$array1 = ['Маслов', 'Наумов', 'Вафин', 'Александрова', 'Хожимуратова', 'Тарасова', 'Юсупова', 'Краснова'];

$studentCount = count($array1);

$isStudentInList = in_array('Сидоров', $array1);

$expelled = array_pop($array1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Задание 1 -->
    <div class="container">
        <h1>Список группы</h1>
        <?php
        echo '<pre>';
        print_r($array1);
        ?>

        <p>Количество студентов в группе:</p>
        <?php echo $studentCount ?>

        <?php if ($isStudentInList): ?>
            <p>В списке есть Сидоров</p>
        <?php else: ?>
            <p>В списке нет Сидорова</p>
        <?php endif; ?>

        <p>Удаленный студент из списка: <span class="expelled">
                <?php echo $expelled; ?></span></p>
    </div>


    <!-- Задание 2 -->
    <div class="container">
        <?php

        $clubs = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        ];

        asort($clubs);

        echo "<h1>Список кружков и фамилий</h1>";
        echo "<ul>";
        foreach ($clubs as $club => $surname) {
            echo "<li>$club - $surname</li>";
        }
        echo "</ul>";
        ?>
    </div>

    <!-- Задание 3 -->
    <div class="container">
        <?php
        $student = [
            'name' => 'Никита',
            'surname' => 'Дудкин',
            'group' => '425ВЕБ',
            'hobbies' => ['Автомобили','Компьютеры'],
            'socials' => ['Instagram' => '@nikitad_43', 'Tg' => '@nikitad_21']
        ]
        ?>
        <h1>Мои данные</h1>
        <p><span>Мое имя:</span> <?php echo $student['name']?></p>
        <p><span>Моя фамилия:</span> <?php echo $student['surname']?></p>
        <p><span>Моя группа:</span> <?php echo $student['group']?></p>
        <p><span>Мои хобби:</span> <?php echo $student['hobbies'][0] .'<br>', $student['hobbies'][1] ?></p>
        <p><span>Мои соцсети:</span> <?php echo $student['socials']['Instagram'] .'<br>', $student['socials']['Tg'] ?></p>
    </div>
</body>

</html>