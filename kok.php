<?php
// Многомерный массив с информацией о книгах в библиотеке (название => [автор, жанр])
$library = array(
    "Война и мир" => array("Лев Толстой", "Роман"),
    "Преступление и наказание" => array("Федор Достоевский", "Роман"),
    "1984" => array("Джордж Оруэлл", "Фантастика"),
    "Гарри Поттер и философский камень" => array("Джоан Роулинг", "Фэнтези"),
    "Улисс" => array("Джеймс Джойс", "Модернизм")
);

// Функция для поиска книг определенного жанра
function findBooksByGenre($library, $genre) {
    $foundBooks = array();
    foreach ($library as $title => $info) {
        if ($info[1] === $genre) {
            $foundBooks[$title] = $info;
        }
    }
    return $foundBooks;
}

// Заданный жанр книг для поиска
$genreToFind = "Роман";

// Поиск книг по заданному жанру
$foundBooks = findBooksByGenre($library, $genreToFind);

// Вывод найденных книг на экран
echo "Книги жанра \"$genreToFind\":\n";
foreach ($foundBooks as $title => $info) {
    echo "- $title, Автор: $info[0]\n";
}
?>