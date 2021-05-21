<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('submitedQuestion'))
                    <div class="alert alert-success">
                        {{ __('Thank you for your feedback!') }}
                    </div>
                @endif
                <div class="m-5">
                    <p class="text-xl">Welcome to <b>CarDash</b></p>
                    <p class="text-lg">A simple but yet effective and usable car club site!</p>
                </div>
                <div class="m-5 p-3 pt-5">
                    <h2 class="text-xl"><b>We offer</b></h2>
                    <p class="text-lg">Quick setup and search for all kind sof car related ads for customers</p>
                    <p class="text-lg">Just with a simple registration you can set up your own ad for everyone to see!</p>
                </div>
                @isset($ads)
                    <div class="m-5 pt-5">
                        <p class="text-xl">Latest ads:</p>
                        <div class="m-3 grid grid-cols-2 gap-3">
                            @foreach ($ads as $ad)
                                <div class="overflow-auto">
                                    <h2 class="bold"><b class="">{{$ad->title}}</b></h2>
                                    <p class="">{{$ad->description}}</p>
                                    <p class="">By: <b class="">{{$ad->name}}</b></p>
                                </div>
                            @endforeach
                        </div>
                        <p class="text-lg">Find more ads <a class="text-blue-500" href="{{ route('ads') }}">Here</a></p>
                    </div>
                @endisset
            </div>
        </div>
    </div>
</x-app-layout>
