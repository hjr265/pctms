@extends('admin.layouts.default')

{{-- Content --}}
@section('content')
{{Form::open(array('url' => 'admin/users/create', 'method' =>'POST' , 'class' => "form-horizontal"))}}
<!-- Tab panes -->
<div class="panel panel-default">
	<div class="panel-heading">Basic Info</div>
	<div class = "panel-body">
		<div class="form-group">
			<label class="col-md-2 control-label" for="fullname">Full Name</label>
			<div class="col-md-10">
				{{form::text('fullname', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="username">User Name</label>
			<div class="col-md-10">
				{{form::text('username', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="email">Email</label>
			<div class="col-md-10">
				{{form::text('email', null, array('id' => 'email', 'class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="password">Password</label>
			<div class="col-md-10">
				{{ Form::password('password', array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="password_confirmation">Password Confirm</label>
			<div class="col-md-10">
				{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="confirm">Activate User?</label>
			<div class="col-md-4">
				{{ Form::select('confirm', array('1' => 'Yes', '2' => 'No'),'1',array('class' => 'form-control')) }}
			</div>
		</div>



		<div class="form-group {{{ $errors->has('roles') ? 'error' : '' }}}">
			<label class="col-md-2 control-label" for="roles">Roles</label>
			<div class="col-md-6">
				<select class="form-control" name="roles[]" id="roles[]" multiple>
					@foreach ($roles as $role)
					<option value="{{{ $role->id }}}"{{{ ( in_array($role->id, $selectedRoles) ? ' selected="selected"' : '') }}}>{{{ $role->name }}}</option>
					@endforeach
				</select>

				<span class="help-block">
					Select a group to assign to the user, remember that a user takes on the permissions of the group they are assigned.
				</span>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">Contest Related Information</div>
	<div class = "panel-body">
		<div class="form-group">
			<label class="col-md-2 control-label" for="cf_handle">Codeforces Handle</label>
			<div class="col-md-10">
				{{form::text('cf_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="cc_handle">Codechef Handle</label>
			<div class="col-md-10">
				{{form::text('cc_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="cm_handle">Codemarshal Handle</label>
			<div class="col-md-10">
				{{form::text('cm_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="tc_handle">Topcoder Handle</label>
			<div class="col-md-10">
				{{form::text('tc_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="loj_handle">Lightoj Handle</label>
			<div class="col-md-10">
				{{form::text('loj_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="uva_handle">UvA Handle</label>
			<div class="col-md-10">
				{{form::text('uva_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="spoj_handle">SPOJ Handle</label>
			<div class="col-md-10">
				{{form::text('spoj_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="spoj_handle">SGU Handle</label>
			<div class="col-md-10">
				{{form::text('sgu_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label" for="hustoj_handle">HustOJ Handle</label>
			<div class="col-md-10">
				{{form::text('hustoj_handle', null, array('class' => "form-control"))}}
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-success">Create</button>
		<button type="reset" class="btn btn-default">Clear</button>
		<element class="btn-cancel close_popup">Cancel</element>
	</div>
</div>
{{form::close()}}
@stop