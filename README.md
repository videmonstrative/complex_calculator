Перед запуском, нужно подготовить окружение.

__Требования__

- PHP 7.2

__Подготовка окружения__

Если запуск производится на машине с установленным PHP 7.2, то можно сразу перейти к "Установке зависимостей".

Если используется docker, то можно установить образ:
```
docker build -t complex_calculator .
```

__Установка зависимостей__
```
./composer install
```

__Запуск теста__
```
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/ComplexCalculatorTest
```