<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3 flex justify-between">
                    @isset($ads)
                        <p class="self-center">
                            Showing ads: {{$ads->count()}}
                        </p>
                    @endisset
                    @auth
                    <a href="{{ route('ads_create') }}" class="self-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline align-center">
                        Create an ad
                    </a>
                    @endauth
                </div>
                <div class="m-3 grid grid-cols-2 gap-3">
                    @isset($ads)
                        @foreach ($ads as $ad)
                            <div class="overflow-auto">
                                <a href="{{ url('/ads/' . $ad->id) }}" class="">
                                    <h2 class="bold"><b class="">{{$ad->title}}</b></h2>
                                </a>
                                <p class="">{{$ad->description}}</p>
                                <p class="">By: <b class="">{{$ad->name}}</b></p>
                            </div>
                        @endforeach
                        <div class="col-span-2">{{ $ads->links() }}</div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
