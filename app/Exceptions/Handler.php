<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    /*public function report(Exception $exception)
    {
        parent::report($exception);
    }*/

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    // public function render($request, Exception $exception)
    // {
    //     /*Excepción para el Throttle de Sentinel de inicios de sesión fallidos */
    //     if ($exception instanceof \Cartalyst\Sentinel\Checkpoints\ThrottlingException) {
    //         /* Variable que guardará el tiempo restante que queda para volver a intenta el inicio de sesión */
    //         $remainin_time = Carbon::parse($exception->getFree())->diffForHumans();

    //         /*El máximo de intentos permitidos es de 6*/
    //         return Redirect::to('login')->with("error", "Haz superado el máximo de intentos permitidos para iniciar sesión, intenta de nuevo ".$remainin_time);
    //     }

    //     return parent::render($request, $exception);
    // }
}
