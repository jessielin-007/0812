<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Hw</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	{{-- <script src="/scripts/jquery-1.9.1.min.js"></script>
	<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="styles.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
</head>

<body>

		{{-- <div class="form-group">
				<label class="col-md-4 control-label" for="singlebutton">Single Button</label>
				<div class="col-md-4">
				  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
				</div>
			  </div>
<div data-role="page" data-theme="c"> --}}


<div class="container">
		<div data-role="header">
				<h2> 公告系統 </h2><h1><a href="/messages" class="btn btn-md btn-success pull-right"> 後台</a></h2>
			</div>
			
				<table class="table" >
						<thead class="thead-light">
						  <tr>
							<th scope="col">#</th>
							<th scope="col">編號:</th>
							<th scope="col">日期:</th>
							<th scope="col">內容:</th>
						  </tr>
						</thead>
						<tbody>
						@foreach ($messageList as $msg)
						  <tr>
							<th scope="row">{{$msg->messageId}}</th>
							<td>{{$msg->messageId}}</td>
							<td>{{$msg->messageDate}}</td>
							<td>{{$msg->messageDetail}}</td>
						@endforeach
						</tbody>
					  </table>
</div>

</body>

</html>