<?php
namespace App\Service;

use App\Interface\MessageInterface;
use Symfony\Component\DependencyInjection\Attribute\Target;

class NotificationSender
{
    // The Target attribute with the service app.message.message_second does not work and we have this error:

    // Cannot resolve argument $notificationSender of "App\Controller\WelcomeController::showMessage()": Cannot autowire service "App\Service\NotificationSender": 
    // argument "$message" of method "__construct()" has "#[Target('app.message.message_second')]"  but no such target exists. You should maybe alias 
    // this interface to one of these existing services: "app.message.message_first", "app.message.message_second".

    // When we delete the Target attribute line, the WelcomeController call http://127.0.0.1:8000/welcome/show-message/test works
    // with the default service app.message.message_first

    public function __construct(
        #[Target('app.message.message_second')]
        private MessageInterface $message
    ){
    }

    public function send(string $word): string
    {
        $sentence = $this->message->show($word);

        return $sentence;
    }
}