<?php
    // Set the Active State on the Navigation
    $homeNav = $newNav = $notesNav = $newnotesNav = $profileNav = '';
    if (isset($home)) {
        $homeNav = 'active';
    } else {
        $homeNav = '';
    }
    if (isset($new)) {
        $newNav = 'active';
    } else {
        $newNav = '';
    }
    if (isset($notes)) {
        $notesNav = 'active';
    } else {
        $notesNav = '';
    }
    if (isset($newnote)) {
        $newnotesNav = 'active';
    } else {
        $newnotesNav = '';
    }
    if (isset($profile)) {
        $profileNav = 'active';
    } else {
        $profileNav = '';
    }
?>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $siteName; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php" class="<?php echo $homeNav; ?>"><?php echo $myTasksText; ?></a></li>
            <li><a href="index.php?page=newTask" class="<?php echo $newNav; ?>"><?php echo $newTaskText; ?></a></li>
            <li><a href="index.php?page=notes" class="<?php echo $notesNav; ?>"><?php echo $myNotesText; ?></a></li>
            <li><a href="index.php?page=newNote" class="<?php echo $newnotesNav; ?>"><?php echo $newNoteText; ?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?page=profile" class="<?php echo $profileNav; ?>"><?php echo $profileText; ?></a></li>
            <li><a href="" id="signout"><?php echo $signOutText; ?></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>