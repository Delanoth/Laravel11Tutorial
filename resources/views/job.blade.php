<x-Layout>
    <x-slot:heading>
        job
    </x-slot:heading>
 
    <strong><h2>{{ $job['title'] }}</h2></strong>
    <p>
        this job pays {{ $job['salary']}} per year.
    </p>
</x-Layout>