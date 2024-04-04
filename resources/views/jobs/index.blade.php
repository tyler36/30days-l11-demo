<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a
                href="/jobs/{{ $job['id'] }}"
                class="block px-4 py-6 border border-gray-200 rounded-lg"
            >
                <div class="text-sm font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <span class="font-bold">{{ $job['title'] }}</span>: Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div class="">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
