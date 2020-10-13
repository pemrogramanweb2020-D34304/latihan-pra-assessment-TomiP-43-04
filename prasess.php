
<?php
    $buku = array(array('judul'=>'Sherlock Holmes',
				  		'pengarang'=>'Arthur Cona Doyle',
				  		'harga'=>50000,
				  		'stok'=>20),
				  array('judul'=>'Arsene Lupin',
				  		'pengarang'=>'Maurice LeBlanc',
				  		'harga'=>250000,
				  		'stok'=>50),
				  array('judul'=>'Games Of Throne',
				  		'pengarang'=>'George R.R.Martin',
				  		'harga'=>125000,
				  		'stok'=>60),
                );
     
    echo "<table border='1'>";
    echo "<thead>
          <th><b>DATA BUKU</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Pengarang</b></th>
          <th><b>Harga</b></th>
          <th><b>Stok</b></th>
          </thead>";
    
    for($a=0;$a<count($buku);$a++){
        echo "<tr><td>".$buku[$a]['judul']."</td>";
        echo "<td>".$buku[$a]['pengarang']."</td>";  
        echo "<td>".$buku[$a]['harga']."</td>";  
        echo "<td>".$buku[$a]['stok']."</td></tr>";
    }

    $pembelian = array(array('judul'=>'Sherlock Holmes',
                             'jumlah'=>5),
                       array('judul'=>'Arsene Lupin',
                             'jumlah'=>2),
                       array('judul'=>'Game Of Throne',
                             'jumlah'=>4),
                    );
    $total = 0;
    echo "<table border='1'";
    echo "<thead>
          <th><b>DATA PEMBELIAN</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Jumlah<b></th>
          <th><b>Harga</b></th>
          </thead>";
          
    for($a=0;$a<count($pembelian);$a++){
        echo "<tr>";
        echo "<td>".$pembelian[$a]['judul']."</td>";
        echo "<td>".$pembelian[$a]['jumlah']."</td>";
        for($b=0;$b<count($buku);$b++){
            if($pembelian[$a]['judul']==$buku[$b]['judul']){
                $harga = $buku[$b]['harga']*$pembelian[$a]['jumlah'];
                break;
            }
        }
        $total = $total + $harga;
        echo "<td>".$harga."</td>";  
        echo "</tr>";
    }
    echo "<tr>
          <td><b>Total Harga = ".$total."</b></td>
          </tr>";
    echo "</table>";
?>