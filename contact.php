<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Manan Kukreja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="project.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item"> 
    <a class="nav-link" href="https://drive.google.com/file/d/1ZIRVzrVdvrjFCEc0RwUhY9m9epqjperT/view?usp=drive_link">Resume</a>
  </li>
      
        
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="jumbotron">
<section class="my-5">
    <div class="py-5"> 
        <h2 class="text-center">
            Contact
        </h2>
    </div>
    <div class="w-50 m-auto">
      <form action="user-info.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Manan Kukreja">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control" placeholder="abc@gmail.com">
          <label>Mobile no</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="9451XXXXXX">
          <label>Social media link</label>
          <input type="link" name="social" autocomplete="off" class="form-control" placeholder="Github.com/MananKukreja24">
          <label>Comment</label>
          <textarea class="form-control" name="comments" placeholder="Type your message here" ></textarea>
          

        </div>
        <button type="submit" class="btn btn-success">Submit</button>

      </form>
    </div>
</section>
<footer>
<div>
<p class="p-3 bg-dark text-white text-center">LinkedIn Id: <a href="https://www.linkedin.com/in/manan-kukreja-9a3a72231">Click Here!!</a></p>
<p class="p-3 bg-dark text-white text-center">Github Id: <a href="https://github.com/MananKukreja24">Click Here!!</a></p>

</div>
</footer>
</body>
</html>
  