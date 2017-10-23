<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
    <!-- Load JQuery dari CDN -->
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        
        <!-- Load DataTables dan Bootstrap dari CDN -->
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun
   </title>
 </head>
 <body>
     <h2>Pendaftaran Akun</h2>
 
     <?php echo form_open('admin/regd');?>
      <div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
     <div class="col-sm-10">
     <input type="text" name="nama" value="<?php echo set_value('nama'); ?>"/>
     <p> <?php echo form_error('nama'); ?> </p>
     </div>
                      </div>
 
     <div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label">username</label>
     <div class="col-sm-10">
     <input type="text" name="Username" value="<?php echo set_value('username'); ?>"/>
     <p> <?php echo form_error('username'); ?> </p>
     </div>
    </div>

     <div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label">password</label>
     <div class="col-sm-10">
     <input type="password" name="Password" value="<?php echo set_value('password'); ?>"/>
     <p> <?php echo form_error('password'); ?> </p>
     </div>
                      </div>
 
      <div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label"></label>
     <div class="col-sm-10">
     <input type="hidden" name="role" value="1"/>
     <p> <?php echo form_error('role'); ?> </p>
     </div>
      </div>

     <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
     <input type="hidden" name="btnSubmit" value="Sign up" />
     <button type="submit" class="btn btn-default">Signup</button>
     </div>
     </div>
 
     <?php echo form_close();?>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
     <a href="<?php echo site_url() . 'admin/dashboard' ?>"><button class="btn btn-default">Back</button></a>
     </div>
     </div>
    <section>
    <br>
 </body>
 </html>