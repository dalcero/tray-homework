@component('mail::message')

@component('mail::panel')
    <h1>Olá, {{ $seller['name'] }}</h1>
    <h3>Seu relatório de Vendas do dia {{ date('d/m/Y') }} está disponível:</h3>
@endcomponent

@foreach ($seller['sales'] as $sale)
    Venda Nº {{ $sale['id'] }} as {{ $sale['time'] }}h - Total: {{ $sale['total'] }} | Comissão: {{ $sale['commission'] }}
@endforeach

    TOTAL DAS VENDAS: {{ $seller['total'] }}
@endcomponent
