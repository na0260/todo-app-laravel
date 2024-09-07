@if (count($todos) > 0)
    <ul class="space-y-4">
        @foreach ($todos as $todo)
            <li class="bg-white shadow rounded p-4 flex justify-between items-center">
                <x-todo-form :todo="$todo" action="edit" />

                <form action="{{ route('todos.destroy', $todo['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 ml-2">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p class="text-gray-500 mt-4">No todos available.</p>
@endif
