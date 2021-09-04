<footer class="sticky-footer">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-6">
                <p class="mt-1 mb-0">&copy; Copyright 2020 <strong class="text-dark">Asian Uncensored</strong>. All
                    Rights Reserved<br>
                    <small class="mt-0 mb-0">Adult Video <a class="text-primary" href="/">Sharing Platform <i
                                class="fas fa-heart text-danger"></i> </a>
                    </small>
                </p>
            </div>
            <div class="col-lg-6 col-sm-6 text-right">
               <!--  <div class="app">
                    <a href="#"><img alt="" src="img/google.png"></a>
                    <a href="#"><img alt="" src="img/apple.png"></a>
                </div> -->
            </div>
        </div>
    </div>
</footer>
</div>

</div>


<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a href="{{ route('logout') }}" class="btn btn-primary " onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout

                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">The video is private.</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Continue to login to watch the video.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a href="{{ route('login') }}" class="btn btn-primary " >

                        Login
                </a>


       
            </div>
        </div>
    </div>
</div>



<script src="/vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script src="/vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

<script src="/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>

<script src="/js/custom.js" type="text/javascript"></script>

<script src="/js/rocket-loader.min.js" type="text/javascript"></script>
<script src="/js/beacon.min.js" type="text/javascript"></script>



</body>

</html>