# githubinphpcomposer - GitHub in php composer

Пример добавления GitHub репозитория для загрузки через php composer

1. Создаем публичный репозиторий в GitHub (если новая библиотека, то желательно выбрать уникальное название репозитория, которого еще нет в composer).
2. Клонируем Git на ПК и создаем файлы README.md и composer.json (composer.json файл можно создать выполнив команду: composer init).
3. Выполняем git комментарий, указываем версию и отправляем в GitHub.
```bash
git add --all
git commit -a -m 'комментарий'
git tag v1.0.0
git push origin v1.0.0;
```
4. Регистрируемся на сайте https://packagist.org/packages/submit через GitHub, вводим ссылку на репозиторий GitHub (https://github.com/VladimirGav/githubinphpcomposer) и нажимаем кнопку Check и Submit.

## Installation

You can install the package via composer: 

```bash
composer require vladimirgav/githubinphpcomposer
```