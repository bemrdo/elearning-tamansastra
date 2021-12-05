<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Edit Kelas</title>
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
        <a href="<?php echo base_url('admin/jadwal-guru')?>">Jadwal Guru</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/nilai')?>">Nilai</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/user')?>">User</a>
      </li>
    </ul>

    <h3>Form Edit Kelas</h3>
    <form class="" action="<?php echo base_url('admin/edit_kelas'); ?>" method="post">
      <?php foreach ($edit as $edt) { ?>
      <input type="hidden" name="id_kelas" value="<?php echo $edt->id_kelas;?>" readonly>
      <input type="text" name="kode_kelas" value="<?php echo $edt->kode_kelas;?>" placeholder="Kode Kelas">
      <input type="text" name="nama_kelas" value="<?php echo $edt->nama_kelas;?>" placeholder="Nama Kelas">
      <button type="submit" name="edit_kelas">Simpan</button>
      <?php } ?>
    </form>
    <br>
    <table>
      <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
        $no = 1;
        foreach ($kelas as $kls) { ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $kls->kode_kelas;?></td>
            <td><?php echo $kls->nama_kelas;?></td>
            <td>
              <a href="<?php echo base_url('admin/kelas/edit/'.$kls->id_kelas);?>">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url('admin/kelas/hapus/'.$kls->id_kelas);?>">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>
