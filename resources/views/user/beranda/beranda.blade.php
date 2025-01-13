<x-app-layout>
    <div class="jumbotron mb-24">
        @include('user.beranda.section-jumbotron')
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach (['tentang-kami', 'promo-kami', 'pelayanan-kami', 'blog'] as $index => $section)
            <div class="{{ $section === 'blog' ? 'mb-12' : 'mb-24' }}">
                @include("user.beranda.section-{$section}")
            </div>
        @endforeach
    </div>
</x-app-layout>
