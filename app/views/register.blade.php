{{Form::open(array('url'=>'user/create'))}}
	<p>
		{{Form::label('username:')}}
		{{Form::text('username')}}
	</p>
	<p>
		{{Form::label('email:')}}
		{{Form::text('email')}}
	</p>
	<p>
		{{Form::label('gender:')}}
		{{Form::text('gender')}}
	</p>
	<p>
		{{Form::label('password:')}}
		{{Form::text('password')}}
	</p>
	<p>
		{{Form::submit('submit')}}
	</p>
{{Form::close()}}