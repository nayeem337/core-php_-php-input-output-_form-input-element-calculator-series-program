<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                     <div class="card-header text-center"> Full Name Program </div>
                    <div class="card-body">
                        <form action="action.php?page=full-name-submit" method="post">
                            <div class="row mb-3">
                            <label class="col-md-3"> First Name </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="first_name" />
                                 </div>
                             </div>
                            <div class="row mb-3">
                                <label class="col-md-3"> Last Name </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"> Full Name </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $message; ?>" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Make Full Name" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

