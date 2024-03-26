import './bootstrap';
import { createApp } from 'vue';
import routes from './routes.js'
// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);



const app = createApp({
    routes
});



app.mount('#app');
