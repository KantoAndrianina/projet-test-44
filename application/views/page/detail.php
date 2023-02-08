<div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="row">

      <?php if(isset($listeObjetById)){
        foreach ($listeObjetById as $objet) { ?>
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <img src="<?php echo base_url();?>assets/images/<?php echo $objet['imgMain']?>" alt="Image" class="img-fluid">
            
          </div>
          <div class="image-info">
          </div>
          
        </div>
        <div class="col-lg-4">
        <form action="#">

              <div class="row form-group">
                <div class="col-md-12">
                <h2 class="text-white"><?php echo $objet['nomobjet']?></h2> 
                <label class="text-grey" for="message"><?php echo $objet['descriptions']?></label> 
                <h4 class="text-white"><?php echo $objet['prix']?>$</h4>
                <h5 class="text-white">de <?php echo $objet['nom']?></h5> 


                <br>
                <label class="text-white" for="message">Selectionner l'un de vos produits</label> 
                  <select id="test" name="marque" cols="30" rows="7" >
                  <?php if(isset($listeObjetUser)){
                    foreach ($listeObjetUser as $objetUser) { ?>
                    <option value="<?php echo $objetUser['idObjet']?>"><?php echo $objetUser['nomobjet']?></option>
                  <?php }}?>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Echanger" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

          </form>
      <?php }}?>
      </div>

    </div>
  </div> 


    