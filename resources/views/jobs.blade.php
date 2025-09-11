<x-layout>
    <x-slot:Heading>
        Jobs
    </x-slot:Heading>

    @foreach ($Jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <p>Salary: {{ $job['salary'] }}</p>
            <br>
        </div>
    @endforeach

</x-layout>
