<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
        <ion-title>Mon compte</ion-title>
      </ion-toolbar>
    </ion-header>

    <ion-content>
      <div class="account-info">
        <ion-item>
          <ion-label>Email</ion-label>
          <ion-text>EMAIL</ion-text>
        </ion-item>

        <ion-item>
          <ion-label>Nom</ion-label>
          <ion-text>Name</ion-text>
        </ion-item>

        <ion-item>
          <ion-label>Date de création du compte</ion-label>
          <ion-text>date de creation</ion-text>
        </ion-item>

        <ion-button @click.prevent="logout" expand="block" color="primary" @click="logout">Déconnexion</ion-button>
      </div>
    </ion-content>
  </ion-page>
</template>

<script lang="js">
import { IonPage, IonContent, IonList, IonItem, IonLabel, IonRouterOutlet, IonCard, IonInput,IonButton, IonTitle } from '@ionic/vue';
import {RouterLink} from "vue-router";
export default {
  components: {
    IonPage,
    RouterLink,
    IonContent,
    IonList,IonItem,IonLabel,IonRouterOutlet,IonCard,IonInput,IonButton,IonTitle
  },
  data() {
    return {
    };
  },
  methods:{
    logout(){
    }
  }
};
</script>

<style scoped>

</style>