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
    <form class="" action="<?php echo base_url('admin/edit_siswa'); ?>" method="post">
      <?php foreach ($edit as $edt) { ?>
      <input type="hidden" name="id_kelas" value="<?php echo $edt->id_kelas;?>" readonly>
      <select class="" name="id_kelas">
        <?php foreach ($kelas as $kls) { ?>
          <option value="<?php echo $kls->id_kelas;?>" <?php if ($kls->id_kelas == $edt->id_kelas) {echo "selected";}?>><?php echo $kls->kode_kelas." - ".$kls->nama_kelas;?></option>
        <?php } ?>
      </select>
      <input type="hidden" name="id_siswa" value="<?php echo $edt->id_siswa;?>" readonly>
      <input type="text" name="nis_siswa" value="<?php echo $edt->nis;?>" placeholder="NIS">
      <input type="text" name="nama_siswa" value="<?php echo $edt->nama_lengkap;?>" placeholder="Nama Lengkap">
      <input type="text" name="tempat_lahir" value="<?php echo $edt->tempat_lahir;?>" placeholder="Tempat Lahir">
      <input type="date" name="tanggal_lahir" value="<?php echo $edt->tanggal_lahir;?>" placeholder="Tanggal Lahir">
      <select class="" name="jenis_kelamin">
        <option value="Laki-laki" <?php if ($edt->jenis_kelamin == "Laki-laki") {echo "selected";}?>>Laki-Laki</option>
        <option value="Perempuan" <?php if ($edt->jenis_kelamin == "Perempuan") {echo "selected";}?>>Perempuan</option>
      </select>
      <input type="email" name="email_siswa" value="<?php echo $edt->email;?>" placeholder="Email">
      <input type="text" name="alamat_siswa" value="<?php echo $edt->alamat;?>" placeholder="Alamat">
      <button type="submit" name="edit_siswa">Simpan</button>
      <?php } ?>
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
