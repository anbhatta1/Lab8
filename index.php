<?php require_once "includes/header.php"; ?>

<h1 class="text-center mt-3">Testing.....</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <!-- Record Entry Form -->
            <form class="row g-3" method="POST" action="save_record.php">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">Province</label>
                    <select id="inputState" class="form-select" name="province" required>
                        <option value="">Choose...</option>
                        <option>Alberta</option>
                        <option>British Columbia</option>
                        <option>Manitoba</option>
                        <option>New Brunswick</option>
                        <option>Newfoundland and Labrador</option>
                        <option>Northwest Territories</option>
                        <option>Nova Scotia</option>
                        <option>Nunavut</option>
                        <option>Ontario</option>
                        <option>Prince Edward Island</option>
                        <option>Quebec</option>
                        <option>Saskatchewan</option>
                        <option>Yukon</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="inputAreaCode" class="form-label">Area Code</label>
                    <input type="text" class="form-control" id="inputAreaCode" name="areaCode" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            <!-- View Records Button -->
            <div class="mt-4">
                <a href="view_records.php" class="btn btn-info w-100">View Records</a>
            </div>

            <!-- Primary Key + Delete Buttons -->
            <div class="mt-3 d-flex">
                <form action="primary_key.php" method="GET" class="flex-fill me-2">
                    <button type="submit" class="btn btn-success w-100">Primary Key</button>
                </form>

                <form action="delete_record.php" method="POST" class="flex-fill">
                    <button type="submit" class="btn btn-danger w-100">To delete a record, click this button</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>
