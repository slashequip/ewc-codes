@if ($url)
    <a
        href="{{ $url }}"
        class="block flex-1 bg-white rounded-lg shadow-lg hover:shadow-xl p-6 relative overflow-hidden border border-gray-100 hover:top-px flex flex-col"
    >
        <span class="absolute bottom-0 right-0 -mr-4 -mb-6 leading-none text-9xl text-green-600/10 font-bold whitespace-nowrap">{{ $identifier }}</span>
        <p class="text-sm font-medium text-green-600 relative z-10 mb-2">{{ $subTitle }}</p>
        <p class="text-3xl font-light text-gray-600 relative z-10 break-words mb-6">{{ $title }}</p>
        @if ($counter)
            <p class="mt-auto text-xs font-bold uppercase text-gray-400">{{ $counterTitle }}: {{ $counter }}</p>
        @endif
    </a>
@else
    <span class="block flex-1 bg-white rounded-lg shadow-lg p-6 relative overflow-hidden border border-gray-100 flex flex-col">
        <span class="absolute bottom-0 right-0 -mr-4 -mb-6 leading-none text-9xl text-green-600/10 font-bold whitespace-nowrap">{{ $identifier }}</span>
        <p class="text-sm font-medium text-green-600 relative z-10 mb-2">{{ $subTitle }}</p>
        <p class="text-3xl font-light text-gray-600 relative z-10 break-words mb-6">{{ $title }}</p>
        @if ($counter)
            <p class="mt-auto text-xs font-bold uppercase text-gray-400">{{ $counterTitle }}: {{ $counter }}</p>
        @endif
    </span>
@endif
