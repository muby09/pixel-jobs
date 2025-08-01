{{-- <x-layout>
    <x-page-heading> Jobs</x-page-heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout> --}}

<x-layout>
    <x-page-heading>All Jobs</x-page-heading>

    <div class="grid grid-cols-1 gap-4">
        @foreach ($jobs as $job)
            <x-job-card :job="$job" />
        @endforeach
    </div>
</x-layout>
