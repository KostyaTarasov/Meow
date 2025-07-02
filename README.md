# Meow Cats

## Описание

Консольное PHP-приложение для имитации поведения разных видов котов и игрушек. Коты умеют мяукать, мурлыкать и охотиться на мышей. Игрушки не могут охотиться, а некоторые не издают звуки.

## Установка

1. Клонируйте репозиторий:
   ```
   git clone https://github.com/KostyaTarasov/Meow.git
   cd Meow
   ```
2. Установите зависимости:
   ```
   composer install
   ```

## Использование

Запуск команд через консоль:

```
php bin/cli.php CatSoundCommand <тип_кота> <действие>
```

**Возможные типы котов:**

- Siamese
- MaineCoon
- Persian
- Siberian
- Birman
- PlushTiger
- LionKeychain

**Возможные действия:**

- meow
- purr
- hunt

**Примеры:**

```
php bin/cli.php CatSoundCommand Siamese meow
php bin/cli.php CatSoundCommand MaineCoon hunt
php bin/cli.php CatSoundCommand PlushTiger purr
php bin/cli.php CatSoundCommand LionKeychain hunt
```

## Тестирование

Запуск всех тестов:

```
vendor\bin\phpunit --configuration phpunit.xml
```
