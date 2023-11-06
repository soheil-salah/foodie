<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    @stack('title')

    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @include('admin.includes.assets.styles')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <x-admin.navs.sidebar>
            <x-admin.navs.nav-small-cap title="Home" />
            <x-admin.navs.sidebar-item icon="home" title="Dashboard" route="admin.dashboard" />
            
            <x-admin.navs.nav-small-cap title="Kitchen" />
            <x-admin.navs.sidebar-item icon="category" title="Section" route="admin.kitchen.section.all" />
            <x-admin.navs.sidebar-item icon="tags" title="Category" route="admin.kitchen.category.all" />
            <x-admin.navs.sidebar-item icon="clipboard-list" title="Items" route="admin.kitchen.item.all" />
            <x-admin.navs.sidebar-item icon="tools-kitchen-2" title="Product" />
            <x-admin.navs.sidebar-item icon="clipboard-list" title="Extras" route="admin.kitchen.extras.all" />

            <x-admin.navs.nav-small-cap title="Customers" />
            <x-admin.navs.sidebar-item icon="users" title="List of Customers" route="admin.user.all" />
            <x-admin.navs.sidebar-item icon="user-plus" title="Add Customer" route="admin.user.create" />
            <x-admin.navs.sidebar-item icon="user-exclamation" title="Banned Customer" route="admin.user.banned.all" />

            <x-admin.navs.nav-small-cap title="Operator" />
            <x-admin.navs.sidebar-item icon="shopping-cart-plus" title="Place new Order" route="admin.operator.place-new-order" />
            <x-admin.navs.sidebar-item icon="clipboard-list" title="Orders" />
            <x-admin.navs.sidebar-item icon="thumb-up" title="Confirmed Orders" />
            <x-admin.navs.sidebar-item icon="rotate-clockwise-2" title="Pending Orders" />
            <x-admin.navs.sidebar-item icon="garden-cart-off" title="Cancelled Orders" />
            <x-admin.navs.sidebar-item icon="123" title="Order Status" />
            
            <x-admin.navs.nav-small-cap title="Shipping" />
            <x-admin.navs.sidebar-item icon="map-2" title="Cities" />
            <x-admin.navs.sidebar-item icon="bike" title="Couriers" />

        </x-admin.navs.sidebar>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Header Start -->
            <x-admin.navs.navbar>
                <x-admin.navs.navbar-link title="Profile" subTitle="Account Settings" />
            </x-admin.navs.navbar>
            <!--  Header End -->

            <div class="container-fluid">
                {{ $slot }}
            </div>
        </div>

        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    @include('admin.includes.assets.scripts')
</body>
</html>
