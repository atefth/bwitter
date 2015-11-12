<div class="jumbotron">
	<div class="container">
		<div class="page-header">
			<h1><small>Local</small> Bweets</h1>
            <hr>
            <form action="home/create" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="email" required="required">
                </div>
                <div class="form-group">
                    <textarea type="text" name="bweet" class="form-control" placeholder="bweet" required="required"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-sm">Bweet!</button>
                </div>
            </form>
            <hr>
            <?php foreach ($bweets as $bweet) { ?>
            <div class="row">
                <div class="well">
                    <p><?php echo $bweet->bweet; ?></p>
                    <hr>
                    <p class="label label-warning"><?php echo $bweet->email; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
