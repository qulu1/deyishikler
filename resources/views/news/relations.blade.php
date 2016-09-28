@foreach($roles as $role)

	<h1>{{ $role->role_name }}</h1>
	
	<strong>People:</strong>
	
	<ul>
		@foreach($role->users as $user)
			<li> {{ $user->name }} </li>
		@endforeach
	</ul>


@endforeach

<h2>Other part</h2>

@foreach($users as $user)

<h4> {{ $user->name.' : '.$user->role->role_name }} </h4>

@endforeach	



@foreach($news as $xeber)

<h3> {{ $xeber->news_title  }} </h3>

@endforeach	