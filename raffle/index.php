<?php require_once('logic.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Raffle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!-- custom styles -->
    <link href="css/styles.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class="container">
          <div class="jumbotron">
            <h1>What what? It's a Raffle!</h1>
            <p>Enter the names of four contestants, and see if they win a prize.</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <form class="form-horizontal" role="form" method="post" action="index.php">
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="input" class="form-control" id="name1" placeholder="Contestant One">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="input" class="form-control" id="name2" placeholder="Contestant Two">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="input" class="form-control" id="name3" placeholder="Contestant Three">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="input" class="form-control" id="name4" placeholder="Contestant Four">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-default">Spin the Wheel!</button>
                    </div>
                </div>
              </form>
            </div>
            <div class="col-md-6">
                <?php if($_POST): ?>
        
                    <h3>The winning number is <?=$winning_number?>!</h3>
                        
                    <?php foreach($contestants as $index => $value): ?>
                        <?=$index?> is a <?=$value?><br>
                    <?php endforeach; ?>
    
                <?php endif; ?>  
            </div>
          </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>