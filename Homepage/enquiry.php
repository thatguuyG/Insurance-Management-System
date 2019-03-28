<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class="header">
  	<h2>Enquiry</h2>
  </div>
	
  <form method="post" action="enquiry.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First name</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
      </div>
      <div class="input-group">
  	  <label>Last name</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
      </div>
  	<div class="input-group">
      <div class="text">
          Enquiry
        </div>
          <br>
          <br>

          <select name="covers" value="<?php echo $cover; ?>">
    <option value="Fire and perils">Fire and perils</option>
    <option value="Money">Money</option>
    <option value="Fidelity guarantee">Fidelity guarantee</option>
    <option value="Motor fleets">Motor fleets</option>
    <option value="Burglary/Theft">Burglary/Theft</option>
    <option value="General Property">General Property</option>
    <option value="Marine">Marine</option>
    <option value="Public liability">Public liability</option>
    <option value="Professional Indemnity">Professional Indemnity</option>
    <option value="	Directors and Officers Liability">Directors and Officers Liability</option>
    <option value="Private Motor Vehicle">Private Motor Vehicle</option>
    <option value="Farm / Rural">Farm / Rural</option>
    <option value="Home and Contents">Home and Contents</option>
    <option value="	Livestock">Livestock</option>
    <option value="Personal Valuables">Personal Valuables</option>
    <option value="Other">Others.Specify below</option>
  </select>
  <br>
  <br>

  <br>
</div>
         <div class="input-group">
        <div class="text">
          Or specify here
        </div>
        <br>


      <textarea rows="4" cols="50" name="comment" form="usrform" value="<?php echo $comment; ?>">
      Enter other Enquiries here...</textarea>



    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit Enquiry</button>
  	</div>
  </form>




  
</body>
</html>