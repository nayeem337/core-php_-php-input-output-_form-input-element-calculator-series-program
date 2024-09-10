<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center"> Series Program </div>
                    <div class="card-body">
                        <form action="action.php?page=series" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3"> Starting Name </label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="starting_number" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"> Ending Name </label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="ending_number" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"> Result </label>
                                <div class="col-md-9">
                                    <textarea class="form-control"> <?php echo $message; ?> </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Make Series" />
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

