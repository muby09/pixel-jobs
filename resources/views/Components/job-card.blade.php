@props(['job'])

<x-panel class=" flex flex-col text-center ">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8 ">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
            {{-- <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Fullstack</x-tag> --}}
        </div>

        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>
