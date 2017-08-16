<?php
/**
 * Created by PhpStorm.
 * User: kotos
 * Date: 14.08.2017
 * Time: 18:56
 */
<text>
*******************************************************************************
* PhpStorm + Git + GitHub - Настройка контроля версий
*
* https://www.youtube.com/watch?v=nHjKXiRLAQY
*******************************************************************************

// Подключаем Git: ............................................................

1. Скачиваем с официального сайта последнюю версию
Gitfor Windows Version 2.14.1 (13.08.2017)
https://git-for-windows.github.io/

2. Устанавливаем  Git For Windows
                          -при установке - указываем все время первый вариант

3. Запускаем PHPStorm

4. Заходим в настройки для Git
"File" > "Settings" > "Version Control" > "Git"

5. Настраиваем

-Автоматически определяется путь к git.exe:
Path to Git Executable: C:\Program Files\Git\cmd\git.exe

-жмем "Test", если все хорошо вылезит окно
Git executed successfully
Git version is 2.14.1.0

-Оставляем галки только на
[v] Warn if CRLF lines separators are about to be commited
[v] Warn when commiting in detached HEAD or during rebase

// Подключаем Git Hub: ........................................................

1. Создаем учетку на сайте [https://github.com]

PUBLIC - free, открыта для всех.
PRIVATE - 7$ в месяц, и вы получите неограниченные частные репозитории. (Вы можете отменить в любое время.)

2. Подключаем учетку GitHub к PHPStorm

2.1. Запускаем PHPStorm

2.2. Заходим в настройки
"File" > "Settings" > "Version Control" > "GitHub"

2.3. Настраиваем
-в "Host" - github.com
-в "Auth Type" - выбираем "Token", жмем "Create API Token", в открывшемся окне вводим login и pass, жмем "Login", в строке "Token" появятся звездочки
-проверяем - жмем по "Test" - если все хорошо,вылежет окно "Connection successful for user [Имя пользователя]"
-(галку (git clone repository ssh) - не ставим)

2.4.

// Указываем интеграцию с контролем версий

1. Запускаем PHPStorm

2. Заходим в настройки
"VCS" > "Enable Version Control Integration", в открывшемся окне выбираем "Git", жмем "OK"

3.
-вероятно на данном этапе PHPStorm предложит установить Plugins для Git - полоска в верхней части экрана.
-согласимся (произайдет установка, затем перезапуск PHPStorm)

-"Would you like to add uversioned to the .gitignore file", жмем "Add uversioned files", в файле .gitignore появятся исключения:
.idea
.idea/inspectionProfiles/
.idea/labs-profit-php-1.iml
.idea/modules.xml
.idea/workspace.xml




// Настроим исключения ............................

все файлы сейчас должны стать красными - те значит их не разу не Comit

есть файлы которые не должны попасть в Git
composer.lock -файл нужен для каждого ПК свой
vendor -это папка куда складываются все библиотеки скаченные Composer
.idea - папка PHPStorm

в корне проекта создаем файл .gitignore

// Первый Commit .....................................
в верху есть кнопка (с зеленой стрелкой вниз или V образной вепке с зеленой точкой) - это commit

-Добавим проект в System Control Version:
На папке проекта ПКМ > "Git" > "Add"
(Все файлы должны будут стать зелеными - те теперб фалы стали под контролью CSV)

???

// Первая публикация [локального проекта] на [GitHub] .........................

1. Запускаем PHPStorm

2. Заходим в настройки
"VCS" > "Import into Version Control" > "Share Project on GitHub", в открывшемся окне выбираем
-как будет называться проект: labs-profit-php-1
-как будет называться проект на GitHub: labs-profit-php-1
-описание проекта: Курс: [pr-of-it.ru] PHP-1: ВВЕДЕНИЕ В ПРОФЕССИЮ
жмем "Share", (проект должен быть выгружен на GitHub)


// Залить изменения с [локального ПК] на [GitHub] .............................
после внесения изменений в проекте, заливаем изменение на GitHub

"Commit and Push"