<template>
  <div>
    <label>
      AutoComplete
      <GmapAutocomplete @place_changed="setPlace" id="new_alert_location" name="new_alert_location" :value="alertlocation">
      </GmapAutocomplete>
    </label>
    <br/>

    <GmapMap style="width: 600px; height: 300px;" :zoom="10" :center="{lat: alertlat , lng: alertlng}">
      <GmapMarker v-for="(marker, index) in markers"
        :key="index"
        :position="marker.position"
        />
      <GmapMarker
        v-if="this.alert"
        label="★"
        :position="{
          lat: alertlat,
          lng: alertlng,
        }"
        />
    </GmapMap>
    <input type="hidden" name="new_alert_lat" :value="alertlat">
    <input type="hidden" name="new_alert_lng" :value="alertlng">
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

      props: ['alert'],

      data: function() {
        return {
          components: {
            VueGoogleMaps,
            AutoComplete
          },

          markers: [],
          place: null,
          alertlat: parseFloat(this.alert.alertlat),
          alertlng: parseFloat(this.alert.alertlng),
          alertlocation: '',
        }
      },

      mounted: function() {



        this.alertlocation = this.alert.location

      },

      methods: {

        setDescription(description) {
        this.description = description;
      },
      setPlace(place) {
        this.place = place;
        this.alertlocation = this.place.formatted_address;
        this.alertlat = this.place.geometry.location.lat(),
        this.alertlng = this.place.geometry.location.lng();



      },
      usePlace(place) {
        if (this.place) {
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
