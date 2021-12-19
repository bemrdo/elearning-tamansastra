<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Jadwal</title>
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

    <h3>Cek Jadwal</h3>
    <form class="" action="<?php echo base_url('admin/buka_jadwal'); ?>" method="post">
      <select class="" name="id_kelas">
        <?php foreach ($kelas as $kls) { ?>
          <option value="<?php echo $kls->id_kelas;?>"><?php echo $kls->kode_kelas." - ".$kls->nama_kelas;?></option>
        <?php } ?>
      </select>
      <button type="submit" name="buka_jadwal">Buka</button>
    </form>
  </body>
</html>
