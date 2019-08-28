<h4>Data Type Tarif perawatan</h4>
<table border="1" cellpadding="8">
    <tr>
        <th>kd_type_prwtn</th>
        <th>kd_jenis_perawatan</th>
        <th>kd_tarif_master</th>
    </tr>

    <?php 
        if (! empty($type_tarif_perawatan)) {
            foreach ($type_tarif_perawatan as $typ) {
                echo "<tr>";
                echo "<td>".$typ->kd_type_prwtn."</td>";
                echo "<td>".$typ->kd_jenis_perawatan."</td>";
                echo "<td>".$typ->kd_tarif_master."</td>";
                echo "</tr>";
            }
        }else {
            echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
        }
    ?>
</table>