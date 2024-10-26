<x-layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="p-5"></div>
    <h1>Welcome {{ auth()->user()->email }}</h1>
</x-layout>
