<x-layout title="Nova Serie">
    <form action="" method="POST">
        <div @class("mb-3")>
            <label @class("form-label") for="nome">Nome:</label>
            <input @class("form-control") type="text" name="nome" id="nome">
        </div>
        <button type="submit" @class("btn btn-secondary")>Enviar</button>
    </form>
</x-layout>
