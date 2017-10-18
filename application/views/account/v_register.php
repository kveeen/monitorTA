<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun
   </title>
 </head>
 <body>
     <h2>Pendaftaran Akun</h2>
 
     <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
     <input type="text" name="nama" value="<?php echo set_value('nama'); ?>"/>
     </p>
     <p> <?php echo form_error('nama'); ?> </p>
 
     <p>Username:</p>
     <p>
     <input type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>

     <p>Password:</p>
     <p>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Role:</p>
     <p>
     <input type="text" name="role" value="99" readonly/>
     </p>
     <p> <?php echo form_error('role'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" value="Sign up" />
     </p>
 
     <?php echo form_close();?>
 
     <a href="<?php echo site_url() . '/v_login' ?>"><button>Back</button></a>
    <section>
    <br>
 </body>
 </html>