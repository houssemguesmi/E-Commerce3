<?php
function run(string $url, array $routes): void
{
    $base_path = '/E-Commerce';
    if (strpos($url, $base_path) === 0) {
        $url = substr($url, strlen($base_path));
    }

    $uri = parse_url($url);
    $path = $uri['path'];


    if (!array_key_exists($path, $routes)) {
        echo "404 Not Found";
        return;
    }

    $callback = $routes[$path];
    $params = [];

    if (!empty($uri['query'])) {
        parse_str($uri['query'], $params);
    }

    include 'includes/header.php';
    $callback($params);
    include 'includes/footer.php';
}