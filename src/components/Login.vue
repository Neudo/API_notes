<template>
      <form @submit.prevent="login" action="">
        <ion-title>Connexion</ion-title>
        <ion-item>
          <ion-label position="floating">Email</ion-label>
          <ion-input v-model="email" type="email" required></ion-input>
        </ion-item>
        <ion-item>
          <ion-label position="floating">Mot de passe</ion-label>
          <ion-input v-model="password" type="password" required></ion-input>
        </ion-item>
        <ion-button type="submit" expand="block" class="ion-margin-top" color="primary">Se connecter</ion-button>
        <a href="/register">Pas encore inscrit ? Cliquez ici.</a>
      </form>
</template>

<script lang="js">
import { IonPage, IonContent, IonList, IonItem, IonLabel, IonRouterOutlet, IonCard, IonInput,IonButton, IonTitle } from '@ionic/vue';
import {RouterLink} from "vue-router";
import axios from "axios";
export default {
  components: {
    IonPage,
    RouterLink,
    IonContent,
    IonList,IonItem,IonLabel,IonRouterOutlet,IonCard,IonInput,IonButton,IonTitle
  },
  data() {
    return {
      email: '',
      password: '',
      token: '',
    };
  },
  props: ['isLogged'],
  methods: {
    async login() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/auth/login', {
          email: this.email,
          password: this.password,
          token_name: 'Application'
        })
        const token = response.data.token;
        // this.$pinia.store.auth.setToken(token);

        this.$emit('update:isLogged', true)

      } catch (error) {
        if (error.response.status === 401) {
          console.log(error.response.data.errors)
        } else {
          console.error(error)
        }

      }
    }
  }
};
</script>

<style scoped>
ion-header {
  background-color: #3880ff;
}

ion-title {
  color: #fff;
  font-weight: 600;
  text-align: left;
  width: 90%;
  flex: 0;
}

form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-end;
  margin-top: 2rem;
  height: 100%;
}

ion-item {
  width: 80%;
  margin: .2vh auto 0;
}

ion-button {
  width: 80%;
  margin: 2vh auto;
}

ion-content {
  --padding-top: 75px;
}

a {
  margin: 2vh 0 0 0;
  color: #3880ff;
  font-weight: 600;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>