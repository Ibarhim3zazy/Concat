<link rel="stylesheet" href="css/setting.css">
<script type="text/javascript" src="js/send_verificationCode.js"></script>


<div class="setting-container">
 <div class="container">
   <ul class="taps">
     <li class="active" data-cont=".personal" onclick="entery_clear('prof')">If Professor</li>
     <li data-cont=".newEmail" onclick="entery_clear('stud')">If Student</li>
     <li data-cont=".password" onclick="entery_clear('user')">If User</li>
       </ul>
   <div class="contents">
     <div class="personal">
       <div class="conten">
         <div class="box">
           <div class="info form">
             <div class="content">
             <h1>Please Resume Your Data</h1>
             <div class="min-box">
               <h3>College-id</h3>
               <div class="center">
                 <input type="text" id="prof_College_id" placeholder="EX: 1234567890">
               </div>
             </div>
             <div class="min-box">
               <h3>Confirm-Email</h3>
               <input type="email" id="prof_mail" placeholder="EX: email@email.com">
             </div>
               </div>
               <div class="submit">
                 <input type="button"  value="Cancel">
                 <input type="button"  value="Next" class="active-btn" onclick="sending_verificationCode('prof')">
               </div>
           </div>

         </div>
       </div>
     </div>
     <div class="newEmail">
       <div class="conten">
         <div class="box">
           <div class="info form">
             <div class="content">
             <h1>Please Resume Your Data</h1>
             <div class="min-box">
               <h3>College-id</h3>
               <div class="center">
                 <input type="text" id="stud_College_id" placeholder="EX: 1234567890">
               </div>
             </div>
             <div class="min-box">
               <h3>Confirm-Email</h3>
               <input type="email" id="stud_mail" placeholder="EX: email@email.com">
             </div>
               </div>
               <div class="submit">
                 <input type="button"  value="Cancel">
                 <input type="button"  value="Next" class="active-btn" onclick="sending_verificationCode('Student')">
               </div>
           </div>

         </div>
       </div>
     </div>

     <div class="password">
       <div class="conten">
         <div class="box">
           <div class="form pass">
             <div class="content">
               <h1>Please Confirm your mail</h1>
               <div class="min-box">
                 <h3>Confirm-Email</h3>
                 <input type="email" id="user_mail" placeholder="EX: email@email.com">
               </div>
             </div>
             <div class="submit">
               <input type="button"  value="Cancel">
               <input type="button"  value="Next" class="active-btn" onclick="sending_verificationCode('user')">
             </div>
           </div>
         </div>
       </div>
     </div>


   </div>
 </div>

</div>

<script src="js/setting.js" charset="utf-8"></script>
