<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("landing.html.twig");
    });
    $app->post("/runSearch", function() use ($app) {
        $current_search = new RepeatCounter();
        $results = $current_search->countRepeats($_POST['term'], $_POST['target']);
        return $app['twig']->render('runSearch.html.twig', array('results' => $results));
    });

    return $app;
?>
