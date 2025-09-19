<div>
    <div class="alert alert-info" role="alert">
        Choose at least one product, and click desired extension to export.
    </div>

    <div class="d-flex justify-content-end">
        <button
            class="btn btn-success uppercase me-1"
            type="button"
            wire:click="export('csv')"
            wire:loading.attr="disabled"
            @disabled(empty($selectedProducts))
        >
            CSV
        </button>
        <button
            class="btn btn-success uppercase me-1"
            type="button"
            wire:click="export('xlsx')"
            wire:loading.attr="disabled"
            @disabled(empty($selectedProducts))
        >
            XLS
        </button>
        <button
            class="btn btn-success uppercase"
            type="button"
            wire:click="export('pdf')"
            wire:loading.attr="disabled"
            @disabled(empty($selectedProducts))
        >
            PDF
        </button>
    </div>

    <table class="table table-stripped mt-3">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>
                    <input type="checkbox" value="{{ $product->id }}" wire:model.live="selectedProducts">
                </th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>${{ $product->price }}</td>
            </tr>
        @endforeach
    </table>
</div>
