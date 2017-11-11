<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="lib/bootstrap.min.css">
  <script src="lib/jquery-3.2.1.min.js"></script>
  <script src="lib/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">
  <title>Athul Jose Menachary</title>
</head>

<body>
  <div class="container">    
    <div class="row"><br><br><br><br></div>
    <div class="col-md-offset-1 col-md-5" >
      <div class="panel-group" id="top">
        <div class="panel card">
            
          <?php foreach ($collegeData as $name => $data): ?>
            <div class="panel-header" style="border-bottom-style: solid">
              <h4 class="page-title " align="center">
                <a href="#<?= $name ?>" data-toggle="collapse" data-parent="#top"><?= $name ?></a>
              </h4>
            </div>
            <div id="<?= $name ?>" class="panel-collapse collapse">
              <ul class="list-group">
                <?php foreach ($data as $key => $value): ?>
                  <?php if ($value == 1): ?>
                    <li class="list-group-item"><?=$key ?> </li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            </div>
          <?php endforeach ?>
          
        </div>
      </div>
    </div>


    <div class="col-md-5" >
      <div class="panel card">
        <div class="form-group">
          <form action="">

            <label for="clg-name" class="text-primary">College Name</label>
            <br>
            <input class="form-control" type="text" name="clg-name" id="">

            <div class="container-fluid">
              <div class="row">
                <h4 class="page-header">Courses</h4>
                <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a data-toggle="tab" href="#UG"><b>UG</b></a></li>
                  <li><a data-toggle="tab" href="#PG"><b>PG</b></a></li>
                </ul>

                <div class="tab-content">
                  <div id="UG" class="tab-pane  in active">
                    <ul class="list-group">
                      <?php foreach ($ug_courses as $i): ?>
                        <li class="list-group-item">
                          <input type="checkbox" name="" id="">
                          <label for=""><?= $i ?></label>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  </div>

                  <div id="PG" class="tab-pane">
                    <ul class="list-group">
                      <?php foreach ($pg_courses as $i): ?>
                        <li class="list-group-item">
                          <input type="checkbox" name="" id="">
                          <label for=""><?= $i ?></label>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>

              </div>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>



  <script src="script.js"></script>
</body>

</html>