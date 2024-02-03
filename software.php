<?php
    require("template/header.php");

    if(isset($_GET['id'])){

        $query = "SELECT * FROM software WHERE app_id = '".$_GET['id']."'";

        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    
                             
?>
<style>
.page-header-ui{
    margin-top: 6rem;
}
</style>

<header class="page-header-ui page-header-ui-dark bg-img-cover overlay overlay-60 mt-6" style="background-image: url('../<?php echo $row['app_image']; ?>')">
   <div class="page-header-ui-content position-relative">
      <div class="container px-5 text-center">
         <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
               <h1 class="page-header-ui-title mb-3"><?php echo $row['app_name']; ?></h1>
               <p class="page-header-ui-text mb-0"><?php echo $row['app_subtitle']; ?></p>
               <div class="small muted font-italic text-center mb-5"><?php echo $row['app_authorname']; ?></div>
            </div>
         </div>
      </div>
   </div>
   <div class="svg-border-rounded text-light">
      <!-- Rounded SVG Border-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
         <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
      </svg>
   </div>
</header>


<section class="bg-white py-10">
   <div class="container px-5">
      <div class="row gx-5 justify-content-center">
         <div class="col-lg-8">
            <div class="text-center">
              <div class="small muted font-italic text-center mb-5">Version: <?php echo $row['app_version']; ?></div>
               <p class="lead mb-5"><?php echo $row['app_description']; ?></p>
               <a class="btn fw-500 ms-lg-4 btn-teal mb-5 download-icon" href="../<?php echo $row['app_zipfile']; ?>">
                    Download
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 24 24" version="1.1">
                    <title>Download</title>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Download">
                            <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24">
                            </rect>
                            <line x1="12" y1="10" x2="12" y2="19" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
                            </line>
                            <path d="M15,18 L12.7071,20.2929 C12.3166,20.6834 11.6834,20.6834 11.2929,20.2929 L9,18" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
                            </path>
                            <path d="M8,15 L6,15 C4.34315,15 3,13.6569 3,12 C3,10.3431 4.34315,9 6,9 C6,5.68629 8.68629,3 12,3 C15.3137,3 18,5.68629 18,9 C19.6569,9 21,10.3431 21,12 C21,13.6569 19.6569,15 18,15 L16,15" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
                            </path>
                        </g>
                    </g>
                    </svg>
                </a>
            </div>
            <img class="img-fluid shadow rounded-3 mb-2 image__main" src="../<?php echo $row['app_image']; ?>">
            <div class="small muted font-italic text-center mb-5"><?php echo $row['app_name']; ?></div>
            
            <hr class="my-5">

            <div class="text-center">
            <a class="btn fw-500 ms-lg-4 btn-teal mb-5 download-icon" href="../<?php echo $row['app_zipfile']; ?>">
                    Download
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 24 24" version="1.1">
                    <title>Download</title>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Download">
                            <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24">
                            </rect>
                            <line x1="12" y1="10" x2="12" y2="19" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
                            </line>
                            <path d="M15,18 L12.7071,20.2929 C12.3166,20.6834 11.6834,20.6834 11.2929,20.2929 L9,18" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
                            </path>
                            <path d="M8,15 L6,15 C4.34315,15 3,13.6569 3,12 C3,10.3431 4.34315,9 6,9 C6,5.68629 8.68629,3 12,3 C15.3137,3 18,5.68629 18,9 C19.6569,9 21,10.3431 21,12 C21,13.6569 19.6569,15 18,15 L16,15" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
                            </path>
                        </g>
                    </g>
                    </svg>
                </a>
            </div>
            <hr class="my-5">
            <div class="text-center"><a class="btn btn-transparent-dark fw-500" href="./category.php?id=<?php echo $row['category']; ?>">Back to Category</a></div>
         </div>
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
        }
    }
    require("template/footer.php");
?>