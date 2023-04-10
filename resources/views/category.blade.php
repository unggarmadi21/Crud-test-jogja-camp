<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <title>Jogja Camp Test</title>
  </head>
  <body>
    <h1 class="text-center">Jogja Camp Test</h1>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-horizontal">
                            <a href="" class="btn btn-primary mb-3">+ Tambah Kategori Baru</a>
    <table id="myTable" class="table table-hover scroll-horizontal-vertical w-100">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Is Publish</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        var datatable = $('#myTable').DataTable({
          processing : true,
          serverSide : true,
          ordering : true,
          ajax: {
            url: '{!! url()->current() !!}',
            dataSrc: 'data',
          },
          columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'is_publish', name: 'is_publish' },
            {
              data: 'category',
              name: 'category',
              orderable: 'false',
              searcable: 'false',
              width: '15%'
            },
          ],
        })
      </script>
</html>