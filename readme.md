#Установка PHP
Если нашей операционной системой является Windows (а я надеюсь на это), 
то нам надо загрузить один из пакетов со страницы https://windows.php.net/download.

Загрузим zip-пакет последнего выпуска PHP, учитывая разрядность операционной системы, на которую надо установить PHP.

Интерпретатор PHP имеет две версии: Non Thread Safe и Thread Safe. Выбери версию Thread Safe.

Распакуй загруженный архив в папку, и назови её php.

Теперь надо выполнить минимальную конфигурацию PHP. Для этого зайди в распакованный архив и най там файл php.ini-development.

Переименуй этот файл в php.ini и затем открой его в текстовом редакторе.

Найди в файле строку:

~~~
;extension_dir = "ext"
~~~
Раскомментируй эту строку, убрав точку с запятой и укажи полный путь к папке расширений php:

#Apache
перейди на сайт http://www.apachelounge.com/, который предоставляет дистрибутивы Apache для Windows:

После загрузки пакета с Apache распакуй загруженный архив. В нем найди папку непосредственно с файлами веб-сервера - каталог Apache24. 
Перемести данный каталог на диск.

В распакованном архиве в папке `bin` найди файл `httpd.exe`

Это исполняемый файл сервера. Запусти его. должна открыться консоль:

Нужно проверить, работает ли этот Apache http:\localhost

###Конфигурация веб-сервера

Открой этот файл в текстовом редакторе. `httpd.conf` настраивает поведение веб-сервера.

в папке php лежит файл `php8apache2_4.dll`

Для подключения php найди в файле `httpd.conf` конец блока загрузки модулей LoadModule
~~~
//......................
#LoadModule vhost_alias_module modules/mod_vhost_alias.so
#LoadModule watchdog_module modules/mod_watchdog.so
#LoadModule xml2enc_module modules/mod_xml2enc.so
~~~
И в конце этого блока добавь строчки
~~~
LoadModule php_module "Полный путь до файла php8apache2_4.dll"
PHPIniDir " Путь до директории пример: C:/php"

LoadModule php_module "C:/php/php8apache2_4.dll"
PHPIniDir "C:/php"
~~~
Далее укажи место, где у тебя будет храниться сайт. **Нужно скопировать репозиторий с сервера**. Затем найди в файле `httpd.conf` строку
~~~
DocumentRoot "${SRVROOT}/htdocs"
<Directory "${SRVROOT}/htdocs">

DocumentRoot "c:/localhost"
<Directory "c:/localhost">
~~~
Замени то что в кавычках на полный путь к репозиторию.

Измени пути файлам, в которые будут заноситься сведения об ошибках или посещении сайта. Для этого найди строку и поменяй то что в кавычках на полный путь к директории репозитория
~~~
ErrorLog "logs/error.log"

ErrorLog "c:/localhost/error.log"
~~~
Далее найди строку и так же поменяй путь.

~~~
CustomLog "logs/access.log" common

CustomLog "c:/localhost/access.log" common
~~~

Затем найди строчку:
~~~
#ServerName www.example.com:80
~~~
Замени на:
~~~
ServerName localhost
~~~
Далее найди блок <IfModule mime_module>:
~~~
<IfModule mime_module>
    #
    # TypesConfig points to the file containing the list of mappings from
    # filename extension to MIME-type.
    #
    TypesConfig conf/mime.types
~~~
И под строкой **IfModule mime_module** добавь две строчки:
~~~
AddType application/x-httpd-php .php
AddType application/x-httpd-php-source .phps
~~~
То есть должно получится
~~~
<IfModule mime_module>
    AddType application/x-httpd-php .php
    AddType application/x-httpd-php-source .phps
    #
    # TypesConfig points to the file containing the list of mappings from
    # filename extension to MIME-type.
    #
    TypesConfig conf/mime.types
~~~
И в конце найдем блок IfModule dir_module
~~~
<IfModule dir_module>
    DirectoryIndex index.html
</IfModule>
~~~
И заменим его на следующий:
~~~
<IfModule dir_module>
    DirectoryIndex index.html index.php
</IfModule>
~~~
Должно работать.