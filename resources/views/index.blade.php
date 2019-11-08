
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AS信息和拓补图 - {{config("app.name")}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/static/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/static/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/static/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        @include('public.menu')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">AS信息与拓补图</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> AS信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <div href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> 名称
                                    <span class="pull-right text-muted small">{{$asn['as-name']}}
                                    </span>
                                </div>
                                <div href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> ASN
                                    <span class="pull-right text-muted small">{{$asn['aut-num']}}
                                    </span>
                                </div>
                                <div href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> 网站
                                    <span class="pull-right text-muted small">{{$asn['website']}}
                                    </span>
                                </div>
                                <div href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> AS-SET
                                    <span class="pull-right text-muted small">{{$asn['as-set']}}
                                    </span>
                                </div>
                                <div href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> NOC
                                    <span class="pull-right text-muted small">{{$asn['noc']}}
                                    </span>
                                </div>

                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            网络拓补图
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <img src="{{$asn['topology']}}" style="width:100%;height:100%">
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/static/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/static/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/static/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/static/dist/js/sb-admin-2.js"></script>

</body>

</html>
