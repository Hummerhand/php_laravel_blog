<x-form action="{{ route('blog') }}" method="get">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="search" value="{{ request()->input('search') }}" placeholder="{{ __('Поиск') }}" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-select name="category_id" value="{{ request()->input('category_id') }}" :options="$categories" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-button type="submit">
                    {{ __('Применить') }}
                </x-button>    
            </div>
        </div>
    </div>
</x-form>