<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

	<style type="text/css">
		.list-group{
			overflow-y: scroll;
			height: 200px;
		
			border: 1px solid #ced4da;

		}
	</style>

</head>
<body>
	<div class="container">
		<div class="row" id="app">
			<div class="offset-10 col-4" style="margin-top: 61%;">
				<li class="list-group-item active">Chat Room</li>
				<ul class="list-group" v-chat-scroll>

					<message 
					v-for="value, index in chat.message" 
					:key= value.index
					:color= chat.color[index]
					:user = chat.user[index]
					>
					@{{ value }}
				</message>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
				
            </ul>
            <input type="text" name="" class="form-control" placeholder="type your message here..." v-model='message' @keyup.enter='send'>
			</div>
			
		</div>
	</div>












	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>