<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">
                    @isset($contacts)
                        <p class="mb-2">{{__('If you have any issues feel free to ask us with the provided means')}}: </p>
                        @foreach ($contacts as $contact)
                            <h2 class=""><b class="">- {{$contact->method}}</b></h2>
                        @endforeach
                        <p class="my-2">{{__('Alternatively just send us a message and we will be sure to respond as soon as possible')}}: </p>
                    @else
                        <p class="mb-2">{{__('If you have any issues just send us a message and we will be sure to respond as soon as possible')}}: </p>
                    @endisset

                    <form method="POST" class="border-sm border-gray-300"  action="{{ route('contact') }}">
                        @csrf

                        <label class="block text-gray-700 text-sm font-bold mt-2" for="formName">Name</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="formName" autocomplete="off">

                        <label class="block text-gray-700 text-sm font-bold mt-2"  for="formEmail">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="formEmail" autocomplete="off">

                        <label class="block text-gray-700 text-sm font-bold mt-2"  for="formNumber">Phone Number</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="phone_number" id="formNumber" autocomplete="off">

                        <label class="block text-gray-700 text-sm font-bold mt-2"  for="formQuestion">Question</label>
                        <textarea name="question" id="formQuestion" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>

                        <div class="flex flex-row align-center justify-center">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline align-center" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
