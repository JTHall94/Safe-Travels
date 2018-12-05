<template>
  <div>
    <label>
      <GmapAutocomplete @place_changed="setPlace" id="alert_location" name="alert_location">
      </GmapAutocomplete>
    </label>
    <br/>

    <GmapMap style="width: 600px; height: 300px;" :zoom="mapzoom" :center="{lat: alertlat, lng: alertlng}">
      <GmapMarker v-for="(marker, index) in markers"
        :key="index"
        :position="marker.position"
        />
      <GmapMarker
        v-if="this.place"
        label="★"
        :position="{
          lat: this.place.geometry.location.lat(),
          lng: this.place.geometry.location.lng(),
        }"
        />
    </GmapMap>
    <input type="hidden" :value="alertlat" name="alertlat">
    <input type="hidden" :value="alertlng" name="alertlng">
  </div>
</template>



<script>

import * as VueGoogleMaps from 'vue2-google-maps'

import AutoComplete from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyChEtjZl8cEGdECNhMPPA31y41ciVPhQss',
    libraries: 'places',

  },


})

    export default {

      props: [],

      data: function() {
        return {
          components: {
            VueGoogleMaps,
            AutoComplete
          },

          markers: [],
          place: null,
          alertlat: 0,
          alertlng: 0,
          mapzoom: 1,


        }
      },

      methods: {

      setDescription(description) {
      this.description = description;
      },
      setPlace(place) {
        this.place = place;
        this.alertlat = this.place.geometry.location.lat();
        this.alertlng = this.place.geometry.location.lng();
        this.mapzoom = 10;
      },
      usePlace(place) {
        console.log(place);
        if (place) {
          this.alertlat = this.place.geometry.location.lat();
          this.alertlng = this.place.geometry.location.lng();
          this.mapzoom = 10;
          this.markers.push({
            position: {
              lat: this.place.geometry.location.lat(),
              lng: this.place.geometry.location.lng(),
            }

          })
  
          this.place = null;
        }
      }


      }

    }


</script>
