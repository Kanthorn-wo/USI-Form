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

    .hyphen-list {
      list-style-type: none;
      padding-left: 0;
    }

    .hyphen-list li::before {
      content: "-";
      margin-right: 5px;
      font-weight: bold;
    }

    .dotted-border {
      border: none;
      /* ลบเส้นขอบเดิม */
      border-bottom: 1px dotted #000;
      /* สร้างเส้นขอบจุดด้านล่าง */
      text-align: center;
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
        <button class="btn btn-success" id="cloneButton"><i class="fas fa-plus mr-1"></i>เพิ่มงบประมาณ</button>
      </div>

      <div class="card mt-3 templat">
        <div class="card-header ">
          <div style="font-weight: 700;">การแบ่งจ่ายเงินงบประมาณโครงการแต่ละงวด</div>
        </div>
        <div class="card-body">
          <div>
            <form id="myForm" action="" method="POST">
              <div class="custom-center" style="color: red">
                <div class="mr-2 period1">
                  งวดที่ 1 เป็นจำนวนเงิน
                </div>
                <div class="mr-2">
                  <input type="number" class="result-budget-per" disabled class="form-control">
                </div>
                <div class="mr-2">
                  บาท
                </div>

                <div class="mr-2">
                  นำส่งค่าบำรุง
                </div>
                <div class="mr-2">
                  <input type="number" class="result-budget-15per" disabled class="form-control">
                </div>
                <div>
                  บาท
                </div>
              </div>

              <label>รายละเอียดการใช้งบประมาณ</label>
              <div>
                <label style="color: red"><small class="period2">งวดที่ 1</small></label>
                <table class="table table-bordered" id="table">
                  <thead>
                    <tr>
                      <th scope="col">ลำดับ</th>
                      <th scope="col">รายการ</th>
                      <th scope="col">งบประมาณ (บาท)</th>
                      <th scope="col">หมายเหตุ</th>
                      <th scope="col">action</th>
                    </tr>
                  </thead>
                  <tbody class="t-body">
                    <tr>
                      <th scope="row" class="numbero">1</th>
                      <td><input type="text" name="particular[]" class="form-control" required></td>
                      <td>
                        <input type="number" name="budget[]" id="budget" class="form-control" placeholder="กรอกตัวเลข">
                      </td>
                      <td><input type="text" name="annotation[]" class="form-control" required></td>
                      <td>
                        <button type="button" class="btn btn-success multi-input-row">
                          <i class="fas fa-plus"></i>
                        </button>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>

              <div class="show-resault">
                ค่าบำรุงมหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน
                <input type="text" class="result-budget-15per dotted-border" placeholder="">
                15%
                <br>
                - มหาวิทยาลัยฯ หรือวิทยาเขต <input type="text" class="result-budget-5per dotted-border"
                  placeholder="">(5%)
                <br>
                - สถาบันบริการวิชาการฯ <input type="text" class="result-budget-5per dotted-border
                  placeholder="">(5%)
                <br>
                - คณะ <input type=" text" class="result-budget-5per dotted-border" placeholder="">(5%)
                <br>
                รวมทั้งสิ้น
                <input type="text" class="result-budget-all dotted-border" placeholder="">

                บาท
              </div>


            </form>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mt-3">บันทึก</button>
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
    $(document).ready(function() {
    // สร้างปุ่มลบและเพิ่มลงใน Element ที่คัดลอก
    function addDeleteButton(cardClone) {
      var deleteButton = $('<button class="deleteButton btn btn-danger">ลบ</button>');
      cardClone.append(deleteButton);
      deleteButton.click(function() {
        // ดำเนินการลบ Element เมื่อปุ่มลบถูกคลิก
        cardClone.remove();
      });
    }
    let i = 1;
    $('#cloneButton').click(function() {
      i++;
      // คัดลอก Element
      var cardClone = $('.templat').first().clone();

      cardClone.find('.period1').text("งวดที่ " + i + " เป็นจำนวนเงิน");
      cardClone.find('.period2').text("งวดที่ " + i + "");
      // เพิ่ม Element ที่คัดลอกลงใน DOM
      $('.templat').last().after(cardClone);

      // เพิ่มปุ่มลบใน Element ที่คัดลอก
      addDeleteButton(cardClone);
    });
  });
  </script>

  <script>
    $(document).ready(function () {
      let i = 1; // เริ่มจาก 1
      const maxRows = 10; // จำนวนแถวสูงสุด

    $(document).ready(function() {
      $('input[name^="budget"]').on('input', function() {
        updateBudgetSum();
      });
    });
    // Function to recalculate and update the budget sum
    function updateBudgetSum() {
      let sum = 0;
      const budgetValues = []; // Initialize an array to store budget values

      $('input[name="budget[]"]').each(function() {
        const budgetValue = parseFloat($(this).val()) || 0;
        sum += budgetValue;
        budgetValues.push(budgetValue); // Add budget value to the array
      });
      let per15 = sum*(15/100);
      let resalt_per = sum-per15;
      let per5 = sum*(5/100);
      $('.result-budget-per').val((resalt_per).toFixed(2)); // Display the sum in the result input field
      $('.result-budget-15per').val((per15).toFixed(2));
      $('.result-budget-5per').val((per5).toFixed(2));
      $('.result-budget-all').val((sum).toFixed(2));
      console.log('Budget Values: ', budgetValues); // Log the array of values
    }
    
      // Add an event listener to the "budget" input fields to update the sum and log values
      $(document).on('input', 'input[name="budget[]"]', function() {
        updateBudgetSum();
      });
      // multi input add
      $('.multi-input-row').click(function (e) {
        if (i < maxRows) {
          renumberRows();
          i++;
          
          $('#table tbody').append(
            `<tr>
              <th scope="row" class="numbero" style="color:red;">` + i + `</th>
              <td><input type="text" name="particular[]" class="form-control" required></td>
              <td>
                <input type="number" name="budget[]" id="budget" class="form-control" placeholder="กรอกตัวเลข">
              </td>
              <td><input type="text" name="annotation[]" class="form-control" required></td>
              <td>
                <button type="button" class="btn btn-danger remove-row">
                  <i class="fas fa-minus"></i>
                </button>
              </td>
            </tr>`
          );
      
          if (i >= maxRows) {
            $('.multi-input-row').prop('disabled', true);
          }
          // Call the function to update the budget sum
          // updateBudgetSum();
          $(document).ready(function() {
            $('input[name^="budget"]').on('input', function() {
              updateBudgetSum();
          });
    });
        }
      });

      // // Add an event listener to the "budget" input fields to update the sum
      // $(document).on('input', 'input[name="budget[]"', function() {
      //   updateBudgetSum();
      // });

      
      // Function to renumber rows
      function renumberRows() {
        let rowNum = 1;
        $('.t-body tr').each(function() {
          $(this).find('.numbero').text(rowNum);
          rowNum++;
        });
      }

      // Delete row
      $(document).on("click", ".remove-row", function() {
        $(this).closest("tr").remove();
        i--;
        renumberRows();

        if (i < maxRows) {
          $('.multi-input-row').prop('disabled', false);
        }

         // Call the function to update the budget sum
        updateBudgetSum();
      });
    });
  </script>

  <script>
    $(document).ready(function () {
  // Attach an event listener to the input elements
  $('input[name="budget[]"]').on('input', function() {
    // Create an empty array to store the values
    const budgetValues = [];

    // Iterate through all input fields with the name "budget[]"
    $('input[name="budget[]"]').each(function() {
      budgetValues.push($(this).val());
    });

    // Log the array of values
    console.log('Budget Values: ', budgetValues);
  });
});
  </script>

  <script>
    const numberInput = document.getElementById("numberInput");
    const displayInput = document.getElementById("displayInput");
    const numberInput2 = document.getElementById("numberInput2");
    const displayInput2 = document.getElementById("displayInput2");

    numberInput.addEventListener("input", function() {
      displayInput.value = numberInput.value;
    });

    numberInput2.addEventListener("input", function() {
      displayInput2.value = numberInput2.value;
    });


  </script>

  {{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
  const numberInput = document.getElementById("numberInput");
  const numberInput2 = document.getElementById("numberInput2");
  const resultInput = document.getElementById("resultInput");
  const percent1 = document.getElementById("percent1");
  const percent2 = document.getElementById("percent2");
  const percent3 = document.getElementById("percent3");

  function updateSum() {
    const value1 = parseFloat(numberInput.value) || 0; // แปลงค่าที่ป้อนเป็นตัวเลขแบบ float
    const value2 = parseFloat(numberInput2.value) || 0;
    const sum = value1 + value2;
    const sum_per = (5 / 100) * sum
    // อัปเดตค่าในฟิลด์ resultInput และทำให้ฟิลด์นี้ไม่สามารถแก้ไขได้ (disabled)
    resultInput.value = sum.toFixed(2); // แสดงผลรวมพร้อมทั้งสองตำแหน่งทศนิยม
    percent1.value = sum_per.toFixed(2);
    percent2.value = sum_per.toFixed(2);
    percent3.value = sum_per.toFixed(2);
    // ทำให้ resultInput ไม่สามารถแก้ไขได้ (disabled)
    resultInput.disabled = true;
    percent1.disabled = true;
    percent2.disabled = true;
    percent3.disabled = true;
  }

  // เพิ่ม Event Listener สำหรับทั้ง 2 input fields
  numberInput.addEventListener("input", updateSum);
  numberInput2.addEventListener("input", updateSum);
  });
  
  </script> --}}




  {{-- const numberInput = document.getElementById("numberInput");
  const resultDiv = document.getElementById("result");

  numberInput.addEventListener("input", updateBahtText);

  function updateBahtText() {
  const number = parseFloat(numberInput.value);
  if (!isNaN(number)) {
  const bahtText = numberToBaht(number);
  resultDiv.textContent = bahtText;
  } else {
  resultDiv.textContent = "ไม่ได้ป้อนตัวเลขที่ถูกต้อง";
  }
  } --}}



</body>

</html>