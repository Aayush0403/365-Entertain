<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>365-Entertain-contact</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    @media screen and (max-width:780px)
    {
      .form-group{ 
       padding: 5px;
      }
      #wdth
      {

        width: 21rem;
        margin: 4px;
      }
    }
      
    </style>

    <link
      rel="stylesheet"
      href="../css/fontawesome-free-5.15.1-web/css/all.min.css"
    />
  </head>
  <body>
    <div class="support__page">
      <nav class="navbar navbar-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand text-white" href="#" style="font-size: 30px" >
            <span style="color:#f2a223">365-</span ><span style="color:red;">Entertain</span></a>
                <a class="nav-link" href="main.php"><button type="button" class="btn btn-primary">Home</button></a>
          </div>
        </div>
      </nav>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="main.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6">
            <div class="card"  id="wdth">
              <h5 class="card-header text-white bg-primary">
                <i class="fas fa-envelope text-white"></i> Contact Us.
              </h5>

              <form class="px-3 pt-4">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Enter Name"
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message</label>
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="7"
                  ></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-4">
                  Submit
                </button>
              </form>
            </div>
          </div>
    </div>
  </body>
</html>
