import Vue from 'vue';
import Vuetify, {
    VApp,
    VFlex,
    VNavigationDrawer,
    VToolbar,
    VContainer,
    VContent,
    VLayout,
} from 'vuetify/lib';
// import { component } from 'vue/types/umd';

Vue.use(Vuetify, {
    components: {VApp,VFlex,VNavigationDrawer,VToolbar,VContainer,VContent,VLayout },
});

export default new Vuetify({
});
