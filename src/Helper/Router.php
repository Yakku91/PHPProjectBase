<?php
namespace MyVideo\Helper;
class Router
{
public array $routes = [];

public function __construct()
{
}

/**
* Fügt eine Route dem Router hinzu
* @param string $path Name/URL der Route
* @param callable $callback Aufzurufende Funktion
* @return void
*/
public function addRoute(string $path, callable $callback): void
{
$this->routes[$path] = $callback;
}

/**
* Löst eine Route auf
* @param $path Aufzulösender Pfad/Name/URL
* @return void
*/
public function resolve($path): void
{
//Sucht die Position von ?
$position = stripos($path, '?');
//Gibt Teilstring bis Position aus
if ($position !== false) {
$path = substr($path, 0, $position);
}
//Ruft den registrierten Callback auf.
call_user_func($this->routes[$path]);
}
}
