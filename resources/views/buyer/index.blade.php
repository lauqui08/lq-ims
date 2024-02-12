<x-app-layout>
    <div class="container">
        <div class="flex flex-row">
            <div class="basis-1/4 p-4 border">
                <h3>Add Buyer</h3>
                <form action="{{route('buyers.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <x-input-label for="code_name">Code Name</x-input-label>
                        <x-text-input type="text" id="code_name" name="code_name" value="{{old('code_name')}}" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('code_name')" />
                    </div>

                    <div>
                        <x-input-label for="name">Name</x-input-label>
                        <x-text-input type="text" id="name" name="name" value="{{old('name')}}" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="address">Address</x-input-label>
                        <x-text-input type="text" id="address" name="address" value="{{old('address')}}" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    <div class="flex flex-row-reverse items-end mt-1">
                        <x-primary-button type="submit">Submit</x-primary-button>
                    </div>

                </form>
            </div>
            <div class="basis-1 p-4">
                <h3>Buyer Lists</h3>
                <table class=" table-auto border border-slate-500 border-separate border-spacing-2">
                    <thead>
                    <tr>
                        <th class="border border-slate-500 border-separate border-spacing-2">Code</th>
                        <th class="border border-slate-500 border-separate border-spacing-2">Name</th>
                        <th class="border border-slate-500 border-separate border-spacing-2">Address</th>
                        <th class="border border-slate-500 border-separate border-spacing-2">Menu</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($buyers as $buyer)
                        <tr>
                            <td class="border border-slate-500 border-separate border-spacing-2">{{$buyer->code_name}}</td>
                            <td class="border border-slate-500 border-separate border-spacing-2">{{$buyer->name}}</td>
                            <td class="border border-slate-500 border-separate border-spacing-2">{{$buyer->address}}</td>
                            <td class="border border-slate-500 border-separate border-spacing-2">
                                <div>
                                    <a href="{{route('buyers.show',$buyer->id)}}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">View</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                    {{$buyers->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

