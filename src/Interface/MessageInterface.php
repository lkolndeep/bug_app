<?php
namespace App\Interface;

interface MessageInterface
{
    public function show(string $word): string;
}
