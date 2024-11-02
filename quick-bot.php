<style>
    .desktop_contact{
  display: flex;
  position: fixed;
  bottom: 10px;
  left: 30px;
  z-index: 999;
}
.desktop_contact .boxs{
  width: 50%;
  display: block;
}
.desktop_contact .boxs a.phone i{
  font-size: 18px;
  background: red;
  border-radius: 100%;
  padding: 15px;
  rotate: -30deg;
  color: aliceblue;
	animation: shadow-pulse 1s infinite;
}
.desktop_contact .boxs a.whatsapp i{
  font-size: 22px;
  /* background: linear-gradient(290deg, #ff2db9, #f9ae0c); */
  background-color: #25D366;
  border-radius: 100%;
  padding: 12px 13px;
  color: aliceblue;
	animation: shadow-back 1s infinite;
  margin: 15px 0;
}
@media screen and (max-width: 600px) {
    .desktop_contact{
        display: none;
    }
}
</style>


<div class="desktop_contact">

    <div class="boxs">

        <a href="tel:+918603999789" class="phone"><i class="fa-sharp fa-regular fa-phone-volume"></i></a>



        <a href="https://wa.me/918603999789" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>

    </div>

    <div class="boxs boxxx">



    </div>

</div>