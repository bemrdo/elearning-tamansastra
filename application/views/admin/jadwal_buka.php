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

    <h3>Jadwal Kelas <?php echo $pilih_kelas->nama_kelas?></h3>

    <table>
      <tr>
        <th></th>
        <td>Senin</td>
        <td>Selasa</td>
        <td>Rabu</td>
        <td>Kamis</td>
        <td>Jumat</td>
      </tr>
      <tr>
        <th>08.00 - 09.00</th>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <th>09.00 - 10.00</th>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <th>10.00 - 11.00</th>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <th>11.00 - 12.00</th>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
    </table>
  </body>
</html>
