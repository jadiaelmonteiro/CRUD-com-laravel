<x-Layout title="Nova série">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false"/>
</x-Layout>