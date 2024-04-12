<?php
namespace App\Service;

use App\Interface\MessageInterface;

class MessageFirst implements MessageInterface
{
    public function show(string $word): string
    {
        return "Message service One: $word.";
    }
}