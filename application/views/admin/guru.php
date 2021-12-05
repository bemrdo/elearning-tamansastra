Guru<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Guru</title>
  </head>
  <body>

    <ul>
      <li>
        <a href="<?php echo base_url('admin/dashboard')?>">Dashboard</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/guru')?>">Guru</a>
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

    <h3>Form Input Guru</h3>
    <form class="" action="<?php echo base_url('admin/tambah_guru'); ?>" method="post">
      <input type="text" name="kode_guru" value="" placeholder="Kode Guru">
      <input type="text" name="nama_guru" value="" placeholder="Nama Guru">
      <button type="submit" name="tambah_guru">Simpan</button>
    </form>
    <br>
    <table>
      <tr>
        <th>No</th>
        <th>Kode Guru</th>
        <th>Nama Guru</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
        $no = 1;
        foreach ($guru as $kls) { ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $kls->kode_guru;?></td>
            <td><?php echo $kls->nama_guru;?></td>
            <td>
              <a href="<?php echo base_url('admin/guru/edit/'.$kls->id_guru);?>">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url('admin/guru/hapus/'.$kls->id_guru);?>">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>
