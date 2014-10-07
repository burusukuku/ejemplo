<h1> Users</h1>

@if(count($users) > 0)
	<ul>
		@foreach ($users as $user)
			<li>{{ $user->real_name }}  - {{ $user->email }}</li>
		@endforeach
	</ul>
@else
	Todavía no hay ningún usuario registrado
@endif