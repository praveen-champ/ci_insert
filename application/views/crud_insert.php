<?php defined('BASEPATH') OR exit('No direct script access allowed');
include('header.php');
?>

<div class="row">
 <table class="table table-secondary table-hover">
        <thead>
        <tr>
            <td>S.NO</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($ayyas as $ayya) {?>
            <tr>
                <td><?php echo $ayya->id;?></td>
                <td><?php echo $ayya->name;?></td>
                <td><?php echo $ayya->email;?></td>
                <td><?php echo $ayya->password;?></td>
                
            </tr>
                        
           
                
            <?php }?>
        </tbody>
    </table>
</div>