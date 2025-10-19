<?php

namespace App\Exceptions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
        // If route not found (404)
        if ($exception instanceof NotFoundHttpException) {
            // Redirect to login with error message
            return redirect('/login')->with('error', 'Please enter valid URL');
        }

        return parent::render($request, $exception);
    }



}
