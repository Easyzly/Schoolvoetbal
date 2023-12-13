    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Voetbalteam Aanmaken:</h1>
                    <p style="background-color: snow; height: 5px"></p>
                    <br>
                    <form method="post" action="{{ route('teams.store') }}">
                        <label for="teamName">Teamnaam:</label>
                        <input type="text" id="teamName" name="name" required>
                    
                        <input type="hidden" name="creator_id" value="{{ auth()->user()->id }}">
                        <br>
                        <button type="submit">Aanmaken</button>
                    </form>

                    <br>
                    <p style="background-color: snow; height: 5px"></p>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->user()->admin)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->points }}</td>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>
    @endif

                    

</x-app-layout>
