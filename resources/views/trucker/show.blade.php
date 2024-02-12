<x-app-layout>
    <div class="container mx-auto p-4">
        <h1>{{$trucker->id}}</h1>
        <ul>
            <li>{{$trucker->name}}</li>
            <li>{{$trucker->address}}</li>
            <li>{{$trucker->created_at->diffForHumans()}}</li>
        </ul>
        <div class="flex">
            <a href="{{route('truckers.edit',$trucker->id)}}">Edit</a>
            <form action="{{route('truckers.destroy',$trucker->id)}}" method="POST" class="ml-3">
                @csrf
                @method('DELETE')
                <x-danger-button>Delete</x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
