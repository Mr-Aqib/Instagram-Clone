 <!-- Button trigger modal -->
 <a type="button" class="d-flex flex-row gap-1" style="color:black ;text-decoration: none;" data-bs-toggle="modal"
     data-bs-target="#exampleModal">
     <i class="bi bi-clock-history"></i>
     <p>Upload Story</p>
 </a>

 <!-- Modal  -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Story</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="./story-data.php" method="POST" enctype="multipart/form-data">
                     <label for="">Caption</label>
                     <input class="form-control" type="text" name="caption" id="">
                     <label for="">Upload Story</label>
                     <input class="form-control" type="file" name="image" id="">
                     <button class="w-50 d-block mx-auto border-0 my-4 text-white p-1 rounded-3"
                         style="background:linear-gradient(to right, red,yellow)">Upload
                         Story</button>
                 </form>
             </div>
         </div>
     </div>
 </div>