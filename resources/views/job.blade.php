<x-layout>
    <x-slot:Heading>
        Job
    </x-slot:Heading>

    <h2><strong>{{ $job['title'] }}</strong></h2>
    <p>
        This job pays {{$job['salary']}} per year.
    </p>

</x-layout>
