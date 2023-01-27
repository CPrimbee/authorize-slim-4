import { createApp } from 'vue'
import RegisterComponent from './components/auth/register.vue'
import StackTrace from './components/exceptions/stack-trace.vue';

const app = createApp({})

app.component('stack-trace', StackTrace)
app.component('register', RegisterComponent)

app.mount('#app')
