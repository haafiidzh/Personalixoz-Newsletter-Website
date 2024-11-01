<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $exception->getStatusCode() === 403) {
            return response()->view('pages.administrator.errors.403', [], 403);
        }

        // BUAT CUSTOM NOT FOUND
        // if ($exception instanceof NotFoundHttpException) {
        //     return response()->view('errors.404', [], 404);
        // }

        return parent::render($request, $exception);
    }

    // DIGUNAKAN NANTI JIKA FRONTEND SUDAH JADI
    // public function render($request, Throwable $exception)
    // {
    //     if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $exception->getStatusCode() === 403) {
    //         // Cek apakah request datang dari administrator
    //         if ($request->is('administrator/*')) {
    //             return response()->view('errors.403', [], 403); // tampilan untuk administrator
    //         }

    //         // Jika tidak, berarti dari frontend
    //         return response()->view('errors.front.403', [], 403); // tampilan untuk frontend
    //     }

    //     return parent::render($request, $exception);
    // }
}
