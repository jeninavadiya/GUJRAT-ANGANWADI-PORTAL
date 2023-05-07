<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complainpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="complain.css" rel="stylesheet" >
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row mx-0 justify-content-center">
          <div class="col-lg-10 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
            <form
              method="POST"
              class="w-100 rounded-1 p-4 border bg-white"
              action="anganwadi_complainbox.php"
              enctype="multipart/form-data">
              <h1> Complain Box</h1>
              <label class="d-block mb-4">
                <span class="form-label d-block">Anganwadi name</span>
                <input
                  name="acname"
                  type="text"
                  class="form-control"
                  placeholder="Anganwadi name"
                />
              </label>
      
              <label class="d-block mb-4">
                <span class="form-label d-block">username</span>
                <input
                  name="acusername"
                  type="text"
                  class="form-control"
                  placeholder="username"
                />
              </label>
              <label class="d-block mb-4">
                <span class="form-label d-block">What's wrong?</span>
                <textarea
                  name="complain"
                  class="form-control"
                  rows="3"
                  placeholder="Please describe your problem"
                ></textarea>
              </label>
      
              <div class="mb-3">
                <button type="submit" class="btn btn-outline-dark px-3 rounded-3">
                  Submit
                </button>
              </div>
      
              <div class="d-block text-end">
                <div class="small">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
</body>
</html>