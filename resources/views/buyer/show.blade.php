<x-app-layout>
    <div class="container mx-auto p-4">
        <h1>{{$buyer->code_name}}</h1>
        <ul>
            <li>{{$buyer->name}}</li>
            <li>{{$buyer->address}}</li>
            <li>{{$buyer->created_at->diffForHumans()}}</li>
        </ul>
        <div class="flex">
            <a href="{{route('buyers.edit',$buyer->id)}}">Edit</a>
            <form action="{{route('buyers.destroy',$buyer->id)}}" method="POST" class="ml-3">
                @csrf
                @method('DELETE')
                <x-danger-button>Delete</x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
