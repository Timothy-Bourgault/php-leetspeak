<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetspeakTranslator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_leetspeak", function() use($app) {
       $my_LeetspeakTranslator = new LeetspeakTranslator;
       $leetspeak_phrase = $my_LeetspeakTranslator->makeLeetspeak($_GET['phrase']);
       return $app['twig']->render('leetspeaked.html.twig', array('result' => $leetspeak_phrase));
   });
   return $app
 ?>
