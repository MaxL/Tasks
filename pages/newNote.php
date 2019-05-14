<?php
    $pageTitle = $newNotePageTitle;
    $newnote = 'true';
    $jsFile = 'newNote';
    include 'includes/header.php';
?>
	<div class="container">

		<div class="row">

			<div class="col-xs-12">
				<h3><?php echo $pageTitle; ?></h3>
				<form action="" method="post" class="mb-20">
					<div class="form-group">
						<label for="noteTitle"><?php echo $noteTitleText; ?></label>
						<input type="text" class="form-control" name="noteTitle" id="noteTitle" required="required" value="" />
						<span class="help-block"><?php echo $textOnlySpan; ?></span>
					</div>
					<div class="form-group">
						<label for="notesText"><?php echo $notesFieldText; ?></label>
						<textarea class="form-control autosize" name="notesText" id="notesText" required="required" rows="20"></textarea>
					</div>

					<button type="input" name="submit" value="newNote" id="newNote" class="btn btn-success btn-icon"><i class="fa fa-check-square-o"></i> <?php echo $saveNewNoteText; ?></button>
				</form>
			</div>
		</div>
	</div>