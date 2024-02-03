<?php
    require("template/header.php");

    $categoryId = (isset($_GET['id'])) ? $_GET['id'] : 0 ;

    if($categoryId == 0){
        $query = "";
    }else{
        $query = "SELECT * FROM category WHERE category_id= '".$categoryId."' ";
    }

    $categoryName = "All Software";
    $categoryDesc = "Software is a set of instructions, data or programs used to operate computers and execute specific tasks. It is the opposite of hardware, which describes the physical aspects of a computer. Software is a generic term used to refer to applications, scripts and programs that run on a device. It can be thought of as the variable part of a computer, while hardware is the invariable part.";

    if($query != ""){
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $categoryName = $row['category_name'];
            $categoryDesc = $row['category_desc'];
        }
    }
?>

<header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
   <div class="page-header-ui-content pt-10">
      <div class="container px-5">
         <div class="row gx-5 align-items-center">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up">
               <h1 class="page-header-ui-title"><?php echo $categoryName; ?></h1>
               <p class="page-header-ui-text mb-5"><?php echo $categoryDesc; ?></p>
               
            </div>
            <div class="col-lg-6 d-none d-lg-block aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <img class="img-fluid" src="images/programming.svg"></div>
         </div>
      </div>
   </div>
   <div class="svg-border-rounded text-white">
      <!-- Rounded SVG Border-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
         <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
   </div>
</header>


<section class="bg-white py-10">
                        <div class="container px-5">
                            <h2 class="mb-4">GIGA PACKAGES : <?php echo $categoryName;?></h2>
                            <div class="row gx-5 text-center">

                                <?php 

                                if($categoryId == 0){
                                    $query = "SELECT * FROM software WHERE app_status = '1' ORDER BY app_id DESC";
                                }else{
                                    $query = "SELECT * FROM software WHERE 	category = '".$categoryId."' and app_status = '1' ORDER BY app_id DESC";
                                }

                                $result = $mysqli->query($query);
                                             
                                $inc = 1;
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                
                                ?>
                                <div class="col-lg-4 mb-5 product-grid__item">
                                    <a class="product-grid__wrapper d-block rounded-3 lift lift-lg" href="./software.php?id=<?php echo $row['app_id'];?>">
                                        <img class="img-fluid rounded-3 product__main-image" src="../<?php echo $row['app_image'];?>" />
                                    </a>
                                    
                                    <h6 class="mt-3 product__title"><?php echo $row['app_name'];?></h6>
                                    <div class="badge rounded-pill bg-primary-soft text-primary badge-marketing  mt-1 mb-1">Version : <?php echo $row['app_version'];?></div>
                                    <p><?php echo substr($row['app_description'], 0, 100); ?></p>
                                </div>

                                <?php
                                        $inc++;
                                    }
                                }
                                ?>

                                
                            </div>
                            
                            
                        </div>
                        <div class="svg-border-rounded text-light">
      <!-- Rounded SVG Border-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
         <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
   </div>
                    </section>


<?php
    require("template/footer.php");
?>