<x-layout>
    <x-slot:pageheader>
        Home
    </x-slot:pageheader>
      <h1>{{ $greeting ?? 'Yo' }} from {{ $company ?? 'HussleTools' }}. {{ $speech ?? 'We are a great Company selling Digital tools online' }}.</h1>
</x-layout>
