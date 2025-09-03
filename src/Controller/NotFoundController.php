<?php
namespace App\Controller;

class NotFoundController implements Controller
{
    public function render(): void
    {
        include __DIR__ . '/../View/notFound.phtml';
    }
}