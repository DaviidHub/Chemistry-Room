<style>
    .fade-enter-active,.fade-leave-active {
        transition: opacity .5s
    }

    /* .fade-leave-active below version 2.1.8 */
    .fade-enter,.fade-leave-to
        {
        opacity: 0
    }

</style>

<div id="maskotaBocadillo"class=" d-flex flex-column position-absolute bottom-0 end-0 justify-content-end align-items-center">

        <div v-if="show" class="bocadilloPista d-flex justify-content-center">
            <h2 class="pistaText p-3 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est
                numquam excepturi natus qui in et quasi temporibus sint iste ipsam doloremque nulla veritatis assumenda
                animi sapiente, voluptas, ut error dolor!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est
                numquam excepturi natus qui in et quasi temporibus sint iste ipsam doloremque nulla veritatis assumenda
                animi sapiente, voluptas, ut error dolor!</h2>
        </div>

        <img class="bombilla" src="{{asset('multimedia/bombilla.svg')}}" alt="">

    <img id="maskotaJuego" src="{{asset('multimedia/quimica.png')}}" alt="">

</div>

