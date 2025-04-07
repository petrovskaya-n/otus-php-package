# otus-php-package

Склонение существительных после числительного

## Требования

- PHP 8.2

## Установка

`composer require petrovskaya-n/otus-php-package`

## Использование

```
// Пример использования:  
$yearForms = ['год', 'года', 'лет'];
echo CorrectWordEnding::getCorrectEnding(2, $yearForms); // Выводит: "2 года"
```