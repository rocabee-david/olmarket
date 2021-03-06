<?php
   /**
   * template for contact us page
   **/
?>

<?php
 /**
 * This is regular php template file
 **/
?>

<div class="container">
  <div class="col-sm-4 col-md-4 col-lg-4">
    <div class="list-item">
         <div class="item-title">
           <?php echo $langs["contact_info"]?>
         </div>
         <div class="line"></div>
         <div class="item-description">
    
            <div class="list-wrapper">
               <span class="pull-left">E-mail:</span>
               <span class="pull-left">
                zhuen2000@163.com<br>
                danny.c.alex@gmail.com
               </span>
               <div class="clear"></div>
            </div>
            
            <div class="list-wrapper">
               <span class="pull-left">Skype:</span>
               <span class="pull-left">
                david-china-express<br>
                bicomplex
               </span>
               <div class="clear"></div>
            </div>

            <div class="list-wrapper">
               <span class="pull-left">QQ:</span>
               <span class="pull-left">474452556</span>
               <div class="clear"></div>
            </div>

             <div class="list-wrapper">
               <span class="pull-left">Mobile:</span>
               <span class="pull-left">
                07411814007<br>
                07565144476
               </span>
               <div class="clear"></div>
            </div>


         </div>
    </div>
  </div>
  
  <div class="col-sm-8 col-md-8 col-lg-8">
    <div class="list-item">
       <div class="item-title">
        <?php echo $langs["contact_form"]?>
       </div>
       <div class="line"></div>
       <div class="item-description">
        <div class="list-wrapper long">       
             <?php 
               if(isset($contact_error)){
                   echo "<span class='error'>$contact_error</span>";
               }
               
               if(isset($success)){
                   echo "<span class='success'>$success</span>";
               }
             ?>
        </div>
        <form action="" method="post">
            <div class="list-wrapper long">
               <span class="pull-left">
                 <?php echo $langs["your_email"]?>:
               </span>
               <span class="pull-left">
                    <input type="text" name="email" value="<?php echo $_POST["email"]?>">
               </span>
               <div class="clear"></div>
            </div>
 
            <div class="list-wrapper long">
               <span class="pull-left">
                 <?php echo $langs["your_name"]?>:
               </span>
               <span class="pull-left">
                    <input type="text" name="username" value="<?php echo $_POST["username"]?>">
               </span>
               <div class="clear"></div>
            </div>

            <div class="list-wrapper long">
               <span class="pull-left">
                <?php echo $langs["your_comment"]?>:
               </span>
               <span class="pull-left">
                    <textarea name="usercomment"><?php echo $_POST["usercomment"]?>
                    </textarea>
               </span>
               <div class="clear"></div>
            </div>
 
            <div class="list-wrapper long">
                <input type="submit" value="<?php echo $langs["send"]?>" class="btn btn-default">
            </div>
            </form>             
       </div>
    </div>
   </div>
   
</div>
