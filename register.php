<?php include 'Partiales/header.php' ?>

<?php include 'Oprations/user/register.php' ?>

<main>
    <?php if (isset($user->msg)) {?>
        <div class="alert alert-<?php if(array_keys($user->msg)[0] == 'success') echo 'success'; else echo '' ?>" role="alert">
            <?php if(array_keys($user->msg)[0] == 'success') print_r(array_values($user->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="card rounded w-50" style="background-image: linear-gradient(to right, #fc5c7d, #6a82fb);">
            <div class="card-header">
                <h4 class="text-primary">Sign-up</h4>
            </div>
            <div class="card-body p-5">
                <?php include 'Partiales/Sign-in.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'Partiales/footer.php' ?>