<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/anagram.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/process', function() use ($app) {
        $input1 = $_POST['wordToCheck'];
        $input2 = explode(" ", $_POST['wordsToCheckAgainst']);
        $new_anagram = new Anagram;
        $result = $new_anagram->checkWords($input1, $input2);
        return $app['twig']->render('results.html.twig', array('result'=>$result));
    });

    return $app;
?>
