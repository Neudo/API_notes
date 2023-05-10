<template>
  <ion-page>
    <ion-content class="ion-padding">
      <Login :is-logged="isLogged" @update:isLogged="isLogged = $event" v-if="!isLogged" />
      <NoteListes v-if="isLogged" />
    </ion-content>
  </ion-page>
</template>


<script lang="js">
import { IonPage, IonContent, IonList, IonItem, IonLabel, IonRouterOutlet, IonCard, IonInput,IonButton, IonTitle } from '@ionic/vue';
import {RouterLink} from "vue-router";
import Login from "@/components/Login.vue";
import NoteListes from "@/components/NoteListes.vue";
export default {
  components: {
    NoteListes,
    Login,
    IonPage,
    RouterLink,
    IonContent,
    IonList,IonItem,IonLabel,IonRouterOutlet,IonCard,IonInput,IonButton,IonTitle
  },
  data() {
    return {
      isLogged: false,
    };
  },
  methods: {

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