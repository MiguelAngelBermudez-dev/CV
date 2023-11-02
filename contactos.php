<?php include('template/encabezado.php') ?>
<div class="flex items-center justify-center h-full ms-5  ">

    <section class="flex flex-row  w-100 ">


        <div class="informacion col-md-6 w-1/2 w-50 me-5 ">

            <h2 class="text-center ">Información de Contacto</h2>
            <p class="text-center "><strong>Teléfono:</strong> +35-654885244</p>
            <p class="text-center "><strong>Correo Electrónico:</strong> bermudezcotemiguelangel@gmail.com</p>
            <p class=" text-center"><strong>Dirección:</strong> Sevilla</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101459.56498403577!2d-5.9550582499999996!3d37.37537075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c1114be6291%3A0x34f018621cfe5648!2sSevilla!5e0!3m2!1ses!2ses!4v1698921138748!5m2!1ses!2ses"class="w-75 h-50 ms-5 " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



        </div>
        <div class=" contactos row     me-5 mb-3 w-100 ">
            <div class="  col-md-12 w-1/2  w-10  ">
                <div class="well well-sm border-gray-400      p-3 bg-light bg-gradient p-2  bg-opacity-75  rounded-3">
                    <form class="form-horizontal  h-75   " method="post" action="">
                        <fieldset>
                            <legend class="text-center header">Contactame</legend>

                            <div class="form-group ">
                                <span class="col-md-1 col-md-offset-2 "><i class="fa fa-user bigicon fa-beat"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon fa-beat-fade"></i></span>
                                <div class="col-md-8">
                                    <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                                </div>
                            </div>

                            <div class="form-group ">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa-solid fa-at bigicon fa-flip"></i></span>
                                <div class="col-md-8 ">
                                    <input id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group ">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon fa-shake"></i></span>
                                <div class="col-md-8 ">
                                    <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                </div>
                            </div>

                            <div class="form-group ">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class=" fa-solid fa-square-envelope bigicon fa-bounce"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" name="message" placeholder="Deja tu mensaje para mi. Me comunicare con ud la mayor brevedad posible." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
    </section>
</div>
<?php include('template/pie.php'); ?>