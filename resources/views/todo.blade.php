<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div>
        <form action="{{ url('todos') }}" method="POST">
            @csrf
            <div>
                <label>ToDo</label>
            </div>
            <div>
                <input type="text" name="name">
            </div>

            <div>
                <button type="submit">Add Task</button>
            </div>
        </form>
    </div>

    <hr>

    @if (count($todos) > 0)
        @foreach ($todos as $todo)
            <div>
                {{ $todo->name }}
                <form action="{{ url('todos/'.$todo->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Done</button>
                </form>
            </div>
        @endforeach
    @endif
</x-app-layout>
