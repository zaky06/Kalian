<?php

namespace App\Model;

if (isset($_POST['email'])){
    // Переменные с формы
    $email = $_POST['email'];

    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "user"; // Логин БД
    $db_password = "web"; // Пароль БД
    $db_base = 'email_tb'; // Имя БД

    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array( 'email' => $email);
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (email) values (:email)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
    	echo "Успех. Информация занесена в базу данных";
    }
}
