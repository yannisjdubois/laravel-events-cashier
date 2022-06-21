<x-app-layout>
    <div class="container mx-auto">
        <form action="{{ route('event.store') }}" method="post">
            @csrf
    
            <x-label for="title" value="Titre" />
            <x-input id="title" name="title" type="text" />

            <x-label for="content" value="Contenu" />
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
    
        </form>
    </div>

</x-app-layout>