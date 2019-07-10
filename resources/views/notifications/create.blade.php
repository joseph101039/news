<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <form method="post" action="/notifications" class="form-horizontal">
      @csrf
      <fieldset>
      
      <!-- Form Name -->
      <legend>Create New Notification</legend>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="title">Title</label>  
        <div class="col-md-4">
        <input id="title" name="title" type="text" placeholder="title" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Description">Description</label>  
        <div class="col-md-4">
        <input id="description" name="description" type="text" placeholder="description" class="form-control input-md" required="">
          
        </div>
      </div>
      
      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="createBtn"></label>
        <div class="col-md-8">
          {{-- <button id="createBtn" type="submit" name="Btn" value="create" class="btn btn-success">Create</button>
          <button id="cancelBtn" type="submit" name="Btn" value="cancel"  class="btn btn-danger">Cancel</button> --}}


          <button id="createBtn" type="submit" name="Btn" class="btn btn-success">Create</button>
          <a href="/notifications" class="btn btn-danger"> Cancel</a>{{-- or set type as button and trigger onclick event --}}


        </div>
      </div>
      
      </fieldset>
      </form>

</div> <!-- End of container -->

</body>
</html>
