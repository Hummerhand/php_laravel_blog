<div class="border-bottom mb-3">
    <div class="d-flex justify-content-between">
        <div>
            <h2 class="h3 mb-3">
                {{ $slot }}
            </h2>
        </div>

        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>
</div>