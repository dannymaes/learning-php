<?php include 'index.php'; ?>

<?php
$rowNumber = $_GET['rownumbers'];
?>

<section>
    <form  method="get" action="<?php echo $_SERVER['PHP_SELF'];?>" >
      <label for="rownumbers">Rownumbers: </label>
      <input type="number" name="rownumbers" id="rownumbers">
      <input type="submit" value="Submit">
    </form>
</section>
<section>
    <table class="tbl-header" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Code</th>
          <th>Company</th>
          <th>Price</th>
          <th>Change</th>
          <th>Change %</th>
        </tr>
      </thead>
    </table>
    <table class="tbl-content">

    <?php
      if( isset($_GET['rownumbers'])){
         for($i = 0; $i < $rowNumber; $i++){
           echo  "   <tr>
               <td>AAC</td>
               <td>AUSTRALIAN COMPANY </td>
               <td>$1.38</td>
               <td>+2.01</td>
               <td>-0.36%</td>
             </tr> " ;
         }
      }
     ?>
    </table>
</section>
