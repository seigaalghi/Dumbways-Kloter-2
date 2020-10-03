<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbnews";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

// SUBMIT USER

    if(isset($_POST['submit_u'])){
        // EDIT USER

        if ($_GET['hal'] == "edit_user"){
            $hapus = mysqli_query($koneksi, "UPDATE news SET
            name_u = '$_POST[name_u]',
            role_u = '$_POST[role_u]',
            email_u = '$_POST[email_u]'
            WHERE id_n = '$_GET[idu]'    
            
    
            ");
            if (mysqli_affected_rows($koneksi)>0){
                echo    "<script>
                    alert('EDIT SUKSES');
                    document.location= '4.php';
                </script>";
                
            } else {
                echo    "<script>
                    alert('EDIT GAGAL');
                    document.location= '4.php';
                </script>";
            }
        } else { //SIMPAN USER
        
            $simpan = mysqli_query($koneksi, "INSERT INTO user (name_u, email_u, role_u) VALUES
                                    ('$_POST[name_u]','$_POST[email_u]','$_POST[role_u]')");

            if (mysqli_affected_rows($koneksi)>0){
                echo    "<script>
                    alert('INPUT SUKSES');
                    document.location= '4.php';
                </script>";
            } else {
                echo    "<script>
                    alert('INPUT GAGAL USER ID SALAH!');
                    document.location= '4.php';
                </script>";
            }
        }
    }
    // DELETE USER
    if (isset($_GET['hal']))
    {
        if ($_GET['hal'] == "hapus_user")
        {
            $hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_u = '$_GET[idu]' ");
            if (mysqli_affected_rows($koneksi)>0){
                echo    "<script>
                    alert('HAPUS SUKSES');
                    document.location= '4.php';
                </script>";
            }
        } else if ($_GET['hal'] == "edit_user")
        {   
            $tampiluser = mysqli_query($koneksi, "SELECT * FROM user WHERE id_u = '$_GET[idu]'");
            $datauser = mysqli_fetch_array($tampiluser);
            if($datauser)
            {
                $vname_u = $datauser['name_u'];
                $vemail_u = $datauser['email_u'];
                $vrole_u = $datauser['role_u']; 
            
            }
            
            
         }

    }




// SUBMIT NEWS

    if(isset($_POST['submit_n'])){
            
        
        // edit news
        if ($_GET['hal'] == "edit"){
        $hapus = mysqli_query($koneksi, "UPDATE news SET
        title_n = '$_POST[title_n]',
        image_n = '$_POST[image_n]',
        deskripsi_n = '$_POST[deskripsi_n]',
        create_time_n = '$_POST[title_n]',
        user_id = '$_POST[user_id]' 
        WHERE id_n = '$_GET[id]'    
        

        ");
        if (mysqli_affected_rows($koneksi)>0){
            echo    "<script>
                alert('EDIT SUKSES');
                document.location= '4.php';
            </script>";
        }
        } else { // SIMPAN NEWS
            $simpannews = mysqli_query($koneksi, "INSERT INTO news (title_n, image_n, deskripsi_n, create_time_n, user_id) VALUES
                                    ('$_POST[title_n]','$_POST[image_n]','$_POST[deskripsi_n]','$_POST[create_time_n]','$_POST[user_id]')");

            if (mysqli_affected_rows($koneksi)>0){
                echo    "<script>
                    alert('INPUT SUKSES');
                    document.location= '4.php';
                </script>";
            } else {
                echo    "<script>
                    alert('INPUT GAGAL');
                    document.location= '4.php';
                </script>";
            }
        }
    }
    // DELETE NEWS
    if (isset($_GET['hal']))
    {
        if ($_GET['hal'] == "hapus")
        {
            $hapus = mysqli_query($koneksi, "DELETE FROM news WHERE id_n = '$_GET[id]' ");
            if (mysqli_affected_rows($koneksi)>0){
                echo    "<script>
                    alert('HAPUS SUKSES');
                    document.location= '4.php';
                </script>";
            }
        } else if ($_GET['hal'] == "edit")
        {   
            $tampil = mysqli_query($koneksi, "SELECT * FROM news WHERE id_n = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
                if($data)
            {
            $vtitle_n = $data['title_n'];
            $vdeskripsi_n = $data['deskripsi_n'];
            $vuser_id = $data['user_id'];
            
            }
            
            
         }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No. 4B</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<body   style= " background-color : black;">



<div class="container">
    <h1 class="text-light">NEWS MANAGEMENT SYSTEM</h1>
        
<!-- INPUT USER -->
	<div class="card text-center mt-3">
  		<div class="card-header bg-danger text-white">
    		Input User
  		</div>
  		<div class="card-body text-justify">
   		    <form method="post" action="">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name_u" value="<?=@$vname_u?>" class="form-control" placeholder="Input Nama User" required="">
                    <label>E-Mail</label>
                    <input type="text" name="email_u" value="<?=@$vemail_u?>" class="form-control" placeholder="Input Email User" required="">
                    <label>Role</label>
                    <input type="text" name="role_u" value="<?=@$vrole_u?>" class="form-control" placeholder="Input Role User" required="">
                    <br>
                    <button type="submit" class="btn btn-success" name="submit_u">Submit</button>
                    <button type="reset" class="btn btn-danger" name="reset_u">Clear</button>
                </div>
            </form>
   	    </div>
    </div>
    

<!-- END INPUT USER -->
<!-- INPUT NEWS -->

    <div class="card text-center mt-3">
  		<div class="card-header bg-danger text-white">
    		Input User
  		</div>
  		<div class="card-body text-justify">
   		    <form method="post" action="">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="title_n" value="<?=@$vtitle_n?>" class="form-control" placeholder="Input Judul Berita" required="">
                    <label>User ID</label>
                    <input type="text" name="user_id" value="<?=@$vuser_id?>" class="form-control" placeholder="Input ID Pembuat" required="">
                    <label>Tanggal Berita</label><br>
                    <input type="date" name="create_time_n"class="form-control mt-1 mb-1"><br>
                    <label>Deskripsi</label>
                    <textarea name="deskripsi_n" value="<?=@$vdeskripsi_n?>" class="form-control" id="" cols="30" rows="10"></textarea>
                    <label>Gambar</label>
                    <input type="file" name="image_n" value="<?=@$vemail_u?>" class="form-control" placeholder="Input Email User" required="">
                    <br>
                    <button type="submit" class="btn btn-success" name="submit_n">Submit</button>
                    <button type="reset" class="btn btn-danger" name="reset_n">Clear</button>
                </div>
            </form>
   	    </div>
    </div>
    
<br><br>
<!-- END INPUT NEWS -->


<!-- DATABASE -->
<?php 
   		$lemari = mysqli_query($koneksi, "SELECT * from news INNER JOIN user ON user.id_u = news.user_id");
        while ($koper = mysqli_fetch_array($lemari)) : ?>
           
    <div class="col-md-4 mt 5 float-left">
              <div class="card mb-4 box-shadow">
                  <div  class="header bg-danger text-white text-center" style="height : 50px; border-radius : 20px 20px 0 0;"><a style="text-decoration:none; color:white;" href="4-1.php?new=<?= $koper['id_n']?>"><?= $koper['title_n']?></a></div>
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/<?=$koper['image_n']?>" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text" style="height: 150px; overflow: auto"><?= $koper['deskripsi_n']?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Post By : <?= $koper['name_u']?></button>
                      <a type="button" onclick="return confirm('Anda Yakin?');" href="4.php?hal=hapus&id=<?=$koper['id_n']?>"   class="btn btn-sm btn-outline-secondary">Delete</a>
                      <a type="button" onclick="return confirm('Anda Yakin?');" href="4.php?hal=edit&id=<?=$koper['id_n']?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <small class="text-muted"><?= $koper['create_time_n']?></small>
                  </div>
                </div>
                </div>
    </div>

    <?php endwhile; ?>





<div class="clearfix"></div>

<!-- DATA USER -->
<div class="card text-center mt-3">
  <div class="card-header bg-danger text-white">
    Data USER
  </div>
  <div class="card-body text-justify">
   <table class = "table table-bordered">
   	<tr>
   		<th>ID User</th>
        <th>Nama User</th>
        <th>Email</th>
        <th>Role User</th>
        <th>Aksi</th>
   		
   	</tr>
   	<?php 
   		$tampil = mysqli_query($koneksi, "SELECT * from user");
   		while ($data = mysqli_fetch_array($tampil)) :
   	 ?>
   	<tr>
   		<th><?=$data['id_u']?></th>
        <th><?=$data['name_u']?></th>
        <th><?=$data['email_u']?></th>
   		<th><?=$data['role_u']?></th>
   		<td>
   			<a onclick="return confirm('Anda Yakin?');" href="4.php?hal=edit_user&idu=<?=$data['id_u']?>" class="btn btn-warning">Edit</a>
   			<a onclick="return confirm('Anda Yakin?');" href="4.php?hal=hapus_user&idu=<?=$data['id_u']?>" class="btn btn-danger">Delete</a>
   		</td>
   	</tr>
   <?php endwhile ?>
   </table>
   	</div>
  </div>

<br><br>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>