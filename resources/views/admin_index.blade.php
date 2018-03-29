@extends('template')

@section('content')
	<div class="col-md-12">
		<ul>
			<li><a href="/admin/status/pending">Pending</li>
			<li><a href="/admin/status/approved">Approved</li>
			<li><a href="/admin/status/reject">Rejected</li>
			<li><a href="/logout">Logout</li>
		</ul>
	</div>
@stop