<link rel="stylesheet" href="css/notification.css">
<div class="container card shadow-lg d-flex justify-content-center border-dark" style="background:whitesmoke">
     <!-- nav options -->
     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
         <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">System</a> </li>
         <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Collection</a> </li>
         <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Messages</a> </li>
     </ul> <!-- content -->
     <div class="tab-content" id="pills-tabContent p-3">
         <!-- 1st card -->
         <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
             <form class="search"> <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search..." /> </form>
             <ul class="ccontent">
                 <li>
                     <div class="wrapp">
                         <div>login attempts</div>
                         <p>number of user login attempts</p>
                     </div>
                 </li>
                 <li>
                     <div class="wrapp">
                         <div>customer spend 24h</div>
                         <p>amount customer has spent in the past 24h</p>
                     </div>
                 </li>
                 <li>
                     <div class="wrapp">
                         <div>device id is on blacklist</div>
                         <p>checkif a users device id is on a blacklist</p>
                     </div>
                 </li>
                 <li>
                     <div class="wrapp">
                         <div>card country</div>
                         <p>credit card issue country</p>
                     </div>
                 </li>
             </ul>
         </div> <!-- 2nd card -->
         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
             <div class="form-group addinfo"> <label for="exampleFormControlTextarea1">Write additional info.</label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> </div>
         </div> <!-- 3nd card -->
         <div class="tab-pane fade third" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
             Messages will be show here
         </div>
     </div>
 </div>