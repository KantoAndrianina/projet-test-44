    
    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <h1 class="mb-3">Page Administrateur</h1> 
    <h2>
    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
    <li class="has-children">
        <a href="#">Categorie</a>
    <ul class="dropdown">

        <?php if(isset($getCategorie)){
            foreach ($getCategorie as $categorie) { ?>
            <li><a href="#"><?php echo $categorie['categorie']?></a></li>
        <?php }}?>
    </ul>
    </li>
    </ul>
    </h2>  
    <?php if(isset($countUser)){ ?>
    
    <h2 class="text-white">Nombres d'utilisateurs : <?php echo $countUser?></h2> 
    <?php }?>
    <?php if(isset($countExchange)){ ?>
    
    <h2 class="text-white">Le nombre d'echange : <?php echo $countExchange?></h2> 
    <?php }?>
      

      
    </div> 
       


    