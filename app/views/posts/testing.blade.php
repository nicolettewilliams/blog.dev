<form name="contactform" method="post" action="">
 
  <label for="first_name">First Name *</label>
  <input  type="text" name="first_name" maxlength="50" size="30" class="form-control">
 
 
 
  <label for="last_name">Last Name *</label>
  <input  type="text" name="last_name" maxlength="50" size="30" class="form-control">
 
  <label for="email">Email Address *</label>
  <input  type="text" name="email" maxlength="80" size="30" class="form-control">
 
 
 
  <label for="telephone">Telephone Number</label>
  <input  type="text" name="telephone" maxlength="30" size="30" class="form-control">
 
 
 
  <label for="comments">Comments *</label>
  <textarea  name="comments" maxlength="1000" cols="25" rows="6" class="form-control"></textarea>

  <input type="submit" value="Submit">   <a href="http://nicolettewilliams.com/email_form.php">Email Form</a>
 
</form>

<form class="form-horizontal" role="form" method="post" action="/sendEmail">
    <div class="form-group">
        <label for="first_name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="">
        </div>
    </div>

    <div class="form-group">
        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="First Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="telephone" class="col-sm-2 control-label">telephone</label>
        <div class="col-sm-10">
            <input type="telephone" class="form-control" id="telephone" name="telephone" placeholder="telephone" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="comments" class="col-sm-2 control-label">comments</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="comments"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>