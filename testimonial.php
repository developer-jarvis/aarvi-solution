<style>
    .testimonials{
  display: flex;
  padding: 100px 50px 90px;
}
.testimonials .box{
  width: 57%;
  padding-right: 50px;
}
.testimonials .box h2{
  font-size: 30px;
  letter-spacing: 0.8px;
  font-weight: 700;
  line-height: 1.2em;
  text-transform: uppercase;
  background-image: linear-gradient(290deg, #ff2db9, #f9ae0c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.testimonials .box h3{
  font-size: 14px;
  font-weight: 800;
  letter-spacing: 0.7px;
  background-image: linear-gradient(290deg, #102446 80%, #01E4CA 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  font-family: nunito;
}
.testimonials .box .testi_slider{
  margin-top: 20px;
  background-color: #fff;
  box-shadow: 0px -2px 10px #0000002a;
  border-radius: 5px;
  padding: 30px 50px 50px;
}
.testimonials .fa-quote-left{
  font-size: 60px;
  color: #00f2a545;
}
.testimonials .box .testi_slider .box p{
  font-size: 16px;
  font-weight: 400;
  color: #2d2d2d;
  font-family: nunito;
}
.testimonials .box .testi_slider .box p::first-letter{
  font-size: 22px;
  font-weight: 700;
  color: #00688B;
}
.testimonials .box .testi_slider .box section{
  display: flex;
}
.testimonials .box .testi_slider .box section .box{
  display: flex;
  width: 70%;
  align-items: center;
  position: relative;
}
.testimonials .box .testi_slider .box section .box .img_box{
  margin-right: 10px;
}
.testimonials .box .testi_slider .box section .box .img_box img{
  width: 70px;
  border: 4px solid #00688bb0;
  border-radius: 100%;
}
.testimonials .box .testi_slider .box section .box .info_box{
  align-items: center;
  position: relative;
}
.testimonials .box .testi_slider .box section .box .info_box h4{
  font-size: 22px;
  color: #000;
  font-weight: 400;
  line-height: 1.5em;
  margin-top: 10px;
}
.testimonials .box .testi_slider .box section .box .info_box h4::first-letter{
  color: #00688B;
  font-weight: 600;
}
.testimonials .box .testi_slider .box section .box .info_box p,
.testimonials .box .testi_slider .box section .box .info_box p::first-letter{
  font-size: 13px;
  font-weight: 400;
  text-transform: uppercase;
  color: #000;
  font-family: nunito;
  line-height: 1.2em;
  margin-top: -8px;
  margin-bottom: 10px;
}
.testimonials .box .testi_slider .box section .boxs{
  text-align: right;
}
.testimonials .box .testi_slider .box section .boxs i{
  right: 10px;
  bottom: 10px;
  font-size: 60px;
  color: #00f2a58e;
}
.testimonials .boxs{
  width: 43%;
  position: relative;
}
.testimonials .boxs h4{
  margin-top: 10px;
  font-size: 38px;
  font-weight: 600;
  line-height: 1em;
  color: #050748;
}
.testimonials .boxs p{
  font-size: 20px;
    letter-spacing: 0.5px;
    color: #0c2652;
    font-weight: 800;
    font-family: nunito;
    line-height: 1.2em;
    margin-top: 60px;
    margin-bottom: 15px;
}
.testimonials .boxs .img_section{
  display: flex;
}
.testimonials .boxs .img_section a{
  width: 33%;
  align-items: baseline;
}
.testimonials .boxs .img_section a img{
  width: 170px;
}
.testimonials .boxs .counter{
  display: flex;
  width: 100%;
}
.testimonials .boxs .counter .box{
  width: 28%;
}
.testimonials .boxs .counter .boxs{
  width: 45%;
}
.testimonials .boxs .counter h4{
  color: #fe4c1c;
  font-size: 27px;
  font-weight: 700;
  line-height: 1.3em;
}
.testimonials .boxs .counter p{
  margin-top: 0;
    color: #010a14;
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: 400;
    line-height: 1.3em;
}

@media only screen and (max-width: 1050px){
  .testimonials {
    padding: 50px 10px;
  }
  .testimonials .box{
    padding-right: 10px;
  }
  .testimonials .box .testi_slider {
    padding: 20px 10px;
  }
  .testimonials .box .testi_slider {
    width: 100%;
  }
  .testimonials .box .testi_slider .box section .box{
    width: 100%;
  }
  .testimonials .boxs h4 {
    margin-top: 0px;
    font-size: 30px;
  }
  .testimonials .boxs p{
    margin-top: 40px;
  }
  .testimonials .boxs .img_section {
    display: inline-table;
  }
  .testimonials .boxs .img_section a img {
    width: 80px;
    margin: 0 10px 20px 0;
  }
}
@media only screen and (max-width: 600px){
  .testimonials{
    display: block;
  }
  .testimonials .box,
  .testimonials .boxs{
    width: auto;
  }
  .testimonials .box {
    padding-right: 0px;
  }
  .testimonials .box h2{
    font-size: 25px;
    font-weight: 600;
    line-height: 1.3;
    margin-top: 4px;
  }
  .testimonials .box h3{
    font-size: 13px;
  }
  .testimonials .box .testi_slider{
    padding: 30px 20px;
  }
  .testimonials .box .testi_slider .box section .boxs i,
  .testimonials .fa-quote-left{
    font-size: 50px;
  }
  .testimonials .box .testi_slider .box p{
    font-size: 15px;
    line-height: 1.4em;
    font-weight: 300;
  }
  .testimonials .box .testi_slider .box section .box .img_box img{
    width: 60px;
  }
  .testimonials .box .testi_slider .box section .box .info_box h4{
    font-weight: 500;
    font-size: 18px;
  }
  .testimonials .box .testi_slider .box section .box .info_box p{
    font-size: 12px;
    margin-top: -5px;
  }
  .testimonials .boxs h4 {
    margin-top: 70px;
    font-size: 23px;
    background-image: linear-gradient(290deg, #ff2db9, #f9ae0c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .testimonials .boxs p {
    margin-top: 15px;
    font-size: 15px;
    margin-bottom: 28px;
  }
  .testimonials .boxs{
    text-align: center;
  }
  .testimonials .boxs .img_section{
    text-align: center;
  }
  .testimonials .boxs hr,
  .testimonials .boxs .counter{
    text-align: center;
    display: none;
  }
  /*.testimonials .boxs .counter h4{
    margin-top: 0px;
  }
  .testimonials .boxs .counter p{
    letter-spacing: 0px;
    font-size: 12px;
    margin-top: -5px;
  }
  .testimonials .boxs .counter .box{
    width: 33%;
  }*/
}
</style>
<div class="testimonials  background">
<div class="box ">

    <h2>The Client's Think</h2>

    <h3>What People said about the Best Website Design Company in Boring Road Patna</h3>

    <div class="testi_slider" style="height: 400px;">

        <div class="box">

            <i class="fa-solid fa-quote-left"></i>

            <p>Amazing software, user-friendly interface and easy to use. And also best gives best services for digital marketing and social media marketing. Thanks.</p>

            <section>

                <div class="box">

                    <div class="img_box">

                        <img src="assets/testi_img/user.webp" alt="Aarvi Website Designs company in Boring Road Patna"
                            loading="lazy" decoding="async" class="lazy">

                    </div>

                    <div class="info_box">

                        <h4>Aditi Singh</h4>

                        <!--<p>Owner - Optimal Dealers</p>-->

                    </div>

                </div>

                <div class="boxs">

                    <i class="fa fa-quote-right"></i>

                </div>

            </section>

        </div>

        <div class="box">

            <i class="fa-solid fa-quote-left"></i>

            <p>This company is really  number one  company in patna because their service is outstanding. My  business is ranked with top grade in patna through this company . Really I feel very good.Thank you genmish team.</p>

            <section>

                <div class="box">

                    <div class="img_box">

                        <img src="assets/testi_img/user.webp" alt="Aarvi Website Designs company in Boring Road Patna"
                            loading="lazy" decoding="async" class="lazy">

                    </div>

                    <div class="info_box">

                        <h4>amar kumar</h4>

                        <!--<p>Entrepreneur - Business Consultant</p>-->

                    </div>

                </div>

                <div class="boxs">

                    <i class="fa fa-quote-right"></i>

                </div>

            </section>

        </div>

        <div class="box">

            <i class="fa-solid fa-quote-left"></i>

            <p>Best digital marketing agency in patna. Highly experienced team, they ranked our business in local map just in 45 days..now we are getting lot's of enquiries from my local area. Website designing work is also fantastic.
Thanks Team Genmish.</p>

            <section>

                <div class="box">

                    <div class="img_box">

                        <img src="assets/testi_img/user.webp" alt="Aarvi Website Designs company in Boring Road Patna"
                            loading="lazy" decoding="async" class="lazy">

                    </div>

                    <div class="info_box">

                        <h4>Vinay Kumar Singh</h4>

                        <!--<p>T20Gully Cricket</p>-->

                    </div>

                </div>

                <div class="boxs">

                    <i class="fa fa-quote-right"></i>

                </div>

            </section>

        </div>

    </div>

</div>

<div class="boxs">

    <h4>More than 900+ Happy Customers and Growing</h4>

    <p>Read Our Reviews</p>

    <div class="img_section">

        <a href=""
            class="google"><img src="assets/img/google-reviews-webhubs.webp"
                alt="Aarvi Website Designs company in Boring Road Patna" loading="lazy" decoding="async"
                class="lazy"></a>

        <a href="#"><img src="assets/img/fiver.webp" alt="Aarvi Website Designs company in Boring Road Patna"
                loading="lazy" decoding="async" class="lazy"></a>

        <a href="#" class="freelancer"><img src="assets/img/freelancer.webp"
                alt="Aarvi Website Designs company in Boring Road Patna" loading="lazy" decoding="async"
                class="lazy"></a>

    </div>

    <hr>

    <div class="counter">

        <div class="box">

            <h4>1000+</h4>

            <p>Project Done</p>

        </div>

        <div class="box">

            <h4>1000+</h4>

            <p>Satisfied Client</p>

        </div>

        <div class="box boxs">

            <h4>10+</h4>

            <p>Professional Advisor</p>

        </div>

    </div>

</div>

</div>
