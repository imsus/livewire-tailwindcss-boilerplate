@section('title')
  <title>{{ $title }}</title>
@endsection

<div class="min-h-screen flex items-center justify-center antialiased text-center leading-tight">
  <div>
    <div wire:loading.class="hidden" class="text-6xl font-black mb-8 max-w-2xl">{{ $title }}</div>
    <div wire:loading class="text-6xl font-black mb-8 max-w-2xl">loading...</div>
    <div class="flex justify-center -mx-3">
      <button wire:loading.attr="disabled" wire:click="randomize" class="font-medium h-12 mx-3 inline-flex items-center px-8 text-lg shadow-lg border-2 border-teal-500 text-teal-500 rounded focus:outline-none focus:shadow-outline focus:opacity-75">Surprise Me</button>
      <a target="_blank" href="https://github.com/imsus/livewire-tailwindcss-boilerplate" class="font-medium h-12 mx-3 inline-flex items-center px-8 text-lg shadow-lg bg-teal-500 text-white rounded focus:outline-none focus:shadow-outline focus:opacity-75" href="">Get Started</a>
    </div>
  </div>
</div>
