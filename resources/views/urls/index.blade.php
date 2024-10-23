<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <table>
        <thead>
            <tr>
                <th>Short URL</th>
                <th>Long URL</th>
                <th>Clicks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($urls as $url)
                <tr>
                    <td>{{ $url->short_url }}</td>
                    <td>{{ $url->long_url }}</td>
                    <td>{{ $url->clicks }}</td>
                </tr>
            @endforeach
        </tbody>
    <table>  
    
</x-guest-layout>