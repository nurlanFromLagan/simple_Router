<?php


class Router
{
    /*
     * string $path - путь в адресной строке, тип данных строка
     * array $routes - ассоциативный массив с путями и расположением файла, тип данных массив
     * string $false404 - расположение файла ошибка 404, тип данных строка
     * */
    public static function routing (string $path, array $routes, string $false404)
    {
        if (array_key_exists($path, $routes)) {

            return include $routes[$path];
        } else {
            return include $false404;
        }
    }
}