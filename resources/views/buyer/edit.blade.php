
<x-app-layout>
    <div class="container">
            <div class="basis-1/4 p-4 border">
                <h3>Update Buyer</h3>
                <form action="{{route('buyers.update',$buyer->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div>
                        <x-input-label for="code_name">Code Name</x-input-label>
                        <x-text-input type="text" id="code_name" name="code_name" value="{{old('code_name',$buyer->code_name)}}" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('code_name')" />
                    </div>

                    <div>
                        <x-input-label for="name">Name</x-input-label>
                        <x-text-input type="text" id="name" name="name" value="{{old('name',$buyer->name)}}" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="address">Address</x-input-label>
                        <x-text-input type="text" id="address" name="address" value="{{old('address',$buyer->address)}}" class="w-full"/>
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    <div class="flex flex-row-reverse items-end mt-1">
                        <x-primary-button type="submit">Update</x-primary-button>
                    </div>

                </form>
            </div>

    </div>
</x-app-layout>
