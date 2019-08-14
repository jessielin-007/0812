<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/messages/" class="form-horizontal">
@csrf
<fieldset>

<!-- Form Name -->
<legend>Message Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date:</label>  
  <div class="col-md-4">
  <input id="date" name="date" value="" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastName">Detail:</label>  
  <div class="col-md-4">
  <input id="detail" name="detail" value="" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
		<button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">新增</button>
		
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>