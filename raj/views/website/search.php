<!--====Learning Section ====================================-->
<section class="learning-section-area s-pd2">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-8">
        <div class="section-heading-area text-center">
          <h2 class="section-heading text-capitalize">Result</h2>
        </div><!--/.section-heading-area-->
      </div><!--/.col-lg-8-->
    </div><!--/.row-->
    <div class="row courses-item-content">
          <?php if($data->num_rows() > 0){
      foreach($data->result() as $row){ ?>

        <div class="col-lg-4 <?php echo $row->keywords;?>">
          <div class="single-learning-item bg-image" style="background-image: url(./assets/images/learning/1.jpg);">
            <div class="learning-overlay-text tb">
              <div class="tb-cell">
                <h2><a href="#"><?php echo $row->fname;?></a></h2>
                <p><?php $descShort = substr($row->descc, 0, 150); echo $descShort.'...' ?></p>
                <a class="btn btn-default btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row->id?>" href="<?php echo $row->id?>">Read More</a>
                <a href="<?php echo base_url();?>redirecting-url/<?php echo $row->scholarship_id;?>" target="_blank" class="btn btn-default">apply now</a>
              </div>
            </div><!--/.learning-overlay-text-->
          </div><!--/.single-learning-item-->
            <!-- Modal -->
            <div class="modal fade <?php echo $row->keywords;?>" id="exampleModalCenter<?php echo $row->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="margin-top:135px;">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row->fname;?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo $row->descc; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          <!-- Modal End -->
        </div><!--/.col-lg-4-->
        <?php
      }}else{
      ?>
      <h4 class="result">No, Results Found. Search with different Keyword.</h4>
    <?php }?>
    </div><!--/.row-->

  </div><!--/.container-->
</section><!--/#learning-section-->
<style>
.learning-overlay-text .btn-default {
    padding: 10px 20px !important;
}
@media only screen and (max-width: 414px) {
  .result {
    text-align: center;
    padding: 10px 10px;
  }
}
</style>