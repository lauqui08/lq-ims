<x-app-layout>
    <div class="container">
        <div class="flex flex-row">
            <div class="basis-1/4 p-4 border">
                <h3>Add Trucker</h3>
                <form action="{{route('truckers.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <x-input-label for="name">Name</x-input-label>
                        <x-text-input type="text" id="name" name="name" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="address">Address</x-input-label>
                        <x-text-input type="text" id="address" name="address" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    <div class="flex flex-row-reverse items-end mt-1">
                        <x-primary-button type="submit">Submit</x-primary-button>
                    </div>

                </form>
            </div>
            <div class="basis-1 p-4">
                <h3>Trucker Lists</h3>
                <table class="border border-slate-500 border-separate border-spacing-2">
                    <thead>
                        <tr>
                            <th class="border border-slate-500 border-separate border-spacing-2">Trucker Name</th>
                            <th class="border border-slate-500 border-separate border-spacing-2">Address</th>
                            <th class="border border-slate-500 border-separate border-spacing-2">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($truckers as $trucker)
                            <tr>
                                <td class="border border-slate-500 border-separate border-spacing-2">{{$trucker->name}}</td>
                                <td class="border border-slate-500 border-separate border-spacing-2">{{$trucker->address}}</td>
                                <td class="border border-slate-500 border-separate border-spacing-2">
                                    <div>
                                        <a href="{{route('truckers.show',$trucker->id)}}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">View</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$truckers->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
