<?php
namespace App\Service;

use App\Interface\MessageInterface;

class MessageSecond implements MessageInterface
{
    public function show(string $word): string
    {
        return "Message service Two: $word.";
    }
}