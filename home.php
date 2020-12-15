<?php
//https://www.omgbeaupeep.com/comics/Avatar_The_Last_Airbender/039/28/

//$list_manga = list_chapter("http://www.mangacanblog.com/baca-komik-one_piece-bahasa-indonesia-online-terbaru.html");
?>

<h2>LIST BOOK</h2>
<table class="table table-list dataTable">
	<thead>
		<tr>
			<th>Judul</th>
		</tr>
	</thead>
	<tbody>
	<?php
		
		foreach ($avmanga as $k => $v) {
			echo "<tr><td><a href='index.php?page=view&id=$k' >$v[title]</a></td></tr>";
		}
	?>		
	</tbody>
</table>


