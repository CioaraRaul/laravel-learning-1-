<x-layout>
    <h1>available jobs</h1>
    
    <ul>
        @forelse($jobs as $job)
            <li>{{$job}}</li>
        @empty
            <li>No jobs available</li>
        @endforelse 
    </ul>
</x-layout>


    {{-- <ul>
        @forelse($jobs as $job)
        @if($loop->first) 
            <li>First: {{$job}}</li>
        @else
            <li>{{$job}}</li>
        @endif
            {{-- <li>{{$loop->index}} - {{$job}}</li> }}
        @empty
            <li>No jobs available</li>
        @endforelse 
    </ul> --}}
