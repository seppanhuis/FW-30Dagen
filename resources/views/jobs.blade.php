<x-layout>
    <x-slot:Heading>
        Job Listings
    </x-slot:Heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
