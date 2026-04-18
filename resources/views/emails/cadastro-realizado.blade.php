<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo à HorrorWiki</title>
</head>
<body style="margin:0;padding:0;background:#09090b;font-family:Arial,Helvetica,sans-serif;color:#f4f4f5;">
    <div style="max-width:600px;margin:40px auto;background:#18181b;border:1px solid #27272a;">
        <div style="padding:32px;background:linear-gradient(135deg,#7f1d1d 0%,#18181b 45%,#09090b 100%);">
            <h1 style="margin:0;font-size:28px;color:#ffffff;">Bem-vindo à HorrorWiki</h1>
            <p style="margin:12px 0 0 0;font-size:14px;color:#e4e4e7;">
                Sua conta foi criada com sucesso.
            </p>
        </div>

        <div style="padding:32px;">
            <p style="margin:0 0 16px 0;font-size:15px;line-height:1.7;color:#d4d4d8;">
                Olá, <strong>{{ $usuario->nome_usuario }}</strong>.
            </p>

            <p style="margin:0 0 16px 0;font-size:15px;line-height:1.7;color:#d4d4d8;">
                Seu cadastro foi realizado com sucesso com o email <strong>{{ $usuario->email }}</strong>.
            </p>

            <p style="margin:0 0 24px 0;font-size:15px;line-height:1.7;color:#d4d4d8;">
                Agora você já pode entrar na plataforma, editar seu perfil e explorar a Biblioteca das Sombras.
            </p>

            <a href="{{ route('login') }}"
               style="display:inline-block;background:#b91c1c;color:#ffffff;text-decoration:none;padding:14px 22px;font-weight:bold;">
                Acessar minha conta
            </a>
        </div>

        <div style="padding:20px 32px;border-top:1px solid #27272a;color:#a1a1aa;font-size:12px;">
            HorrorWiki — Portal sombrio de histórias, relatos e fanfics.
        </div>
    </div>
</body>
</html>