@extends('layouts.main')
@section('content')
 <h2>All Employees</h2>
    <a href="{{route('Note.create') }}">Add Note</a>
    <table border="2">
		<tr>
        <th>#</th>
		<th>user_id</th>
		<th>Email</th>
		<th>Title</th>
		<th>content</th>
         <th>Submitted At</th>
		</tr>
		<tr>
		@forelse($note as $notes)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $notes->user_id }}</td>
                <td>{{ $notes->Email }}</td>
                <td>{{ $notes->Title }}</td>
                <td>{{ $notes->content }}</td>
                <td>{{\Carbon\Carbon::parse($notes->created_at)->format('Y-m-d D') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="9">No notes Found</td>
            </tr>
        @endforelse
    </table>
    @endsection