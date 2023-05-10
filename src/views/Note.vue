<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
        <ion-title>Nouvelle note</ion-title>
      </ion-toolbar>
    </ion-header>

    <ion-content>
      <ion-list>
        <ion-item>
          <ion-label position="floating">Écrivez ici ..</ion-label>
          <ion-textarea v-model="content"></ion-textarea>
        </ion-item>
      </ion-list>

      <ion-button @click.prevent="addNote" expand="block" color="primary" @click="saveNote">Enregistrer</ion-button>
    </ion-content>
  </ion-page>
</template>
<script lang="js">
import { IonPage, IonContent} from '@ionic/vue';


export default {
  components: { IonPage,IonContent},
  data() {
    return {
    };
  },
  methods:{
    addNote(){

    }
  }
};
</script>

<style scoped>
ion-content {
  --padding-top: 75px;
}

</style>