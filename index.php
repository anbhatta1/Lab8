<?php require_once "./includes/header.php" ?>
    <h1>Testing...</h1>
    <div class="container">
        <div class = "row justify-content-center">
            <div class=col-mid-18>
<form class="row g-3" method=POST action=receive.php>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name=email requied>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name=address required>
  </div>
 
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name=city required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Province</label>
    <select id="inputState" class="form-select" name=province required>
      <option selected disabled>choose...</option>
      <option>Alberta
</option>
<option> British Columbia</option>
<option>Manitoba</option>
<option>New Brunswick</option>
<option>Newfoundland and LabradorNorthwest Territories</option>
<option>Nova Scotia</option>
<option>Nunavut</option>
<option>Ontario</option>
<option> Prince Edward IslandQuebec</option>
<option>Saskatchewan</option>
<option> Yukon</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Postal Code</label>
    <input type="text" class="form-control" id="inputZip" name=postal_code required>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
                    <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
        </div>
    </div>
</div>

</form>
<form action="delete.php" method="POST" style="display:flex; width:100%; margin-top:20px;">

    <!-- Primary Key Field -->
    <input 
        type="text" 
        name="client_id" 
        placeholder="Primary Key" 
        required
        style="background-color:#d4edda; padding:12px; flex:1; border:none; text-align:center;"
    >

    <!-- Delete Button -->
    <button 
        type="submit" 
        name="delete"
        style="background-color:red; color:white; padding:12px; flex:2; border:none; font-weight:bold;"
    >
         click this button to delete record
    </button>

</form>
<?php require_once "./includes/footer.php" ?>