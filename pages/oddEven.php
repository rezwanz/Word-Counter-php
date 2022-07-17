<?php
include "includes/header.php"
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Odd Even</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Starting Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="starting_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Ending Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="ending_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Options</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="option" value="odd"> Odd</label>
                                        <label for=""><input type="radio" name="option" value="even"> Even</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <textarea name="" id="" class="form-control"><?php echo isset($result) ? $result : ''?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-success" value="Get odd even">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "includes/footer.php"
?>