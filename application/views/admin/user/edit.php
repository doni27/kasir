<?php 
// notifikasi eror
echo validation_errors('<div class= "alert alert-warning">','</div>');

// form open
echo form_open(base_url('admin/user/edit/'.$user->id_user),' class="form-horizontal"');
 ?>

 
 <div class="form-group">
<label  class="col-md-2 control-label">Nama Pengguna</label>
<div class="col-md-5">
<input type="text" name="nama" class="form-control"  placeholder="Nama pengguna" value="<?= $user->nama ?>" required >
</div>
</div>

<div class="form-group">
<label  class="col-md-2 control-label">Email</label>
<div class="col-md-5">
<input type="email" name="email" class="form-control"  placeholder="Email" value="<?= $user->email ?>" required >
</div>
</div>

<div class="form-group">
<label  class="col-md-2 control-label">Username</label>
<div class="col-md-5">
<input type="text" name="username" class="form-control"  placeholder="Username pengguna" value="<?= $user->username  ?>" readonly >
</div>
</div>

<div class="form-group">
<label  class="col-md-2 control-label">Password</label>
<div class="col-md-5">
<input type="password" name="password" class="form-control"  placeholder="Password pengguna" value=""  >
<small>kosongkan jika tidak diubah</small>
</div>
</div>

<div class="form-group">
<label  class="col-md-2 control-label">Level Hak Akses</label>
<div class="col-md-5">
<select name="akses_level" class="form-control">
<option value="Admin">Admin</option>
<option value="User "<?php if($user->akses_level=="user"){echo "selected";} ?>>Pimpinan</option>
<option value="User "<?php if($user->akses_level=="user"){echo "selected";} ?>>Pimpinan</option>
</select>
</div>
</div>

<div class="form-group">
<label  class="col-md-2 control-label"></label>
<div class="col-md-5">
<button class="btn btn-success btn-lg" name="submit"  type="submit" ><i class="fa fa-save"></i>Simpan</button>
<button class="btn btn-info btn-lg" name="reset"  type="reset" ><i class="fa fa-times"></i>Reset</button>
</div>
</div>
<?= form_close();  ?>
