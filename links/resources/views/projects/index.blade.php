@extends('layout')

@section('content')
<a href="/projects/create" class="btn btn-primary pull-right">Add project</a>
<div class=" text-center">
	
  <h1>Projects</h1>

  @foreach ($projects as $project)
  	<li>{{ $project->title }}</li>
  @endforeach
</div>
  

@endsection
