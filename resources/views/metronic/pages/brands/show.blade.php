<x-admin-app-layout>
    <div class="py-5">
        <div class="container mx-auto px-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-4">
                        <p><strong>ID:</strong> {{ $brand->id }}</p>
                        <p><strong>Name:</strong> {{ $brand->name }}</p>
                        <p><strong>Status:</strong> {{ $brand->status == 1 ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Created At:</strong> {{ $brand->created_at->format('F j, Y, g:i a') }}</p>
                        <p><strong>Last Updated:</strong> {{ $brand->updated_at->format('F j, Y, g:i a') }}</p>
                        @if ($brand->media)
                            <p><strong>Image:</strong></p>
                            <img src="{{ noImage() }}" class="img-fluid img-thumbnail lazyload"
                                data-src="{{ Storage::url($brand->media->file_name) }}" alt="{{ $brand->name }}"
                                style="height: 200px;">
                        @endif
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.brands.index') }}" class="text-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
