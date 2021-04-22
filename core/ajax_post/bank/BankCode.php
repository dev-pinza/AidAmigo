  
<?php
session_start();
$bank_datax = $_POST["bank_data"];

if ($bank_datax != "") {
    list($bank_data, $bank_name) = explode(":", $bank_datax);
    $_SESSION["bank_data"] = $bank_data;
    ?>
    <input name="bank_code" type="text" value="<?php echo $bank_data; ?>" hidden id="bank_data">
    <input name="bank_namex" type="text" value="<?php echo $bank_name; ?>" hidden id="bank_data">
    <!-- <script>
    $(document).ready(function() {
        $("#bank_payment").prop("disabled", false);
    });
    </script> -->
    
    <?php
}
?>