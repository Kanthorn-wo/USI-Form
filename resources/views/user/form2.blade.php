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

      <div>
        <form id="myForm" action="" method="POST">
          <div class="input-group flex-nowrap mt-5">
            <div class="input-group-prepend">
              <span class="input-group-text">พื้นที่ดำเนินการ</span>
            </div>
            <input type="text" class="form-control" placeholder="" />
          </div>

          <div>
            <label class=" mt-3"><b>วิธีดำเนินการ (รายละเอียดกิจกรรม)</b></label>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">กิจกรรม/ขั้นตอน</th>
                  <th scope="col">ระยะเวลา</th>
                  <th scope="col">ผู้รับผิดชอบ</th>

                </tr>
              </thead>
              <tbody>
                <tr>

                  <td>
                    <label><small>ขั้นเตรียมงาน (PLAN)</small></label>
                    <input type="text" name="plan" class="form-control " required>
                  </td>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div class="custom-center">
                      <input type="number" name="plan-time" class="form-control mr-2" placeholder="กรอกเป็นตัวเลข"
                        required>
                      <div>วัน</div>
                    </div>
                  </td>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div id="input-container">
                      <div style="display: flex">
                        <input type="text" name="input-plan[]" placeholder="plan" class="form-control mr-1">
                        <button type="button" class="btn btn-success multi-plan"><i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>
                    <label><small>ขั้นดำเนินการ (DO)</small></label>
                    <input type="text" name="do" class="form-control " required>
                  </th>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div class="custom-center">
                      <input type="number" name="do-time" class="form-control mr-2" placeholder="กรอกเป็นตัวเลข"
                        required>
                      <div>วัน</div>
                    </div>

                  </td>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div id="input-container-do">
                      <div style="display: flex">
                        <input type="text" name="input-do[]" placeholder="do" class="form-control mr-1">
                        <button type="button" class="btn btn-success multi-do"><i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                  </td>

                </tr>
                <tr>
                  <th>
                    <label><small>ขั้นตรวจสอบ (CHECK)</small></label>
                    <input type="text" name="check" class="form-control " required>
                  </th>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div class="custom-center">
                      <input type="number" name="check-time" class="form-control mr-2" placeholder="กรอกเป็นตัวเลข"
                        required>
                      <div>วัน</div>
                    </div>
                  </td>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div id="input-container-check">
                      <div style="display: flex">
                        <input type="text" name="input-check[]" placeholder="check" class="form-control mr-1">
                        <button type="button" class="btn btn-success multi-check"><i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                  </td>

                </tr>
                <tr>
                  <th>
                    <label><small>ขั้นรายงาน (ACTION)</small></label>
                    <input type="text" name="action" class="form-control " required>
                  </th>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div class="custom-center">
                      <input type="number" name="action-time" class="form-control mr-2" placeholder="กรอกเป็นตัวเลข"
                        required>
                      <div>วัน</div>
                    </div>

                  </td>
                  <td>
                    <label><small>&nbsp;</small></label>
                    <div id="input-container-action">
                      <div style="display: flex">
                        <input type="text" name="input-action[]" placeholder="action" class="form-control mr-1">
                        <button type="button" class="btn btn-success multi-action"><i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                  </td>

                </tr>

              </tbody>
            </table>
          </div>

          <div>
            <label class=" mt-3"><b>การติดตามและประเมินผล</b></label>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ตัวชี้วัดความสำเร็จของแต่ละกิจกรรม</th>
                  <th scope="col">วิธีการประเมิน</th>
                  <th scope="col">เครื่องมือที่ใช้</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>
                    <label><small>ผลผลิต ( outputs )</small></label>
                    <input type="text" name="check" class="form-control " required>
                  </th>
                  <td rowspan="2">
                    <label><small>&nbsp;</small></label>
                    <textarea class="form-control" rows="5"></textarea>

                  </td>
                  <td rowspan="2">
                    <label><small>&nbsp;</small></label>

                    <label><small>&nbsp;</small></label>
                    <textarea class="form-control" rows="5"></textarea>

                  </td>

                </tr>
                <tr>
                  <th>
                    <label><small>ผลลัพธ์ ( outcome )</small></label>
                    <input type="text" name="action" class="form-control " required>
                  </th>



                </tr>

              </tbody>
            </table>
          </div>

          <div>
            <label>ผลที่คาดว่าจะได้รับ</label>
            <div id="input-container-result">
              <div style="display: flex">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">1.</span>
                  </div>
                  <input type="text" name="inputs1[]" class="form-control " required>
                </div>
                <button type="button" class="btn btn-success multi-result"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>

          <div>
            <label class="mt-3"><b>ลักษณะแหล่งงบประมาณ</b></label>
            <div class="ml-3">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">รัฐบาล</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                <label class="form-check-label" for="exampleCheck2">รัฐวิสาหกิจ</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                <label class="form-check-label" for="exampleCheck3">เอกชน</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">บุคคลธรรมดา
                </label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2" />
                <label class="form-check-label" for="exampleCheck2">ต่างประเทศ
                </label>
              </div>
              <div class="form-check ">
                <input type="checkbox" class="form-check-input" id="myCheckbox" />
                <label class="form-check-label" for="exampleCheck2">อื่นๆ ระบุ
                </label>
                <input type="text" id="textInput" disabled>
              </div>


            </div>
          </div>

          <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
        </form>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    $('.multi-plan').click(function (e) {
      
      $('#input-container').append(
        `<div style="display: flex" class="mt-1">
          <input type="text" name="input-plan[]" placeholder="plan" class="form-control mr-1">
          <button type="button" class="btn btn-danger remove-plan"><i class="fas fa-minus"></i></button>
        </div>`
      );
    });

    $(document).on('click', '.remove-plan', function () {
      $(this).closest('div').remove();
    });
  });
</script>

<script>
  $(document).ready(function () {


    $('.multi-do').click(function (e) {

      $('#input-container-do').append(
        `<div style="display: flex" class="mt-1">
          <input type="text" name="input-do[]" placeholder="do" class="form-control mr-1">
          <button type="button" class="btn btn-danger remove-do "><i class="fas fa-minus"></i></button>
        </div>`
      );
    });

    $(document).on('click', '.remove-do', function () {
      $(this).closest('div').remove();
    });
  });
</script>

<script>
  $(document).ready(function () {


    $('.multi-check').click(function (e) {

      $('#input-container-check').append(
        `<div style="display: flex" class="mt-1">
          <input type="text" name="input-check[]" placeholder="check" class="form-control mr-1">
          <button type="button" class="btn btn-danger remove-check "><i class="fas fa-minus"></i></button>
        </div>`
      );
    });

    $(document).on('click', '.remove-check', function () {
      $(this).closest('div').remove();
    });
  });
</script>

<script>
  $(document).ready(function () {


    $('.multi-action').click(function (e) {

      $('#input-container-action').append(
        `<div style="display: flex" class="mt-1">
          <input type="text" name="input-action[]" placeholder="action" class="form-control mr-1">
          <button type="button" class="btn btn-danger remove-action "><i class="fas fa-minus"></i></button>
        </div>`
      );
    });

    $(document).on('click', '.remove-action', function () {
      $(this).closest('div').remove();
    });
  });
</script>


{{-- <div id="input-container-result">
  <div style="display: flex">
    <div class="input-group ">
      <div class="input-group-prepend">
        <span class="input-group-text">1.</span>
      </div>
      <input type="text" name="inputs1[]" class="form-control " required>
    </div>
    <button type="button" class="btn btn-success multi-result"><i class="fas fa-plus"></i></button>
  </div>
</div> --}}

<script>
  $(document).ready(function () {
    let i = 0;
    const maxRows = 9; // Maximum number of rows

    function renumberRows() {
      const rows = $('#input-container-result > div');
      rows.each(function (index) {
        $(this).find('span.input-group-text').text(index + 1 + '.');
      });
    }

    $('.multi-result').click(function (e) {
      if (i < maxRows) {
        i++;
        $('#input-container-result').append(
          `<div style="display: flex "class="mt-2">
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text">` + (i + 1) + `.</span>
              </div>
              <input type="text" name="input-result[]" class="form-control " required>
            </div>
            <button type="button" class="btn btn-danger remove-result "><i class="fas fa-minus"></i></button>
          </div>`
        );

        if (i >= maxRows) {
          $('.multi-result').prop('disabled', true);
        }

        renumberRows();
      }
    });

    $(document).on('click', '.remove-result', function () {
      $(this).closest('div').remove();
      i--;
      $('.multi-result').prop('disabled', false);
      renumberRows();
    });
  });
</script>

<script>
  const checkbox = document.getElementById("myCheckbox");
  const input = document.getElementById("textInput");

  checkbox.addEventListener("change", function() {
      if (checkbox.checked) {
          input.removeAttribute("disabled");
      } else {
          input.setAttribute("disabled", "true");
      }
  });
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