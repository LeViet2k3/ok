<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Information Person</h2>
               <form action="info.php" method="Post">
               <div class="mb-3 row">
                   <label for="txtFullName" class="col-2 col-form-label">Fullname</label>
                   <div class="col-4">
                      <input type="text" class="form-control" name="txtFullName" id="txtFullName" placeholder="Fullname">
                   </div>
              </div>
                 <input class="btn btn-primary" type="submit" value="Send">
               </form>
            </div>
        </div>
    </div>
</body>
</html>


