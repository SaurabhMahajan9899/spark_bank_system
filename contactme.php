<?php include('nav.php'); ?>

<style>

body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}

.contact-form{
    background: #fff;
    margin-top: 1%;
    margin-bottom: 3%;
    width: 70%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

.contact-form form{
    padding: 10%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://www.bing.com/th?id=OIP.vJTaI_BacVnUj7vRP6RLIQHaHh&w=106&h=105&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Feedback Form..</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" required value="" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" required value="" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"  required value="" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px; resize:none"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

<?php include('footer.php'); ?>