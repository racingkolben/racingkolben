<div id="contact_form_container">

    <form method="post" id="login_form" action="../../contacts.php">

        <p>Contact Form</p>

        <div id="mailto">
          <span id="span1"> Select a member to contact</span>
        <select  id="membername" class="chzn-select" style="width:200px;">
            <option value="Itsmeprasanthkumar@gmail.com">Prasanth Kumar</option>
            <option value="varun94@live.com">Varun Mohan Singh</option>
            <option value="bmwnaveen@gmail.com">Naveen</option>
        </select>
        </div>

        <div class="input-group input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" id="name" class="form-control" autocomplete="off" placeholder="Enter Your Name" required>
        </div>
        <br>

        <div class="input-group input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
            <input type="email" id="email" class="form-control" placeholder="Enter Your Email" required>
        </div>
        <br>

        <div class="input-group input-group">
            <span id="password_icon" class="input-group-addon"><i class="fa fa-phone"></i></span>
            <span id="phoneno" class="input-group-addon">+91</span>
            <input required id="phone" pattern=".{10,10}" title="10 numbers minimum" size="10" type="tel" class="form-control" placeholder="Enter Phone No">
        </div><br>

        <div>
            <textarea id="message" placeholder="Enter Your Message" required></textarea>
        </div>

        <br>


         <span>
             <input id="send_button" class="btn btn-default" type="submit" value="Send">
             <i id="loader" class="fa fa-circle-o-notch fa-spin"></i><br>
         </span><br>

        <div id="status" class="alert alert-warning"></div>
    </form>
</div>