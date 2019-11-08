        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{config('app.name')}}</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    
                        <li>
                            <a href="{{route('index')}}"><i class="fa fa-sitemap fa-fw"></i>AS信息与拓补图</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i>BGP骨干<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach(\App\Model\Router::where('display',1)->select(['id','name'])->get() as $router)
                                <li>
                                    <a href="{{route('graph_route',['id'=>$router->id])}}">{{$router->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-compress fa-fw"></i>IX<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach(\App\Model\Ix::where('display',1)->select(['id','name'])->get() as $ix)
                                <li>
                                    <a href="{{route('graph_ix',['id'=>$ix->id])}}">{{$ix->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>