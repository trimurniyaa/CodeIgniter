<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>Data Luas Wilayah</title>
</head>
<body style = "font-family: Arial, sans-serif; margin: 20px;">
    <h1 style = "text-align: center; color: #333">Data Administrasi Luas Wilayah</h1>
    <table border="1" style = "width: 100%; border-collapse: collapse; text-align: left; margin-top: 20px;">
        <thead>
            <tr style = "background-color: #f2f2f2;">
                <th style = "padding: 10px; border: 1px solid #ccc;">ID</th>
                <th style = "padding: 10px; border: 1px solid #ccc;">Kabupaten/Kota</th>
                <th style = "padding: 10px; border: 1px solid #ccc;">Ibu Kota</th>
                <th style = "padding: 10px; border: 1px solid #ccc;">Provinsi</th>
				<th style = "padding: 10px; border: 1px solid #ccc;">Luas</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($records)): ?>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td style = "padding: 10px; border: 1px solid #ccc;"><?= $record['id'] ?></td>
                        <td style = "padding: 10px; border: 1px solid #ccc;"><?= $record['adm'] ?></td>
                        <td style = "padding: 10px; border: 1px solid #ccc;"><?= $record['ibu_kota'] ?></td>
                        <td style = "padding: 10px; border: 1px solid #ccc;"><?= $record['provinsi'] ?></td>
						<td style = "padding: 10px; border: 1px solid #ccc;"><?= $record['luas'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="padding: 10px; border: 1px solid #ccc; text-align: center;">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>