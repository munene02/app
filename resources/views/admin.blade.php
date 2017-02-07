@extends('layout')

@section('content')
	<div class="header header-filter" style="background-image: url('assets/img/bg3.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">

					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container" id="app">
	            <div class="title">
	                <h2>Management</h2>
	            </div>
	            <div class="row">
					@include('nav')
					<div class="col-md-offset-1">
						<h3>Add Free Tips</h3>
						<form action="/addfree" method="POST" role="form" class="col-md-6">
							{!! csrf_field() !!}
							@if(count($errors) > 0)
				        		<div class="alert alert-danger">
				        			<ul>
				        				@foreach($errors->all() as $error)
				        				<li>{{ $error }}</li>
				        				@endforeach
				        			</ul>
				        		</div>
				    		@endif
							<div class="col-sm-4">
								<div class="form-group label-floating">
									<label class="control-label">Competition</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</form>
					</div>	
		        </div>  
		        <div id="root">
		        	<!-- <span class="label label-primary:red">Title</span>
		        	<input type="text" v-model="newName" ><button @click="addName" :title="title">Add Name</button>
		        	<ul>
		        		<li v-for="name in names" v-text="name"></li>
		        	</ul>

		        	<ul>
		        		<li v-for="task in tasks"><input type="checkbox" v-model="task.completed"/>@{{ task.description }}</li>
		        	</ul>
					<h1>Incompleted</h1>
		        	<ul>
		        		<li v-for="task in incompletedTasks" v-text="task.description"></li>
		        	</ul>
		        	<h1>Completed</h1>
		        	<ul>
		        		<li v-for="task in completedTasks" v-text="task.description"></li>
		        	</ul> -->

		        	<!-- <task-list></task-list> -->

		        	<div id="root" class="container">
		        		

		        	</div>

		        </div>  
	        </div>
	    </div>
	</div> 

@endsection

@section('scripts')
<script type="text/javascript" src="/js/vue.js"></script>
@endsection