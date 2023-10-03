<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
<h1>Задание 1</h1>
<div class="block-one">
<?php

// комментарии для себя, чтобы разобраться в коде

// Создание массива со списком студентов
$students = ["Иванов", "Петров", "Смирнов", "Сидоров", "Козлов"];

// Вывод списка студентов на экран
echo "<h2>Список студентов: </h2>";
foreach($students as $student){
    echo "<p>$student</p>";
}
// Подсчет количества студентов
$count = count($students);
echo "<h2>Количество студентов: </h2>" . "<p>$count</p>" ;
echo "<hr>";

// Проверка наличия фамилии "Сидоров" в списке
if (in_array("Сидоров", $students)) {
    echo "<p>Фамилия"." <i>Сидоров</i>"." есть в списке</p>";
    echo "<hr>";
} else {
    echo "Фамилии Сидоров нет в списке <br>";
}


// Удаление последней фамилии из списка и сохранение ее в переменной expelled
$expelled = array_pop($students);

// Вывод обновленного списка студентов и сохраненной фамилии expelled
echo "<h2>Обновленный список студентов: </h2>";
foreach($students as $student){
    echo "<p>$student</p>";
}
echo "<h2>Фамилия последнего отчисленного студента: </h2>" . "<p>$expelled</p>";

?>
</div>

<h1>Задание 2</h1>
<div class="block-one">
<?php
// Создание массива со значениями
$data = [
    "Спортивный" => "Сидоров",
    "Художественный" => "Козлов",
    "Музыкальный" => "Краснов",
    "Литературный" => "Петров",
    "Биологический" => "Хусаинов"
];

// Сортировка массива по фамилиям
asort($data);

// Вывод отсортированного списка в формате "Кружок - Фамилия"
foreach ($data as $kruzhok => $familiya) {
    echo '<div class="block-two"> <p>'.$kruzhok.'</p> - <p>'.$familiya.'</p> </div>';
}
?>
</div>
<h1>Задание 3</h1>
<div class="block-one">
<?php
// Создание многомерного массива с данными о студенте
$student = array(
    "Имя" => "Амир",
    "Фамилия" => "Гафаров",
    "Группа" => "425",
    "Хобби" => "Дизайн",
    "Соцсети" => array(
        "Facebook" => "fazte",
        "Instagram" => "fazte",
        "Twitter" => "fazte.me"
    )
);

// Вывод данных о студенте
echo '<div class="block-three"<p>Имя: </p>'.$student["Имя"].'</div>';
echo '<div class="block-three"<p>Фамилия: </p>'.$student["Фамилия"].'</div>';
echo '<div class="block-three"<p>Группа: </p>'.$student["Группа"].'</div>';
echo '<div class="block-three"<p>Хобби: </p>'.$student["Хобби"].'</div>';
echo "<p>Соцсети:</p>";
foreach ($student["Соцсети"] as $network => $username) {
    echo '<div class="block-three">'.$network . '  :  ' . $username .'</div><br>';
}
?>
</div>
</body>
</html>