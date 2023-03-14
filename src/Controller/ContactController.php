<?php

namespace App\Controller;

class ContactController extends AbstractController
{

    public function contact(string $name, string $lastname)
    {
        return $this->twig->render('contact.html.twig', [
            'name' => $name,
            'lastname' => $lastname
        ]);
    }
}
