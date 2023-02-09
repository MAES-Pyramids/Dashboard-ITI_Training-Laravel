<!doctype html>
<html class="no-js" lang="">
@include('admin.layout.head')

<body>
@include('admin.layout.aside') 


<div id="right-panel" class="right-panel">
    @include('admin.layout.header')
    

    <div class="content">
       @yield("content")
    </div>
    
    <div class="clearfix"></div>

    
    @include('admin.layout.footer')
   

</div>

<!-- Scripts -->
@include('admin.layout.script')
</body>
</html>
