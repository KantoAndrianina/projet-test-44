    
    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <h1 class="mb-3">Liste de tous les objets à échanger</h1>    

      <div class="row">
      <?php if(isset($listeObjet))
        {
        foreach ($listeObjet as $objet) { ?>
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3"><?php echo $objet['nomobjet']?></h2>
              <a href="<?php echo base_url();?>index.php/user/detail?id=<?php echo $objet['idObjet']?>" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="<?php echo base_url();?>assets/images/<?php echo $objet['imgMain']?>" alt="Image" class="img-fluid">
          </div>
        </div>
        <?php }}?>
      </div>
    </div> 

    

    