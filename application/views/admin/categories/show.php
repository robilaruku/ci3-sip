<?php $this->load->view('admin/template/header'); ?>
  <?php $this->load->view('admin/template/navbar'); ?>
  <?php $this->load->view('admin/template/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Categories</li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  		<div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                         <h3 class="card-title">
                            Form Detail Category
                         </h3>
                     </div>
                     <div class="card-body">
                         <div class="form-group">
                             <label for="Name">Name</label>
                             <input id="my-input" class="form-control" type="text" name="name" value="<?= $category->name ?>" placeholder="Name..." disabled readonly>
                        </div>
                        <div class="form-group">
                             <label for="Name">Status</label> 
                             <input id="my-input" class="form-control" type="text" name="status" value="<?= $category->status ?>" placeholder="Status..." disabled readonly>
                        </div>
                     </div>
                     <div class="card-footer">
                         <a href="<?= base_url('categories/index'); ?>" class="btn btn-outline-info"><i class="fa fa-arrow-left"></i> Back</a>
                     </div>
                 </div>
             </div>
		</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('admin/template/footer'); ?>

