<x-layout>
    <x-slot:Heading>
        Job
    </x-slot:Heading>

    <h2><strong>{{ $job['title'] }}</strong></h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
    <br>
    <p>
        <x-button href="/jobs">Back to all jobs</x-button>
        <x-button href="/jobs/{{ $job['id'] }}/edit">Edit job</x-button>
        
    </p>


</x-layout>
