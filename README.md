# guest_book

# Настройка и запуск на ПК
Клонируем проект:

`git clone git@github.com:Enh404/guest_book.git`

В папке с проектом устанавливаем зависимости composer:

`composer install`

В папке _database_ находятся файлы необходимых таблиц (_categories, notes_), а так же тестовые данные для них (_categories_data, notes_data_).

В папке _db_ в свойствах класса _dbConnect_ напишите свои данные для подключения к базе данных.
