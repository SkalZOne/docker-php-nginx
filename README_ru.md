<!-- Repository name -->
<h1>Docker PHP Nginx</h1>

<!-- Translates -->
[![ru](https://img.shields.io/badge/lang-ru-blue.svg)](./README_ru.md)
[![en](https://img.shields.io/badge/lang-en-red.svg)](./README.md)

<!-- Содержание -->
<h2>Содержание</h2>
<ul>

<!-- Установка -->
<li>
    <a href="#installation">Установка</a>
    <ul>
        <li>
            <a href="#installation-clone">Склонируйте данный репозиторий</a>
        </li>
        <li>
            <a href="#installation-go-to-dir">Откройте директорию проекта</a>
        </li>
    </ul>
</li>

<!-- Запуск -->
<li>
    <a href="#launch">Запуск</a>
</li>

<!-- Примечания -->
<li>
    <a href="#notes">Примечания</a>
</li>
</ul

<!-- Установка -->
<h2><a id="installation">Установка</a></h2>
<ul>
    <!-- Склонируйте данный репозиторий -->
    <li>
        <a id="installation-clone">Склонируйте данный репозиторий через HTTPS или SSH</a>
        <details>
        <summary>Через HTTPS</summary>
        <pre>git clone https://github.com/SkalZOne/docker-php-nginx.git</pre>
        </details>
        <details>
        <summary>Через SSH</summary>
        <pre>git clone git@github.com:SkalZOne/docker-php-nginx.git</pre>
        </details>
    </li>
    <!-- Откройте директорию проекта -->
    <li>
        <a id="installation-go-to-dir">Откройте директорию проекта</a>
        <pre>cd docker-php-nginx</pre>
    </li>
</ul>

<!-- Запуск -->
<h2><a id="launch">Запуск</a></h2>
<h3>Чтобы запустить проект, вам нужно выполнить данную команду</h3>
<pre>./start.sh</pre>

<h3>Чтобы выключить проект, вам нужно выполнить данную команду</h3>
<pre>./stop.sh</pre>

<h4>✅ Готово, теперь при переходе на данный адрес: <b>localhost:8080</b> откроется основной веб-интерфейс. ✅</h4>

<!-- Примечания -->
<h2><a id="notes">Примечания</a></h2>
<ul>
    <li>Все PHP классы находятся в директории src/module</li>
</ul>