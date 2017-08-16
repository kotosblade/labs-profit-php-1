<?php
/**
 * Created by PhpStorm.
 * User: kotos
 * Date: 14.08.2017
 * Time: 16:54
 */
echo '
<h1>По PHP Storm...</h1>
<p>
name: Работа в PHPStorm [GeekBrains]
<br>
link: https://www.youtube.com/watch?v=72iNFJ_xzys
<br>
date: 13.09.2016 
<hr>
</p>
';

echo '
<h1>Варианты работы с проектом на удаленном ресурсе<h1>

<h2>1. Хранение проекта в облаке и синхронизация данных через ПО облачных сервисов на ПК клиентов:</h2>
<p>
PHPStorm будет думать что папка проекта - локальная на ПК.
<br>
Синхронизацию данных в папке проекта производит ПО облачного сервисов (DropBox, GoogleDrive, OneDrive и.т.д.)
<br><br>Идея такая:
<br>-подключаем "Облачную папку", установив ПО облачного сервиса на ПК-1;
<br>-заливаем в "Облачную папку" - "Папку проекта";
<br>-добавляем "Папку проекта", как локальный проект в PHPStorm на ПК-1;
<br>-подключаем "Облачную папку", установив ПО облачного сервиса на ПК-2;
<br>-добавляем "Папку проекта", как локальный проект в PHPStorm на ПК-2;
<br>Теперь все изменения в "Папке проекта" - синхронизируются с "Папкой проекта" в облаке, т.е. поработали за ПК-1, все сохранили, перешли на ПК-2, обновили файлы, должны появиться все изменения и.т.д.
</p>
';

// ----------------------------------------------------------------------------
echo '
<h2>2. Хранение проекта на сервере и синхранизация по FTP или SFTP(SSH) средствами PHPStorm на ПК клиентов:</h2>
<p>
PHPStorm на ПК клинтов - будет отвечать за синхронизацию данных в папке проекта.
<br><br>Идея такая:

<br>1. Создаем подключение (хотя можно и с п. 2):
<br>- В PHPStorm, заходим в настройки подключений:
<br>Вкладка "File" > "Settings" > "Build, Execution, Deployment" > "Deployment"
<br>
<br>- Создаем подключение - жмем [+].
<br>
<br>- Указываем название и тип подключения:
<br>Название подключения - любое имя
<br>Тип подключения - (пример SFTP)
<br>
<br>- Вводим настройки подключения:
<br>вкладка "Connection":
<br>[v] Visible only for this project (указываем галку - предлагать подключение только для данного проекта);
<br>FTP Host: my-site.ru (можно указать не IP, а Domain name);
<br>Port: 21
<br>Root path: / (указать с какой директории есть доступ к серверу, можно урезать, указав директорию поглубже (пр. var/www/my-site.ru));
<br>User name:
<br>Password:
<br>Во вкладке "Advanced options..." - можно указать для FTP - Passiv и кодировку utf-8 (хотя можно оставить по умолчанию);
<br>Web server Root URL: http://my-site.ru/ (указываем root относительно сайта, обычно равно FTP Host: my-site.ru, где искать index.php при заходе на сайт);
<br>
<br>вкладка "Mappings":
<br>Local path: C:\WEB_SERVER\OpenServer\domains\my-sites.ru (Путь папки проекта на локальном ПК);
<br>Deployment path on server: var/www/my-sites.ru/ (Путь папки проекта на Сервере);
<br>Web path on server: / (Можно добавить вложенность в URL (пр. /site - получится: http://my-site.ru/site ));
<br>
<br>вкладка "Excluded Paths":
<br>(Добавить папки исключения, которые не нужно синхронизировать (пр. папка настроек phpstorm))
<br>"Add Local Path" - указываем директорию на ПК, которую не нужно заливать на Сервер.
<br>"Add Deploymant Path" - указываем директорию на Сервере, которую не нужно заливать на ПК.
<br>
<br>2. Создать новый проект файлы которого на сервере:
<br>-в PHPStorm, заходим в:
<br>Вкладка "File" > "New Project from Existing Files...",
<br>"Web server in on remote host, file are accessible via FTP/SFTP/FTPS.", "Next",
<br>-указываем название директории нашего проекта (пр. my-site.ru):<br>
Project name: my-site.ru<br>
Project local path: C:\WEB_SERVER\OpenServer\domains\my-site.ru<br>
[v] Custom<br>
"Next"
<br>-В этом окне ничего не меняем,<br>
"Next"
<br>-Указываем настройки подключения:<br>
...(стандартно - ip, login, pass...)<br>
"Next"<br>

<br>...((еще будет 1 или 2 окна) в которых вроде надо указать папку проекта на сервере (которая будет синхронизироваться) и все.)
<br>-Далее папка проекта синхронизируется (займет какоето время для скачки файлов с сервера).
<br><br>
При работе нужно скачивать и закачивать файлы в ручную.<br>
Такой способ подайдет если проектом занят 1 спец.<br>
<br><br>

<b>СОВЕТЫ:</b>
<br>1) Включить уведомления в PHPStorm - о локальных изменениях в файлах проекта другими програмами:
<br>(PHPStorm мониторит только когда запущен)
<br>- Вкладка "File" > "Settings" > "Build, Execution, Deployment" > "Deployment" > "Options" 
<br>- "Warn when uploading over newer file": "Compare content"
<br>- [v] "Notify about remote changes" 
<br>

<br>2) Чтобы PHPStorm автоматически закачивал и скачивал файлы при работе:
<br>- Вкладка "Tools" > "Deployment" > [v] Automatic Upload (Alveys)

</p>
';


// ----------------------------------------------------------------------------
echo '
<h2>3. Хранение проекта на GitHub и синхронизация с GitHub используя Git:</h2>
<p>
<a href="01-git-and-github.php">Как подключить Git и GitHub</a>
</p>
';

// =====================================================================================================================

echo '
<hr>
<h1>ЦВЕТОВОЕ РАЗГРАНИЧЕНИЕ (SCROPES)</h1>
<p>
<br><b>ПРЕМЕНЕНИЕ:</b>
<br>- Подсвечивание цветом Models, Controller, Views итд.
<br>- Распространяется на заголовки вкладок
<br>- Дерево проекта (project views)
<br>- Навигация (navigation lists)
<br>

<br><b>ПЕРЕНОС НАСТРОЕК ШАБЛОНОВ ЦВЕТОВ В ДРУГОЙ ПРОЕКТ:</b>
<br>(PHPStorm не умеет выгружаться настройки шаблонов цветов в другие проекты, поэтому мыможем сделать это сами в ручную)
<br>1) Проверить, что во всех шаблонах удалены название проекта, чтобы шаблоны стали универсальными;
<br>
<br>2) Переносим файлы настроек шаблонов:
<br>- в папке проекта зайти в папку настроек PHPStorm
<br>.idea
<br>- копируем файлы настроек для шаблонов цветов:
<br>scopes
<br>fileColors.xml
<br>
<br>3) Данные файлы можно перенести в папку другого проекта;
<br>

<br><b>НАСТРОЙКА:</b>
<br>1) Заходим на страницу создания шаблонов для файловых веток:
<br>Вкладка "File" > "Settings" > "Apperance & Behavior" > "Scopes"
<br>
<br>2) Создаем шаблоны для файловых веток:
<br>- жмем [+];
<br>- выбираем "Share";
<br>Local - для данного проекта;
<br>Share - общий, для всех проектов;
<br>- вводим имя шаблона:
<br>(пр. названий используемых шаблонов:)
<br> Widget
<br> Model
<br> FView
<br> FControllers
<br> Config
<br> BView
<br> BControllers
<br>- указываем правила (шаблон) для выделения файлов и папок (в уже готовом проекте);
<span style="color:red">
<br>- в строке "Patern" пр. -file:.gitignore||file[my-site.ru]:00-ide-php-storm//*
<br>- удаляем название проекта [my-site.ru] - во всех шаблонах, чтобы шаблоны стали универсальными!!!
</span>
<br>- жмем "Apply", "OK"; 
<br>
<br>3) Заходим на страницу настроек цветов:
<br>Вкладка "File" > "Settings" > "Apperance & Behavior" > "File Colors"
<br>
<br>4) Задаем цвет для шаблонов:
<br>- выбираем поле, к какому относится шаблон: (Local Colors - для данного проекта или Share Colors- общий, для всех проектов);
<br>- в этом поле жмем [+], откроется окно;
<br>- в поле "Scope" - выбираем созданный шаблон;
<br>- в поле "Color" - выбираем цвет;
<br>- жмем "OK", "OK";
<br>
</p>
';

// =====================================================================================================================

echo '
<hr>
<h1>ИМПОРТ/ЭКСПОРТ НАСТРОЕК:</h1>
<p>
<br>- Не все настройки экспортируются (например Scope, File Colors, Encoding);
<br>- Все настройки лежат в /.idea ;
<br>- Из частых: Deployment servers, File Templates ;
<br>- Формат хранения: XML ;
<br>
<br>Часто нужно перенести часть настроек пр. список настроек подключений:
<br>- Вкладка "File" > "Export Settings..." 
<br>- выделяем только "Deployment servers";
<br>- жмем "OK";
<br>
</p>
';

// =====================================================================================================================

echo '
<hr>
<h1>МАКРОСЫ (LIVE TEMPLATES):</h1>
<p>
<br> 40-39
<br>
<br>

<br>- Не все настройки экспортируются (например Scope, File Colors, Encoding);
<br>- Все настройки лежат в /.idea ;
<br>- Из частых: Deployment servers, File Templates ;
<br>- Формат хранения: XML ;
<br>
</p>
';