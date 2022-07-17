<?php
include "includes/header.php"
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Word Count</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Given String</label>
                                    <div class="col-md-8">
                                        <input type="text" name="given_string" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <textarea name="" id="" class="form-control"><?php
                                            echo isset($results) ? $results['given_string'] : " ";
                                            echo "\n";
                                            echo isset($results) ? $results['total_word'] : " ";
                                            echo "\n";
                                            echo isset($results) ? $results['total_char'] : " ";
                                            ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-success" value="word count">
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