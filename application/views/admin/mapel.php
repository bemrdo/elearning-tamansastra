<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Mata Pelajaran</title>
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

    <h3>Form Input Kelas</h3>
    <form class="" action="<?php echo base_url('admin/tambah_mapel'); ?>" method="post">
      <input type="text" name="nama_pelajaran" value="" placeholder="Nama Pelajaran">
      <select class="" name="keterangan">
        <option value="" disabled selected>Keterangan</option>
        <option value="aktif">Aktif</option>
        <option value="nonaktif">Nonaktif</option>
      </select>
      <button type="submit" name="tambah_mapel">Simpan</button>
    </form>
    <br>
    <table>
      <tr>
        <th>No</th>
        <th>Nama Pelajaran</th>
        <th>Keterangan</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
        $no = 1;
        foreach ($mapel as $mpl) { ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $mpl->nama_pelajaran;?></td>
            <td><?php echo $mpl->keterangan;?></td>
            <td>
              <a href="<?php echo base_url('admin/mapel/edit/'.$mpl->id_pelajaran);?>">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url('admin/mapel/hapus/'.$mpl->id_pelajaran);?>">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>
