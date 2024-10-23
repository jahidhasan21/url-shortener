<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('urls.store') }}">
        @csrf
        <input type="url" name="long_url" placeholder="Enter your long URL" required>
        <button type="submit">Shorten URL</button>

    </form>
</x-guest-layout>
