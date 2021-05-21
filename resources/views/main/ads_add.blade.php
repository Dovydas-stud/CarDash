<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" class="m-3 border-sm border-gray-300"  action="{{ route('ads_create') }}">
                    @csrf

                    <label class="block text-gray-700 text-sm font-bold mt-2" for="formTitle">Title</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" id="formTitle" autocomplete="off">

                    <label class="block text-gray-700 text-sm font-bold mt-2"  for="formDescription">Description</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="formDescription" cols="30" rows="10" autocomplete="off"></textarea>

                    <div class="flex flex-row align-center justify-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline align-center" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
