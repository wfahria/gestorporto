@include('_header')
@include('_leftmenu')

<div class="page-wrapper">

    @yield('content')

    <footer class="footer text-center">

    </footer>
</div>

</div>

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/extra-libs/sparkline/sparkline.js"></script>
<script src="../dist/js/waves.js"></script>
<script src="../dist/js/sidebarmenu.js"></script>
<script src="../dist/js/custom.min.js"></script>

@yield('bottom.js')

</body>

</html>
