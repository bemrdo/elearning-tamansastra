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
        <a href="<?php echo base_url('admin/jadwal')?>">Jadwal</a>
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
      <input type="text" name="nip" value="" placeholder="NIP">
      <input type="text" name="nama_lengkap" value="" placeholder="Nama Lengkap">
      <input type="text" name="tempat_lahir" value="" placeholder="Tempat Lahir">
      <input type="date" name="tanggal_lahir" value="" placeholder="Tanggal Lahir">
      <select class="" name="id_pelajaran">
        <option value="" disabled selected>Mata Pelajaran</option>
        <?php foreach ($mapel as $mpl) { ?>
          <option value="<?php echo $mpl->id_pelajaran ?>"><?php echo $mpl->nama_pelajaran ?></option>
        <?php } ?>
      </select>
      <input type="email" name="email" value="" placeholder="Email">
      <input type="text" name="alamat" value="" placeholder="Alamat">
      <select class="" name="jenis_kelamin">
        <option value="" disabled selected>Jenis Kelamin</option>
        <option value="Laki-laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <button type="submit" name="tambah_guru">Simpan</button>
    </form>
    <br>
    <table>
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Mata Pelajaran</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
        $no = 1;
        foreach ($guru as $gr) { ?>
          <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $gr->nip;?></td>
            <td><?php echo $gr->nama_lengkap;?></td>
            <td><?php echo $gr->tempat_lahir;?></td>
            <td><?php echo $gr->tanggal_lahir;?></td>
            <td><?php echo $gr->nama_pelajaran;?></td>
            <td><?php echo $gr->email;?></td>
            <td><?php echo $gr->alamat;?></td>
            <td><?php echo $gr->jenis_kelamin;?></td>
            <td>
              <a href="<?php echo base_url('admin/guru/edit/'.$gr->id_guru);?>">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url('admin/guru/hapus/'.$gr->id_guru);?>">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>
