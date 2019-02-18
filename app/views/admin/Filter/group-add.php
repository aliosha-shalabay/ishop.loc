<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новая группа фільтрів
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Головна</a></li>
        <li><a href="<?=ADMIN;?>/filter/attribute-group">Групи фільтрів</a></li>
        <li class="active">Новая группа</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/filter/group-add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Навзва Групи</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Навзва Групи" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Додати</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->