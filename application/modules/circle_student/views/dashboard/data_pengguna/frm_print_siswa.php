<html>
  <head>
    <meta charset="utf-8">
    <title>Print Siswa</title>
    <style type="text/css">
    	table {
		  border-collapse: collapse;
		  width: 100%;
		  margin-top: 15px;
		}

		table, th, td {
		  border: 1px solid black;
		  padding: 5px;
		}

		th{
			height: 30px;
		}

		h3{
			text-align: center;
			margin: 0px;
		}


    </style>
  </head>
  <body>
  	<h3>DAFTAR SISWA </h3>
  	<h3><?php echo $this->uri->segment(4) ?> IBNU HAJAR BOARDING SCHOOL</h3>
  	<?php foreach ($siswa as $value){ $value["nm_kls_paralel"]; } ?>
  	<h3>Kelas <?php echo $value["nm_kls_paralel"] ?></h3>
  	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col" width="23%">Nipd</th>
	      <th scope="col" width="23%">Nisn</th>
	      <th scope="col" width="50%">Nama</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $no=1; foreach ($siswa as $value): ?>
	    <tr>
	      <td align="center"><?php echo $no++ ?></td>
	      <td><?php echo $value['nipd'] ?></td>
	      <td><?php echo $value['nisn'] ?></td>
	      <td><?php echo $value['nama'] ?></td>
	    </tr>
	    <?php endforeach ?>
	  </tbody>
	</table>
  </body>
</html>