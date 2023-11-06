<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function validateForm() {
        console.log("Ini baris 15");
        return false; //dimanapun ketemu return, akan exit function; perintah bawah tidak jalan
        console.log("Ini baris 17");
        return true; //dalam satu function, bisa ada lebih dari satu return
        console.log("Ini baris 19");
      }

      function validate() {
        var bil1 = document.getElementById("bil1");
        var bil2 = document.getElementById("bil2");
        var nrp = document.getElementById("nrp");

        if (bil1.value == "" && bil2.value == "") {
          alert("Bilangan 1 dan 2 harus diisi");
          return false;
        }
        else if (bil1.value == "") {
          alert("Bilangan 1 harus diisi");
          return false;
        }
        else if (bil2.value == "") {
          alert("Bilangan 2 harus diisi");
          return false;
        }

        else if (nrp.value.length != 10) {
          alert("Harus 10 angka");
          return false;
        }
        else if (isNaN(nrp.value)) {
          alert("NRP harus angka");
          return false;
        }
        else {
          return true;
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <form
        action="http://www.detik.com"
        method="get"
        onsubmit="return validate();"
      >
        <div class="form-group">
          <label for="bil1">Bilangan 1: </label>
          <input type="number" id="bil1" class="form-control" />
        </div>
        <div class="form-group">
          <label for="bil2">Bilangan 2: </label>
          <input type="number" id="bil2" class="form-control" />
        </div>
        <div class="form-group">
          <label for="nrp">NRP: </label>
          <input type="text" id="nrp" class="form-control" />
        </div>
        <input type="submit" value="kirim" class="btn btn-primary" />
      </form>
    </div>
  </body>
</html>
