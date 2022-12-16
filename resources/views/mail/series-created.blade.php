@component('mail::message')

#  Criada

A série de nome {{$nomeSerie}} com {{$qtdTemporadas}} temporadas e {{$episodiosPorTemporada}} episódios.

Acesse aqui: 

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
Ver Série
@endcomponent

@endcomponent('mail::message')
