<?php if (isset($_SESSION['INFO'])) : ?>
    <div class="alert alert-<?php echo $_SESSION["INFO"]['tag'] ?> alert-dismissible fade show mt-5" role="alert">
        <strong><?php echo $_SESSION["INFO"]['msg1']; ?></strong> <?php echo $_SESSION["INFO"]['msg2']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php
session_unset();
session_destroy();
?>