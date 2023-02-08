<div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row">
      <?php if(isset($listeObjet))
        {
        foreach ($listeObjet as $objet) { ?>
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3"><?php echo $objet['NomObjet']?></h2>
              <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="<?php echo base_url();?>assets/css-home/images/<?php echo $objet['imgMain']?>" alt="Image" class="img-fluid">
          </div>
        </div>
        <?php }}?>
      </div>
    </div> 

    <div class="footer py-4">
      <div class="container-fluid text-center">
      <?php if(isset($listeObjet))
            {
              foreach ($listeObjet as $objet) { ?>
              <p><?php echo $objet['NomObjet']?></p>
              <?php }
            }?>
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>

    