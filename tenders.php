<?php 
include_once("def_constant.php");
include("header.php"); ?>
<style>
    #floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}
.edit{
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  padding: 0;
  opacity: 0;
  margin: auto;
  line-height: 65px;
  transform: rotateZ(-70deg);
  transition: all 0.3s;
  animation: edit-out 0.3s;
}
#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}

#container-floating:hover{
  height: 400px;
  width: 90px;
  padding: 30px;
}

#container-floating:hover .plus{
  animation: plus-in 0.15s linear;
  animation-fill-mode: forwards;
}
#container-floating:hover .edit{
  animation: edit-in 0.2s;
   animation-delay: 0.1s;
  animation-fill-mode: forwards;
}

@keyframes edit-in{
    from {opacity: 0; transform: rotateZ(-70deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

@keyframes edit-out{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(-70deg);}
}

@keyframes plus-in{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(180deg);}
}

@keyframes plus-out{
    from {opacity: 0; transform: rotateZ(180deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

.nds{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: fixed;
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  background: #d3a411;
  right: 40px;
  bottom: 120px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}

.nd3{
  background: #3c80f6;
  right: 40px;
  bottom: 180px;
  animation-delay: 0.15s;
    animation: bounce-out-nds 0.15s linear;
  animation-fill-mode:  forwards;
}

.nd4{
  background: #ba68c8;
  right: 40px;
  bottom: 240px;
  animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}

#container-floating:hover .nds{
  
  animation: bounce-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

#container-floating:hover .nd3{
  animation-delay: 0.08s;
}
#container-floating:hover .nd4{
  animation-delay: 0.15s;
}
#container-floating:hover .nd5{
  animation-delay: 0.2s;
}

.letter{
  font-size: 23px;
  font-family: 'Roboto';
  color: white;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0;
  top: 0;
  bottom: 0;
  text-align: center;
  line-height: 40px;
}

.reminder{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  line-height: 40px;
}

.profile{
  border-radius: 50%;
  width: 40px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  right: 20px;
}

</style>
<div class="container-fluid px-3">
    <h2 class="text-center mt-2 mb-2">TENDERS</h2>
<div class="table-responsive">
    <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Short Descriptions</th>
              <th scope="col">Book List</th>
              <th scope="col">Details</th>
              <th scope="col">Posted Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Mark As</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="tenderbody">
      
      
          </tbody>
        </table>
</div>
<div id="container-floating">
 
  <div id="floating-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <p class="plus">+</p>
    <img class="edit" src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add A new Tenders</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <from enctype="multipart/form-data" method="POST">
        <div class="mb-3">
          <label for="descripition" class="form-label">Short Description</label>
          <textarea class="form-control" id="descripition" rows="3" ></textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
              <label for="csv" class="form-label">Upload Csv For book List</label>
              <input class="form-control" type="file" id="csv" name="csv">
            </div>
            </div>
            <div class="col-md-6">
            <label for="pdf" class="form-label">Upload PDF</label>
              <input class="form-control" type="file" id="pdf">
            </div>
            <div class="col-md-3">
                <div class="mb-3">
              <label for="sdate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="sdate">
            </div>
            </div>
            <div class="col-md-3">
            <label for="edate" class="form-label">End Date</label>
              <input type="date" class="form-control" id="edate">   
            </div>
            <div class="col-md-3">
            <label for="mark" class="form-label">Marks as New</label>
              <select id="mark" name="mark" id="mark" class="form-control">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select>
            </div>
        </div>
        </from>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnadd">ADD</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tenderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Tender</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p id="userdata"></p>
<from >
        <div class="mb-3">
          <label for="descripition" class="form-label">Short Description</label>
          <textarea class="form-control" id="descripition" rows="3" ></textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
              <label for="csv" class="form-label">Upload Csv For book List</label>
              <input class="form-control" type="file" id="csv">
            </div>
            </div>
            <div class="col-md-6">
            <label for="pdf" class="form-label">Upload PDF</label>
              <input class="form-control" type="file" id="pdf">
            </div>
            <div class="col-md-3">
                <div class="mb-3">
              <label for="sdate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="sdate">
            </div>
            </div>
            <div class="col-md-3">
            <label for="edate" class="form-label">End Date</label>
              <input type="date" class="form-control" id="edate">   
            </div>
            <div class="col-md-3">
            <label for="mark" class="form-label">Marks as New</label>
              <select id="mark" name="mark" id="mark" class="form-control">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select>
            </div>
        </div>
        </from>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update">update</button>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>