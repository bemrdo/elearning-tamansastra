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
          <option value="<?php echo $kls->id_kelas;?>" <?php if ($kls->id_kelas == $pilih_kelas->id_kelas) echo 'selected' ?>><?php echo $kls->kode_kelas." - ".$kls->nama_kelas;?></option>
        <?php } ?>
      </select>
      <button type="submit" name="buka_jadwal">Buka</button>
    </form>

    <form class="" action="<?php echo base_url('admin/tambah_jadwal'); ?>" method="post">
      <input type="hidden" name="id_kelas" value="<?php echo $pilih_kelas->id_kelas; ?>">
      <select class="" name="hari">
        <option value="" disabled selected>Hari</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
      </select>
      <select class="" name="jam">
        <option value="" disabled selected>Jam Pelajaran</option>
        <option value="08.00 - 09.00">08.00 - 09.00</option>
        <option value="09.00 - 10.00">09.00 - 10.00</option>
        <option value="10.00 - 11.00">10.00 - 11.00</option>
        <option value="11.00 - 12.00">11.00 - 12.00</option>
      </select>
      <select class="" name="id_pelajaran">
        <option value="" disabled selected>Mata Pelajaran</option>
        <?php foreach ($mapel as $mpl) { ?>
          <option value="<?php echo $mpl->id_pelajaran ?>"><?php echo $mpl->nama_pelajaran ?></option>
        <?php } ?>
      </select>
      <select class="" name="id_guru">
        <option value="" disabled selected>Guru</option>
        <?php foreach ($guru as $gr) { ?>
          <option value="<?php echo $gr->id_guru ?>"><?php echo $gr->nama_lengkap ?></option>
        <?php } ?>
      </select>
      <button type="reset" name="reset">Reset</button>
      <button type="submit" name="tambah_jadwal">Simpan</button>
    </form>

    <h3>Jadwal Kelas <?php echo $pilih_kelas->nama_kelas?></h3>

    <?php
    $hari = array('', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat');
    $jam = array('08.00 - 09.00', '09.00 - 10.00', '10.00 - 11.00', '11.00 - 12.00');
    ?>
    <table>
      <tr>
        <?php
        foreach ($hari as $hr) {
          echo "<td>".$hr."</td>";
        }
        ?>
      </tr>
      <?php foreach($jam as $jm) { ?>
      <tr>
        <th><?php echo $jm;?></th>
        <?php for ($x = 0; $x < 5; $x++) { ?>
        <td>
          ok
        </td>
        <?php } ?>
      </tr>
      <?php } ?>
    </table>
    <?php print_r($jadwal); ?>
  </body>
</html>
