<!DOCTYPE html>
<html>
<head>
  <title><?php echo $data->name;?></title>
  <link rel="icon" href="<?php echo base_url("assets/images/vrukshathon-fevicon.png"); ?>" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster+Two|Satisfy|Tangerine&display=swap" rel="stylesheet">
  <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
</head>
<body>
  <section>
    <div class="">
      <div id="imageDIV" class="row">
        <div class="report">
          <div class="" style="padding:15px 15px;">
          <img style="height: 550px" class="responsive" src="<?php echo base_url('assets/certificatess.jpg');?>">
        </div>
          <div id="locator">
            <p><b><?php echo ucwords(strtolower($data->name));?></b></p>
          </div>
         <!--  <div id="locator2">
            <p><b><?php  if(strlen($data->mobile) <= 3){ echo ucwords(strtolower($data->name_of_org)); }?></b></p>
          </div> -->
          <div id="locator3">
             <p ><b><?php echo date("d-M-Y", strtotime($data->date));?></b></p> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <div style="padding-top:40px;">
    <button class="mybtn" onclick="print()">Download</button>
  </div> -->

  <script>

  function print() {

    const filename  = '<?php echo $data->name;?>.pdf';
    html2canvas(document.querySelector('#imageDIV')).then(canvas => {
      alert();
      let pdf = new jsPDF('p', 'mm', [280, 200]);
      pdf.addImage(canvas.toDataURL('image/png'), 'jpg', 0, 0, 210, 297);
      pdf.save(filename);
    });
  }

  // Variant
  // This one lets you improve the PDF sharpness by scaling up the HTML node tree to render as an image before getting pasted on the PDF.
  function print(quality = 1) {
    //alert();
    const filename  = '<?php echo $data->name;?>.pdf';
    html2canvas(document.querySelector('#imageDIV'),
    {scale: quality}
  ).then(function(canvas){

    let pdf = new jsPDF('l', 'mm', 'a4');
    pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 0, 190);
    pdf.save(filename);
    // console.log(canvas.toDataURL('image/png'));
  });
}

$(document).ready(async function(){
  var quality = 1;
  const filename  = '<?php echo $data->name;?>.pdf';
  html2canvas(document.querySelector('#imageDIV'),
  {scale: quality}
).then(function(canvas){

  let pdf = new jsPDF('l', 'mm', [268, 198]);
  pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 0, 190);
  pdf.save(filename);
  // console.log(canvas.toDataURL('image/png'));
});
await sleep(2000);
window.location.replace("<?php echo base_url();?>");
});
</script>

</body>
<style>
.mybtn{
  width: 120px;
  height: 44px;
  color: #fff;
  display: block;
  font-size: 15px;
  font-weight: 500;
  text-align: center;
  position: relative;
  background: #f44029;
  border-radius: 22px
}
#locator {
  position: absolute;
  visibility: visible;
  left: 225px;
  top: 250px;
  height: 150px;
  z-index: 200;
  font-size:30px;
  color: #000000;
  font-family: 'Dancing Script', cursive;
}
#locator2 {
  position: absolute;
  visibility: visible;
  left: 225px;
  top: 345px;
  height: 150px;
  z-index: 200;
  font-size:30px;
  color: #000000;
  font-family: 'Dancing Script', cursive;
}
#locator3
{
  position: absolute;
  visibility: visible;
  left: 390px;
  top: 375px;
  height: 700px;
  z-index: 200;
  font-size:20px;
  color:#000000;
  font-family: 'Dancing Script', cursive;
}
</style>
<script>
$(document).ready(function(){
  window.resizeTo(800, 800);
});
// myWindow.resizeTo(800, 600);
</script>
</html>
