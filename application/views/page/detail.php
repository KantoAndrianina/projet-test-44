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
                <h2 class="text-white"><?php echo $objet['NomObjet']?></h2> 
                <label class="text-grey" for="message"><?php echo $objet['Descriptions']?></label> 
                <h4 class="text-white"><?php echo $objet['Prix']?>$</h4>

                <br>
                  <label class="text-white" for="message">Selectionner l'un de vos produits</label> 
                  <select id="test" name="marque" cols="30" rows="7" >
                    <option value="#">Iphone</option>
                    <option value="#">Samsung</option>
                    <option value="#">Huawei</option>
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


    