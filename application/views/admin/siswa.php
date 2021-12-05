<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Siswa</title>
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

    <h3>Form Input Siswa</h3>
    <form class="" action="<?php echo base_url('admin/tambah_siswa'); ?>" method="post">
      <select class="" name="id_kelas">
        <option value="" disabled selected>Kelas</option>
        <?php foreach ($kelas as $kls) { ?>
          <option value="<?php echo $kls->id_kelas;?>"><?php echo $kls->kode_kelas." - ".$kls->nama_kelas;?></option>
        <?php } ?>
      </select>
      <input type="text" name="nis_siswa" value="" placeholder="NIS">
      <input type="text" name="nama_siswa" value="" placeholder="Nama Lengkap">
      <input type="text" name="username" value="" placeholder="Username">
      <input type="text" name="password" value="" placeholder="Password">
      <input type="text" name="tempat_lahir" value="" placeholder="Tempat Lahir">
      <input type="date" name="tanggal_lahir" value="" placeholder="Tanggal Lahir">
      <select class="" name="jenis_kelamin">
        <option value="" disabled selected>Jenis Kelamin</option>
        <option value="Laki-laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <input type="email" name="email_siswa" value="" placeholder="Email">
      <input type="text" name="alamat_siswa" value="" placeholder="Alamat">
      <button type="submit" name="tambah_siswa">Simpan</button>
    </form>
    <br>
    <table>
      <tr>
        <th>No</th>
        <th>Kelas</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
        $no = 1;
        foreach ($siswa as $ssw) { ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $ssw->kode_kelas." - ".$ssw->nama_kelas;?></td>
            <td><?php echo $ssw->nis;?></td>
            <td><?php echo $ssw->nama_lengkap;?></td>
            <td><?php echo $ssw->tempat_lahir;?></td>
            <td><?php echo $ssw->tanggal_lahir;?></td>
            <td><?php echo $ssw->jenis_kelamin;?></td>
            <td><?php echo $ssw->email;?></td>
            <td><?php echo $ssw->alamat;?></td>
            <td>
              <a href="<?php echo base_url('admin/siswa/edit/'.$ssw->id_siswa);?>">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url('admin/siswa/hapus/'.$ssw->id_siswa);?>">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>
