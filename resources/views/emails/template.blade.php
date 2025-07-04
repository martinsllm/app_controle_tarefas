<x-mail::message>
    # Introdução

    O corpo da sua mensagem.

    <x-mail::button :url="''">
        Botão de Texto
    </x-mail::button>

    Obrigado,<br>
    {{ config('app.name') }}
</x-mail::message>