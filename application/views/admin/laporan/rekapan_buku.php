<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
			<img style="max-width: 100px;" src="<?= $logo; ?>" alt="">
            <h3> Laporan Rekapan Buku <br> Perpustakaan SDN 04 Minas Jaya</h3>
			<h4><?= $hari; ?></h4>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th style="text-align: center;">No.</th>
                    <th style="text-align: center;">Kode Buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th style="text-align: center;">Tahun</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
				<?php foreach($rekapan_buku as $row) : ?>
					<tr>
                    <td style="text-align: center;" scope="row"><?= $i; ?></td>
					<td style="text-align: center;"><?= $row['id_buku']; ?></td>
					<td><?= $row['judul']; ?></td>
					<td><?= $row['penerbit']; ?></td>
					<td style="text-align: center;"><?= $row['thn_terbit']; ?></td>
                </tr>
				<?php $i++; ?>
				<?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
