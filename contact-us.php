<?php include("header.php");?>

<div class="page-banner">
			<h2>contact Us</h2>
            <ul class="pages-list">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
		</div>

	<section class="contact">
		<div class="form">
			<div class="container">
				<h2>Drop Us Message for Any Query</h2>
				<form>
                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" placeholder="Name" minlength="4" required>
                        </div>

                        <div class="col-lg-6 col-md-6">
                        <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6">
                        <input type="tel" class="form-control" placeholder="Phone" minlength="10" maxlength="12" required>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Subject" minlength="5" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea rows="5" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
			</div>
		</div>
		<div class="contact-info-content text-center">
                    <h3>Contact Us by Phone Number or Email Address</h3>
                    <h2>
                        <a href="tel:+0881306298615">+088 130 629 8615</a>
                        <span>OR</span>
                        <a href="https://ebslon.com/"><span>info@ebslon.com</span></a>
                    </h2>
                </div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13999.670519619358!2d77.1525383!3d28.6921105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8237f2fa865b70ac!2sEbslon%20Infotech-%20Website%20Designing%20And%20Website%20Development%20Company!5e0!3m2!1sen!2sin!4v1618495112513!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</section>

<?php include("footer.php");?>
