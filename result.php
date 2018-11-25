<?php 
include_once('action.php');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test Git</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css">
    </head>
    <body>
        <div class="header">
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Test Form</a>
                </div>
                </div>
            </div>
        </div>
        <div class="container slide-animate" id="appContainer" style="    margin-top: 81px;">
            <div ng-view="">
                
                <style type="text/css" scoped>
    .db-cred .ng-dirty.ng-invalid {
        border-color:#e74c3c;
    }
</style>

<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($errors as $key => $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
<?php endif; ?>

<?php if(!empty($success)): ?>
    <div class="alert alert-success">
      <p><?php echo $success; ?></p>
    </div>
<?php endif; ?>

<div class="well">
    <fieldset>
        <legend>Result</legend>
        <div class="form-horizontal" >
            <div class="form-group">
                <label for="" class="col-sm-2">Param #1</label>
                <div class="col-sm-4">
					<?php echo $post->p1; ?>
                </div>
            </div>
			<div class="form-group">
                <label for="" class="col-sm-2">Param #2</label>
                <div class="col-sm-4">
					<?php echo $post->p2; ?>
                </div>
            </div>
		</div>
    </fieldset>
</div>
            </div>
        </div>
    </body>
</html>