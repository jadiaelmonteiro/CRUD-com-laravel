<x-Layout title="Editar Série '{{ $serie->nome }}'">
    <x-series.form :action="route('series.update')" :nome="$serie->nome" :id="$serie->id"/>
</x-Layout>