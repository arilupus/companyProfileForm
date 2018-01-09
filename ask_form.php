  <?php
    $warningClassAskName = $warningIconAskName = $warningClassAskDesc = $warningIconAskDesc = "";
    $askName = $askDesc = $askResult = "";
    if(isset($_POST['submit'])){
      if (empty($_POST["askName"])) {
        $askName = "*Name should be filled";
        $warningClassAskName = "has-warning has-feedback";
        $warningIconAskName = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $askName = $warningClassAskName = $warningIconAskNama = "";
      }
      if (empty($_POST["askDesc"])) {
        $askDesc = "*Description should be filled";
        $warningClassAskDesc = "has-warning has-feedback";
        $warningIconAskDesc = "<span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true'></span>";
      } else {
        $askDesc = $warningClassAskDesc = $warningIconAskDesc = "";
      }
      if($_POST["division"] <> "notSelected" && !(empty($_POST["askName"])) && !(empty($_POST["askDesc"]))) {
        echo "<script type='text/javascript'>alert('Thank you. Your question has been sent');</script>";
      }
    }
  ?>