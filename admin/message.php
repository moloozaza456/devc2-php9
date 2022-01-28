<?php
if (isset($_SESSION['message'])) {
?>


    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hi!</strong> <?php echo $_SESSION['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Holy guacamole!</strong> <?php echo $_SESSION['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
}
?> 