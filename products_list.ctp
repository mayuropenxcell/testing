<script src="<?php echo $this->webroot; ?>admintheme/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
<script src="<?php echo $this->webroot; ?>admintheme/assets/plugins/DataTables/js/jquery.dataTables.columnFilter.js"></script>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Product Management</li>        
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Product Management</h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel panel-inverse">
                    <div class="pull-right">
                        <div class="m-r-10">
                            <div class="m-t-5">
                                <button id="deleteMultiple" type="button" class="btn btn-danger m-r-5 m-b-5 btn-sm"><i class="fa fa-trash-o"></i><b> Delete</b></button>
                            </div>
                        </div>
                    </div>    
                    <div class="pull-right">
                        <div class="btn-group m-t-5 m-r-10">
                            <button data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle"><i class="fa fa-plus-circle"></i><strong> Add Product</strong> <span class="caret"></span></button>
                            <ul class="dropdown-menu ">
                                <li ><a class="ajaxhref" href="<?php echo $this->webroot . 'admins/add_beer'; ?>" class=""><i class="fa fa-plus-circle "></i><strong> Beer</strong></a></li>
                                <li class="divider"></li>                                
                                <li><a class="ajaxhref" href="<?php echo $this->webroot . 'admins/add_wine'; ?>"><i class="fa fa-plus-circle"></i><strong> Wine</strong></a></li>
                                <li class="divider"></li>                                
                                <li><a class="ajaxhref" href="<?php echo $this->webroot . 'admins/add_spirit'; ?>"> <i class="fa fa-plus-circle"></i><strong> Spirit</strong></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-l-10">
                        <div class="pull-left">
                            <div class="m-r-10">
                                <div class="m-t-5">
                                    <a class="ajaxhref" href="<?php echo $this->webroot . 'admins/products_list?category=all'; ?>"><button type="button" class="category-all btn btn-white m-r-5 m-b-5 btn-sm"><b> All </b><span class="badge " style="background-color:#00acac" ><?php echo $allCount; ?></span></button></a>
                                </div>
                            </div>
                        </div>  
                        <div class="pull-left">
                            <div class="m-r-10">
                                <div class="m-t-5">
                                    <a class="ajaxhref" href="<?php echo $this->webroot . 'admins/products_list?category=wine'; ?>"><button type="button" class="category-wine btn btn-white m-r-5 m-b-5 btn-sm"><b> Wine </b><span class="badge " style="background-color:#00acac"><?php echo $wineCount; ?></span></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="pull-left">
                            <div class="m-r-10">
                                <div class="m-t-5">
                                    <a class="ajaxhref" href="<?php echo $this->webroot . 'admins/products_list?category=beer'; ?>"><button type="button" class="category-beer btn btn-white m-r-5 m-b-5 btn-sm"><b> Beer </b><span class="badge "style="background-color:#00acac" ><?php echo $beerCount; ?></span></button></a>
                                </div>
                            </div>
                        </div>  
                        <div class="pull-left">
                            <div class="m-r-10">
                                <div class="m-t-5">
                                    <a class="ajaxhref" href="<?php echo $this->webroot . 'admins/products_list?category=spirits'; ?>"><button type="button" class="category-spirits btn btn-white m-r-5 m-b-5 btn-sm"><b> Spirit </b><span class="badge "style="background-color:#00acac" ><?php echo $spiritsCount; ?></span></button></a>
                                </div>
                            </div>
                        </div>                                                                 
                    </div>                                                         
                    <div class="panel-heading">
                        <h4 class="panel-title">&nbsp;</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="input text form-group col-md-6 col-sm-6 pull-right padding-none margin-none">                                
                                <div class="col-md-3" style="margin-top:5px">
                                    <a class="btn btn-success ajaxhref" style="float: left; margin-top:13px" href="/admins/products_list"><i class="fa fa-refresh"></i></a>
                                </div>
                                <div class="col-md-9">
                                    <input name="search" class="form-control" style="margin-top:15px;" placeholder="Search by Product Name" type="text" id="SupplierSearch">
                                </div>
                            </div>
                            <?php
                            if (isset($items) && !empty($items)) {
                                $count = 0;
                                ?>
                                <table id="data-table" class="table table-striped " class="dt-body-right">
                                    <thead> 
                                        <tr>
                                            <th><input class="selectall" type="checkbox" value=""></input></th>
                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.product_image', 'Image', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.name', 'Product Name', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.edition', 'Edition', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.category_id', 'Type', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.avg_price', 'Avg Price(USD)', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.barcodes', 'Barcode', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <?php echo "<th class='header-font'>" . $this->Paginator->sort('Item.suppliername', 'Supplier Name', array('class' => 'ajaxhref')) . "</th>"; ?>

                                            <th>Action </th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($items as $item) {
                                            $count++;
                                            ?>
                                            <tr class="<?php
                                            if ($count % 2 == 0) {
                                                echo "even";
                                            } else {
                                                echo "odd";
                                            }
                                            ?> gradeX itemrow">
                                        <input type="hidden" class="id" value="<?php echo $item['Item']['id']; ?>" />
                                        <td><input class="case" type="checkbox" value="<?php echo $item['Item']['id']; ?>"></input></td>
                                        <td>
                                            <div class="dropdown product-image">
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><?php if ($item['Item']['product_image']) { ?>
                                                        <img src="<?php echo S3_IMGURL . 'img/' . $item['Item']['product_image']; ?>" alt="Product Image" /> 
                                                    <?php } ?>
                                                </a>

                                            </div>
                                        </td>
                                        <td><?php echo $item['Item']['name']; ?></td>                                    
                                        <td><?php echo $item['Item']['edition']; ?></td>
                                        <td><?php
                                            if ($item['Item']['category_id'] == 1) {
                                                echo "Beer";
                                            } elseif ($item['Item']['category_id'] == 2) {
                                                echo "Wine";
                                            } else {
                                                echo "Spirit";
                                            }
                                            ?></td>
                                        <td><?php echo $item['Item']['avg_price']; ?></td>                                            
                                        <td><?php echo isset($item['Item']['barcodes']) ? count($item['Item']['barcodes']) : 0; ?></td>
                                        <td><?php echo $item['Item']['suppliername']; ?></td>
                                        <td><div class="btn-group">
                                                <button type="button"  class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right" role="menu">
                                                    <li><a class="ajaxhref"  href="<?php if ($item['Item']['category_id'] == 1) {
                                        echo $this->webroot . 'admins/edit_item/' . $item['Item']['id'];
                                    } else if ($item['Item']['category_id'] == 2) {
                                        echo $this->webroot . 'admins/edit_wine/' . $item['Item']['id'];
                                    } else {
                                        echo $this->webroot . 'admins/edit_spirit/' . $item['Item']['id'];
                                    } ?>"><i class="fa fa-pencil"></i> Edit</a></li>                                                    
                                                    <li><a id="delete_item"href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        </tr>
                                <?php } ?>
                                    </tbody>
                                </table>
<?php
} else {
    echo "<div class='alert alert-info ' style='text-align:left; margin-top:70px'>No record(s) found</div>";
}
?>
<?php echo $this->element('admin_pagination'); ?>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->


    <!-- iCheck -->    
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

        });
    </script>   

    <script>

        $(document).ready(function () {
            $('#data-table').dataTable({
                "order": [],
                "columns": [
                    {"width": "5%", "orderable": false}, {"width": "15%", "orderable": false}, {"width": "20%"}, {"width": "20%"}, {"width": "15%"}, {"width": "10%"}, {"width": "8%"}, {"width": "10%"}, {"width": "4%", "orderable": false}
                ],
                "bSort": false,
                "paging": false,
                "info": false,
                "bFilter": false
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            /*$('#data-table').dataTable()
             .columnFilter({
             aoColumns: [ null,null,null,null,{ type: "select", values: [ 'Wine', 'Beer', 'Spirit']  },null,null,{ type: "select", values: [ 'James Adam', 'Michael Clark', 'Andy Flower','Jonathhan Mathew','Ricky Maxwell',]  },null
             ]
             
             });*/
            var category = '<?php if (@$this->params->query["category"]) echo $this->params->query["category"];
else echo "all"; ?>';
            $(".category-" + category).switchClass("btn-white", "btn-primary");
            $(".category-" + category + " span.badge").removeAttr("style");
            $(".selectall").click(function () {
                $('.case').prop('checked', this.checked);
            });
            $(".case").click(function () {
                if ($(".case").length == $(".case:checked").length) {
                    $(".selectall").prop("checked", true);
                } else {
                    $(".selectall").prop("checked", false);
                }
            });
            $('#deleteMultiple').on("click", function (v) {
                var ids = [];
                var i = 0;
                if ($(".case:checked").length > 0) {
                    if (confirm("Are You Sure?")) {
                        $(".case:checked").each(function () {
                            ids[i] = $(this).val();
                            i++;
                        });
                        $.ajax({
                            type: 'POST',
                            data: {'ids': ids},
                            url: '<?php echo $this->webroot; ?>admins/deletemultipleproducts',
                            async: false,
                            dataType: 'json',
                            success: function (data) {
                                if (data.res == "deleted") {
                                    var url = window.location.href;
                                    redirect(url);
                                }
                            }
                        });
                    }
                } else {
                    alert("Please select at least one checkbox to delete multiple records");
                }
            });
            $('#delete_item').on("click", function (e) {
                if (confirm("Are You Sure?")) {
                    var id = $(this).closest('tr').find('.id').val();
                    $.ajax({
                        type: 'GET',
                        url: '<?php echo $this->webroot; ?>admins/delete_item/' + id,
                        async: false,
                        dataType: 'json',
                        success: function (data) {
                            if (data == true) {
                                $(".id").each(function () {
                                    if ($(this).val() == id) {
                                        $(this).closest("tr").remove();
                                    }
                                });
                            }
                        }
                    });
                }
            });
        });
        var currentRequest = null;
        function init() {

            key_count_global = 0;
            $(document).on("keypress", "#SupplierSearch", function () {
                key_count_global++;
                setTimeout("lookup(" + key_count_global + ")", 800);//Function will be called 1 seconds after user stops typing.
            });
        }
        $(document).ready(init);//window.onload = init; //or $(document).ready(init); - for jQuery

        function lookup(key_count) {
            if (key_count == key_count_global) {
                var searchtxt = $("#SupplierSearch").val();
                if (searchtxt.length >= 3 || searchtxt.length == 0) {
                    //$('#loading').show();
                    if (searchtxt == "") {
                        ajaxcat = getUrlParameter('category');
                        var pageno = getUrlPageParameter();
                        if (ajaxcat == "") {
                            ajaxcat = "all";
                        }
                        if (pageno != "") {
                            var page = "/page:" + pageno;
                        }
                    } else {
                        ajaxcat = "all";
                        page = "";
                    }
                    currentRequest = $.ajax({
                        'url': '<?php echo $this->webroot; ?>' + 'admins/products_list' + page,
                        'type': 'GET',
                        'data': {
                            'search': searchtxt,
                            'category': ajaxcat
                        },
                        beforeSend: function () {
                            if (currentRequest != null) {
                                currentRequest.abort();
                            }
                        },
                        success: function (data) {
                            //$('#loading').hide();
                            $('#ajax-content').html(data);
                            $("#SupplierSearch").focus();
                            $("#SupplierSearch").val(searchtxt);
                            //$(".btn-group").removeClass("open");                        
                        }
                    });
                }
            }
        }
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        function getUrlPageParameter() {
            var str = window.location.href;
            str = str.split('/');

            for (var i = 0; i <= str.length - 1; i++) {
                if (str[i].indexOf('page:') != -1) {
                    var str1 = str[i].split('page:');
                    var str2 = str1[1].split('?');
                    return str2[0];
                }
            }

        }
    </script> 
    <!-- ================== END PAGE LEVEL JS ================== -->