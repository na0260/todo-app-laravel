<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-4">Todo List</h1>

                @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <x-todo-form />

                <h2 class="text-xl font-semibold my-4">My Todos</h2>
                <x-todo-list :todos="$todos" />
            </div>
        </div>
    </div>
</x-app-layout>
