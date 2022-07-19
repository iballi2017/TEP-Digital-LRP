<!-- Header -->
<?php include "../components/header.php"; ?>

<div id="candidate-selection-count-page">

    <div class="inner container-fluid">
        <div class="card">
            <div class="card-header text-center px-4 py-3">
                SELECT THE NUMBER OF USERS/CHILDREN TO TAKE THE TEST/ACCESSMENT
            </div>
            <div class="card-body">
                <form action="">
                    <div id="count-control" class="btn-group">
                        <input type="text" id="count">
                        <div id="controller">
                            <button type="button" class="btn arrow-up-btn"></button>
                            <button type="submit" class="btn arrow-down-btn"></button>
                        </div>
                    </div>
                    <div id="action-btn">
                        <button type="submit" class="btn btn-block">Continue</button>
                        <button type="button" class="btn btn-block">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include "../components/footer.php"; ?>