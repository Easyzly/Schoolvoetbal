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

    <h1>Voetbalteam Aanmaken</h1>

    <form method="post" action="{{ route('teams.store') }}">
        @csrf
    
        <label for="teamName">Teamnaam:</label>
        <input type="text" id="teamName" name="name" required>
    
        <input type="hidden" name="creator_id" value="{{ auth()->user()->id }}">
    
        <button type="submit">Aanmaken</button>
    </form>

    @if(auth()->user()->admin)
    
    
    
    @else
    <p>You don't have permission to delete a football team.</p>

    @endif

</x-app-layout>
