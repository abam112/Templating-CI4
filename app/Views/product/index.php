<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<br>
<br>

<head>

</head>


<body class="container">
<main role="main " class="container">


<figure class="text-center">
    <blockquote class="blockquote">
    <p>Ingin menambahkan barang? Klik tombol dibawah!</p>
    </blockquote>
  
    <blockquote class="blockquote">
    <a href="/product/new"><button type="button" class="btn btn-success">Add new product</button></a>
    </blockquote>
</figure>


<div class="container">
  <div class="row">
    <div class="col">

    <table class="table">
      <thead class="thead-dark">
          <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
          </tr>
      </thead>

      <tbody>
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
          <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['category'] ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/product/<?= $item['id'] ?>/edit"<button type="button" class="btn btn-outline-info">Edit</button></a>

                    <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                  </div>
                </td>
          </tr>
        
        <?php endforeach ?>
  </tbody>
</table>

    </div>
  </div>
</div>
</body>
<?= $this->endSection() ?>