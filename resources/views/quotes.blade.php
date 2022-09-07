
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Random Kayne West quotes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="m-3 ">Every times shows 5 random Kayne West quotes.</h2>
 
  <div class="alert alert-success m-2">
    <p><strong> {{ $quotesInfo['quote'] }} </strong>
        <a href="/api" class="btn btn-info btn-lg float-right">
          <span class="glyphicon glyphicon-refresh "></span> Refresh
        </a>
      </p>      
  </div>
  
</div>

</body>
</html>


