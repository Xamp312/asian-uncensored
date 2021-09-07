@foreach($headerAds as $headerAd)

    @if($headerAd->screen == "desktop")
        <div class="d-none d-md-block d-lg-block d-sm-block">

            <?php echo $headerAd->script; ?>

        </div>

    @else 
        <div class="d-md-none d-lg-none">
            <?php echo $headerAd->script; ?>

        </div>

    @endif 

@endforeach


