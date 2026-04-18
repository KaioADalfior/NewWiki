<?php

namespace App\Mail;

use App\Models\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CadastroRealizadoMail extends Mailable
{
    use Queueable, SerializesModels;

    public Usuario $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function build(): self
    {
        return $this
            ->subject('Bem-vindo à HorrorWiki')
            ->view('emails.cadastro-realizado');
    }
}