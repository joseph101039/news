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
        <label class="col-md-4 control-label" for="title">Title</label>  
        <div class="col-md-4">
        <input id="title" name="title" type="text" placeholder="title" class="form-control input-md" required="" value="{{$notification->title}}">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Description">Description</label>  
        <div class="col-md-4">
        <input id="description" name="description" type="text" placeholder="last" class="form-control input-md" required="" value="{{$notification->description}}">
          
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
