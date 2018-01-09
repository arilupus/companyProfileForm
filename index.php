<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sociolla - Contact Us</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    $warningClassNama = $warningIconNama = $warningClassDesc = $warningIconDesc = $warningClassStreet = $warningIconStreet = $warningClassPostalCode = $warningIconPostalCode = $warningClassProvince = $warningIconProvince = $warningClassCity = $warningIconCity = "";
    $nama = $desc = $address = $street = $city = $province = $postalCode = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nama"])) {
        $nama = "*Name should be filled";
        $warningClassNama = "has-warning has-feedback";
        $warningIconNama = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $nama = $warningClassNama = $warningIconNama = "";
      }
      if (empty($_POST["desc"])) {
        $desc = "*Description should be filled";
        $warningClassDesc = "has-warning has-feedback";
        $warningIconDesc = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $desc = $warningClassDesc = $warningIconDesc = "";
      }
      if (empty($_POST["street"])) {
        $street = "*Street should be filled";
        $warningClassStreet = "has-warning has-feedback";
        $warningIconStreet = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $street = $warningIconStreet = $warningClassStreet = "";
      }
      if (empty($_POST["city"])) {
        $city = "*City should be filled";
        $warningClassCity = "has-warning has-feedback";
        $warningIconCity = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $city = $warningIconCity = $warningClassCity = "";
      }
      if (empty($_POST["postalCode"])) {
        $postalCode = "*Postal Code should be filled";
        $warningClassPostalCode = "has-warning has-feedback";
        $warningIconPostalCode = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $postalCode = $warningIconPostalCode = $warningClassPostalCode = "";
      }
      if ($_POST["province"] == "notSelected") {
        $province = "*Province should be selected";
        $warningClassProvince = "has-warning has-feedback";
        $warningIconProvince = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $province = $warningIconProvince = $warningClassProvince = "";
      }
      if (!(empty($_POST["nama"])) && !(empty($_POST["desc"])) && !(empty($_POST["street"])) && !(empty($_POST["city"])) && !(empty($_POST["postalCode"])) && $_POST["province"] <> "notSelected") {
        echo "<script type='text/javascript'>alert('Thank you. Your Company Profile Submitted');</script>";
      }
    }
  ?>
  <div class="container-fluid">
    <div class="row header">
      <div class="col-md-4 col-sm-4 col-xs-4">
        <div class="logo">LOGO</div>
      </div>
    </div>
    <div class="row">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="form-group <?php echo $warningClassNama; ?>">
            <label for="nama">Name</label>
            <span class="err"><?php echo $nama; ?></span>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>" placeholder="Name">
            <?php echo $warningIconNama; ?>
          </div>
          <div class="form-group <?php echo $warningClassDesc; ?>">
            <label for="desc">Description</label>
            <span class="err"><?php echo $desc; ?></span>
            <textarea name="desc" id="desc" class="form-control" rows="4"><?php echo isset($_POST['desc']) ? $_POST['desc'] : '' ?></textarea>
            <?php echo $warningIconDesc; ?>
          </div>
          <fieldset>
            <legend>Address</legend>
            <div class="form-group <?php echo $warningClassStreet; ?>">
              <label for="street">Street</label>
              <span class="err"><?php echo $street; ?></span>
              <input type="text" class="form-control" id="street" name="street" value="<?php echo isset($_POST['street']) ? $_POST['street'] : '' ?>" placeholder="Street">
              <?php echo $warningIconStreet; ?>
            </div>
            <div class="form-group <?php echo $warningClassCity; ?>">
              <label for="city">City</label>
              <span class="err"><?php echo $city; ?></span>
              <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" placeholder="City">
              <?php echo $warningIconCity; ?>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group <?php echo $warningClassProvince; ?>">
                  <label for="province">Province</label>
                  <span class="err"><?php echo $province; ?></span>
                  <select class="form-control" name="province" id="province">
                    <option value="notSelected">Province</option>
                    <option value="Padang">Padang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Bali">Bali</option>
                    <option value="Lombok">Lombok</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group <?php echo $warningClassPostalCode; ?>">
                  <label for="postalCode">Postal Code</label>
                  <span class="err"><?php echo $postalCode; ?></span>
                  <input type="text" class="form-control" id="postalCode" name="postalCode" value="<?php echo isset($_POST['postalCode']) ? $_POST['postalCode'] : '' ?>" placeholder="Postal Code">
                  <?php echo $warningIconPostalCode; ?>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="submit-and-cancel">
          <button type="submit" class="btn btn-default">Submit</button>
          <button type="button" class="btn btn-default">Cancel</button>
        </div>
      </form>
      <form method="post" action="ask_form.php">
        <div class="col-md-6 col-sm-6 col-xs-6">
          <fieldset>
            <legend>Ask Us</legend>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="form-group <?php echo $warningClass; ?>">
                  <label for="Division">Division</label>
                  <select class="form-control" name="division">
                    <option value="notSelected">Division</option>
                    <option value="technology">Technology</option>
                    <option value="marketing">Marketing</option>
                    <option value="design">Design</option>
                    <option value="editorial">Editorial</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group <?php echo $warningClassAskName; ?>">
              <label for="askName">Name</label>
              <input type="text" class="form-control" id="askName" name="askName" placeholder="Name">
              <?php echo $warningIconAskName; ?>
            </div>
            <div class="form-group <?php echo $warningClassAskDesc; ?>">
              <label for="askDesc">Description</label>
              <textarea name="askDesc" id="askDesc" class="form-control" rows="4"></textarea>
              <?php echo $warningIconAskDesc; ?>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Send</button>
          </fieldset>
        </div>
      </form>
    </div>
  </div>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>