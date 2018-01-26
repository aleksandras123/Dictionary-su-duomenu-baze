<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Translate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Translation</title>
  </head>
  <body>
    <div class="container">
      <?php if ($transl == null) :?>
        <?php if ($message==false) {
          echo $message;
        } ?>
        <form class="" action="index.php" method="get">
          <div class="form-group">
            <label name="transl">Word : </label>
          <input name="transl" type="text" class="form-control">
          </div>
          <div class="form-group">
                <label for="exampleFormControlSelect1">Languages</label>
                <div class="form-group">
                  <select name="dir"  class="form-control">
                  <option value="en">to Lithuania</option>
                  <option value="lt">to English</option>
                </select>
                </div>
              <button type="submit" name="button" class="btn btn-primary">Translate</button>
          </div>
        </form>
        </div>

      <?php else :?>

          <?php if ($newWord=='tokio nera'): ?>
                <h1>i cant find it, pls add new translation in dictionary"</h2>
                <form class="" action="index.php" method="get">
                  <div class="form-group">
                    <label name="addLt">New LT word : </label>
                    <input name="addLt" type="text" class="form-control" value="<?php if($dir=='en'){echo $transl;} ?>">
                    <label name="addEn">New EN word : </label>
                    <input name="addEn" type="text" class="form-control" value="<?php if($dir=='lt'){echo $transl;} ?>">
                    <button type="submit" name="button" class="btn btn-primary">Add Word</button>
                  </div>
                </form>
              <?php else: ?>

              <h2> <?php echo translate($transl,$dir);?></h2>
              <a href="index.php" class="btn btn-primary">Back</a>
            <?php endif ?>
        <?php endif ?>


          <!-- <h2><//?php echo translate($transl,$dir); ?></h2>
            <a href="index.php" class="btn btn-primary">Back</a>
        <//?php endif ?>
        </form>

    </div>

  </body>
</html>
