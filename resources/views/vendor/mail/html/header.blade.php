@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Controle de Tarefas')
                <img src="https://laravel.com/img/notification-logo.png" class="logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>