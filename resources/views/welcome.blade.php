<!doctype html>
<html lang="en">

<head>
  <title>Data Peserta GITS.ID</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="card shadow m-5">
      <div class="card-header py-3 bg-success">
          <h6 class="m-0 font-weight-bold text-white">Data Mahasiswa</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead class="alert-success text-gray-800">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($mahasiswa as $mhs)
                    <tr>
                      <th scope="col">{{$mhs->id}}</th>
                      <td>{{$mhs->nama_mahasiswa}}</td>
                      <td>{{$mhs->alamat_mahasiswa}}</td>
                      <td>{{$mhs->jenis_kelamin}}</td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div>  
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>