<form action="{{ $action === 'create' ? route('todos.store') : route('todos.update', $todo['id'] ?? '') }}" method="POST" class="w-full">
    @csrf
    @if ($action === 'edit')
        @method('PUT')
    @endif
    <div class="flex items-center space-x-2">
        <input type="text" name="title" value="{{ $todo['title'] ?? '' }}" placeholder="Enter todo title" class="border-gray-300 rounded w-full p-3" required>
        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded hover:bg-blue-600">
            {{ $action === 'create' ? 'Add' : 'Update' }}
        </button>
    </div>
</form>
