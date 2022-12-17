@component('mail::message')

#  Criação de série: {{$nomeSerie}}

A série de nome {{$nomeSerie}} com {{$qtdTemporadas}} temporadas e {{$episodiosPorTemporada}} episódios foi criada.

Acesse aqui: 

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
Ver Série
@endcomponent

@endcomponent('mail::message')
