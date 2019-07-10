<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<form method="post" action="/notifications/{{$notification->id}}" class="form-horizontal">
      @csrf
      @method('PUT')
      <fieldset>
      
      <!-- Form Name -->
      <legend>Create Notification</legend>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="firstName">first name</label>  
        <div class="col-md-4">
        <input id="first_name" name="first_name" type="text" placeholder="first" class="form-control input-md" required="" value="{{$notification->first_name}}">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="lastName">last name</label>  
        <div class="col-md-4">
        <input id="last_name" name="last_name" type="text" placeholder="last" class="form-control input-md" required="" value="{{$notification->last_name}}">
          
        </div>
      </div>
      
      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="createBtn"></label>
        <div class="col-md-8">
          <button id="createBtn" name="createBtn" class="btn btn-success">Edit</button>
          <button id="cancelBtn" name="cancelBtn" class="btn btn-danger">Cancel</button>
        </div>
      </div>
      
      </fieldset>
      </form>

</div> <!-- End of container -->

</body>
</html>
