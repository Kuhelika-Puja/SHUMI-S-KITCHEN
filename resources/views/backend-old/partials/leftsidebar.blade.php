<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="{{route('dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Home Page </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('homepage.index') }}">Content</a></li>
                        <li><a href="{{ route('homepageimage.index') }}">Image</a></li>
                    </ul>
                </li>
                
              
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span>  About Us </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li class="has_sub">
                            <a href="{{route('aboutus.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> About Us </span> </a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="has_sub">
                    <a href="{{route('blog.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Blog </span> </a>
                </li>
               
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> E-ecommerce </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('servicecharge.index')}}">Manage Service Charge</a></li>
                        <li><a href="{{route('currency.index')}}">Manage Currency</a></li>
                        <li><a href="{{route('product_category.index')}}">Product Category</a></li>
                        <li><a href="{{route('product.index')}}">Product</a></li>
                        <li><a href="{{route('order.index')}}">Order</a></li>
                        <li><a href="{{ url('admin/total/buynow') }}">Buy Now Orders</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="{{route('contactus.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Contact Us </span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{route('testimonial.index')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Banner </span> </a>
                </li>
             
                <li class="has_sub">
                    <a href="{{url('admin/subscriber')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span>Subscribers</span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Gallery </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                       <li><a href="{{url('admin/gallery-category')}}" class="news-menus" ><span>Gallery Category</span></a></li>        
                        <li><a href="{{url('admin/gallery')}}"><span>Gallery Post</span></a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>