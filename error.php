<?php
include("header.php");
?>

<section style="margin-top:15px">
	<content style="text-align:center;">
		<div>
			</br>
			<H1>
				<?php
				if(isset($_GET['motif'])) {
					echo $_GET['motif'];
				}
				else{
					echo "Erreur";
				}
				?>
			</H1>
			<img src="img/404.png" height="450px" width="auto"/>
			</br></br>
		</div>
	</content>
</section>