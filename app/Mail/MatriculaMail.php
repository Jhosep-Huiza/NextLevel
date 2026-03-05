<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MatriculaMail extends Mailable
{
    use SerializesModels;

    public $datos;
    public $archivos;

    public function __construct($datos, $archivos = [])
    {
        $this->datos = $datos;
        $this->archivos = $archivos ?? [];
    }

    public function build()
    {
        $mail = $this->subject('Nueva matrícula recibida')
                     ->view('emails.matricula')
                     ->with([
                         'datos' => $this->datos
                     ]);

        // adjuntar archivos
        if (!empty($this->archivos)) {
            foreach ($this->archivos as $archivo) {

                if ($archivo && $archivo->isValid()) {

                    $mail->attach(
                        $archivo->getRealPath(),
                        [
                            'as' => $archivo->getClientOriginalName(),
                            'mime' => $archivo->getMimeType(),
                        ]
                    );

                }

            }
        }

        return $mail;
    }
}
