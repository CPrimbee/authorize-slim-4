import { createApp } from 'vue'
import RegisterComponent from './components/auth/register.vue'

const app = createApp({})

app.component('register', RegisterComponent)

app.mount('#app')
