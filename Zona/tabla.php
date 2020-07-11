<table class='table table-bordered'>
				<thead>
					<th>Title</th>
					<th>Description</th>
					<th>Action</th>
				</thead>
				<tbody>
				<?php
                $query = "SELECT * FROM r1z_zona_urbana";
                require_once '../includes/db.php';
				$resultProduct= mysqli_query($conn, $query);
				while($row= mysqli_fetch_array($resultProduct)){
				?>
					<tr class="">
						<td class="id"><?php echo $row['ZonUrbNom']?></td>
						<td><?php echo $row['ZonUrbOtrDat']?></td>
						<td>
							<a href="crud_product/edit.php?id=<?php echo $row['ZonUrbNom']?>" class="btn btn-warning">
								Edit
							</a>
                            <button class="btneliminar btn btn-danger" onclick="eliminar('<?php echo $row['ZonUrbNom']?>')"> Eliminar</button>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

