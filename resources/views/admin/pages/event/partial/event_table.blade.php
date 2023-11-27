{{-- <div class="row">
    <div class="form-group col-lg-5">
        <label for="category_filter">Filter by Category:</label>
        <select class="form-control select category_filter" id="category_filter">
            <option value="">All</option>
            @foreach ($event_categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="table-responsive col-lg-12">
        <table class="table datatable-scroll-y data_event mt-2 mb-4 border pt-2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->start_date }}</td>
                        <td>{{ $event->start_time }}</td>
                        <td>{{ $event->eventCategory->name ?? 'No Category' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}


<div class="table-responsive col-lg-12">
    <table id="" class="table datatable-scroll-y data_event mt-2 mb-4 border pt-2 events_table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->start_date }}</td>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->eventCategory->name ?? 'No Category' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
