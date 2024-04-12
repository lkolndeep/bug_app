<?php
namespace App\Controller;

use App\Service\NotificationSender;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WelcomeController extends AbstractController
{
    #[Route(
        '/welcome/show-message/{word}', 
        name: 'welcome_show_message')
    ]
    public function showMessage(
        NotificationSender $notificationSender,
        string $word,
    ): Response {
        $sentence = $notificationSender->send($word);

        return new Response($sentence);
    }
}