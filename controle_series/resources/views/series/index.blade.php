<x-layout title="Series">
    <a @class("btn btn-secondary mb-2") href="/series/criar">Adicionar</a>

    <ul @class("list-group")>
    @foreach ($series as $serie)
        <li @class("list-group-item")>{{ $serie }}</li>
    @endforeach
    </ul>
</x-layout>
