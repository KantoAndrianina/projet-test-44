    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row">
      <?php if(isset($listeObjet))
        {
        foreach ($listeObjet as $objet) { ?>
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3"><?php echo $objet['NomObjet']?></h2>
              <a href="<?php echo base_url();?>index.php/user/detail" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="<?php echo base_url();?>assets/images/<?php echo $objet['imgMain']?>" alt="Image" class="img-fluid">
          </div>
        </div>
        <?php }}?>
      </div>
    </div> 

    

    