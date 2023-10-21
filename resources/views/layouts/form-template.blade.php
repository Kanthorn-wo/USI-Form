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

      <div>
        @yield('form-content')
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


</body>

</html>
<script>
  let i = 0;
  const maxRows = 9; // Maximum number of rows

  $('#multi-add').click(function (e) {
    if (i < maxRows) {
      i++;
      $('#table').append(
        `<tr id="row` + i + `">
          <td>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" >`+ (i + 1) +`.</span>
              </div>
              <input type="text" name="inputs1[` + i + `]" class="form-control " required>
            </div>
          </td>
          <td colspan="2"> <!-- Use colspan attribute to stretch the button -->
            <button class="btn btn-danger remove-table-row" style="width: 100%;">ลบ</button>
          </td>
        </tr>`
      );
      if (i >= maxRows) {
        $('#multi-add').prop('disabled', true); 
      } 
      renumberRows(); 
    }
  });

  $(document).on('click', '.remove-table-row', function () {
    $(this).closest('tr').remove();
    i--;
    $('#multi-add').prop('disabled', false);
    renumberRows();
  });

  // Function to renumber order numbers
  function renumberRows() {
    const rows = $('#table tbody tr');
    rows.each(function (index) {
      $(this).find('span.input-group-text').text(index + 1 + '.');
    });
  }
</script>


<script>
  // Function to format the current date in Thai
      function displayThaiDate() {
        const thaiMonths = [
          "มกราคม",
          "กุมภาพันธ์",
          "มีนาคม",
          "เมษายน",
          "พฤษภาคม",
          "มิถุนายน",
          "กรกฎาคม",
          "สิงหาคม",
          "กันยายน",
          "ตุลาคม",
          "พฤศจิกายน",
          "ธันวาคม",
        ];

        const thaiDays = [
          "อาทิตย์",
          "จันทร์",
          "อังคาร",
          "พุธ",
          "พฤหัสบดี",
          "ศุกร์",
          "เสาร์",
        ];

        const now = new Date();
        const day = thaiDays[now.getDay()];
        const date = now.getDate();
        const month = thaiMonths[now.getMonth()];
        const year = now.getFullYear() + 543;

        const thaiDate = `วัน${day} ที่ ${date} ${month} พ.ศ. ${year}`;

        const thaiDateElement = document.getElementById("thai-date");
        thaiDateElement.textContent = thaiDate;
      }

      // Call the function to display the Thai date when the page loads
      displayThaiDate();
</script>


</body>

</html>