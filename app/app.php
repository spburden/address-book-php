<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        $_SESSION['new_contact'] = array();
        return $app['twig']->render('home.html.twig', array('all_contacts' => Contact::getAll()));
    });

    $app->post("/create_contact", function() use ($app) {
        $newContact = new Contact($_POST['newName'], $_POST['newPhone'], $_POST['newAddress']);
        $newContact->save();
        $newContact->saveOne();
        return $app['twig']->render('added-a-contact.html.twig', array('new_contact' => Contact::getOne()));
    });

    $app->get("/delete_contacts", function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('contacts-cleared.html.twig');
    });

    return $app;
?>
