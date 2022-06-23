@include('users.header')


<section class="register-form page-section-ptb">
  <div class="container">
  <div class="row justify-content-center mt-5">
      <div class="col-md-10">
         <div class="section-title">
           <h2>Order History</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
  <table class="table table-striped">
     <thead>
         <tr>
             <th>Order date</th>
             <th>Vehicle</th>
             <th>Return date</th>
             <th>Rent/day</th>
             <th>pickup location</th>
             <th>Dropoff location</th>
              <th>Pickup time</th>
              <th>Dropoff time</th>
              <th>
                  Total amount
              </th>
         </tr>
     </thead>
     <tbody>
     <tr>
         <td>12-3-2022</td>
         <td> <b>Mitsubishi Outlander</b> <br>
        <span>Mini</span> <span>White</span>
         </td>
         <td>
             15-3-2022
         </td>
         <td>
             60$
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             2:00 am
         </td>
         <td> 7:00 pm</td>
         <td>100$</td>
         </tr>
         <tr>
         <td>12-3-2022</td>
         <td> <b>Hyundai i30</b> <br>
        <span>Mini</span> <span>White</span>
         </td>
         <td>
             15-3-2022
         </td>
         <td>
             60$
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             2:00 am
         </td>
         <td> 7:00 pm</td>
         <td>100$</td>
         </tr>
         <tr>
         <td>12-3-2022</td>
         <td> <b>Mitsubishi Mirage</b> <br>
        <span>Mini</span> <span>White</span>
         </td>
         <td>
             15-3-2022
         </td>
         <td>
             60$
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             2:00 am
         </td>
         <td> 7:00 pm</td>
         <td>100$</td>
         </tr>
         <tr>
         <td>12-3-2022</td>
         <td> <b>Toyota</b> <br>
        <span>Mini</span> <span>White</span>
         </td>
         <td>
             15-3-2022
         </td>
         <td>
             60$
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             Australia street 1
         </td>
         <td>
             2:00 am
         </td>
         <td> 7:00 pm</td>
         <td>100$</td>
         </tr>

     </tbody>
</table>
</section>


 @include('users.footer')
