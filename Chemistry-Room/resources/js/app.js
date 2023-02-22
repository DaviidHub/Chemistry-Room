// ======[VUE]======
import './bootstrap';
import { createApp } from 'vue';
// import { createPinia } from 'pinia'

// ======[Orokorra]======
import Pista from './Components/pista.vue';
createApp(Pista).mount('#maskota');

import Timer from './Components/timer.vue';
const timer = createApp(Timer);
timer.use(createPinia());
timer.mount('#tiempo');

import Lifes from './Components/lifes.vue';
const lifes = createApp(Lifes);
lifes.use(createPinia());
lifes.mount('#vidas');

// ======[Kodea]======
import Kode from './Components/kode.vue';
createApp(Kode).mount('#Kode');

// ======[Froga 1]======
import Froga1 from './Components/froga1.vue';
createApp(Froga1).mount('#Datos1');

// ======[Froga 2]======
import Froga2 from './Components/froga2.vue';
createApp(Froga2).mount('#Datos2');

// ======[Froga 3]======
import Froga3 from './Components/froga3.vue';
createApp(Froga3).mount('#Datos3');

// ======[Froga 4]======
import Froga4 from './Components/froga4.vue';
createApp(Froga4).mount('#Datos4');

// ======[Froga 5]======
import Froga5 from './Components/froga5.vue';
import { createPinia } from 'pinia';
createApp(Froga5).mount('#froga5');

// ======[Froga 6]======
import Froga6 from './Components/froga6.vue';
createApp(Froga6).mount('#Datos6');

// ======[Admin]======
import Admin from './Components/adminDelete.vue';
createApp(Admin).mount('#btn-admin');


