<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Edit User</title>
  </head>
  <body>

    <ul>
      <li>
        <a href="<?php echo base_url('admin/dashboard')?>">Dashboard</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/kelas')?>">Kelas</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/siswa')?>">Siswa</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/mapel')?>">Mata Pelajaran</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/guru')?>">Guru</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/jadwal')?>">Jadwal</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/nilai')?>">Nilai</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/user')?>">User</a>
      </li>
    </ul>

    <h3>Form Edit Kelas</h3>
    <form class="" action="<?php echo base_url('admin/edit_user'); ?>" method="post">
      <?php foreach ($edit as $edt) { ?>
      <input type="hidden" name="id" value="<?php echo $edt->id;?>" readonly>
      <input type="text" name="username" value="<?php echo $edt->username;?>" placeholder="Username">
      <input type="password" name="password" value="" placeholder="Password">
      <input type="text" name="nama" value="<?php echo $edt->nama;?>" placeholder="Nama">
      <input type="text" name="email" value="<?php echo $edt->email;?>" placeholder="Email">
      <input type="text" name="level" value="<?php echo $edt->level;?>" placeholder="Level">
      <button type="submit" name="edit_user">Simpan</button>
      <?php } ?>
    </form>
    <br>
    <table>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Level</th>
        <th>Status</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
        $no = 1;
        foreach ($user as $usr) { ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $usr->username;?></td>
            <td><?php echo $usr->nama;?></td>
            <td><?php echo $usr->email;?></td>
            <td><?php echo $usr->level;?></td>
            <td><?php echo ($usr->blokir == 'N') ? 'Aktif':'Nonaktif';?></td>
            <td>
              <a href="<?php echo base_url('admin/user/edit/'.$usr->id);?>">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url('admin/user/status/'.$usr->id);?>"><?php echo ($usr->blokir == 'N') ? 'Nonaktifkan':'Aktifkan';?></a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>
