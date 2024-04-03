<x-layout breadcrumbTitle="{{ $breadcrumbTitle }}">
    <div class="col-12 mb-4">
        <div class="card rounded-12 shadow-dark-80">
            <div class="mx-5 my-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>