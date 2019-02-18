<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Очістка кеша
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Головна</a></li>
        <li class="active">Очістка кеша</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Назва</th>
                                <th>Описання</th>
                                <th>Дії</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Кеш категорій</td>
                                    <td>Меню категорій на сайті. Кешируется на 1 час</td>
                                    <td><a class="delete" href="<?=ADMIN;?>/cache/delete?key=category"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Кеш фільтрів</td>
                                    <td>Кеш фільтрів і групп фільтрів. Кешируется на 1 час</td>
                                    <td><a class="delete" href="<?=ADMIN;?>/cache/delete?key=filter"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->