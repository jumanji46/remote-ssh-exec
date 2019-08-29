<?php
	require "header.php";
?>
	<main>
		<section>
			<div class="container card">
				<div class="d-flex justify-content-center">
			<?php
			if (isset($_SESSION['uname'])) {
				echo '<p><strong>You are logged in</strong></p>';
			}
			else {
				echo '<p>You are logged out.</p>';
			}
			?>
				</div>
			</div>
		</section>
	</main>

<?php
	require "footer.php";
?>