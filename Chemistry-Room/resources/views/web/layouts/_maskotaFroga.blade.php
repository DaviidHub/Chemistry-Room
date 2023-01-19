<div id="maskota">
    <div class="d-flex flex-column  position-absolute bottom-0 end-0 justify-content-end align-items-center">
        <div v-if="show">
            <div class="bocadilloPista d-flex justify-content-center">
                <h2 class="pistaText p-3 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est
                    numquam excepturi natus qui in et quasi temporibus sint iste ipsam doloremque nulla veritatis
                    assumenda
                    animi sapiente, voluptas, ut error dolor!Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit.
                    Est
                    numquam excepturi natus qui in et quasi temporibus sint iste ipsam doloremque nulla veritatis
                    assumenda
                    animi sapiente, voluptas, ut error dolor!</h2>
            </div>
        </div>
        <div v-else class="bombilla">
            <a @click="showHide">
                <img src="{{asset("multimedia/bombilla.svg")}}" alt="">
            </a>
        </div>
        <img id="maskotaJuego" src="{{asset("multimedia/quimica.png")}}" alt="">
    </div>
</div>

