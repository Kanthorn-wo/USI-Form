<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap"
    rel="stylesheet" />

  <style>
    .thai-text {
      font-family: "Sarabun", sans-serif;
      font-weight: 300;
    }

    .form-container {
      border: 1px solid rgb(0, 0, 0);
      margin: 50px 0 50px 0;
      padding: 10px 40px 10px 40px;
    }

    .logo-container {
      display: flex;
      align-items: self-end;
      justify-content: space-between;
    }

    .border-check {
      border: 1px solid black;
    }

    .custom-right {
      display: flex;
      justify-content: flex-end;
    }

    .custom-center {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  <title>Form1</title>
</head>

<body>


  <div class="container">
    <div class="form-container thai-text">
      <div class="logo-container">
        <div>
          <img
            src="https://upload.wikimedia.org/wikipedia/th/thumb/e/e0/RMUTI_KORAT.png/320px-RMUTI_KORAT.png?20170826045310"
            style="height: 150px" alt="logo-rmuti" />
        </div>
        <div>
          <img src="https://usi.rmuti.ac.th/rmutiexperts/assets/USI_LOGO.png" style="height: 100px" alt="logo-usi" />
        </div>
      </div>

      <div>
        <p class="custom-right">
          ที่ สถาบันบริการวิชาการแห่งมหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน
        </p>
      </div>
      <div>
        <p class="custom-right" id="thai-date"></p>
      </div>

      <div>
        <p class="custom-right">
          เลขที่...........................................
        </p>
      </div>

      <div class="custom-center mt-3">
        <h5>แบบฟอร์มรายละเอียดโครงการและสัญญาให้ทุนอุดหนุนโครงการ</h5>
      </div>

      empty
      <button class="btn btn-danger delete-button">Delete</button>
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>

        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
  </script>

  <script>
    function showInputValue(inputElement) {
      const displayElement = document.getElementById("displayValue");
      const value = inputElement.value;
      displayElement.textContent = "Input value: " + value;
  }
  </script>

</body>

</html>