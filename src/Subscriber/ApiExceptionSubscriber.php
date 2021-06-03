<?php
namespace App\Subscriber;


use App\Exception\MissingArgumentException;
use App\Exception\UserNotFoundException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ApiExceptionSubscriber implements EventSubscriberInterface
{
    public function onKernelException(ExceptionEvent $e) {
        $status = 404;
        if ($e->getThrowable() instanceof UserNotFoundException) {
            $status = 404;
        } elseif ($e->getThrowable() instanceof MissingArgumentException) {
            $status = 400;
        }

        $e->setResponse(new JsonResponse(['message' => $e->getThrowable()->getMessage()], $status));
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException'
        ];
    }
}