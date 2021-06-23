<?= $this->extend('adminlte') ?>

<?= $this->section('styles') ?>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url();?>dist/select2/css/select2.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url();?>dist/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> -->
<?= $this->endSection() ?>

<?= $this->section('page_header') ?>
<div class="row mb-2">
    <div class="col-sm-6">
            <h1><?= esc($title)?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= esc($title)?></li>
        </ol>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php if(!empty(session()->getFlashdata('failMsg'))):?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('failMsg');?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif;?>
<?php if(!empty(session()->getFlashdata('successMsg'))):?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('successMsg');?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif;?>

<div class="card">
  <div class="card-body">
    <table class="table table-hover" id="users">
        <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col" style="width: 20%;">Name</th>
              <th scope="col">Email</th>
              <th scope="col" style="width: 15%;">Role</th>
              <th scope="col">Birthdate</th>
              <th scope="col">Status</th>
              <th scope="col" style="width: 10%;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $ctr = 1?>
            <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row"><?= esc($ctr)?></th>
                    <td scope="row"><?= esc($user['first_name'])?> <?= esc($user['last_name'])?></td>
                    <td scope="row"><?= esc($user['email'])?></td>
                    <td scope="row"><?= esc($user['role_name'])?></td>
                    <td scope="row">
                      <?php
                        $date = date_create(esc($user['birthdate']));
                        echo esc(date_format($date, 'F d, Y'));
                      ?>
                    </td>
                    <td scope="row">
                      <?= $user['status'] == 'a' ? 'Active': ''?>
                      <?= $user['status'] == 'i' ? 'Inactive': ''?>
                      <?= $user['status'] == 'v' ? 'Not verified': ''?>
                    </td>
                    <td>
                      <a class="btn btn-info btn-sm" href="<?= base_url()?>/user/<?= esc($user['username'])?>" role="button" data-toggle="tooltip" data-placement="bottom" title="View User"><i class="fa fa-bars" aria-hidden="true"></i></a>
                      <?php foreach($perm_id['perm_id'] as $perms):?>
                        <?php if($perms == '2'):?>
                          <button type="button" value="<?= esc($user['id'])?>" class="btn btn-danger btn-sm del" data-toggle="tooltip" data-placement="bottom" title="Delete user"><i class="fas fa-trash"></i></button>
                        <?php endif;?>
                      <?php endforeach;?>
                    </td>
                </tr>
                <?php $ctr++?>            
            <?php endforeach;?>
        </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<!-- Select2 -->
<script src="<?= base_url();?>/dist/select2/js/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4',
    // })
  })
</script>

<script>
// BS4 tooltips
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
  // DataTables
  $(function () {
    $('#users').DataTable({
      "responsive": true,
      "autoWidth": false,
      });
  });
</script>

<!-- SweetAlert JS -->
<script src="<?= base_url();?>/js/sweetalert.min.js"></script>
<script src="<?= base_url();?>/js/sweetalert2.all.min.js"></script>
<!-- SweetAlert2 -->
<script type="text/javascript">

  $(document).ready(function ()
  {
    $('.status').on('change', function() {
      var $form = $(this).closest('form');
      $form.submit();
    });

    $('.del').click(function (e)
    {
      e.preventDefault();
      var id = $(this).val();
      console.log(id);

      Swal.fire({
        icon: 'question',
        title: 'Delete?',
        text: 'Are you sure to delete role?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      })/*swal2*/.then((result) =>
      {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed)
        {
          window.location = 'roles/delete/' + id;
        }
        else if (result.isDenied)
        {
          Swal.fire('Changes are not saved', '', 'info')
        }
      })//then
    });
  });
</script>
<?= $this->endSection() ?>
    