
<div class="container">
    <h1>Documents</h1>
    <form action="{{ route('documents') }}" method="GET">
        <input type="text" name="query" value="{{ $query }}" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Download</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($documents as $document)
            <tr>
                <td>{{ $document->name }}</td>
                <td><a href="{{ route('download', $document->name) }}">Download</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
