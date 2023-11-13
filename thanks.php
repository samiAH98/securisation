<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') 
    {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
    {
        $errors[] = "Le prenom est obligatoire";
    }
    if (!isset($_POST['sujet']) || trim($_POST['sujet'] === ''))
     {
        $errors[] = "Le sujet est obligatoire";
    }
    if (!isset($_POST['courriel']) || trim($_POST['courriel'] === ''))
     {
        $errors[] = "L'email est obligatoire";
    } 
    elseif (!filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL)) 
    {
        $errors[] = "L'email n'est pas valide";

        if (!isset($_POST['telephone']) || trim($_POST['telephone'] === '')) 
        {
            $errors[] = "Le numéro de téléphone est obligatoire";
        }
        if (!isset($_POST['message']) || trim($_POST['message'] === '')) 
        {
            $errors[] = "Le message est obligatoire";
        }
        if (empty($errors)) 
        {
            header('Location: thanks.php');
        }
    }
}

 print_r("Merci " . $_POST['lastname'] . " " . $_POST['firstname'] .
    " de nous avoir contacté à propos de " . $_POST['sujet'] .
    ". Un de nos conseillers vous contactera soit à l’adresse " .
    $_POST['courriel'] . " ou par téléphone au " . $_POST['telephone'] .
    " dans les plus brefs délais pour traiter votre demande : " . $_POST['message']);